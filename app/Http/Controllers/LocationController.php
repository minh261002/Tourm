<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\District;

class LocationController extends Controller
{

    public function getLocation(Request $request)
    {
        $get = $request->input();

        $html = '';

        if ($get['target'] == 'districts') {

            $provinces = Province::with('districts')->where('code', $get['data']['location_id'])->first();
            $html = $this->renderHTML($provinces->districts);

        } else if ($get['target'] == 'wards') {
            $districts = District::with('wards')->where('code', $get['data']['location_id'])->first();
            $html = $this->renderHTML($districts->wards, '[Chọn Phường / Xã]');
        }

        return response()->json([
            'html' => $html
        ]);
    }

    public function renderHTML($districts, $root = '[Chọn Quận / Huyện]')
    {
        $html = '<option value="" >' . $root . '</option>';

        foreach ($districts as $district) {
            $html .= '<option value="' . $district->code . '">' . $district->name_with_type . '</option>';
        }

        return $html;
    }
}
