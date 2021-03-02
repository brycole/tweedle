@extends('layouts.app')

@section('content')
  <header class="mb-6 relative">
    <div class="relative">
      <img
        src="https://source.unsplash.com/random/700x223"
        alt=""
        class="mb-2 rounded-lg"
      >

      <img
        src="{{ $user->avatar }}"
        alt=""
        class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
        style="left: 50%"
        width="150"
      >
    </div>

    <div class="flex justify-between items-center mb-10">

      <div style="max-width: 270px">
        <h2 class="font-bolt text-2xl mb-0">{{$user->name}}</h2>
        <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
      </div>

      <div class="flex">

        @can ('edit', $user)
          <a href="{{ $user->path('edit') }}"
          class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">
          Edit Profile
          </a>
        @endcan

        <x-follow-button :user="$user"></x-follow-button>

      </div>

    </div>

    <p class="text-sm">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus venenatis, lacus in gravida lobortis, nibh felis ullamcorper metus, quis ultricies arcu tellus nec nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Phasellus quis quam egestas, venenatis felis nec, gravida sem. Sed mollis purus bibendum mauris euismod tincidunt.
    </p>

  </header>

  @include ('_timeline',[
    'tweets' => $tweets
  ])

@endsection
