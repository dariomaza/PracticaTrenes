<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar trenes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Editae Tren</h1>
        <form action="{{route('trains.update',['train'=>$train->id])}}" method="post">
            @csrf
            @method('PUT')
            <label for="name" class="form-label">Nombre del Tren:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $train->name}}">  
            <label for="passengers" class="form-label">Capacidad de pasajeros: </label>
            <input type="number" name="passengers" id="passengers" class="form-control" value="{{ $train->passengers}}">
            <label for="year" class="form-lael">Año de fabricacion: </label>
            <input type="number" name="year" id="year" class="form-control" value="{{ $train->year }}">
            <label for="train_type_id" class="form-label">Tipo de tren: </label>
            <select name="train_type_id" id="train_type_id" class="form-control">
                @foreach ($trainTypes as $type)
                    <option value="{{$type->id}}" @if ($train->trainType->id == $type->id)
                        @selected(true)
                    @endif>{{$type->type}}</option>
                @endforeach
            </select>
            <input type="submit" value="Editar tren" class="btn btn-primary mt-2">
        </form>
        <a href="{{ route('trains.index')}}" class="btn btn-secondary mt-2">Volver a inicio</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>