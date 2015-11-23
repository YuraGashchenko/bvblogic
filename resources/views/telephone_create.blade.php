<html>
<head>
    <title>Operations</title>
</head>
<body>
<p><a href="/">Go to view all users</a> </p>
@if ($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif

{!! Form::open([
    'route' => 'telephone.create'
]) !!}

<div class="form-group">
    {!! Form::label('telephone', 'Telephone:', ['class' => 'control-label']) !!}
    {!! Form::text('telephone', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('user_id', 'User Identifier:', ['class' => 'control-label']) !!}
    {!! Form::text('User_id', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Create New Telephone', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

</body>
</html>
