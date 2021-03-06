<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
        $id = $this->route('id');
        switch ($this->method()) {
            case 'POST':
                {
                    return [
                        'name' => 'required|max:255|unique:categories,name,' . null . ',id,is_deleted,0',
                        'name_en' => 'required|max:255|unique:categories,name_en,' . null . ',id,is_deleted,0',
                        'image' => 'sometimes|mimes:jpeg,jpg,png,gif|max:100000'
                    ];
                }
            case 'PATCH':
                {
                    return [
                        'name' => 'required|max:255|unique:categories,name,' . $id . ',id,is_deleted,0',
                        'name_en' => 'required|max:255|unique:categories,name_en,' . $id . ',id,is_deleted,0',
                        'image' => 'sometimes|mimes:jpeg,jpg,png,gif|max:100000'
                    ];
                }
            default:
                break;
        }
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên danh mục',
            'name.max' => 'Vui lòng nhập tên danh mục không quá 255 ký tự',
            'name.unique' => 'Tên danh mục đã tồn tại',
            'name_en.required' => 'Vui lòng nhập tên danh mục',
            'name_en.max' => 'Vui lòng nhập tên danh mục không quá 255 ký tự',
            'name_en.unique' => 'Tên danh mục đã tồn tại',
            'image.mimes' => 'Ảnh chưa đúng định dạng jpeg,jpg,png',
            'image.max' => 'Ảnh quá dung lượng',
        ];
    }
}
