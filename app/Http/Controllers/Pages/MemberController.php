<?php

namespace App\Http\Controllers\Pages;

use App\Http\Requests\Member\MemberCreateRequest;
use Illuminate\Http\Request;
use App\Domain\Repositories\MemberRepository;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    /**
     * @var UserInterface
     */
    protected $user;
    /**
     * UserController constructor.
     * @param UserInterface $user
     */
    public function __construct(MemberRepository $user)
    {
        $this->user = $user;
    }
     public function guru(Request $request)
    {
        $user_guru = $this->user->getList(10, $request->input('page'), $column = ['*'], '', $request->input('search'));
        return view('pages.list-guru', compact('user_guru')); 
    }
    public function createMember()
    {
        return view('pages.create-guru'); 
    }
    public function edit($id)
    {
         $user = $this->user->findById($id);
         return view('pages.update-guru',compact('user')); 
    }
}