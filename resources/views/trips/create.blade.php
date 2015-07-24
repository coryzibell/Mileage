<!-- resources/views/trips/create.blade.php -->



<!DOCTYPE html>
<html>
<head>
    <title>Add a trip</title>
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

<h1>Create a Trip</h1>

<!-- if there are creation errors, they will show here -->
{!! Html::ul($errors->all()) !!}

{!! Form::open(array('url' => 'trips')) !!}

	<div class="form-group">
        {!! Form::label('reason', 'Reason') !!}
        {!! Form::text('reason', Input::old('reason'), array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('date', 'Date') !!}
        {!! Form::date('date', Input::old('date'), array('class' => 'form-control')) !!}
    </div>
    
    <div class="form-group">
	    {!! Form::label('from', 'From') !!}
	    {!! Form::select('from_location_id', $locations, Input::old('from_location_id'), array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
	    {!! Form::label('to', 'To') !!}
	    {!! Form::select('to_location_id', $locations, Input::old('to_location_id'), array('class' => 'form-control')) !!}
    </div>
    
    <div class="form-group">
	    {!! Form::label('round_trip', 'Round Trip') !!}
	    {!! Form::checkbox('round_trip', 'round_trip', false, array('class' => 'form-control')) !!}
    </div>

    {!! Form::submit('Add the trip', array('class' => 'btn btn-primary')) !!}

{!! Form::close() !!}

</div>
</body>
</html>