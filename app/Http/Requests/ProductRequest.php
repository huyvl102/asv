<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
                        'description' => 'required',
                        'name_en' => 'required|max:255|unique:categories,name_en,' . null . ',id,is_deleted,0',
                        'description_en' => 'required',
                        'category_id' => 'required',
                        'images' => 'required|max:100000'
                    ];
                }
            case 'PATCH':
                {
                    return [
                        'name' => 'required|max:255|unique:categories,name,' . $id . ',id,is_deleted,0',
                        'description' => 'required',
                        'name_en' => 'required|max:255|unique:categories,name_en,' . $id . ',id,is_deleted,0',
                        'description_en' => 'required',
                        'category_id' => 'required',
                        'images' => 'required|max:100000'
                    ];
                }
            default:
                break;
        }
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên sản phẩm',
            'name.max' => 'Vui lòng nhập tên sản phẩm không quá 255 ký tự',
            'name.unique' => 'Tên sản phẩm đã tồn tại',
            'category_id.required' => 'Vui lòng chọn sản phẩm theo danh mục',
            'images.mimes' => 'Ảnh chưa đúng định dạng jpeg,jpg,png',
            'images.max' => 'Ảnh quá dung lượng',
            'images.required' => 'Vui lòng chọn ảnh sản phẩm',
            'description.required' => 'Vui lòng nhập chi tiết sản phẩm',
            'name_en.required' => 'Vui lòng nhập tên sản phẩm',
            'name_en.max' => 'Vui lòng nhập tên sản phẩm không quá 255 ký tự',
            'name_en.unique' => 'Tên sản phẩm đã tồn tại',
            'description_en.required' => 'Vui lòng nhập chi tiết sản phẩm',
        ];
    }
}
