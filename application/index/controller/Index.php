<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
      return 'hello word';//新加一行
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
