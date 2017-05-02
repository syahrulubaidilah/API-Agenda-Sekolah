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
    public function siswa(Request $request)
    {
        $user_siswa = $this->user->paginate(10, $request->input('name'), $column = ['*'], '', $request->input('search'));
        return view('pages.list-siswa', ['user_siswa' => $user_siswa]); 
    }
     public function guru(Request $request)
    {
        $user_guru = $this->user->paginate(10, $request->input('name'), $column = ['*'], '', $request->input('search'));
        return view('pages.list-guru', ['user_guru' => $user_guru]); 
    }
     public function staf(Request $request)
    {
        $user_staf = $this->user->paginate(10, $request->input('name'), $column = ['*'], '', $request->input('search'));
        return view('pages.list-staf', ['user_staf' => $user_staf]); 
    }
    public function create()
    {
        return view('pages.create-user'); 
    }
    public function edit($id)
    {
        return view('pages.update-user'); 
    }
}