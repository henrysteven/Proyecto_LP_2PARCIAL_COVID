<?php
    $ciudades = array("Azuay","Bolívar","Cañar","Carchi","Chimborazo","Cotopaxi","El Oro","Esmeraldas","Galápagos","Guayas","Imbabura","Loja","Los Ríos"
    ,"Manabí","Morona Santiago","Napo","Orellana","Pastaza","Pichincha","Santa Elena","Santo Domingo de los Tsáchilas",
    "Sucumbíos","Tungurahua","Zamora Chinchipe");
    foreach($ciudades as $ciudad){
        echo "b";
    }
    $doc = new DOMDocument();
    $doc -> loadHTMLFile("formulario.php");
    $selector = $doc->getElementById("selector-ciudad");
    
    $optio = $doc -> createElement('option');
    
    $optio -> setAttribute("value","bueno");
    $selector -> appendChild($optio);
    echo strip_tags();
    print $doc->saveHTML();

?>