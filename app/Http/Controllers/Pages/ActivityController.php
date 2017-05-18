<?php

namespace App\Http\Controllers\Pages;

use App\Http\Requests\Activity\ActivityCreateRequest;
use Illuminate\Http\Request;
use App\Domain\Repositories\ActivityRepository;
use App\Domain\Repositories\UserRepository;
use App\Http\Controllers\Controller;

class ActivityController extends Controller
{
    /**
     * @var activityInterface
     */
    protected $activity;

    protected $user;
    /**
     * activityController constructor.
     * @param activityInterface $activity
     */
    public function __construct(ActivityRepository $activity, UserRepository $user)
    {
        $this->middleware('auth');
        $this->activity = $activity;
        $this->user = $user;
    }
    public function index(Request $request)
    {
        $activities = $this->activity->paginate(10, $request->input('name'), $column = ['*'], '', $request->input('search'));
        return view('pages.list-activity', compact('activities'));
    }
    public function create()
    {
        return view('pages.create-activity'); 
    }
    public function edit($id)
    {
        $activity = $this->activity->findById($id);
        return view('pages.update-activity' ,compact('activity')); 
    }

    public function detail($id)
    {
        $activity = $this->activity->findById($id);
        return view('pages.detail' ,compact('activity')); 
    }
}