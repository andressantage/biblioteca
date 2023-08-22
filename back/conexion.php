<?php
    function conectar(){
        $host="localhost";
        $user="id21133492_localhost";
        $pass="H1*h12345678";
        $cont="id21133492_biblioteca";

        $con=mysqli_connect($host,$user,$pass);

        mysqli_select_db($con,$cont);

        return $con;
    }
?>