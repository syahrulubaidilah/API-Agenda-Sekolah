<?php

namespace App\Http\Controllers\Pages;

use App\Http\Requests\Guru\GuruCreateRequest;
use Illuminate\Http\Request;
use App\Domain\Repositories\GuruRepository;
use App\Http\Controllers\Controller;

class GuruController extends Controller
{
    /**
     * @var UserInterface
     */
    protected $user;
    /**
     * UserController constructor.
     * @param UserInterface $user
     */
    public function __construct(GuruRepository $user)
    {
        $this->user = $user;
    }
     public function guru(Request $request)
    {
        $user_guru = $this->user->getList(10, $request->input('page'), $column = ['*'], '', $request->input('search'),$level=0);
        return view('pages.list-guru', compact('user_guru')); 
    }
    public function createGuru()
    {
        return view('pages.create-guru'); 
    }
    public function edit($id)
    {
         $user = $this->user->findById($id);
         return view('pages.update-user',compact('user')); 
    }
}