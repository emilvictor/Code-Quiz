@extends('/layouts/app')

<h1>CODE QUIZ</h1>

<form action="/login" method="post" class="login-form">
    @csrf
    <label for="email">Email</label>
    <input name="email" id="email" type="email" placeholder="exampel@gmail.com" />
    <label for="password">Password</label>
    <input name="password" id="password" type="password" placeholder="******" />
    <button type="submit" class="btn-login">Login</button>
</form>

<p><a href="register">create user</a></p>

@include('errors')
