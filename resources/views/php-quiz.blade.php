@extends('/layouts/app')

<h1>Php quiz</h1>
<ul>
    @foreach($quiz as $q)
 <p> {{$q['id']}}</p>
    @endforeach

    <a href="php-quiz/1">start the quiz</a>
