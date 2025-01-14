<?php

namespace App\Admin\Http\Requests\Amenity;

use App\Admin\Http\Requests\BaseRequest;

class AmenityRequest extends BaseRequest
{
    protected function methodPost()
    {
        return [
            'icon' => 'required',
            'name' => 'required',
            'amenity_group' => 'required',
        ];
    }

    protected function methodPut()
    {
        return [
            'id' => 'required|exists:amenities,id',
            'icon' => 'required',
            'name' => 'required',
            'amenity_group' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'icon.required' => 'Vui lòng chọn icon',
            'name.required' => 'Vui lòng nhập tên tiện ích',
            'amenity_group.required' => 'Vui lòng chọn nhóm tiện ích',
            'id.required' => 'ID không được để trống',
            'id.exists' => 'ID không tồn tại',
        ];
    }
}
