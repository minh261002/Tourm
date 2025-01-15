<?php

namespace App\Admin\Http\Requests\Property;

use App\Admin\Http\Requests\BaseRequest;

class PropertyRequest extends BaseRequest
{
    protected function methodPost()
    {

        return [
            'name' => 'required',
            'destination_id' => 'required',
            'amenities' => 'required',
            'address' => 'required',
            'lat' => 'required',
            'lng' => 'required',
            'price' => 'required',
            'sale_price' => 'nullable',
            'status' => 'required',
            'image' => 'nullable',
            'gallery' => 'nullable',
            'desc' => 'nullable',
            'area' => 'required',
            'bedroom' => 'required',
            'bathroom' => 'required',
            'adults' => 'required',
            'children' => 'required',
         ];
    }

    protected function methodPut()
    {
        return [
            'id' => 'required|exists:properties,id',
            'name' => 'required',
            'destination_id' => 'required',
            'amenities' => 'required',
            'address' => 'required',
            'lat' => 'required',
            'lng' => 'required',
            'price' => 'required',
            'sale_price' => 'nullable',
            'status' => 'required',
            'image' => 'nullable',
            'gallery' => 'nullable',
            'desc' => 'nullable',
            'area' => 'required',
            'bedroom' => 'required',
            'bathroom' => 'required',
            'adults' => 'required',
            'children' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên không được để trống',
            'destination_id.required' => 'Địa điểm không được để trống',
            'amenities.required' => 'Tiện ích không được để trống',
            'address.required' => 'Địa chỉ không được để trống',
            'lat.required' => 'Vĩ độ không được để trống',
            'lng.required' => 'Kinh độ không được để trống',
            'price.required' => 'Giá không được để trống',
            'status.required' => 'Trạng thái không được để trống',
            'area.required' => 'Diện tích không được để trống',
            'bedroom.required' => 'Số phòng ngủ không được để trống',
            'bathroom.required' => 'Số phòng tắm không được để trống',
            'adults.required' => 'Số người lớn không được để trống',
            'children.required' => 'Số trẻ em không được để trống',
        ];
    }
}