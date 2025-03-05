<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Repositories\UserRepository;
use App\Services\RemoveService;
use App\Services\SimpleCrudService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Modules\UserRole\Repositories\UserRoleRepository;

class AdminController extends Controller
{
    public function __construct(
        protected UserRoleRepository $userRoleRepository,
        protected SimpleCrudService $crudService,
        protected UserRepository $userRepository,
        protected RemoveService $removeService
    ) {}

    public function index()
    {
        $q = request()->q;
        $perPage = 40;
        $items = $q
            ? $this->userRepository->search($q, $perPage)
            : $this->userRepository->paginate($perPage);

        return view('admin::index', compact('items', 'q'));
    }

    public function create()
    {
        $roles = $this->userRoleRepository->all();

        return view('admin::create', compact( 'roles'));
    }

    public function store(Request $request): RedirectResponse
    {
        return $this->executeSafely(function() use ($request) {

            $this->crudService->create($this->userRepository->getModel(), $request);
            return redirect()->route('admin.index')->with('status', 'Admin uğurla yaradıldı.');
        }, 'admin.index');
    }

    public function show($id)
    {
        return view('admin::show');
    }

    public function edit($id)
    {
        $roles = $this->userRoleRepository->all();
        $user = $this->userRepository->find($id);
        return view('admin::edit', compact('user', 'roles'));
    }

    public function update(Request $request, $id): RedirectResponse
    {

        return $this->executeSafely(function() use ($request, $id) {
            $user = $this->userRepository->find($id);

            $updated = $user->update($request->all());
            if($updated) {
                return redirect()->route('admin.index')->with('status', 'Admin uğurla yeniləndi.');
            }
        }, 'admin.index');
    }

    public function destroy($id)
    {
        // Implement the destroy logic if needed
    }

    public function delete_selected_items(Request $request)
    {
        return $this->executeSafely(function() use ($request) {
            $models = $this->userRepository->findWhereInGet($request->ids);
            $this->removeService->deleteWhereIn($models);
            return response()->json(['success' => true, 'message' => 'Admin uğurla silindi.']);
        });
    }

    public function updatePassword(Request $request, $id): RedirectResponse
    {

        return $this->executeSafely(function() use ($request, $id) {
            $user = $this->userRepository->find($id);
            $password = Hash::make($request->password);
            $update = $user->update(['password' => $password]);

            if($update) {
                return redirect()->route('admin.index')->with('status', 'Admin uğurla yeniləndi.');
            }

        }, 'admin.index');
    }
}
