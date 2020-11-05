<?php 
    function getDB() {
        return $db = pg_connect("host=ec2-34-200-72-77.compute-1.amazonaws.com
                          dbname=dbi4mim1e236mc
                          port=5432
                          user=brwuaeapwdymll
                          password=3ff1daf0cf7573f885bb9e54db192f6f947c4a46a656d850339375b70fac91ab")
                          or die("Connection failed!")
    }


   
 ?>