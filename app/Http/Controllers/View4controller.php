<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class View4controller extends Controller
{
    public function view4()
    {
        return view('lession04-view.tta-view4')
            ->with('name', 'Tiến Anh')
            ->with('company', 'Tiến Anh Devmaster Academy');
    }
    public function view5()
    {
        //dứ liệu
        $info = "VIỆN CÔNG NGHỆ VÀO ĐÀO TẠO DEVMASTER";
        $emp = array(
            "Name"=>"Trần Tiến Anh",
            "Email"=>"tienanhtran755@gmail.com",
            "Phone"=>"0387742492",
        );
        if (\Illuminate\Support\Facades\View::exists('lession04-view.tta-view5')) {
            return view('lession04-view.tta-view5', ["info" => $info, "emp" => $emp]);
        } else {
            return "Không Tồn Tại View5";
        }
    }
}
