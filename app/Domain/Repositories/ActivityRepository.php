<?php

namespace App\Domain\Repositories;

use App\Domain\Entities\Activity;
use App\Domain\Contracts\ActivityInterface;
use App\Domain\Contracts\Crudable;


/**
 * Class ActivityRepository
 * @package App\Domain\Repositories
 */
class ActivityRepository extends AbstractRepository implements ActivityInterface, Crudable
{

    /**
     * @var Activity
     */
    protected $model;

    /**
     * ActivityRepository constructor.
     * @param Activity $activity
     */
    public function __construct(Activity $activity)
    {
        $this->model = $activity;
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
            'description'   => e($data['description']),
            'date_activity' => e($data['date_activity']),
            'time'   => e($data['time']),
            'place'   => e($data['place']),
            'participant'   => e($data['participant']),
            'user_id'   => '1'
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
            'description'   => e($data['description']),
            'date_activity' => e($data['date_activity']),
            'time'   => e($data['time']),
            'place'   => e($data['place']),
            'participant'   => e($data['participant']),
            // 'user_id'   => e($data['user_id'])
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

}