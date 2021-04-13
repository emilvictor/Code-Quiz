@extends('/layouts/app')
<section class="section-history">
    <h1>History</h1>

    @foreach ($scores as $score)
    <div class="score-box">
        {{$score->created_at}}
        {{$score->quiz_id . ': ' }}
        {{$score->score. '/' . 5 . 'p'}}
    </div>
    @endforeach

    <div class="links">
        <a href="/dashboard">dashboard</a>
        <a href="/logout">logout</a>
    </div>
</section>
