@extends('main')
@section('title','login')
@section('content')


<form action="/add_gerry" method="post" id="login">
@csrf
  <div class="imgcontainer">
    <img src="https://www.elegantthemes.com/blog/wp-content/uploads/2017/01/shutterstock_534491617-600.jpg">
  </div>

  <div class="container">
    <label for="email"><b>Email Address</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>


    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    
        
        <button type="submit" name="login" class="btn btn-success">LOGIN</button>

  </div>

  <div class="container" style="background-color:orange">
  </div>
</form>

