<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear tickets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Crear ticket</h1>
        <form action="{{route('tickets.store')}}" method="post">
            @csrf
            <label for="date" class="form-label">Fecha: </label>
            <input type="datetime-local" name="date" id="date" class="form-control">  
            <label for="price" class="form-label">Precio: </label>
            <input type="number" name="price" id="price" step="0.01" class="form-control">
            <label for="train_id" class="form-label">Tren: </label>
            <select name="train_id" id="train_id" class="form-control">
                @foreach ($trains as $train)
                    <option value="{{$train->id}}">{{$train->name}}</option>
                @endforeach
            </select>
            <label for="ticket_type_id" class="form-label">Tipo de ticket: </label>
            <select name="ticket_type_id" id="ticket_type_id" class="form-control">
                @foreach ($ticketTypes as $type)
                    <option value="{{$type->id}}">{{$type->type}}</option>
                @endforeach
            </select>
            <input type="submit" value="Crear ticket" class="btn btn-primary mt-2">
        </form>
        <a href="{{ route('tickets.index')}}" class="btn btn-secondary mt-2">Volver a inicio</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>