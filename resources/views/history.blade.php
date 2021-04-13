@extends('/layouts/app')
<h1>User history</h1>



@foreach ($scores as $score)
{{$score->score}}
<br>
{{$score->quiz_id}}
<br>
@endforeach
