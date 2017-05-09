<?php

namespace App\Http\Controllers\Pages;

use App\Http\Requests\Register\RegisterCreateRequest;
use Illuminate\Http\Request;
use App\Domain\Repositories\RegisterRepository;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    /**
     * @var UserInterface
     */
    protected $user;
    /**
     * UserController constructor.
     * @param UserInterface $user
     */
    public function __construct(RegisterRepository $user)
    {
        $this->user = $user;
    }
    public function siswa(Request $request)
    {
    }
    public function createSiswa()
    {
        return view('pages.login');
    }
    public function edit($id)
    {
    }
}