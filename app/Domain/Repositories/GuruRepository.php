<?php

namespace App\Domain\Repositories;

use App\Domain\Entities\User;
use App\Domain\Contracts\GuruInterface;
use App\Domain\Contracts\Crudable;


/**
 * Class GuruRepository
 * @package App\Domain\Repositories
 */
class GuruRepository extends AbstractRepository implements GuruInterface, Crudable
{

    /**
     * @var User
     */
    protected $model;

    /**
     * GuruRepository constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAll()
    {
        return $this->model->all();
    }

    /**
     * @param int $limit
     * @param int $page
     * @param array $column
     * @param string $field
     * @param string $search
     * @return \Illuminate\Pagination\Paginator
     */
    public function paginate($limit = 10, $page = 1, array $column = ['*'], $field, $search = '')
    {
        // query to aql
        return parent::paginate($limit, $page, $column, 'name', $search);
    }

    /**
     * @param array $data
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(array $data)
    {
        // execute sql insert
        return parent::create([
            'name'    => e($data['name']),
            'email'   => e($data['email']),
            'password' => bcrypt($data['password']),
            'level'   => '0',
            'position'   => e($data['position'])
        ]);

    }
    /**
     * @param $id
     * @param array $data
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function update($id, array $data)
    {
        return parent::update($id, [
            'name'    => e($data['name']),
            'email'   => e($data['email']),
            // 'password' => e($data['password']),
            'level'   => e($data['level']),
            'position'   => e($data['position'])
        ]);
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function delete($id)
    {
        return parent::delete($id);
    }


    /**
     * @param $id
     * @param array $columns
     * @return mixed
     */
    public function findById($id, array $columns = ['*'])
    {
        return parent::find($id, $columns);
    }

    public function getList($limit = 10, $page = 1, array $column = ['*'], $field, $search = '', $level)
    {
        // query to aql
        return parent::paginateWhere($limit, $page, $column, 'level', $level);
    }

}