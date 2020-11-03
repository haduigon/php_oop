<?php

class MainController {

    public function index(){
        $smarty = View::getInstance();
        $smarty->display('index.tpl');

    }

}
