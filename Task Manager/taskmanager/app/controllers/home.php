<?php

require_once __ROOT__."\\app\\controllers\\controller.php";


class Home extends Controller{

     
      function __construct(){   
        
      }

      function index (){

        $this->view ("home-view" , []);
      }

      function page_404(){
         
          
        $this->view ("404-view" , []);
        }

        function about (){

          $this->view ("aboutas-view" , []);
    } 

}