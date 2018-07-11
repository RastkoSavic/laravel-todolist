{{-- Extends Main Layout --}}
@extends('layouts.app')

{{-- All Todos --}}
@section('content')
   <h1>Todos</h1>
   <br>
   @if(count($todos) > 0)
      @foreach($todos as $todo)
         <div class="card card-body">
            <h3><a href="todo/{{$todo->id}}">{{$todo->text}}</a> <span class="badge badge-danger">{{$todo->due}}</span></h3>
         </div>
         <br>
      @endforeach
   @endif
@endsection