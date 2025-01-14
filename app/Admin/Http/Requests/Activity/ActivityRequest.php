<?php

namespace App\Admin\Http\Requests\Activity;

use App\Admin\Http\Requests\BaseRequest;

class ActivityRequest extends BaseRequest
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
            'id' => 'required|exists:categories,id',
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