<?php

namespace App\Http\Requests\Activity;

use App\Http\Requests\Request;
use Illuminate\Contracts\Validation\Validator;

/**
 * Class ActivityCreateRequest
 *
 * @package App\Http\Requests\Activity
 */
class ActivityCreateRequest extends Request
{
    /**
     * Determine if the activity is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Declaration an attributes
     *
     * @var array
     */
    protected $attrs = [
        'name'    => 'Name',
        'description'   => 'Description',
        'date_activity' => 'Date_Activity',
        'time'   => 'Time',
        'place'   => 'Place',
        'participant'   => 'Participant',
        'level'   => 'Level'
        //'user_Id'   => 'User_Id'
    ];

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'    => 'required|max:225',
            'description' => 'required|max:60',
            'date_activity'   => 'required|max:50',
            'time'   => 'required|max:30',
            'place'   => 'required|max:30',
            'participant'   => 'required|max:30',
            'level'   => 'Level'
            //'user_Id'   => 'required|max:30'
        ];
    }

    /**
     * @param $validator
     *
     * @return mixed
     */
    public function validator($validator)
    {
        return $validator->make($this->all(), $this->container->call([$this, 'rules']), $this->messages(), $this->attrs);
    }

}
