<html>
  <head>
    <title>PHP and R Integration Sample</title>
  </head>
  <body>
    <div id=”r-output” id=”width: 100%; padding: 25px;”>
    <?php
      // Execute the R script within PHP code
      // Generates output as test.png image.
      exec("..\\R\\formacontagio.Rscript");
    ?>
    <img src=..\imagenes\formacontagio.png alt=”R Graph” />
    </div>
  </body>
</html>