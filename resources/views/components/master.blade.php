<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Tweedle</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-white h-screen antialiased leading-none font-sans">
<div id="app">

  <section class="px-8 py-4">
    <header class="container mx-auto">
      <div class="flex">
        <div>
          <img
            src="/images/logo.svg"
            alt="Tweedle"
            width="50"
            height="50"
          >
        </div>
        <div class="flex items-center">
          <h1>Tweedle</h1>
        </div>
      </div>
    </header>
  </section>

  {{ $slot }}

</div>
</body>
</html>
