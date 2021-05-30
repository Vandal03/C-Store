@extends('Layout')


@section('Content')

    <div id="app">
        <vendor-component :vendors='@json($vendors)'></vendor-component>
    </div>

@endsection