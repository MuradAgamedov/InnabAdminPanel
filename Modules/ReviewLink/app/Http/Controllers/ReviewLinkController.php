<?php

namespace Modules\ReviewLink\Http\Controllers;
use App\Services\CommonService;
use App\Http\Controllers\Controller;
use App\Services\ServiceContainer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Modules\ReviewLink\Repositories\ModelRepository;
use Modules\ReviewLink\Models\ReviewLink;

class ReviewLinkController extends Controller
{
    public function __construct(
        public ServiceContainer $services,
        public ModelRepository $repository,
        public CommonService $commonService
    ) {}



    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        return $this->executeSafely(function () use ($id) {
            $link = $this->repository->find($id);
            return view('reviewlink::edit', compact( 'link'));
        }, 'reviewlink.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        return $this->executeSafely(function () use ($request, $id) {
            $model = $this->repository->find($id);
            $this->services->crudService->update($model, $request, 'reviewlink');
            return redirect()->back()->with('status', 'reviewlink uğurla yeniləndi');
        }, 'reviewlink.index');
    }

}
