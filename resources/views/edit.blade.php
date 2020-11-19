@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center mb-3">
        <a href="{{route('display.index')}}"><button class="btn btn-secondary" type="submit">Back</button></a>
    </div>
        <form action="{{route('display.update',[$users->id])}}" method="post" enctype="multipart/form-data">@csrf
            {{method_field('PATCH')}}
            <div class="row justify-content-center">
                <div class="col-md-8">
                    @if(Session::has('message'))
                    <div class="alert alert-success">
                        {{Session::get('message')}}
                    </div>
                @endif
                    <div class="card">
                        <div class="card-header">User Information</div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control 
                            @error('username') is-invalid @enderror" required="" value="{{$users->username}} ">
                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control 
                                @error('email') is-invalid @enderror" required="" value="{{$users->email}}" readonly>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" name="password" class="form-control 
                                @error('password') is-invalid @enderror" required="" value="{{$users->password}}" readonly>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label>Mobile</label>
                                <input type="text" name="mobile" class="form-control 
                                @error('mobile') is-invalid @enderror" required="" value="{{$users->mobile}}">
                                @error('mobile')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control 
                                @error('name') is-invalid @enderror" required="" value="{{$users->name}}">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label>Surname</label>
                                <input type="text" name="surname" class="form-control 
                                @error('surname') is-invalid @enderror" required="" value="{{$users->surname}}">
                                @error('surname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label>Job Title</label>
                                <input type="text" name="job_title" class="form-control 
                                @error('job_title') is-invalid @enderror" required="" value="{{$users->job_title}}">
                                @error('job_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label>Bio</label>
                                <input type="text" name="bio" class="form-control 
                                @error('bio') is-invalid @enderror" required="" value="{{$users->bio}}">
                                @error('bio')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary " type="submit">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </form>
</div>
    
@endsection
