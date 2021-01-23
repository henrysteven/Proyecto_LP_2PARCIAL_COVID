<?php

    function insertar_Fallecido($cedula_fallecido,$nombre_fallecido,$apellido_fallecido,$sexo,$causa_muerte_oficial,$caso_sospechoso_covid,$cedula){
        include("conexion.php");
        $sql = "SHOW DATABASES";
        $rs = $link ->query($sql);
        $query = "INSERT INTO Fallecidos (cedula_fallecido, nombre_fallecido, apellido_fallecido, sexo, causa_muerte_oficial, caso_sospechoso_covid, cedula) VALUES ('$cedula_fallecido','$nombre_fallecido','$apellido_fallecido','$sexo','$causa_muerte_oficial','$caso_sospechoso_covid','$cedula')";
        $result = mysqli_query($link, $query);
        if ($result){
            echo "bueno";
        }else{
            echo "" . mysqli_error($link);
        }
        $link -> close();
    } 
    function insertar_Persona($cedula,$nombre,$apellido,$ciudad,$covid,$forma_contagio,$tuvo_sintomas,$sexo,$hospitalizados,$edad,$fecha,$sintomas){
        include("conexion.php");
        $sql = "SHOW DATABASES";
        $rs = $link ->query($sql);
        $query = "INSERT INTO Persona (cedula, nombre, apellido, ciudad, covid, forma_contagio, tuvo_sintomas, sexo, hospitalizado, edad, fecha, sintomas) VALUES ('$cedula','$nombre','$apellido','$ciudad','$covid','$forma_contagio','$tuvo_sintomas','$sexo','$hospitalizados','$edad','$fecha','$sintomas')";
        $result = mysqli_query($link, $query);
        if ($result){
            echo "bueno";
        }else{
            echo "" . mysqli_error($link);
        }
        $link -> close();
    }
    //insertar_Persona('1650648432','Steven','Pluas','Quito','no','ninguno','no','Maa','no','24','2021-01-21','ninguno');        
    //insertar_Fallecido("0985046813","YYY","zzz","M","ninguna","no","0950648139");     

?>