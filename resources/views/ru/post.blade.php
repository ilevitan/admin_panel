
@extends('layouts.ru_navbar_layout')



@section('content')

<h1 class=" text-center mt-5">{{ $posts['title'] }}</h1>
<div class="text-center mt-5">
    <img class="g img-fluid " src="{{ $posts['img'] }}" alt="img" width="400px" height="250px" style="object-fit:cover;">
  </div>

  


  <div class=" text-center">
      {!!  $posts['text']  !!}
  </div>

 




@endsection
        

