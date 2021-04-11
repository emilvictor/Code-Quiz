@extends('/layouts/app')

{{-- <h3>{{ $user->name }}</h3> --}}
<h3>SELECT QUIZ</h3>



<ul>
    <li><form action="quiz/php/">
        <button type="submit" class="btn-quiz php">> php</button>
    </form></li>
    <li><form action="quiz/javascript/">
        <button type="submit" class="btn-quiz js">> js</button>
    </form></li>
    <li><form action="quiz/laravel/">
        <button type="submit" class="btn-quiz laravel">> laravel</button>
    </form></li>
    <li><form action="quiz/sql/">
        <button type="submit" class="btn-quiz sql">> sql</button>
    </form></li>

</ul>


{{-- {{ die(var_dump($user)) }} --}}
<div class="logout-history-box">

    <form action="/history" class="form-history">
        @csrf
        <button type="submit">view history</button>
    </form>
    <form action="/logout" class="form-logout">
        <button type="submit">logout</button>
    </form>
</div>
@include('errors')


