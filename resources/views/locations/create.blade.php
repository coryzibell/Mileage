<!-- app/views/locations/create.blade.php -->



<!DOCTYPE html>
<html>
<head>
    <title>Add a location</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{!! URL::to('locations') !!}">Locations</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{!! URL::to('locations') !!}">View All Locations</a></li>
        <li><a href="{!! URL::to('locations/create') !!}">Create a Location</a>
    </ul>
</nav>

<h1>Create a Location</h1>

<!-- if there are creation errors, they will show here -->
{!! Html::ul($errors->all()) !!}

{!! Form::open(array('url' => 'locations')) !!}

    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', Input::old('name'), array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('address', 'Address') !!}
        {!! Form::text('address', Input::old('address'), array('class' => 'form-control')) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('city', 'City') !!}
        {!! Form::text('city', Input::old('city'), array('class' => 'form-control')) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('state', 'State') !!}
        {!! Form::text('state', Input::old('state'), array('class' => 'form-control')) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('zip', 'Zip Code') !!}
        {!! Form::number('zip', Input::old('zip'), array('class' => 'form-control')) !!}
    </div>

    {!! Form::submit('Add the location', array('class' => 'btn btn-primary')) !!}

{!! Form::close() !!}

</div>
</body>
</html>