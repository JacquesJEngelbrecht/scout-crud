@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <h1>Welcome to my demonstration of CRUD functions in Laravel v.8</h1>
        <p class="p-tag" style="color: red">I added the DELETE function too, just to make it a full CRUD experience.</p>
    </div>
    <div class="row justify-content-center">
        <a href="{{route('display.index')}}"><button type="button" class="btn btn-danger" style="margin: 10px;">Continue to demo</button></a>
    </div>
        <div class="row justify-content-center">
            <img src="{{asset('images')}}/html.png" class="img-thumbnail" width="150px;">
            <img src="{{asset('images')}}/css.png" class="img-thumbnail" width="150px;">
            <img src="{{asset('images')}}/javascript.png" class="img-thumbnail" width="150px;">
            <img src="{{asset('images')}}/bootstrap.png" class="img-thumbnail" width="150px;">
            <img src="{{asset('images')}}/laravel.png" class="img-thumbnail" width="150px;">
            <img src="{{asset('images')}}/sass.png" class="img-thumbnail" width="150px;">
        </div>
</div>
@endsection        