{{-- Extends Main Layout --}}
@extends('layouts.app')

{{-- Create Todo Form with custom components --}}
@section('content')
   <br>
   <h1>Create Todo</h1>
   <br>
   {!! Form::open(['action' => 'TodosController@store', 'method' => 'POST']) !!}
      {{ Form::bsText('text') }}
      {{ Form::bsTextArea('body') }}
      {{ Form::bsText('due') }}
      {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
   {!! Form::close() !!}   
@endsection