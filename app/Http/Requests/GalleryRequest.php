<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GalleryRequest extends FormRequest
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
                    'main_image' => 'required|image|mimes:jpeg,jpg,gif,svg|max:2048'
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                        'main_image' => 'filled|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
                 
                ];
            }
            default:break;
        }
    }
}
