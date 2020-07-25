<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBoundVoucherItemRequest;
use App\Http\Requests\UpdateBoundVoucherItemRequest;
use App\Repositories\BoundVoucherItemRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class BoundVoucherItemController extends AppBaseController
{
    /** @var  BoundVoucherItemRepository */
    private $boundVoucherItemRepository;

    public function __construct(BoundVoucherItemRepository $boundVoucherItemRepo)
    {
        $this->boundVoucherItemRepository = $boundVoucherItemRepo;
    }

    /**
     * Display a listing of the BoundVoucherItem.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $boundVoucherItems = $this->boundVoucherItemRepository->all();

        return view('bound_voucher_items.index')
            ->with('boundVoucherItems', $boundVoucherItems);
    }

    /**
     * Show the form for creating a new BoundVoucherItem.
     *
     * @return Response
     */
    public function create()
    {
        return view('bound_voucher_items.create');
    }

    /**
     * Store a newly created BoundVoucherItem in storage.
     *
     * @param CreateBoundVoucherItemRequest $request
     *
     * @return Response
     */
    public function store(CreateBoundVoucherItemRequest $request)
    {
        $input = $request->all();

        $boundVoucherItem = $this->boundVoucherItemRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/boundVoucherItems.singular')]));

        return redirect(route('boundVoucherItems.index'));
    }

    /**
     * Display the specified BoundVoucherItem.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $boundVoucherItem = $this->boundVoucherItemRepository->find($id);

        if (empty($boundVoucherItem)) {
            Flash::error(__('messages.not_found', ['model' => __('models/boundVoucherItems.singular')]));

            return redirect(route('boundVoucherItems.index'));
        }

        return view('bound_voucher_items.show')->with('boundVoucherItem', $boundVoucherItem);
    }

    /**
     * Show the form for editing the specified BoundVoucherItem.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $boundVoucherItem = $this->boundVoucherItemRepository->find($id);

        if (empty($boundVoucherItem)) {
            Flash::error(__('messages.not_found', ['model' => __('models/boundVoucherItems.singular')]));

            return redirect(route('boundVoucherItems.index'));
        }

        return view('bound_voucher_items.edit')->with('boundVoucherItem', $boundVoucherItem);
    }

    /**
     * Update the specified BoundVoucherItem in storage.
     *
     * @param int $id
     * @param UpdateBoundVoucherItemRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBoundVoucherItemRequest $request)
    {
        $boundVoucherItem = $this->boundVoucherItemRepository->find($id);

        if (empty($boundVoucherItem)) {
            Flash::error(__('messages.not_found', ['model' => __('models/boundVoucherItems.singular')]));

            return redirect(route('boundVoucherItems.index'));
        }

        $boundVoucherItem = $this->boundVoucherItemRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/boundVoucherItems.singular')]));

        return redirect(route('boundVoucherItems.index'));
    }

    /**
     * Remove the specified BoundVoucherItem from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $boundVoucherItem = $this->boundVoucherItemRepository->find($id);

        if (empty($boundVoucherItem)) {
            Flash::error(__('messages.not_found', ['model' => __('models/boundVoucherItems.singular')]));

            return redirect(route('boundVoucherItems.index'));
        }

        $this->boundVoucherItemRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/boundVoucherItems.singular')]));

        return redirect(route('boundVoucherItems.index'));
    }
}
