@extends('Layout')

@section('Content')

    <div id="app">
        <food-component :foods='@json($foods)'></food-component>
    </div>
       
    

@endsection