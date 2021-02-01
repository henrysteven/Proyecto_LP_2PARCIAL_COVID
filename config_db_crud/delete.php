<?php
    function insertar_Fallecido($cedula_fallecido){
        include("conexion.php");
        $sql = "SHOW DATABASES";
        $rs = $link ->query($sql);
        $query = "DELETE FROM Fallecidos WHERE cedula_fallecido = '$cedula_fallecido'";
        $result = mysqli_query($link, $query);
        if ($result){
            echo "bueno";
        }else{
            echo "" . mysqli_error($link);
        }
        $link -> close();
    } 
    function delete_Persona($cedula){
        include("conexion.php");
        $sql = "SHOW DATABASES";
        $rs = $link ->query($sql);
        $query = "DELETE FROM Persona WHERE cedula ='$cedula'";
        $result = mysqli_query($link, $query);
        if ($result){
            echo "bueno";
        }else{
            echo "" . mysqli_error($link);
        }
        $link -> close();
    }
    delete_Persona('1650648435');        
    //insertar_Fallecido("0985046813","YYY","zzz","M","ninguna","no","0950648139");     

?>