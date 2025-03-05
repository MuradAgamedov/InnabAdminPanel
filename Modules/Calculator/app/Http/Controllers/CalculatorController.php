<?php

namespace Modules\Calculator\Http\Controllers;
use App\Services\CommonService;
use App\Http\Controllers\Controller;
use App\Services\ServiceContainer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Modules\Calculator\Repositories\ModelRepository;
use Modules\Calculator\Models\Calculator;
use App\Models\Areas;
class CalculatorController extends Controller
{
    public function __construct(
        public ServiceContainer $services,
        public ModelRepository $repository,
        public CommonService $commonService
    ) {}

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $q = $request->q;
        $activeItemsCount = $this->repository->all_active()->count();
        if ($q) {
            $items = $this->repository->search($q, 80);
        } else {
            $items = $this->repository->all(80);
        }
        return view('calculator::index', compact('items', 'q', 'activeItemsCount'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $languages = $this->services->langRepository->all_active();
        return view('calculator::create', compact('languages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        return $this->executeSafely(function () use ($request) {
            $this->services->crudService->create(new Calculator(), $request, 'calculator');
            return redirect()->route('calculator.index')->with('status', 'calculator uğurla əlavə edildi');
        }, 'calculator.index');
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('calculator::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return $this->executeSafely(function () use ($id) {
            $model = $this->repository->find($id);
            $languages = $this->services->langRepository->all_active();
            $areas = Areas::orderBy("parent_id")->get();
            return view('calculator::edit', compact('languages', 'model', 'areas'));
        }, 'calculator.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        return $this->executeSafely(function () use ($request, $id) {
            $model = $this->repository->find($id);
            $this->services->crudService->update($model, $request, 'calculator');
            return redirect()->route('calculator.edit',1)->with('status', 'calculator uğurla yeniləndi');
        }, 'calculator.edit',1);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }

    public function changeStatusTrue($id)
    {
        return $this->commonService->changeStatus($id, $this->repository, $this->services->statusService, new ScholarshipProgram(), true, 'calculator.index');
    }

    public function changeStatusFalse($id)
    {
        return $this->commonService->changeStatus($id, $this->repository, $this->services->statusService, new ScholarshipProgram(), false, 'calculator.index');
    }

    public function delete_selected_items(Request $request)
    {
        return $this->commonService->deleteSelectedItems($this->repository, $request, $this->services->removeService, 'calculator.index');
    }

    public function deleteFile($id)
    {
        return $this->commonService->deleteFile($id, $this->services->imageService, 'calculator.index');
    }

    public function add_area(Request $request) {
          $request->validate([
        'count' => ['regex:/^\d+(\.\d{1,2})?$/'], 
    ]);
        Areas::create([
            "area_name" => $request->professions,
            "count" => $request->count,
            "parent_id" => $request->parent_id
        ]);
        return redirect()->route('calculator.edit',1)->with('status', 'calculator uğurla yeniləndi');
    }

    public function delete($id) {
        Areas::find($id)->delete();
        return redirect()->route('calculator.edit',1)->with('status', 'calculator uğurla yeniləndi');
    }





public function getCalculatorDatas($lang) {
    if($lang) {
        app()->setLocale($lang);
    }

    // Yalnız lazım olan sütunları seçirik
    $calculatorDatas = Calculator::select([
        'where_innab',
        'where_own',
        'where_other',
        'english_elementry',
        'english_medium',
        'english_hard',
        'comp_elementry',
        'comp_medium',
        'comp_hard',
        'experience_0',
        'experience_0_1',
        'experience_1_3',
        'experience_3_5',
        'experience_5_10',
        'experience_10_plus'
    ])->first();

    if (!$calculatorDatas) {
        return response()->json(['message' => 'Calculator məlumatları tapılmadı!'], 404);
    }

    // Parent-child əlaqəsini yükleyirik
    $areasDatas = Areas::with('childrens')->where('parent_id', null)->get();

    // Hər area məlumatına yalnız area_name əlavə edirik və children-lərdə də bunu edirik
    $areasFormatted = $areasDatas->map(function($area) {
        return [
            'area_name' => $area->area_name,
            'count' => $area->count,
            'children' => $area->childrens->map(function($child) {
                return [
                    'area_name' => $child->area_name,
                ];
            })
        ];
    });

    // Hər iki məlumatı bir array-a birləşdiririk
    $combinedData = [
        'calculator' => $calculatorDatas,
        'areas' => $areasFormatted
    ];

    // JSON olaraq geri qaytarırıq
    return response()->json($combinedData);
}


}
