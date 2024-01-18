<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tipos de Trenes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Practica de Trenes</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{url('/trains')}}">Trenes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/tickets')}}">Tickets</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('/trainTypes')}}">Tipos de tren</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/ticketTypes')}}" >Tipos de ticket</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <div class="container mt-3">
        <h1>Lista de Tipos de Trenes</h1>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Tipo</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($trainTypes as $type)
                    <tr>
                        <td>{{ $type->id }}</td>
                        <td>{{ $type->type }}</td>
                        <td>
                            <form action="{{ route('trainTypes.show', ['trainType'=>$type->id])}}" method="GET">
                                <input type="submit" value="Ver tipo" class="btn btn-primary">
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('trainTypes.destroy',['trainType'=>$type->id])}}" method="post">
                                @method('DELETE')
                                @csrf
                                <input type="submit" value="Eliminar" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('trainTypes.create')}}" class="btn btn-dark">Crear tipos de tren</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>