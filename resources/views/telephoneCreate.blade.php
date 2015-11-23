<html>
<head>
    <title>Operations</title>
</head>
<body>
<p><a href="/">Go to view all users.</a></p>
@if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

{!! Form::open([
    'route' => 'telephone.create'
]) !!}

<div class="form-group">
    {!! Form::label('telephone', 'Telephone', ['class' => 'control-label']) !!}
    {!! Form::text('telephone', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Create New User', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}


</body>
</html>
