@extends('/layouts/app')

<section class="section-index">
    <h1>CODE QUIZ</h1>
    <form action="/login" method="post" class="login-form">
        @csrf
        <div class="form-group email">
            <label for="email">Email</label>
            <input name="email" id="email" type="email" placeholder="exampel@gmail.com" />
        </div>

        <div class="form-group password">

            <label for="password">Password</label>
            <input name="password" id="password" type="password" placeholder="******" />

        </div>
        <button type="submit" class="btn-login">Login</button>
    </form>
    <p><a href="register">create user</a></p>
    @include('errors')
</section>
