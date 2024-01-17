<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de tickets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Lista de Tickets</h1>
        <table class="table">
            <thead>
                <th>Fecha</th>
                <th>Precio</th>
                <th>Tipo</th>
                <th>Tren</th>
                <th>Tipo de tren</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($tickets as $ticket)
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
                        <td>
                            <form action="{{ route('tickets.show', ['ticket'=>$ticket->id])}}" method="GET">
                                <input type="submit" value="Ver ticket" class="btn btn-primary">
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('tickets.destroy', ['ticket'=>$ticket->id])}}" method="post">
                                @method('DELETE')
                                @csrf
                                <input type="submit" value="Eliminar" class="btn btn-danger">
                            </form>
                        </td> 
                    </tr>
                @endforeach
            </tbody>
        </table>
       <a href="{{ route('tickets.create')}}" class="btn btn-dark">Crear tickets</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>