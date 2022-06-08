<?php

class koneksi{
    public static function connection(){
			
                    try {
				
                            //using mysql server
                            $conn = new PDO ("mysql:host=localhost;dbname=JaketKulit","root","");
                            //using mysql server 
                            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				
                    }
                    catch(PDOException $e){
                            echo $e -> getMessage();
                            die();
				
                    }
                    return $conn;
    }
}	
?>