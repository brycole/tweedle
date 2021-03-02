
<div class="flex">
  <form method="POST" action="/tweets/{{ $tweet->id }}/like">
        @csrf

      <div class="flex items-center mr-3 {{ $tweet->isLikedby(current_user()) ? 'text-blue-500' : 'text-gray-500' }}">
        <x-zondicon-thumbs-up class="w-3 mr-1"/>
        <button type="submit" class="text-xs">
          {{ $tweet->likes ?: 0 }}
        </button>

      </div>
  </form>

  <form method="POST" action="/tweets/{{ $tweet->id }}/like">
        @csrf
        @method('DELETE')

      <div class="flex items-center {{ $tweet->isDislikedby(current_user()) ? 'text-blue-500' : 'text-gray-500' }}">
        <x-zondicon-thumbs-down class="w-3 mr-1"/>
        <button type="submit" class="text-xs">
          {{ $tweet->dislikes ?: 0 }}
        </button>
      </div>
  </form>
</div>
