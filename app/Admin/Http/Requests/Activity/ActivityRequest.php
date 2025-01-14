<?php

namespace App\Admin\Http\Requests\Activity;

use App\Admin\Http\Requests\BaseRequest;

class ActivityRequest extends BaseRequest
{
    protected function methodPost()
    {

        return [
            'name' => 'required',
            'destination_ids' => 'required',
            'address' => 'required',
            'price' => 'required',
            'sale_price' => 'nullable',
            'date' => 'required',
            'time' => 'required',
            'status' => 'required',
            'category_id' => 'required',
            'image' => 'nullable',
            'gallery' => 'nullable',
        ];
    }

    protected function methodPut()
    {
        return [
            'id' => 'required|exists:activities,id',
            'name' => 'required',
            'destination_ids' => 'required',
            'address' => 'required',
            'price' => 'required',
            'sale_price' => 'nullable',
            'date' => 'required',
            'time' => 'required',
            'status' => 'required',
            'category_id' => 'required',
            'image' => 'nullable',
            'gallery' => 'nullable',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên hoạt động không được để trống',
            'destination_ids.required' => 'Địa điểm không được để trống',
            'address.required' => 'Địa chỉ không được để trống',
            'price.required' => 'Giá không được để trống',
            'date.required' => 'Ngày không được để trống',
            'time.required' => 'Thời gian không được để trống',
            'status.required' => 'Trạng thái không được để trống',
            'category_id.required' => 'Danh mục không được để trống',
        ];
    }
}