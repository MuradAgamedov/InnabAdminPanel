<?php

namespace Modules\AdminMenuLinks\Http\Controllers;
use App\Services\CommonService;
use App\Http\Controllers\Controller;
use App\Services\RemoveService;
use App\Services\ServiceContainer;
use App\Services\SimpleCrudService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Modules\AdminMenuLinks\Repositories\ModelRepository;
use Modules\AdminMenuLinks\Models\AdminMenuLinks;

class AdminMenuLinksController extends Controller
{
    public function __construct(
        protected SimpleCrudService $crudService,
        protected ModelRepository $menuLinkRepository,
        protected RemoveService $removeService,
        public CommonService $commonService,
        public ServiceContainer $services,
    ) {
    }

    public function index()
    {
        $q = request()->q;
        $perPage = 40;
        $items = $q
            ? $this->menuLinkRepository->search($q, $perPage)
            : $this->menuLinkRepository->paginate($perPage);

        return view('adminmenulinks::index', compact('items', 'q'));
    }

    public function create()
    {
        return view('adminmenulinks::create');
    }

    public function store(Request $request)
    {
        return $this->executeSafely(function () use ($request) {

            $this->crudService->create(new AdminMenuLinks(), $request);
            return redirect()->route('adminmenulinks.index')->with('status', 'Link uğurla yaradıldı.');
        }, 'adminmenulinks.index');
    }

    public function show($id)
    {
        return view('adminmenulinks::show');
    }

    public function edit($id)
    {
        $menuLink = $this->menuLinkRepository->find($id);
        return view('adminmenulinks::edit', compact('menuLink'));
    }

    public function update(Request $request, $id)
    {
        return $this->executeSafely(function () use ($request, $id) {
            $menuLink = $this->menuLinkRepository->find($id);

            $this->crudService->update($menuLink, $request);
            return redirect()->route('adminmenulinks.index')->with('status', 'Link uğurla yeniləndi.');
        }, 'adminmenulinks.index');
    }

    public function destroy($id)
    {
        // Implement the destroy logic if needed
    }


        public function delete_selected_items(Request $request)
        {
            return $this->commonService->deleteSelectedItems($this->menuLinkRepository, $request, $this->services->removeService, 'admin.blog.index');
        }

}
