@extends('Layout')

@section('Content')

    <div id="app">
        <ingredient-component :ingredients='@json($ingredients)'></ingredient-component>
    </div>

@endsection