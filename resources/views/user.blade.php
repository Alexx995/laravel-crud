@extends('layouts.app')

@if (session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
@endif

@section('content')
<h1>Hi user</h1>


@forelse($users as $user)
    <li>{{$user->name}}</li>
    <li>{{$user->email}}</li>
@empty
    <p>No users</p>
@endforelse

@if (count($users) === 1)
    I have one user!
@elseif (count($users) > 1)
    I have multiple users!
@else
    I don't have any users!
@endif

@auth
     The user is authenticated...
@endauth

@guest
     The user is not authenticated...
@endguest



<section>
    <form action=""  method="POST">
        @csrf
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Submit">
    </form>
</section>
    @endsection

