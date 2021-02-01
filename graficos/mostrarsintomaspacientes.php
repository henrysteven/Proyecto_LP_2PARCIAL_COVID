<html>
  <head>
    <title>PHP and R Integration Sample</title>
  </head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
  <body>
    <div id=”r-output” id=”width: 100%; padding: 25px;”>
    <?php
      // Execute the R script within PHP code
      // Generates output as test.png image.
      exec("..\\R\\sintomaspacientes.Rscript");
    ?>
    <img src=..\imagenes\sintomaspacientes.png alt=”R Graph” />
    </div>
    <button class="btn btn-primary" onclick = "location.href='../vistas/selecciongraficos.html'">Volver</button>
    <button class="btn btn-primary" onclick = "location.href='../vistas/pantallaprincipal.html'">Pantalla Principal</button>
  </body>
</html>