
<div class="flex p-4 {{ $loop->last ? '' : 'border-b border-g-gray-400' }}">
  <div class="mr-2 flex-shrink-0">
    <a href="{{ route('profile', $tweet->user) }}">
      <img
        src="{{ $tweet->user->avatar }}"
        alt=""
        class="rounded-full mr-2"
        width="50"
        height="50"
      >
    </a>
  </div>
  <div>
    <h5 class="font-bold mb-4">
      <a href="{{ route('profile', $tweet->user) }}">
        {{ $tweet->user->name }}
      </a>
    </h5>
    <p class="text-sm mb-3">
      {{ $tweet->body }}
    </p>

    <div class="flex">
      <div class="flex items-center mr-3">
        <x-zondicon-thumbs-up class="w-3 text-gray-500 mr-1"/>
        <!-- <x-zondicon-thumbs-down class="w-6 h-6 text-gray-500"/> -->
        <span class="text-xs text-gray-500">
          {{ $tweet-> likes }}
        </span>

      </div>

      <div class="flex items-center">
        <x-zondicon-thumbs-down class="w-3 text-gray-500 mr-1"/>
        <span class="text-xs text-gray-500">
          {{ $tweet-> dislikes }}
        </span>
      </div>
    </div>

  </div>
</div>
