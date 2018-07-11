{{-- Extends Main Layout --}}
@extends('layouts.app')

{{-- Single Todo --}}
@section('content')
   <br>
   <a href="/" class="btn btn-primary">Go Back</a>
   <br><br><br>
   <h1>{{$todo->text}}</h1>
   <div class="badge badge-danger">{{$todo->due}}</div>
   <hr>
   <p>{{$todo->body}}</p>
@endsection