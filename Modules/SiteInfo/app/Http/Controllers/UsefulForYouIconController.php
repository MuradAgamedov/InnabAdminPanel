<?php

namespace Modules\SiteInfo\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\CommonService;
use App\Services\ServiceContainer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Modules\SiteInfo\Models\UsefulForYouIcon;

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
            UsefulForYouIcon::create($request->all());
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
            $item = UsefulForYouIcon::findOrFail($id);
            $item->update($request->all());
            return redirect()->route('useful-for-you-icons.index')
                ->with('status', 'İkon uğurla yeniləndi');
        }, 'useful-for-you-icons.index');
    }

    public function destroy($id)
    {
        return $this->executeSafely(function () use ($id) {
            $item = UsefulForYouIcon::findOrFail($id);
            $item->delete();
            return redirect()->route('useful-for-you-icons.index')
                ->with('status', 'İkon uğurla silindi');
        }, 'useful-for-you-icons.index');
    }

    public function changeStatus($id)
    {
        return $this->commonService->changeStatus($id, new UsefulForYouIcon(), $this->services->statusService, new UsefulForYouIcon(), true, 'useful-for-you-icons.index');
    }
} 