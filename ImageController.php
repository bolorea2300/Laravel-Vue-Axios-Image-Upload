<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    function upload(Request $request)
    {
        //CORS対策
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: Origin, X-Requested-With");

        //ファイル名取得
        $filename = $request->data->getClientOriginalName();

        //ファイル名を変更せずにアップロード
        $imagedata = $request->file('data')->storeAs('public/images', $filename);
    }
}
