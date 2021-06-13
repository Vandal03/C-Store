@extends('Layout')

@section('Content')

    <div id="app">
    <add-ingredient-component csrf-token="{{csrf_token()}}" :vendors='@json($vendors)'></add-ingredient-component>
    </div>

@endsection