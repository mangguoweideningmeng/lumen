<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class ApiController extends Controller
{
    public function home()
    {
        $url = env("SHOP_HOST") . '/api/goods/index';

        $data = file_get_contents($url);        //获取商品数据
        $list = json_decode($data, true);
        $response = [
            'errno' => 0,
            'msg' => 'ok',
            'data' => [
                'goods' => $list['data']['list']
            ]
        ];

        return $response;
    }
    public function list(){
        $url = env("SHOP_HOST") . '/api/goods/list';
        $data=file_get_contents($url);
        $list=json_decode($data,true);
        $response = [
            'errno' => 0,
            'msg' => 'ok',
            'data' => [
                'goods' => $list['data']['list']
            ]
        ];
        return $response;
    }
}
