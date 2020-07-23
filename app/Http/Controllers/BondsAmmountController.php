<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBondsAmmountRequest;
use App\Http\Requests\UpdateBondsAmmountRequest;
use App\Repositories\BondsAmmountRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class BondsAmmountController extends AppBaseController
{
    /** @var  BondsAmmountRepository */
    private $bondsAmmountRepository;

    public function __construct(BondsAmmountRepository $bondsAmmountRepo)
    {
        $this->bondsAmmountRepository = $bondsAmmountRepo;
    }

    /**
     * Display a listing of the BondsAmmount.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $bondsAmmounts = $this->bondsAmmountRepository->all();

        return view('bonds_ammounts.index')
            ->with('bondsAmmounts', $bondsAmmounts);
    }

    /**
     * Show the form for creating a new BondsAmmount.
     *
     * @return Response
     */
    public function create()
    {
        return view('bonds_ammounts.create');
    }

    /**
     * Store a newly created BondsAmmount in storage.
     *
     * @param CreateBondsAmmountRequest $request
     *
     * @return Response
     */
    public function store(CreateBondsAmmountRequest $request)
    {
        $input = $request->all();

        $bondsAmmount = $this->bondsAmmountRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/bondsAmmounts.singular')]));

        return redirect(route('bondsAmmounts.index'));
    }

    /**
     * Display the specified BondsAmmount.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $bondsAmmount = $this->bondsAmmountRepository->find($id);

        if (empty($bondsAmmount)) {
            Flash::error(__('messages.not_found', ['model' => __('models/bondsAmmounts.singular')]));

            return redirect(route('bondsAmmounts.index'));
        }

        return view('bonds_ammounts.show')->with('bondsAmmount', $bondsAmmount);
    }

    /**
     * Show the form for editing the specified BondsAmmount.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $bondsAmmount = $this->bondsAmmountRepository->find($id);

        if (empty($bondsAmmount)) {
            Flash::error(__('messages.not_found', ['model' => __('models/bondsAmmounts.singular')]));

            return redirect(route('bondsAmmounts.index'));
        }

        return view('bonds_ammounts.edit')->with('bondsAmmount', $bondsAmmount);
    }

    /**
     * Update the specified BondsAmmount in storage.
     *
     * @param int $id
     * @param UpdateBondsAmmountRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBondsAmmountRequest $request)
    {
        $bondsAmmount = $this->bondsAmmountRepository->find($id);

        if (empty($bondsAmmount)) {
            Flash::error(__('messages.not_found', ['model' => __('models/bondsAmmounts.singular')]));

            return redirect(route('bondsAmmounts.index'));
        }

        $bondsAmmount = $this->bondsAmmountRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/bondsAmmounts.singular')]));

        return redirect(route('bondsAmmounts.index'));
    }

    /**
     * Remove the specified BondsAmmount from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $bondsAmmount = $this->bondsAmmountRepository->find($id);

        if (empty($bondsAmmount)) {
            Flash::error(__('messages.not_found', ['model' => __('models/bondsAmmounts.singular')]));

            return redirect(route('bondsAmmounts.index'));
        }

        $this->bondsAmmountRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/bondsAmmounts.singular')]));

        return redirect(route('bondsAmmounts.index'));
    }
}
