<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles del ticket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Detalles del ticket </h1>
        <p>Ticket para el tren {{ $ticket->train->name}}</p>
        @php
            $time = strtotime($ticket->date);
            $formatedDate = date('H:i j-m-Y',$time);
        @endphp
        <p>Fecha: {{$formatedDate}} </p>
        <p>Precio: {{$ticket->price}} €</p>
        <p>Tipo de ticket: {{$ticket->ticketType->type}}</p>
        <form action="{{route('tickets.edit',['ticket'=>$ticket->id])}}" method="get">
            <input type="submit" value="Editar" class="btn btn-primary">
        </form>    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>