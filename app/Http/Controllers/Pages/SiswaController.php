<?php

namespace App\Http\Controllers\Pages;

use App\Http\Requests\Siswa\SiswaCreateRequest;
use Illuminate\Http\Request;
use App\Domain\Repositories\SiswaRepository;
use App\Http\Controllers\Controller;

class SiswaController extends Controller
{
    /**
     * @var UserInterface
     */
    protected $user;
    /**
     * UserController constructor.
     * @param UserInterface $user
     */
    public function __construct(SiswaRepository $user)
    {
        $this->user = $user;
    }
    public function siswa(Request $request)
    {
        $user_siswa = $this->user->getList(10, $request->input('page'), $column = ['*'], '', $request->input('search'));
        
        return view('pages.list-siswa', compact('user_siswa')); 
    }
    public function createSiswa()
    {
        return view('pages.create-siswa'); 
    }
    public function edit($id)
    {
         $user = $this->user->findById($id);
         return view('pages.update-siswa',compact('user')); 
    }
}