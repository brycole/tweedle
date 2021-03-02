<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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

        <section class="px-8">
          <main class="container mx-auto">
            <div class="lg:flex lg:justify-between">
              @if (auth()->check())
                <div class="lg:w-32">
                  @include ('_sidebar-links')
                </div>
              @endif

              <div class="lg:flex-1 lg:mx-10" style="max-width: 700px">
               @yield('content')
              </div>

              @if (auth()->check())
                <div class="lg:w-1/6">
                  @include ('_friends-list')
                </div>
              @endif

            </div>
          </main>
        </section>
    </div>
</body>
</html>
