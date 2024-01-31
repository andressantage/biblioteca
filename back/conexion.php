<?php
    function conectar(){
        $host="";
        $user="";
        $pass="";
        $cont="";

        $con=mysqli_connect($host,$user,$pass);

        mysqli_select_db($con,$cont);

        return $con;
    }
?>
