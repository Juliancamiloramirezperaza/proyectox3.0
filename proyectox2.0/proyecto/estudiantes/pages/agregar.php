<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Agregar Nuevo Estudiante</title>
    <link rel="stylesheet" type="text/css" href="CSS/estilosagr.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <h1>Agregar Nuevo Estudiante</h1>
        <form>
            <label>Nombre del Estudiante: </label>
            <input type="text" id="Nombre" class="form-control">
            <label>Apellido del Estudiante: </label>
            <input type="text" id="Apellido" class="form-control">
            <label>Documento del Estudiante</label>
            <input type="text" id="Documento" class="form-control">
            <label>Correo del Estudiante</label>
            <input type="text" id="Correo" class="form-control">
            <label>Materia del Estudiante</label>
            <input type="text" id="Materia" class="form-control">
            <label>Docente del Estudiante</label>
            <input type="text" id="Docente" class="form-control">
            <center><input type="submit" id="Enviar" value="Agregar" ></center>

        </form>
    
</body>
</html>