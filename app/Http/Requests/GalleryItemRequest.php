<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GalleryItemRequest extends FormRequest
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
        // 'gallery_id', 'embedded_media', 'type', 'media'
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
                    'media' => 'required_if:type,image|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'type' => 'required',
                    'embedded_media' => 'required_if:type,video'
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'media' => 'filled|required_if:type,image|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'type' => 'required',
                    'embedded_media' => 'required_if:type,video'
                ];
            }
            default:break;
        }
    }

    public function messages()
    {
        return [
            'embedded_media.required_if' => 'Youtube Link is required if the type is youtube',
            'media.image' => 'The uploaded file must be image',
            'media.mimes' => 'The uploaded file must be image'
        ];
    }
}
