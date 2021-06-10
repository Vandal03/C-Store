@extends('Layout')

@section('Content')

<div id="app">
    <edit-vendor-component csrf-token="{{csrf_token()}}" :vendor='@JSON($vendor)'></edit-vendor-component>
</div>

@endsection