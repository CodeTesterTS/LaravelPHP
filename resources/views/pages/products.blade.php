@extends('layouts.app')

@section('content')
        <h1>List of all our Current Stock</h1>
        <p>  Home of the Best UK Custom number plates. </p>
        

        @if(count($jplates) > 0)
        
        <ul class="list-group">
                <li class ="list-group-item"><p>{{$plate1}}</p></li>
                @foreach($jplates as $jplate)
                <li class ="list-group-item">{{$jplate}}</li>
                @endforeach
        </ul>
        @endif
@endsection