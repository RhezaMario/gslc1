<link rel="stylesheet" href="{{ asset('style.css') }}">
@extends('header')

@section('content')
<body>
<div class = "welcome">
<h1> Welcome to Home page </h1>
</div>
<div class = "homeview">
    <img src="{{asset('images/Background.jpg')}}" id="img1" alt="" >
    <div class = "assignments">
        <div class = "container">
         <?php $i = 0 ?>
         @switch($i)
         @case(0)
             <div class = "result2">
                <div class="text">
               <p> Welcome to our websites</p>
               <p> Please Browse to your heart contents </p>
               </div>
               <button class = "more">More></button>
        @break
        @case(1)
            <div class = "result2"> not found </div>
         @default

     @endswitch
             </div>
         @if ($i == 1)
        <div class = "failed">Please sign in to before you proceed</div>
         @else
            <div class = "result">Available Products</div>
         @endif

        </div>
        </div>
    </div>
    <div class = "second">
    <div class = "subtitle">Recommended Product Sets</div>
        <div class = "loops">
            @forelse ($Home as $val)
            <div class = "list">
             {{$val}}
         </div>
        @empty
             <div class = "alerts"> No data available</div>
         @endforelse
        </div>
        <button class="sets">More Sets</button>
    </div>
</body>
@include('footer')
@endsection


