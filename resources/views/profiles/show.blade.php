@extends('layouts.app')

@section('content')
  <header class="mb-6 relative">
    <img
      src="https://source.unsplash.com/random/700x223"
      alt=""
      class="mb-2 rounded-lg"
    >

    <div class="flex justify-between items-center mb-4">

      <div>
        <h2 class="font-bolt text-2xl mb-0">{{$user->name}}</h2>
        <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
      </div>

      <div>
        <a href="" class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">Edit Profile</a>
        <a href="" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs">Follow Me</a>
      </div>

    </div>

    <p class="text-sm">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus venenatis, lacus in gravida lobortis, nibh felis ullamcorper metus, quis ultricies arcu tellus nec nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Phasellus quis quam egestas, venenatis felis nec, gravida sem. Sed mollis purus bibendum mauris euismod tincidunt.
    </p>

    <img
      src="{{ $user->avatar }}"
      alt=""
      class="rounded-full mr-2 absolute"
      style="width: 150px; left: calc(50% - 75px); top: 138px"
    >

  </header>

  @include ('_timeline',[
    'tweets' => $user->tweets
  ])

@endsection
