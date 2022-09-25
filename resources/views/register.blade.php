@extends('main')
@section('title','registration')
@section('content')

<form action="/add_julie" method="post">
     @csrf
    <div id="main">
        <div class ="log">   
            <h1>CREATE ACCOUNT</h1>       
                <p>Full Name</p>
                <input type="text" id="fullname" name="fullname" placeholder="Enter Your fullname">

                <p>Email Address</p>
                <input type="text" id="email" name="email" placeholder="Enter Your Email">

                <p>Password</p>       
                <input type="password" id = "password" name="password" placeholder="Enter Your Password">
          
                <input type="submit" name="submit" value="CREATE ACCOUNT">
        </div>
    </div>
</form>
