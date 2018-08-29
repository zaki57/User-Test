<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required | max:50',
            'age' => 'required | >=18 ',            //forgot syntax
            'email' => 'required | email',
            'username' => 'required | notExists:users,username',  //forgot syntax
            'status' => '',
            'level_id' => ''
        ];
    }

//Name: must, should not be more than 50 characters
//Age: must, should be 18 or above
//Email: must, should be a valid email
//Username: must, should be a unique username which does not already exists in DB
}
