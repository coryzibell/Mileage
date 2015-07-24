<!-- resources/views/trips/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Trip - {!! $trip->name !!}</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('trips') }}">Trips</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('trips') }}">View All Trips</a></li>
        <li><a href="{!! URL::to('trips/create') !!}">Create a Trip</a>
    </ul>
</nav>

<h1>Trip: {!! $trip->name !!}</h1>

    <div class="jumbotron text-center">
        <h2>{!! $trip->name !!}</h2>
        <p>
            <strong>Address:</strong> {!! $trip->address !!}<br>
            <strong>City:</strong> {!! $trip->city !!}<br>
            <strong>State:</strong> {!! $trip->state !!}<br>
            <strong>Zip:</strong> {!! $trip->zip !!}<br><br>
            <strong>Active:</strong> {!! $trip->active ? 'True' : 'False' !!}<br>
            <strong>Public:</strong> {!! $trip->public ? 'True' : 'False' !!}
        </p>
    </div>

</div>
</body>
</html>