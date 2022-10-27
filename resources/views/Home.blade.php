<link rel="stylesheet" href="{{ asset('style.css') }}">
@extends('header')

@section('content')
<h1> Welcome to Home page
<div class = "assignments">
    <?php $i = 0 ?>
    <div class = "notification"> the value of i is 0 </div>
    @if ($i >= 10){
        <div class = "result">loop will not work(if)</div>
    }
    @else
        <div class = "result"> loop will work (if) </div>
    @endif
    @switch($i)
        @case(0)
            <div class = "result2"> variable i is 0 (switch case)</div>
            @break
        @case(10)
            <div class = "result2"> variable i is 10 (switch case) </div>
        @default

    @endswitch
    @while ($i < 10)
        <div class = "alert">
            <p> this is a loop </p>
        </div>
        <?php $i++?>
    @endwhile
</div>
@include('footer')
@endsection


