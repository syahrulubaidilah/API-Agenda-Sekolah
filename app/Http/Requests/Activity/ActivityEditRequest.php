<?php

namespace App\Http\Requests\Activity;

use App\Http\Requests\Request;
use Illuminate\Contracts\Validation\Validator;

/**
 * Class RequestCreateRequest
 *
 * @package App\Http\Requests\Request
 */
class ActivityEditRequest extends Request
{
    /**
     * Determine if the request is authorized to make this request.
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
        'image'     => 'Image',
        'description'   => 'Description',
        'start_date' => 'Start_Date',
        'end_date' => 'End_Date',
        'time'   => 'Time',
        'place'   => 'Place',
        'participant'   => 'Participant',
        'level'   => 'Level'
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
            'image'    => 'required|max:225',
            'description' => 'required|max:60',
            'start_date'   => 'required|max:50',
            'end_date'   => 'required|max:50',
            'time'   => 'required|max:30',
            'place'   => 'required|max:30',
            'participant'   => 'required|max:30',
            'level'   => 'Level'
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
