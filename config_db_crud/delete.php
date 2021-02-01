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
<h1> <?php echo $textoh1 ?> </h1>
<button onclick = "location.href = '../vistas/pantallaprincipal.html'"> Volver al Inicio </button>
</html>
