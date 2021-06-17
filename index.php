<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-4.6.0-dist/bootstrap-4.6.0-dist/css/bootstrap.min.css">

</head>
<body>
<div class="container">
    <form method="POST" action="procesos/form_materia.php">
        <div class="form-group">
            <label for="exampleInputEmail1">Deporte</label>
            <input type="text" class="form-control" name="deporte_user" id="deporte_user" aria-describedby="emailHelp">
            <label for="exampleInputEmail1">Hora</label>
            <input type="text" class="form-control" name="hora_user"id="hora_user" aria-describedby="emailHelp">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Intensidad Horaria</label>
                <select class="form-control" name="inhoraria_user" id="inhoraria_user">
                <option>Escoja la cantidad de horas</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                </select>
            </div>
            <label for="exampleInputEmail1"> Profesor </label>
            <input type="text" class="form-control" name="profe_user" id="profe_user" aria-describedby="emailHelp">
            <label for="exampleInputEmail1">Cantidad de Estudiantes</label>
            <input type="text" class="form-control" name="cantestud_user" id="cantestud_user" aria-describedby="emailHelp">       
        </div>
        <button type="submit" class="btn btn-dark">Ingresar Deporte</button>
    </form>
  </div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="assets/bootstrap-4.6.0-dist/js/bootstrap.min.js">   
</body>
</html>