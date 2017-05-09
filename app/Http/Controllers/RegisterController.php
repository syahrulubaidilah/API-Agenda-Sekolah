<?php

namespace App\Http\Controllers;

use App\Http\Requests\Register\RegisterCreateRequest;
use App\Http\Requests\Register\RegisterEditRequest;
use Illuminate\Http\Request;
use App\Domain\Contracts\RegisterInterface;

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
    public function __construct(RegisterInterface $user)
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
     * @api {get} api/users/id Request Get User
     * @apiName GetUser
     * @apiGroup User
     *
     * @apiParam {Number} id id_user
     * @apiSuccess {Number} id id_user
     * @apiSuccess {Varchar} name name of user
     * @apiSuccess {Varchar} address name of address
     * @apiSuccess {Varchar} email email of user
     * @apiSuccess {Number} phone phone of user
     */
    public function show($id)
    {
        return $this->user->findById($id);
    }

    /**
     * @api {post} api/users/ Request Post User
     * @apiName PostUser
     * @apiGroup User
     *
     *
     * @apiParam {Varchar} name name of user
     * @apiParam {Varchar} email email of user
     * @apiParam {Varchar} address email of address
     * @apiParam {Float} phone phone of user
     * @apiSuccess {Number} id id of user
     */
    public function store(RegisterCreateRequest $request)
    {
        return $this->user->create($request->all());
    }

    /**
     * @api {put} api/users/id Request Update User by ID
     * @apiName UpdateUserByID
     * @apiGroup User
     *
     *
     * @apiParam {Varchar} name name of user
     * @apiParam {Varchar} email email of user
     * @apiParam {Varchar} address address of user
     * @apiParam {Float} phone phone of user
     *
     *
     * @apiError EmailHasRegitered The Email must diffrerent.
     */
    public function update(RegisterEditRequest $request, $id)
    {
        return $this->user->update($id, $request->all());
    }

    /**
     * @api {delete} api/users/id Request Delete User by ID
     * @apiName DeleteUserByID
     * @apiGroup User
     *
     * @apiParam {Number} id id of user
     *
     *
     * @apiError UserNotFound The <code>id</code> of the User was not found.
     * @apiError NoAccessRight Only authenticated Admins can access the data.
     */
    public function destroy($id)
    {
        return $this->user->delete($id);
    }

    public function getListSiswa(Request $request)
    {
        return $this->user->getList(10, $request->input('page'), $column = ['*'], '', $request->input('search'),$level=2);
    }

}