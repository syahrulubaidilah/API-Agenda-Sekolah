<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UserCreateRequest;
use App\Http\Requests\User\UserEditRequest;
use Illuminate\Http\Request;
use App\Domain\Contracts\UserInterface;

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
    public function __construct(UserInterface $user)
    {
        $this->user = $user;
    }

    /**
     * @api {get} api/users Request User with Paginate
     * @apiName GetUserWithPaginate
     * @apiGroup User
     *
     * @apiParam {Number} page Paginate user lists
     */
    public function index(Request $request)
    {
        return $this->user->paginate(10, $request->input('page'), $column = ['*'], '', $request->input('search'));
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
        return $this->user->findById($id);
    }

    /**
     * @api {post} api/contacts/ Request Post Contact
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
    public function store(UserCreateRequest $request)
    {
        return $this->user->create($request->all());
    }

    /**
     * @api {put} api/contacts/id Request Update Contact by ID
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
    public function update(UserEditRequest $request, $id)
    {
        return $this->user->update($id, $request->all());
    }

    /**
     * @api {delete} api/contacts/id Request Delete Contact by ID
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
        return $this->user->delete($id);
    }

}