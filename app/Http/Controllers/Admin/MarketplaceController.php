<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\MarketplaceDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateMarketplaceRequest;
use App\Http\Requests\Admin\UpdateMarketplaceRequest;
use App\Repositories\Admin\MarketplaceRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class MarketplaceController extends AppBaseController
{
    /** @var  MarketplaceRepository */
    private $marketplaceRepository;

    public function __construct(MarketplaceRepository $marketplaceRepo)
    {
        $this->marketplaceRepository = $marketplaceRepo;
    }

    /**
     * Display a listing of the Marketplace.
     *
     * @param MarketplaceDataTable $marketplaceDataTable
     * @return Response
     */
    public function index(MarketplaceDataTable $marketplaceDataTable)
    {
        return $marketplaceDataTable->render('admin.marketplaces.index');
    }

    /**
     * Show the form for creating a new Marketplace.
     *
     * @return Response
     */
    public function create()
    {
        $marketplace_owners = $this->marketplaceRepository->GetAllMarketPlaceOwners();

        return view('admin.marketplaces.create',compact('marketplace_owners'));
    }

    /**
     * Store a newly created Marketplace in storage.
     *
     * @param CreateMarketplaceRequest $request
     *
     * @return Response
     */
    public function store(CreateMarketplaceRequest $request)
    {
        $input = $request->all();
        $input['Logo'] = $this->marketplaceRepository->StoreFile($request->file('Logo'),'');
        $marketplace = $this->marketplaceRepository->create($input);

        Flash::success('Marketplace saved successfully.');

        return redirect(route('admin.marketplaces.index'));
    }

    /**
     * Display the specified Marketplace.
     *
     * @param  int $ID
     *
     * @return Response
     */
    public function show($ID )
    {
        $marketplace = $this->marketplaceRepository->find($ID );

        if (empty($marketplace)) {
            Flash::error('Marketplace not found');

            return redirect(route('admin.marketplaces.index'));
        }

        return view('admin.marketplaces.show')->with('marketplace', $marketplace);
    }

    /**
     * Show the form for editing the specified Marketplace.
     *
     * @param  int $ID
     *
     * @return Response
     */
    public function edit($ID )
    {
        $marketplace = $this->marketplaceRepository->find($ID );

        if (empty($marketplace)) {
            Flash::error('Marketplace not found');

            return redirect(route('admin.marketplaces.index'));
        }

        return view('admin.marketplaces.edit')->with('marketplace', $marketplace);
    }

    /**
     * Update the specified Marketplace in storage.
     *
     * @param  int              $ID
     * @param UpdateMarketplaceRequest $request
     *
     * @return Response
     */
    public function update($ID , UpdateMarketplaceRequest $request)
    {
        $marketplace = $this->marketplaceRepository->find($ID );
        $input = $request->all();
        $input['Logo'] = $this->marketplaceRepository
            ->StoreFile($request->file('Logo'),$marketplace['Logo']);
        if (empty($marketplace)) {
            Flash::error('Marketplace not found');

            return redirect(route('admin.marketplaces.index'));
        }

        $marketplace = $this->marketplaceRepository->update($input, $ID );

        Flash::success('Marketplace updated successfully.');

        return redirect(route('admin.marketplaces.index'));
    }

    /**
     * Remove the specified Marketplace from storage.
     *
     * @param  int $ID
     *
     * @return Response
     */
    public function destroy($ID )
    {
        $marketplace = $this->marketplaceRepository->find($ID );

        if (empty($marketplace)) {
            Flash::error('Marketplace not found');

            return redirect(route('admin.marketplaces.index'));
        }

        $this->marketplaceRepository->delete($ID );

        Flash::success('Marketplace deleted successfully.');

        return redirect(route('admin.marketplaces.index'));
    }
}
