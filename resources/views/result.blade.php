@extends('/layouts/app')
<section class="section-result">
    <h1>
        Result
        {{$quizid}}
    </h1>
    <h2>
        {{$score->score . '/' . '5p'}}
    </h2>
    <a href="/dashboard">dashboard</a>
    <a href="/history">history</a>
</section>
