@extends('Layout')

@section('Content')

    <div id="app">
    <add-ingredient-component csrf-token="{{csrf_token()}}" :list-Options='@json($vendors)'></add-ingredient-component>
    </div>

@endsection