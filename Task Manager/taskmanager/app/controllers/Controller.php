<?php

class Controller
{   
    public function view($view, $data)
    {

        // $data passed into method is now available in this view        
        require_once __ROOT__.'\\app\\views\\layout.php';
    }

    public function model($model)
    {
        //import model
     
        require_once __ROOT__.'\\app\\models\\' . $model . '.php';

        return new $model();
    }
}