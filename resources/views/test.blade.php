@extends('/layouts/app')

@php

//  $quiz[1]['questions'][0]['question']
//  return the question

@endphp

{{
    $quiz[1]['questions'][0]['question']
}}

{{-- @foreach ($quiz as $items)

{{
    var_dump($items['questions'])
}}

@endforeach --}}



@if ($id ==='result')
{{-- {{ 'Display quiz result'}} --}}
{{ $result ?? 'request variable not found' }}

@else

<form action="/result"  method="post" >
    @csrf
@foreach ($quiz as $question)

@if ($question->id == $id)
{{$question->question}}
<br>
{{-- {{$question->first_incorrect_answer}}
<input type="checkbox" name="answer">
<br>
{{$question->second_incorrect_answer}}
<br><input type="checkbox">
{{$question->correct_answer}}
<input type="checkbox"> --}}
{{"Skriv något"}}
<label for="test">test</label>
<input type="text" name="test{{$id}}">
@endif
<br>
<br>

@endforeach


@php
(int)$nextQuestionId = ++$id
@endphp


{{-- <form action="/php-quiz/result" > --}}

@if ($nextQuestionId > 5)
<button type="submit">Complete</button>
</form>
    @else
    <a href="/php-quiz/{{$nextQuestionId}}">next Q</a>
    @endif
@endif
