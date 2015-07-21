<!-- resources/views/locations/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Location - {!! $location->name !!}</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('locations') }}">Locations</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('locations') }}">View All Locations</a></li>
        <li><a href="{!! URL::to('locations/create') !!}">Create a Location</a>
    </ul>
</nav>

<h1>Location: {!! $location->name !!}</h1>

    <div class="jumbotron text-center">
        <h2>{!! $location->name !!}</h2>
        <p>
            <strong>Address:</strong> {!! $location->address !!}<br>
            <strong>City:</strong> {!! $location->city !!}<br>
            <strong>State:</strong> {!! $location->state !!}<br>
            <strong>Zip:</strong> {!! $location->zip !!}<br><br>
            <strong>Active:</strong> {!! $location->active ? 'True' : 'False' !!}<br>
            <strong>Public:</strong> {!! $location->public ? 'True' : 'False' !!}
        </p>
    </div>

</div>
</body>
</html>