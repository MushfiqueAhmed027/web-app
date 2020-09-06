@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
           
                <div class="card-header">{{ __('Dashboard') }}
                <div class="float-right">
            <a class="btn btn-success" href="{{route('create')}}">Create</a>
            </div></div>
               
                <div class="card-body">
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} -->

                    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Image</th>
      <th scope="col">Distance</th>
      <th scope="col">Gender</th>
      <th scope="col">Age</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($users as $user)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td><strong>{{$user->name}}</strong></td>
                                    <td><strong>{{$user->email}}</strong></td>
									<td><strong><img src="{{ asset('public/images/' . $user->image) }}"></strong></td>
									<td><strong>{{$user->distance}}</strong></td>
                                    <td><strong>{{$user->gender}}</strong></td>
                                    <td><strong>{{$user->date_of_birth}}</strong></td>
                                    <!-- <td><strong>{{$user->email}}</strong></td>
                                    <td><strong>{{$user->email}}</strong></td> -->
                                   
                                  
                                </tr>
                            @endforeach
                            
  </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
