<?php 

class App
{

    protected $controller ;

    protected $method ;

    protected $params = [];


    public function __construct(){

        session_start() ;

        // root constant
        define('__ROOT__' ,  dirname(__FILE__));
        define('BASE_URL', 'http://localhost/taskmanager/');

        // uri parseing 
         $url =  $this->parse();

         if (count($url)==1){
             
            require_once __ROOT__.'/app/controllers/home.php';
            $home =  new Home();
            $home->index();
           

         }else{
         
                // unshift base 
                array_shift($url);        
                
                if(file_exists(__ROOT__.'/app/controllers/' . $url[0] . '.php'))
                {

                    $this->control = $url[0];

                    array_shift($url); 
                    // import controller  who pass in uarl
                    require_once __ROOT__.'/app/controllers/' . $this->control. '.php';                                       
                    // create object from controller
                    $obj_controller  = new $this->control;

                            if(method_exists($obj_controller ,isset($url[0])?$url[0]:""))
                            {
                                $this->method = $url[0];

                                array_shift($url);

                                $this->params = $url ? array_values($url) : [];

                                // print_r($this->params);
                                // ...$this->params  convert from array to parameter
                                //run method 
                                 call_user_func([$obj_controller, $this->method] , ...$this->params);
                            }else{               
                                require_once __ROOT__.'/app/controllers/home.php';
                                $home =  new Home();
                                $home->page_404();
                            }   
                        
                }else{               
                    require_once __ROOT__.'/app/controllers/home.php';
                    $home =  new Home();
                    $home->page_404();
                }
            }    
    }


    public function parse(){

        $url_str =  $_SERVER['REQUEST_URI'];

       
        $url_str  = trim ($url_str , "/");
        $url_arr =explode("/", $url_str );   
        // echo "<pre>";
        // print_r($url_arr);   
        // echo __ROOT__; 
        return $url_arr ;
    }


}


$app = new App();