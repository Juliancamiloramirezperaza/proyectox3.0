<!DOCTYPE html>
<html>
<head>
    <title>Formulario de inicio de sesión</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: black;
        }
        
        .container {
            background-color: #121B21;
            border: 1px solid black;
            padding: 20px;
            margin-top: 50px;
            color: red;
        }
        
        .form-control {
            background-color: #121B21;
            color: red;
            border-color: black;
        }
        
        .btn-primary {
            background-color: red;
            border-color: black;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Iniciar sesión</h2>
        <form method="POST" action="login.php">
            <div class="form-group">
                <label for="username">Nombre de usuario:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class ="mb-m4 form check">
            <label for="connected" class="form-check-label"  >mantener conectado</label>
                <input type="checkbox" class="form-check-input"  name="connected" required>
                <br>
            <button type="submit" class="btn btn-primary">Iniciar sesión</button>
        </form>
    </div>
</body>
</html>
