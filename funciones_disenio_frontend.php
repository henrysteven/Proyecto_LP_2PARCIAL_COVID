<?php
    $ciudades = array("Azuay","Bolívar","Cañar","Carchi","Chimborazo","Cotopaxi","El Oro","Esmeraldas",
                    "Galápagos","Guayas","Imbabura","Loja","Los Ríos","Manabí","Morona Santiago","Napo",
                    "Orellana","Pastaza","Pichincha","Santa Elena","Santo Domingo de los Tsáchilas",
                    "Sucumbíos","Tungurahua","Zamora Chinchipe");
    $doc = new DOMDocument();
    $doc -> loadHTMLFile("formulario.php");
    $selector = $doc->getElementById("selector-ciudad");
    foreach($ciudades as $ciudad){
        $tag_option = $doc -> createElement('option');
        $tag_option -> setAttribute("value",$ciudad);
        $tag_option -> textContent = $ciudad;
        $selector -> appendChild($tag_option);
    }
    /* $doc ->  */
    print $doc->saveHTML($doc);
?>