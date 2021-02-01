<?php
    $ciudades = array("Azuay","Bolívar","Cañar","Carchi","Chimborazo","Cotopaxi","El Oro","Esmeraldas",
                    "Galápagos","Guayas","Imbabura","Loja","Los Ríos","Manabí","Morona Santiago","Napo",
                    "Orellana","Pastaza","Pichincha","Santa Elena","Santo Domingo de los Tsáchilas",
                    "Sucumbíos","Tungurahua","Zamora Chinchipe");
    $doc = new DOMDocument();
    $doc -> loadHTMLFile("../vistas/formulario.html");
    $selector = $doc->getElementById("selector-ciudad");
    foreach($ciudades as $ciudad){
        $tag_option = $doc -> createElement('option');
        $tag_option -> setAttribute("value",$ciudad);
        $tag_option -> textContent = $ciudad;
        $selector -> appendChild($tag_option);
    }
    /* $doc ->  */
    print $doc->saveHTML($doc);
    include("../config_db_crud/insert.php"); 
    if($_POST){
        $cedula = $_POST["cedula"];
        $nombres = $_POST["nombres"];
        $apellidos = $_POST["apellidos"];
        $ciudad = $_POST["ciudad"];
        $covid = $_POST["tuvo_covid"];
        $forma_contagio = $_POST["forma_contagio"];
        $tuvo_sintomas = "";
        $sintomas = "";
        if($_POST["check"] ){
            $tuvo_sintomas = "si";
            $sintomas = implode(",",$_POST["check"]);
        }else{
            $tuvo_sintomas = "no";
        }
        $sexo = $_POST["sexo"];
        $hospitalizado = $_POST["hospitalizado"];
        $edad = $_POST["edad"];
        $fecha = date('Y-m-d');
        insertar_Persona($cedula,$nombres,$apellidos,$ciudad,$covid,$forma_contagio,$tuvo_sintomas,$sexo,$hospitalizado,$edad,$fecha,$sintomas);
            
    }
?>