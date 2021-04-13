@extends('/layouts/app')
@php
$questions = array();

@endphp
@foreach ($quiz['questions'] as $question)
@php
array_push($questions, $question)
@endphp
@endforeach

<h1>
    {{$id}}
</h1>

<form action="result" method="post">
    @csrf
    @foreach ($questions as $question)

    <div class="form-grid">
        {{$question['id']}}
        <div class="question">
            {{$question['question']}}
        </div>
        <div class="answers">
            @php
            $questionId = $question['id'];
            @endphp

            @foreach ($quiz['answers'] as $answers)

            @if ($answers['id'] === $questionId)

            @php
            $number = (string)$answers['id'];
            $inputId = 'answer' . $number;
            $keys = array();
            array_push($keys, key($answers['answer'][0]), key($answers['answer'][1]), key($answers['answer'][2]));
            @endphp


            @foreach ($keys as $key)
            <div class="key">
                {{$key}}
            </div>
            <input type="radio" id="{{$questionId}}{{$key}}" name="{{$inputId}}" value="{{$key}}">
            @endforeach
            @endif
            @endforeach

        </div>
    </div>
    <br>
    @endforeach

    <button type="submit">submit</button>
</form>
