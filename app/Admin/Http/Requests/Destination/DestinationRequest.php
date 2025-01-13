<?php

namespace App\Admin\Http\Requests\Destination;

use App\Admin\Http\Requests\BaseRequest;

class DestinationRequest extends BaseRequest
{
    protected function methodPost()
    {
        return [
            'name' => 'required',
            'desc' => 'nullable',
            'image' => 'required',
            'status' => 'required',
        ];
    }

    protected function methodPut()
    {
        return [
            'id' => 'required|exists:destinations,id',
            'name' => 'required',
            'desc' => 'nullable',
            'image' => 'required',
            'status' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên điểm đến',
            'image.required' => 'Vui lòng chọn ảnh',
            'status.required' => 'Vui lòng chọn trạng thái',
        ];
    }
}
