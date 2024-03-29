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
                <a class="nav-link active" aria-current="page" href="{{url('/tickets')}}">Tickets</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/trainTypes')}}">Tipos de tren</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/ticketTypes')}}" >Tipos de ticket</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <div class="container mt-3">
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