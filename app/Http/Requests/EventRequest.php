<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use App\Entities\Event;

class EventRequest extends FormRequest
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
                return [
                    'title' => 'required|max:100|min:3|unique:events,title', 
                    'content' => 'required|min:3',
                    'date' => 'required|date',
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'title' => 'required|max:100|min:3|unique:events,title,'.$id, 
                    'content' => 'required|min:3',
                    'date' => 'required|date',
                    'image' => 'filled|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
                ];
            }
            default:break;
        }
    }
}
