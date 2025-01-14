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
            'image' => 'nullable',
            'status' => 'required',
        ];
    }

    protected function methodPut()
    {
        return [
            'id' => 'required|exists:destinations,id',
            'name' => 'required',
            'desc' => 'nullable',
            'image' => 'nullable',
            'status' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên điểm đến',
            'status.required' => 'Vui lòng chọn trạng thái',
        ];
    }
}
