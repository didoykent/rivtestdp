@extends('layouts.mainpage')


@section('title')

Rivecowe


@endsection


@section('content')





<div class="links">

  @if(Auth::check())

  <a href="{{route('user.signup')}}">SignUp</a>
  <a href="{{route('admin.profile')}}">Profile</a>
  <a href="{{route('user.logout')}}">LogOut</a>
@else
    <a href="{{route('user.signin')}}">SignIn</a>
  @endif



</div>


@endsection
