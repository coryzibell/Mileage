<!-- app/views/trips/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Trips</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{!! URL::to('trips') !!}">Trips</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{!! URL::to('trips') !!}">View All Trips</a></li>
        <li><a href="{!! URL::to('trips/create') !!}">Create a Trip</a>
    </ul>
</nav>

<h1>All Trips</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{!! Session::get('message') !!}</div>
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
    @foreach($trips as $key => $value)
        <tr>
            <td>{!! $value->id !!}</td>
            <td>{!! $value->name !!}</td>
            <td>{!! $value->address !!}</td>
            <td>{!! $value->public ? 'True' : 'False' !!}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- Archive the trip (uses the destroy method DESTROY /trips/{id} -->
                
                @if ($value->user_id == Auth::id())
                
	                {!! Form::open(array('url' => 'trips/' . $value->id, 'class' => 'pull-right')) !!}
	                    {!! Form::hidden('_method', 'DELETE') !!}
	                    {!! Form::submit('Delete this Trip', array('class' => 'btn btn-warning')) !!}
	                {!! Form::close() !!}
	                
	            @endif

                <!-- show the trip (uses the show method found at GET /trips/{id} -->
                <a class="btn btn-small btn-success" href="{!! URL::to('trips/' . $value->id) !!}">Show this Trip</a>

                <!-- only shows the edit button if the trip belongs to the user -->
                @if ($value->user_id == Auth::id())
                	<a class="btn btn-small btn-info" href="{!! URL::to('trips/' . $value->id . '/edit') !!}">Edit this Trip</a>
                @endif

                

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>