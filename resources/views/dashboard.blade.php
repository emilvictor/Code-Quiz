@extends('/layouts/app')

<section class="section-dashboard">
    <h1>SELECT QUIZ</h1>

    <ul>
        <li>
            <form action="quiz/php/">
                @csrf
                <button type="submit" class="btn-quiz php">> php</button>
            </form>
        </li>
        <li>
            <form action="quiz/javascript/">
                @csrf
                <button type="submit" class="btn-quiz js">> js</button>
            </form>
        </li>
        <li>
            <form action="quiz/laravel/">
                @csrf
                <button type="submit" class="btn-quiz laravel">> laravel</button>
            </form>
        </li>
        <li>
            <form action="quiz/sql/">
                @csrf
                <button type="submit" class="btn-quiz sql">> sql</button>
            </form>
        </li>

    </ul>

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

</section>
