@extends('app')

@section('content')
    <fieldset>
        <h1 class="page-heading">Manage Main Meta</h1>
        <legend>

        </legend>

        @include('main_meta/partials/_errors')

        {!! Form::open(['route' => 'main_meta.store','class' => 'form-horizontal']) !!}
            @include('main_meta/partials/_form')
        {!! Form::close() !!}
    </fieldset>
@endsection