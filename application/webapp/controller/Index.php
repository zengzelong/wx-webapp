<?php
/**
 * Created by PhpStorm.
 * User: Maczen
 * Date: 31/08/2018
 * Time: 11:04
 */

namespace app\webapp\controller;

use think\Controller;
use weixin\Jssdk;

class Index extends Controller
{
    public function index()
    {


        $news = [
          ["id"=>100, "title"=>"news 01"],
          ["id"=>200, "title"=>"news 02"],
          ["id"=>300, "title"=>"news 03"],
        ];


        $jssdk = new Jssdk("wx42b1d8b494f60197", "37cc116d33b0df65942178f4a38862b8");
        $signPackage = $jssdk->GetSignPackage();

        $this->assign([
            "sign" => $signPackage,
            "news" => $news,
        ]);


        return view();
    }

}
