<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar tipos de tickets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Editar tipo de ticekt</h1>
        <form action="{{route('ticketTypes.update',['ticketType'=>$ticketType->id])}}" method="post">
            @csrf
            @method('PUT')
            <label for="type" class="form-label">Tipo de ticekt:</label>
            <input type="text" name="type" id="type" class="form-control" value="{{$ticketType->type}}">  
            <input type="submit" value="Editar" class="btn btn-primary mt-2">
        </form>
        <a href="{{ route('ticketTypes.index')}}" class="btn btn-secondary mt-2">Volver a inicio</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>