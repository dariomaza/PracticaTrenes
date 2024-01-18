<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles del tipo de ticket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Tipo de ticket: {{ $ticketType->type}}</h1>
        <p>ID del tipo: {{ $ticketType->id}}</p>
        <h2>Tickets de este tipo: </h2>
        <table class="table align-self-center w-50">
            <thead>
                <th>Fecha</th>
                <th>Precio</th>
                <th>Tipo</th>
                <th>Tren</th>
                <th>Tipo de tren</th>
            </thead>
            <tbody>
                @foreach ($ticketType->tickets as $ticket)
                    <tr>
                        @php
                        $time = strtotime($ticket->date);
                        $formatedDate = date('H:i j-m-Y',$time);
                        @endphp
                        <td> {{$formatedDate}}</td>
                        <td>{{ $ticket->price }} €</td>
                        <td>{{ $ticket->ticketType->type }}</td>
                        <td>{{ $ticket->train->name}}</td>
                        <td>{{ $ticket->train->trainType->type}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="container mt-2">
            <form action="{{route('ticketTypes.edit',['ticketType'=>$ticketType->id])}}" method="get">
                <input type="submit" value="Editar" class="btn btn-primary col-2">
            </form>
            <a href="{{ route('ticketTypes.index')}}" class="btn btn-dark col-2 mt-2">Volver a inicio</a>
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>