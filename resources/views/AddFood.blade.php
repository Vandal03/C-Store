@extends('Layout')

@section('Content')

    <div id="app">
        <add-food-component csrf-token="{{csrf_token()}}" :ingredients='@JSON($ingredients)'></add-food-component>
    </div>
    
@endsection