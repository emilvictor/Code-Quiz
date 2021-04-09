@extends('/layouts/app')

{{-- hämta id --}}
{{-- hämta quiz --}}
{{-- låta user svara på frågan, i form --}}
{{-- stora svaret i $_SESSION --}}
{{-- byta sida när user svarat --}}

{{-- Declare variable for next question redirect --}}

<h1>{{ $number }}</h1>

@php

// Current quiz on /quiz/id
$currentQuiz = $quiz->$id;

@endphp



@foreach ($currentQuiz['questions'] as $questions)


{{-- number is not an int therefore == and not === --}}
{{-- parse? --}}

@if ($questions['id'] == $number)
{{
    $questions['question']
}}


@endif

{{-- {{
    print_r($currentQuiz['answers'])
}} --}}


@endforeach


@foreach ($currentQuiz['answers'] as $answers)
    If url id matches answer id => display answers
    @if ($answers['id'] == $number)

    @php
    // Fetch answer keys in array
        $keys = array();
        array_push($keys, key($answers['answer'][0]), key($answers['answer'][1]), key($answers['answer'][2]));
    @endphp

{{ print_r($keys)}}

    @endif

    {{-- se om du kan hitta och jämföra vilket answers answer som är rätt och bekräfta det --}}

@endforeach

{{-- user chooses between the different key values --}}
