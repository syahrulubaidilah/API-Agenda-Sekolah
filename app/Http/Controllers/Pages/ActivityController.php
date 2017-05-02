<?php

namespace App\Http\Controllers\Pages;

use App\Http\Requests\Activity\ActivityCreateRequest;
use Illuminate\Http\Request;
use App\Domain\Repositories\ActivityRepository;
use App\Http\Controllers\Controller;

class ActivityController extends Controller
{
    /**
     * @var activityInterface
     */
    protected $activity;
    /**
     * activityController constructor.
     * @param activityInterface $activity
     */
    public function __construct(ActivityRepository $activity)
    {
        $this->activity = $activity;
    }
    public function index(Request $request)
    {
        $activities = $this->activity->paginate(10, $request->input('name'), $column = ['*'], '', $request->input('search'));
        return view('pages.list-activity', ['activities' => $activities]); 
    }
    public function create()
    {
        return view('pages.create-activity'); 
    }
    public function edit($id)
    {
        return view('pages.update-activity'); 
    }
}