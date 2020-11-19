@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <h1>Welcome to my demonstration of CRUD functions in Laravel v.8</h1>
        <p>I added the DELETE function too, just to make it a full CRUD experience. (Not just CRU)</p>
        <a href="{{route('display.index')}}">Click me to continue</a>
    </div>
</div>
@endsection        