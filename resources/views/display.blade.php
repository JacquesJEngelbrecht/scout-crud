@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col md-8">
            @if(Session::has('message'))
            <div class="alert alert-success">
                {{Session::get('message')}}
            </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <div class="card-body">List All Users</div>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">New</button>
                    </div>
            </div>
        </div>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Name</th>
                    <th scope="col">Job Title</th>
                    <th scope="col">Bio</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
               
            </thead>
            <tbody>
                @if(count($users) > 0)
                @foreach($users as $user)
                <tr>
                    <td>{{$user->username}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->password}}</td>
                    <td>{{$user->mobile}}</td>
                    <td>{{$user->name}} {{$user->surname}}</td>
                    <td>{{$user->job_title}}</td>
                    <td>{{$user->bio}}</td>
                    <td><a href="{{route('display.edit',[$user->id])}}"><button class="btn btn-outline-success">Edit</button></a></td>
                    <td><button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal1">Delete</button></td>
                </tr>
                @endforeach
                 @else 
                <td>No Users to display!</td>
                @endif
            </tbody>
        </table>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('display.store')}}" method="post" enctype="multipart/form-data">@csrf
            {{method_field('POST')}}
        <div class="row justify-content-center">
         
                @if(Session::has('message'))
                <div class="alert alert-success">
                    {{Session::get('message')}}
                </div>
                @endif
                <div class="card" style="width: 80%;">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control 
                            @error('username') is-invalid @enderror" required="" >
                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control 
                            @error('email') is-invalid @enderror" required="">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" name="password" class="form-control 
                            @error('password') is-invalid @enderror" required="">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Mobile</label>
                            <input type="text" name="mobile" class="form-control 
                            @error('mobile') is-invalid @enderror" required="">
                            @error('mobile')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control 
                            @error('name') is-invalid @enderror" required="">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label>Surname</label>
                            <input type="text" name="surname" class="form-control 
                            @error('surname') is-invalid @enderror" required="">
                            @error('surname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label>Job Title</label>
                            <input type="text" name="job_title" class="form-control 
                            @error('job_title') is-invalid @enderror" required="">
                            @error('job_title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label>Bio</label>
                            <input type="text" name="bio" class="form-control 
                            @error('bio') is-invalid @enderror" required="">
                            @error('bio')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Create</button>
                        </div>
                    </div>
                </div>      
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModal1Label" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{route('display.destroy',[$user->id])}}" method="POST">@csrf
            {{method_field('DELETE')}}
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <div class="modal-body">Do you want to delete?</div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
            </div>
        </form>
    </div>
</div>
@endsection


