<?php 

// include_once $_SERVER['DOCUMENT_ROOT'].'/__lib/main.php';

class database{

    public static $getdatabase=NULL;

    public static function getconnection(){

        if(database::$getdatabase==NULL){

            $server='srv947.hstgr.io';
            $username="u100003642_sanjai_nss";
            $userpass="Sk@nss2023";
            $db_name='u100003642_NSS';

            $conn=new mysqli($server,$username,$userpass,$db_name);

            if($conn->connect_error==true){
                return false;
            }
            else{

                database::$getdatabase = $conn;
         
                return $conn;
                

            }
        }
        else{
            return database::$getdatabase;
        }




    }
}
