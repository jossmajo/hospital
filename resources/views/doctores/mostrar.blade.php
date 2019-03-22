<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>LISTADO</title>
</head>
<body>
    <div class="row mb-2">
        <h1 class="text-center">LISTADO DE DOCTORES</h1>
        <img class="float-right" width="50" src="{{ asset('images/img.png') }} " alt="">
    </div>
    <table class="table table-striped">
        <thead class="table-primary">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Especialidad</th>
            <th scope="col">Telefono</th>

          </tr>
        </thead>
        <tbody>
        @foreach($doctores as $doctor)
          <tr>
            <th scope="row">{{$doctor->id}}</th>
            <td>{{$doctor->nombre}}</td>
            <td>{{$doctor->especialidad}}</td>
            <td>{{$doctor->telefono}}</td>
          </tr>
          @endforeach
        </tbody>
        </table>
</body>
</html>