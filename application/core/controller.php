<?php

namespace Aplication\core;
class Controller{
    public function model($model){
        require '../Aplication/models/'.$model.'.php';
        $class = 'Aplication/models\\'.$model;
        return new $class();
    }
    public function view(string $view,$data = []){
        require '../Aplication/view/'.$$view.'.php';
    }
    public function pageNotFound(){
        $this->view('erro404');
    }





}

?>