<?php

namespace Modules\SiteInfo\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\CommonService;
use App\Services\ServiceContainer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Modules\SiteInfo\Models\UsefulForYouIcon;
use Illuminate\Support\Facades\Storage;

class UsefulForYouIconController extends Controller
{
    public function __construct(
        public ServiceContainer $services,
        public CommonService $commonService
    ) {}

    public function index()
    {
        $icons = UsefulForYouIcon::paginate(10);
        return view('siteinfo::useful_for_you_icons.index', compact('icons'));
    }

    public function create()
    {
        return view('siteinfo::useful_for_you_icons.create');
    }

    public function store(Request $request): RedirectResponse
    {
        return $this->executeSafely(function () use ($request) {
            $data = $request->all();
    
            if ($request->hasFile('icon')) {
                $file = $request->file('icon');
                $filename = uniqid() . '.' . $file->getClientOriginalExtension(); // unikal ad
                $file->move(public_path('icons'), $filename); // public/icons/ qovluğuna köçür
                $data['icon'] = $filename; // yalnız adını bazaya yaz
            }
    
            UsefulForYouIcon::create($data);
    
            return redirect()->route('useful-for-you-icons.index')
                ->with('status', 'İkon uğurla əlavə edildi');
        }, 'useful-for-you-icons.index');
    }
    
    

    public function edit($id)
    {
        $icon = UsefulForYouIcon::findOrFail($id);
        return view('siteinfo::useful_for_you_icons.edit', compact('icon'));
    }

    public function update(Request $request, $id): RedirectResponse
{
    return $this->executeSafely(function () use ($request, $id) {
        $icon = UsefulForYouIcon::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('icon')) {
            // köhnə faylı sil
            if ($icon->icon && file_exists(public_path('icons/' . $icon->icon))) {
                unlink(public_path('icons/' . $icon->icon));
            }

            // yenisini yadda saxla
            $file = $request->file('icon');
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('icons'), $filename);
            $data['icon'] = $filename;
        }

        $icon->update($data);

        return redirect()->route('useful-for-you-icons.index')
            ->with('status', 'İkon uğurla yeniləndi');
    }, 'useful-for-you-icons.index');
}


    public function destroy($id)
    {
        return $this->executeSafely(function () use ($id) {
            $icon = UsefulForYouIcon::findOrFail($id);
            
            // Delete icon file if exists
            if ($icon->icon && file_exists(public_path('icons/' . $icon->icon))) {
                unlink(public_path('icons/' . $icon->icon));
            }
            

            $icon->delete();
            return redirect()->route('useful-for-you-icons.index')
                ->with('status', 'İkon uğurla silindi');
        }, 'useful-for-you-icons.index');
    }

    public function changeStatus($id)
    {
        return $this->commonService->changeStatus($id, new UsefulForYouIcon(), $this->services->statusService, new UsefulForYouIcon(), true, 'useful-for-you-icons.index');
    }
} 