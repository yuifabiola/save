<?php

if($_POST){
    

    function getRealIP() {

        if (!empty($_SERVER['HTTP_CLIENT_IP']))
            return $_SERVER['HTTP_CLIENT_IP'];
           
        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
       
        return $_SERVER['REMOTE_ADDR'];
    }



                    $email = utf8_decode(addslashes(trim($_POST['correo'])));
                    if (($_SERVER['REQUEST_METHOD']=='post' || $_SERVER['REQUEST_METHOD']=='POST') ){


                                $origen =getRealIP();
                                if(strlen($origen)>=240 ){
                                    $origen ="0.0.0.0";
                                }

                                

                              
                    }
                     sleep(2);
                     echo 3;




}else{
      sleep(1);
    echo 4;

    //header('location: /');

}



?>