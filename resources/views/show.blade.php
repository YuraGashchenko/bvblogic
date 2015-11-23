@extends('layouts.master')

@section('content')

<h1>{{ $user->first_name }} {{ $user->last_name }}</h1>
<p class="lead">Address {{ $user->address }}</p>
<p class="lead">Telephones: </p>
@if ($user->telephones->count() == 0 )
     No telephones.
@endif
<ul>
    @foreach ( $user->telephones as $telephone )
    <li> {{ $telephone->telephone }} </li>
    @endforeach
</ul>
<hr>

<div class="row">
    <div class="col-md-6">
        <a href="{{ route('user.index') }}" class="btn btn-info">Back to all users</a>
        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">Edit User</a>
    </div>
    <div class="col-md-6 text-right">
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['user.destroy', $user->id]
        ]) !!}
            {!! Form::submit('Delete this user?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>
</div>

@stop
