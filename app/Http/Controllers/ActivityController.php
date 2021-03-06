<?php

namespace App\Http\Controllers;

use App\Http\Requests\Activity\ActivityCreateRequest;
use App\Http\Requests\Activity\ActivityEditRequest;
use Illuminate\Http\Request;
use App\Domain\Contracts\ActivityInterface;

class ActivityController extends Controller
{

    /**
     * @var ActivityInterface
     */
    protected $activity;

    /**
     * ActivityController constructor.
     * @param ActivityInterface $activity
     */
    public function __construct(ActivityInterface $activity)
    {
        $this->activity = $activity;
    }

    /**
     * @api {get} api/activitys Request Activity with Paginate
     * @apiName GetUserWithPaginate
     * @apiGroup User
     *
     * @apiParam {Number} page Paginate user lists
     */
    public function index(Request $request)
    {
        return $this->activity->paginate(10, $request->input('page'), $column = ['*'], '', $request->input('search'));
    }

    /**
     * @api {get} api/contacts/id Request Get Contact
     * @apiName GetContact
     * @apiGroup Contact
     *
     * @apiParam {Number} id id_contact
     * @apiSuccess {Number} id id_contact
     * @apiSuccess {Varchar} name name of contact
     * @apiSuccess {Varchar} address name of address
     * @apiSuccess {Varchar} email email of contact
     * @apiSuccess {Number} phone phone of contact
     */
    public function show($id)
    {
        return $this->activity->findById($id);
    }

    /**
     * @api {post} api/activity/ Request Post Contact
     * @apiName PostContact
     * @apiGroup Contact
     *
     *
     * @apiParam {Varchar} name name of contact
     * @apiParam {Varchar} email email of contact
     * @apiParam {Varchar} address email of address
     * @apiParam {Float} phone phone of contact
     * @apiSuccess {Number} id id of contact
     */
    public function store(ActivityCreateRequest $request)
    {
        return $this->activity->create($request->all());
    }

    /**
     * @api {put} api/activity/id Request Update Contact by ID
     * @apiName UpdateContactByID
     * @apiGroup Contact
     *
     *
     * @apiParam {Varchar} name name of contact
     * @apiParam {Varchar} email email of contact
     * @apiParam {Varchar} address address of contact
     * @apiParam {Float} phone phone of contact
     *
     *
     * @apiError EmailHasRegitered The Email must diffrerent.
     */
    public function update(ActivityEditRequest $request, $id)
    {
        return $this->activity->update($id, $request->all());
    }

    /**
     * @api {delete} api/activity/id Request Delete Contact by ID
     * @apiName DeleteContactByID
     * @apiGroup Contact
     *
     * @apiParam {Number} id id of contact
     *
     *
     * @apiError ContactNotFound The <code>id</code> of the Contact was not found.
     * @apiError NoAccessRight Only authenticated Admins can access the data.
     */
    public function destroy($id)
    {
        return $this->activity->delete($id);
    }
    
    public function calendar()
    {
        return $this->activity->calendar();
    }

}