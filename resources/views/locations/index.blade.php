<!-- app/views/locations/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Locations</title>
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
        <li><a href="{{ URL::to('locations/create') }}">Create a Location</a>
    </ul>
</nav>

<h1>All Locations</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Address</td>
            <td>Public</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($locations as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->address }}</td>
            <td>{!! $value->public ? 'True' : 'False' !!}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the location (uses the destroy method DESTROY /locations/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the location (uses the show method found at GET /locations/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('locations/' . $value->id) }}">Show this Location</a>

                <!-- only shows the edit button if the location belongs to the user -->
                @if ($value->user_id == Auth::id())
                	<a class="btn btn-small btn-info" href="{{ URL::to('locations/' . $value->id . '/edit') }}">Edit this Location</a>
                @endif

                

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>