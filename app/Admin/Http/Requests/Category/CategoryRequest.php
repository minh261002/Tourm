<?php

namespace App\Admin\Http\Requests\Category;

use App\Admin\Http\Requests\BaseRequest;

class CategoryRequest extends BaseRequest
{
    protected function methodPost()
    {
        return [
            'name' => 'required',
            'description' => 'nullable',
            'image' => 'nullable',
            'status' => 'required',
            'is_home' => 'required',
        ];
    }

    protected function methodPut()
    {
        return [
            'id' => 'required|exists:categories,id',
            'name' => 'required',
            'description' => 'nullable',
            'image' => 'nullable',
            'status' => 'required',
            'is_home' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên danh mục',
            'status.required' => 'Vui lòng chọn trạng thái',
        ];
    }
}