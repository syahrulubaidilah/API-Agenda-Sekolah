<?php

namespace App\Http\Controllers\Pages;

use App\Http\Requests\User\UserCreateRequest;
use Illuminate\Http\Request;
use App\Domain\Repositories\UserRepository;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * @var UserInterface
     */
    protected $user;
    /**
     * UserController constructor.
     * @param UserInterface $user
     */
    public function __construct(UserRepository $user)
    {
        $this->user = $user;
    }
     public function staf(Request $request)
    {
        $user_staf = $this->user->getList(10, $request->input('page'), $column = ['*'], '', $request->input('search'));
        return view('pages.list-staf', compact('user_staf')); 
    }
    public function create()
    {
        return view('pages.create-user'); 
    }
    public function edit($id)
    {
         $user = $this->user->findById($id);
         return view('pages.update-user',compact('user')); 
    }
}