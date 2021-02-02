<?php
    function insertar_Fallecido($cedula_fallecido,$nombre_fallecido,$apellido_fallecido,$sexo,$causa_muerte_oficial,$caso_sospechoso_covid,$cedula){
        include("conexion.php");
        $sql = "SHOW DATABASES";
        $rs = $link ->query($sql);
        $query = "INSERT INTO Fallecidos (cedula_fallecido, nombre_fallecido, apellido_fallecido, sexo, causa_muerte_oficial, caso_sospechoso_covid, cedula) VALUES ('$cedula_fallecido','$nombre_fallecido','$apellido_fallecido','$sexo','$causa_muerte_oficial','$caso_sospechoso_covid','$cedula')";
        $result = mysqli_query($link, $query);
        if ($result){
            $cadena = '<div id=mensaje>Datos guardados correctamente</div>';
            echo $cadena;
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
            $cadena = '<div id=mensaje>Datos guardados correctamente</div>';
            echo $cadena;
        }else{
            echo "<div id=mensaje2>" . mysqli_error($link).'</div>';
        }
        $link -> close();
    }
   
     $linea = 0;
    //Abrimos nuestro archivo
    $archivo = fopen("../datos2.csv", "r");
    $archivo2 = fopen("../datos3.csv", "r");

    //Lo recorremos
    while (($datos = fgetcsv($archivo, 3000,",")) == true) 
    {
        $num = count($datos);
        $linea++;
        $cedula = $datos[2];

        if(($datos2 = fgetcsv($archivo2, 3000,",")) == true){

            $cedula_fallecido = $datos2[0];
            $nombre_fallecido= $datos2[1];
            $apellido_fallecido = $datos2[2];
            $sexo = $datos2[3];
            $causa_muerte = $datos2[4];
            $caso_sospechoso = $datos2[5];
            insertar_Fallecido($cedula_fallecido,$nombre_fallecido,$apellido_fallecido,$sexo,$causa_muerte,$caso_sospechoso,$cedula);


        }
    //Recorremos las columnas de esa linea
        $nombre = $datos[0];
        $apellido= $datos[1];
        $covid = $datos[3];
        $ciudad = $datos[4];
        $forma_contagio = $datos[5];
        $tuvo_sintomas = $datos[6];
        $sexo = $datos[7];
        $hospitalizados = $datos[8];
        $edad = $datos[9];
        $fecha = $datos[10];
        $sintomas = $datos[11];
        //insertar_Persona($cedula,$nombre,$apellido,$ciudad,$covid,$forma_contagio,$tuvo_sintomas,$sexo,$hospitalizados,$edad,$fecha,$sintomas);
    }
    //Cerramos el archivo
    fclose($archivo); 
    fclose($archivo2);
    /* $linea2 = 0;
    //Abrimos nuestro archivo
    //Lo recorremos
    while (($datos2 = fgetcsv($archivo2, 3000,",")) == true) 
    {
        $num2 = count($datos2);
        $linea++;
    //Recorremos las columnas de esa linea
        $cedula_fallecido = $datos[0];
        $nombre_fallecido= $datos[1];
        $apellido_fallecido = $datos[2];
        $sexo = $datos[3];
        $causa_muerte = $datos[4];
        $caso_sospechoso = $datos[5];
        $cedula = $datos[6];
        insertar_Fallecido($cedula_fallecido,$nombre_fallecido,$apellido_fallecido,$sexo,$causa_muerte,$caso_sospechoso,$cedula);
    }
    //Cerramos el archivo
    fclose($archivo); */
?>