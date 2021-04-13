@extends('/layouts/app')


<h1>

    Result
    {{$quizid}}
</h1>
<br>

{{$request->answer1}}
{{$request->answer2}}
{{$request->answer3}}
{{$request->answer4}}
{{$request->answer5}}


<a href="/dashboard">dashboard</a>
<a href="/history">history</a>

{{-- styleci --}}
