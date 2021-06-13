@extends('Layout')

@section('Content')

<div id="app">
    <edit-ingredient-component csrf-token="{{csrf_token()}}" :vendors='@JSON($vendors)' :ingredient='@JSON($ingredient)'></edit-ingredient-component>
</div>

@endsection