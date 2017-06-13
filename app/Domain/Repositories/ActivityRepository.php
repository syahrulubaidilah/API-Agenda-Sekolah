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
        if(\Auth::user()->level == 0){
        // query to aql
        $activity = $this->model
        ->orderBy('created_at', 'desc')
        ->where('name', 'like', '%' . $search . '%')
        ->where('user_id', \Auth::user()->id)
        ->paginate($limit);
        
        return $activity;
        }else{
        // query to aql
        $activity = $this->model
        ->orderBy('created_at', 'desc')
        ->where('name', 'like', '%' . $search . '%')
        ->paginate($limit);
        
        return $activity;
        }
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
            'image'    => e($data['image']),
            'description'   => e($data['description']),
            'start_date' => e($data['start_date']),
            'end_date' => e($data['end_date']),
            'time'   => e($data['time']),
            'place'   => e($data['place']),
            'participant'   => e($data['participant']),
            'status'   => e($data['status']),
            'user_id'   => \Auth::user()->id
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
            'image'    => e($data['image']),
            'description'   => e($data['description']),
            'start_date' => e($data['start_date']),
            'end_date' => e($data['end_date']),
            'time'   => e($data['time']),
            'place'   => e($data['place']),
            'participant'   => e($data['participant']),
            'status'   => e($data['participant']),
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

    public function getList($limit = 10, $page = 1, array $column = ['*'], $field, $search = '')
    {
        // query to aql
        $activity = $this->model
        ->orderBy('created_at', 'desc')
        ->where('name', 'like', '%' . $search . '%')
        ->where('status','1')
        ->paginate($limit);
        
        return $activity;
    }

    public function calendar()
    {
        $activity = $this->model->all();

        $activities = [];
        
        foreach($activity as $act){
            $activities[]=[
                'title' => $act->name,
                'start' => $act->start_date,
                'end' => $act->end_date,
                'allDay'=> 0,
                'className'=> 'label-important'
            ];
        }

        return $activities;
    }

}