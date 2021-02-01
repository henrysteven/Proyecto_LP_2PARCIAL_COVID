<?php   

    function delete_Fallecido($cedula_fallecido){
        $text = "";
        include("conexion.php");
        $sql = "SHOW DATABASES";
        $rs = $link ->query($sql);
        $query = "DELETE FROM Fallecidos WHERE cedula_fallecido = '$cedula_fallecido'";
        $result = $link ->query($query);
        $rowsaffectadas = mysqli_affected_rows($link);
        if ($rowsaffectadas != 0){
            $text =   "Se borro a la persona exitosamente.";
        }else{
            $text =  "No se encontro la cédula en la base de datos";
        }
        $link -> close();
        return $text;
    } 
    function delete_Persona($cedula){
        $text = "";
        include("conexion.php");
        $sql = "SHOW DATABASES";
        $rs = $link ->query($sql);
        $query = "DELETE FROM Persona WHERE cedula ='$cedula'";
        $result = $link ->query($query);
        $rowsaffectadas = mysqli_affected_rows($link);

        if ($rowsaffectadas != 0){
            $text =   "Se borro a la persona exitosamente.";
        }else{
            $text =  "No se encontro la cédula en la base de datos";
        }
        $link -> close();
        return $text;

    }
    $textoh1 = delete_Persona(htmlspecialchars($_POST['cedulaborrar']));
?>
<html>
    <head>  
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link href="../css/style.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <h1 class = "title"> <?php echo $textoh1 ?> </h1>
            <div class = "buttonrow"> 
            <button  class="btn btn-primary btnstyle" onclick = "location.href='../vistas/pantallaprincipal.html'">Pantalla Principal</button>
            </div>
    </body>
</html>
