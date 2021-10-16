<?php 

require_once __ROOT__."\\app\\models\\db1.php";

class tasks{   
    

    public $db ;

    function __construct(){

        $this->db = new db();

    }

    function getTaskById ($id){

       $data =  $this->db->select("tasks" ,["id" => $id ]); 
        
       return $data[0];

    }

   
    function getUserTask ($user_id){

        return  $this->db->select("tasks" ,["user_id" => $user_id ]); 
        
       

    }

    function newTask ($user_id , $title , $discription){

      $this->db->insert ("tasks",[
            "title" => $title,
            "description"=> $discription,            
            "user_id" => $user_id
        ]);   

    }

    function updateTask($id , $title, $description, $userid){   
        
    print_r($userid);
       
        $this->db->update("tasks" , [

                "title" =>$title,
                "description"=> $description,
                "update_date" => date('Y-m-d H:i:s'),
                "user_id" => $userid
              ],
                [
                "id" => $id
            ]);

        }

    function del($id){

         $this->db->delete("tasks" ,   ["id" => $id ]);
    }

}