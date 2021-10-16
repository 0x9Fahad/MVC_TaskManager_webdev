<?php

require_once __ROOT__."\\app\\controllers\\controller.php";

class User extends Controller {     
      function __construct(){      
      }

     
      function login (){
            // login form
            $this->view ("login-view" , []);
      }

      function loginProcess (){

            $model = $this->model("userm");
            $res = $model->login();
           
          if(count($res)==0){
            $_SESSION["message"] = "Login is wrong : confirm userName And Password";
            header('Location: ' . $_SERVER['HTTP_REFERER']);
          }else{
            $data=$res[0];
            $_SESSION["name"] = $data["name"];
            $_SESSION["email"] = $data["email"];
            $_SESSION["user_id"] = $data["id"];
            $_SESSION["login"] = true;
            header('Location: ' . BASE_URL . "task/index");
             
          }    
    
      }  
   
      function registerUser(){
            $this->view ("register-user" , []);
      }       

      function saveUser(){
           
      if($_POST["password"]==$_POST["retype"])   {

            $model = $this->model("userm");
        
            $model->insertuser( $_POST["name"] , $_POST["email"] , $_POST["password"]);        

            $_SESSION["message"] = "The Uer insert into Data base";

           header('Location: ' . $_SERVER['HTTP_REFERER']);

      }else{

            $_SESSION["message"] = "The password did not match";

            header('Location: ' . $_SERVER['HTTP_REFERER']);
      }
        
      }

      function profile(){
              
            $model = $this->model("userm");

            $data = $model->getProfile($_SESSION["user_id"]);

            $this->view ("profile-view" , $data);
            
        }

        function up_profile(){            

          if($_POST["password"] !="" && $_POST["retype"] !="" ){
                  if($_POST["password"]==$_POST["retype"])   {  
                        
                    $this->model("userm")->editProfile( $_SESSION["user_id"] ,$_POST["name"] ,$_POST["email"] , $_POST["password"]);

                    $_SESSION["message"] = "The User Profile Updated"; 
                                header('Location: ' . $_SERVER['HTTP_REFERER']);  
                             
                              }else{

                                
                                    $_SESSION["message"] = "The password did not match"; 
                                    header('Location: ' . $_SERVER['HTTP_REFERER']);  

                              }

            } else{

                  $this->model("userm")->editProfileWithoutPassWord( $_SESSION["user_id"] ,$_POST["name"] ,$_POST["email"]);

                  $_SESSION["message"] = "The User Profile Updated"; 
                  header('Location: ' . $_SERVER['HTTP_REFERER']);  

            }         
          
       }

      function logout(){
            session_unset();
            session_destroy();
            $_SESSION = array();
            header('Location: ' . BASE_URL . "home/index");
      }


     

  
    
     
}