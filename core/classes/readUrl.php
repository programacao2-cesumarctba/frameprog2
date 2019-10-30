<?php
class ReadUrl 
{

  public function index(){
    $url = $_SERVER['REQUEST_URI'];
    $arrUrl = explode('/', $url);
    unset($arrUrl[0]);
    echo '<pre>';
    print_r($arrUrl); 
    echo '</pre>';
    getClass($arrUrl)
  }


  public function getClass($arrUrl){
      if(file_exists(__DIR__. '/'. $arrUrl[1] . '.php')){
        echo 'Achou o arquivo<br>';
        require_once(__DIR__ . '/'. $arrUrl[1] . '.php');
        eval('$obj = new $arrUrl[1];');
      } else {
        echo 'Não achou o arquivo';
      }
    }

    public function getMethod(){
      if (empty($arrUrl[2])) {
        $obj->index();
      } else {
        $method = $arrUrl[2];
        eval('$obj->$method();');
      }
    }
}
