@extends('Layout')

@section('Content')

    <div id="app">
        <add-vendor-component csrf-token="{{csrf_token()}}"></add-vendor-component>
    </div>

@endsection