<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Repositories\Admin\MarketplaceRepository;
use App\Repositories\Admin\SupervisorRepository;
use Illuminate\Http\Request;

class SafeController extends Controller
{

    /** @var  MarketplaceRepository */
    private $marketplaceRepository;

    public function __construct(MarketplaceRepository $supervisorRepo)
    {
        $this->marketplaceRepository = $supervisorRepo;
    }



    public function index()
    {
        return view('admin.Safe.index' )->with(['marketplaces' => $this->marketplaceRepository->GetDataForSelect('marketplaces','MarketplaceOwnerID')]);
    }





}
