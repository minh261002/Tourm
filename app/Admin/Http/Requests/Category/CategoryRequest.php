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
        ];
    }

    protected function methodPut()
    {
        return [
            'id' => 'required|exists:destinations,id',
            'name' => 'required',
            'description' => 'nullable',
            'image' => 'nullable',
            'status' => 'required',
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
