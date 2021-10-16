<?php

require_once __ROOT__."\\app\\controllers\\controller.php";

class Task extends Controller{
     
      function __construct(){
         
            if(!isset($_SESSION["login"])){

                  header('Location: ' . BASE_URL . "user/login");
            }
      }


      function index(){    
            
            $data = $this->model("tasks")->getUserTask($_SESSION["user_id"]);     
            
            $this->view ("task-view" , $data); 

      }

      function creatTaskForm(){   
        // displar creat task form          
        $this->view ("createtask-view" , []);

      }


      function insertTask (){ 
            
            $model =  $this->model("tasks");
            $model->newTask($_SESSION["user_id"] , $_POST["title"], $_POST["description"]); 
             
             $_SESSION["message"] = "Successful it has been inserted into the database";

             header('Location: ' . $_SERVER['HTTP_REFERER']);
      }  



      function updateTaskForm ($id){  


         $model = $this->model("tasks");
         $data = $model->getTaskById($id); 
       
         $this->view("uptask-view" ,  $data );
         
    }

    function uptask (){  
          
      
      $this->model("tasks")->updateTask( $_POST["id"] , $_POST["title"], $_POST["description"] , $_SESSION["user_id"]);     

      $_SESSION["message"] = "The Task updated successfuly";

      header('Location: ' . BASE_URL . "task/index");    
      
 }

 function deletetask ($id){ 

      $this->model("tasks")->del($id);     

      $_SESSION["message"] = "The Task deleted successfuly";

      header('Location: ' . BASE_URL . "task/index");  

 }     
}