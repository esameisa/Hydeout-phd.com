<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Entites\Point;
class PointRequest extends FormRequest
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

        $segments = $this->segments();
        $id = $segments[sizeof($segments) - 1];
        switch($this->method())
        {
            case 'GET':
            case 'DELETE':
            {
                return [];
            }
            case 'POST':
            {
                return [];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'key' => 'required|unique:points,key,'.$id,
                    'name' => 'required|unique:points,name,'.$id,
                    'value' => 'required',
    
                ];
            }
            default:break;
        }
    }
}
