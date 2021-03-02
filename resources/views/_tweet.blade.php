
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
    <p class="text-sm">
      {{ $tweet->body }}
    </p>


    <div class="flex items-center">

   <svg viewBox="0 0 20 20" class="text-gray-500" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g id="icon-shape">
                <path d="M11.0010436,0 C9.89589787,0 9.00000024,0.886706352 9.0000002,1.99810135 L9,8 L1.9973917,8 C0.894262725,8 0,8.88772964 0,10 L0,12 L2.29663334,18.1243554 C2.68509206,19.1602453 3.90195042,20 5.00853025,20 L12.9914698,20 C14.1007504,20 15,19.1125667 15,18.000385 L15,10 L12,3 L12,0 L11.0010436,0 L11.0010436,0 Z M17,10 L20,10 L20,20 L17,20 L17,10 L17,10 Z" id="Fill-97"></path>
              </g>
            </g>
            </svg>

      <span>10</span>

    </div>

  </div>
</div>
