<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>

    <?php 
        include("insert.php"); 
        include("funciones_disenio_frontend.php");
        
    ?>
    <h1>Formulario de Covid 19</h1>
    <form>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationDefault01">Nombres</label>
                <input type="text" class="form-control" id="validationDefault01" placeholder="First name" value="" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationDefault02">Apellidos</label>
                <input type="text" class="form-control" id="validationDefault02" placeholder="Last name" value="" required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationDefault03">Ciudad</label>
                <input type="text" class="form-control" id="validationDefault03" placeholder="City" required>
            </div>
        </div>
        <div>
            <select class="form-control" id="selector-ciudad">
                <option>Default select</option>
            </select>
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                <label class="form-check-label" for="invalidCheck2">
                    Agree to terms and conditions
                </label>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Guardar</button>
    </form>
</body>

</html>