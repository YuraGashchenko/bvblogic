<h1>Editing "{{ $user->first_name }} {{ $user->last_name }} "</h1>
<p class="lead">Edit and save this task below, or <a href="{{ route('user.index') }}">go back to all users.</a></p>
<hr>

@include('partials.alerts.errors')

@if (Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif

{!! Form::model($user, [
    'method' => 'PATCH',
    'route' => ['user.update', $user->id]
]) !!}

<div class="form-group">
    {!! Form::label('first_name', 'First name:', ['class' => 'control-label']) !!}
    {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('last_name', 'Last_name:', ['class' => 'control-label']) !!}
    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('address', 'Address:', ['class' => 'control-label']) !!}
    {!! Form::text('address', null, ['class' => 'form-controll']) !!}
</>

<div>
    <p>Telephones </p>
@foreach ($user->telephones as $telephone)
    {!! Form::text('telephones[]', $telephone->telephone, ['class' => 'form-controll']) !!}
@endforeach
</div>

{!! Form::submit('Update Task', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}
