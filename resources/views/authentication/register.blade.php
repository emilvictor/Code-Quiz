@extends('/../layouts/app')
<section class="section-register">

    <h1>Register</h1>

    <form action="register" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input name="name" id="name" type="name" />
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input name="email" id="email" type="email" />
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input name="password" id="password" type="password" />
        </div>
        <button type="submit" class="btn-register">Register</button>

    </form>

    <p><a href="/">return</a></p>
</section>
