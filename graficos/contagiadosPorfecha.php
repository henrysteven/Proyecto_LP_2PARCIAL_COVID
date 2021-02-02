<html>
  <head>
    <title>PHP and R Integration Sample</title>
  </head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
  <body>

    <?php
      // Execute the R script within PHP code
      // Generates output as test.png image.
      exec("..\\R\\contagiadosPorfecha.Rscript");
    ?>
    <div>
    <h1 class = "graphtitle">Análisis de contagiados por Mes y Año</h1>
    <p class = "graphtext">
    <img class = "graph" src=..\imagenes\contagiadosPorfecha.png alt=”R Graph” />
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras ac leo purus. Mauris quis diam velit.
    </p>
    <div class = "buttonrow"> 
    <button class="btn btn-primary btnstyle" onclick = "location.href='../vistas/selecciongraficos.html'">Volver</button>
    </div>
    <div class = "buttonrow"> 
      
    <button  class="btn btn-primary btnstyle" onclick = "location.href='../vistas/pantallaprincipal.html'">Pantalla Principal</button>
    </div>
    </div>

  </body>
</html>