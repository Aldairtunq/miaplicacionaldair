<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <form class="m-auto w-50 mt-2 mb-2" method="POST" enctype="multipart/form-data" action="acciones/insertar.php">
            <div class="mb-2">
                <label class="form-label">Nombre del archivo</label>
                <input class='form-control form-control-sm' type="text" name="nombreArchivo">
            </div>
            <div class="mb-2">
                <label class="form-label">Selecciona un archivo</label>
                <input class='form-control form-control-sm' type="file" name="archivo">
            </div>
            <button class="btn btn-primary btn-sm">Subir archivo</button>
        </form>
        
        <table class="table table-sm table-striped">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>categoria</th>
                    <th>Archivo</th>
                    <th>fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
</table>


<script src="bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>
