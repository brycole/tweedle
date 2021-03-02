<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
  <form method="POST" action="/tweets">
    @csrf

    <textarea
      name="body"
      class="w-full"
      placeholder="Weigh Anchor and Hoist the Mizzen!"
      required
    ></textarea>

    <hr class="my-4">

    <footer class="flex justify-between items-center">
      <img
        src="{{ auth()->user()->avatar }}"
        alt="your avatar"
        class="rounded-full mr-2"
        height="50"
        width="50"
      >

      <button type="submit" class="bg-blue-500 hover:bg-blue-600 rounded-lg shadow px-5 py-4 text-sm text-white items-center justify-center">Tweedledee!</button>

    </footer>
  </form>

  @error('body')
    <p class="text-red-500 text-sm mt-2">{{ $message }} </p>
  @enderror


</div>

