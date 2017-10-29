<?php
namespace App\Controller;

class HelloController extends AppController{
    //コントローラの名前を設定。なくても動くらしい
    public $name = 'Hello';
    //自動レンダリング設定。trueの時はビューテンプレートを探しに行く。
    public $autoRender = false;

    //デフォルトページの処理メソッド
    public function index(){
        echo "hello world";
    }

}