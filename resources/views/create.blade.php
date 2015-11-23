<html>
<head>
    <title>Operations</title>
    <script src="/js/jquery-1.11.3.min.js"> </script>
    <script>
function createTelephone() {
    $('<br>Telephone <input name="telephones[]" type="text">').appendTo("[name='createForm']");
}

    </script>
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
    'route' => 'user.create',
    'name'  => 'createForm'
]) !!}

<div class="form-group">
    {!! Form::label('first_name', 'First Name:', ['class' => 'control-label']) !!}
    {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('last_name', 'Last Name:', ['class' => 'control-label']) !!}
    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('address', 'Address:', ['class' => 'controll-label']) !!}
    {!! Form::text('address', null, ['class' => 'form-controll']) !!}
</div>

{!! Form::submit('Create New User', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

<img src="/img/plus.png" alt="add telephone" title="add telephone" width="40" height="40"  onclick="createTelephone()"></img>

</body>
</html>
