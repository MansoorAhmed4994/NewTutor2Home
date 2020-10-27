<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\User;


class CourseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        

        switch($this->method())
        {
            case 'PUT':
            {
                return [
                   'name' => 'required',
                   'duration' => 'required',
                   'price' => 'required',
                   'description' => 'required',
               ];
            }
            break;
            case 'POST':{
               return [
                   'name' => 'required',
                   'duration' => 'required',
                   'price' => 'required',
                   'image_url' => 'required',
                   'description' => 'required',
               ];
            }
            break; 
            default:break;
       }

    }
}
