@extends('Layout')

@section('Content')

    <div id="app">
        <food-component :foods={{$foods}}></food-component>
    </div>
       
    

@endsection