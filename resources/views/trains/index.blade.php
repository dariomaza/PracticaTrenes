<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trenes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Lista de Trenes</h1>
        <table class="table">
            <thead>
                <th>Tren</th>
                <th>Capacidad</th>
                <th>Año de fabricacion</th>
                <th>Tipo de tren</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr>
                        <td> {{ $train->name }}</td>
                        <td> {{ $train->passengers }}</td>
                        <td> {{ $train->year }}</td>
                        <td> {{ $train->trainType->type }}</td>
                        <td>
                            <form action="{{ route('trains.show', ['train'=>$train->id])}}" method="GET">
                                <input type="submit" value="Ver tren" class="btn btn-primary">
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('trains.destroy',['train'=>$train->id])}}" method="post">
                                @method('DELETE')
                                @csrf
                                <input type="submit" value="Eliminar" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('trains.create')}}" class="btn btn-dark">Crear Trenes</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>