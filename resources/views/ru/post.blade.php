
@extends('layouts.ru_navbar_layout')



@section('content')
<div class="text-center mt-5">
    <img class="g img-fluid " src="{{ $posts['img'] }}" alt="User profile picture" width="400px" height="250px" style="object-fit:cover;">
  </div>

  <h3 class="profile-username text-center">{{ $posts['title'] }}</h3>


  <div class=" text-center">
      {!!  $posts['text']  !!}
  </div>

 

<div class="text-center">
<a href="{{ route('index') }}" class="text-bold text-primary" >Вернуться обратно</a>
</div>


@endsection
        

