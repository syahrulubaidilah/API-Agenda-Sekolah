<?php

namespace App\Http\Controllers;

use App\Http\Requests\Activity\ActivityCreateRequest;
use Illuminate\Http\Request;
use App\Domain\Repositories\ActivityRepository;
use App\Domain\Repositories\UserRepository;
use App\Http\Controllers\Controller;

class LandingpageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ActivityRepository $activity, UserRepository $user)
    {
        $this->middleware('guest');
        $this->activity = $activity;
        $this->user = $user;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.landingpage-home');
    }
    public function list(Request $request)
    {
        $activities = $this->activity->paginate(10, $request->input('name'), $column = ['*'], '', $request->input('search'));
        return view('pages.landingpage-list', compact('activities'));
    }
    public function table(Request $request)
    {
        $activities = $this->activity->paginate(10, $request->input('name'), $column = ['*'], '', $request->input('search'));
        return view('pages.landingpage-table', compact('activities'));
    }
}