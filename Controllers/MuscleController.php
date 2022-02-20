<?php
require_once(ROOT_PATH .'/Models/Muscle.php');


class MuscleController
{
    private $request; //リクエストパラメータ(GET,POST)
    private $Muscle;  //Muscleモデル


    public function __construct()
    {
        //リクエストパラメータの取得
        $this -> request['get'] = $_GET;
        $this -> request['post'] = $_POST;

        //モデルオブジェクトの生成
        $this -> Muscle = new Muscle();
    }

    public function index()
    {
        echo 'index';
    }
}
