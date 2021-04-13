@extends('/../layouts/app')

<h1>Register</h1>

<form action="register" method="post">
    @csrf

    <label for="name">Name</label>
    <input name="name" id="name" type="name" />
    <br>

    <label for="email">Email</label>
    <input name="email" id="email" type="email" />
    <br>

    <label for="password">Password</label>
    <input name="password" id="password" type="password" />

    <button type="submit" class="btn-register">Register</button>

</form>

<p><a href="/">return</a></p>
