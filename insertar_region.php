<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regiones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Nueva Region</h1>
<!--insertar_region.php es el archivo que realizara los procesos crud en la BD-->
        <form action="crud_region.php" methods="post">
        <label for="txt_codigo" class="form-label">Codigo</label>
        <input type="number" name="txt_codigo" id="txt_codigo" class="form-control">

        <label for="txt_nombre" class="form-label">Nombre</label>
        <input type="text" name="txt_nombre" id="txt_nombre" class="form-control">

        <label for="txt_desc" class="form-label">Descripcion</label>
        <input type="text" name="txt_desc" id="txt_desc" class="form-control">

        <button type="submit" class="form-control btn btn-primary">Magia</button>
        </form>
    </div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>