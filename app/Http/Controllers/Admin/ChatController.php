<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Musonza\Chat\Chat;

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



    public  function SendMessage(){

        $conversation = Chat::createConversation($participants)->makeDirect();

        return view('admin.Messages.chat')->with(['users'=>$this->userRepository->all()]);
    }






}
