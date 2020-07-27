<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class ChatController extends Controller
{

    /** @var  UserRepository */
    private $userRepository;


    public function __construct(UserRepository $userRepo)
    {
        $this->userRepository = $userRepo;
    }




    public  function index(){



        return view('admin.Messages.chat')->with(['users'=>$this->userRepository->all()]);

    }
}
