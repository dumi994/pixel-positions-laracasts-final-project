<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Pixel Positions</title>
    @vite(["resources/css/app.css", "resources/js/app.js"])
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@400,500,600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="/assets/custom.css" />
  </head>
  <body style="background-color: #060606" class="text-white pb-20">
    <div class="px-10">
      <nav
        class="flex justify-between items-center py-4 border-b border-white/10"
      >
        <div class="">
          <a href="/">
            <img src="{{ Vite::asset("resources/images/logo.svg") }}" alt="" />
          </a>
        </div>
        <div class="space-x-6 font-bold">
          <a href="">Jobs</a>
          <a href="">Careers</a>
          <a href="">Salaries</a>
          <a href="">Companies</a>
        </div>
        @auth
          <div class="mt-10">
            <a href="/jobs/create">Post a job</a>
          </div>
        @endauth

        @guest()
          <div class="space-x-6 font-bold">
            <a href="/register">Sign Up</a>
            <a href="/login">Log In</a>
          </div>
        @endguest
      </nav>
      <main class="mt-10 max-w-[968px] mx-auto">
        {{ $slot }}
      </main>
    </div>
  </body>
</html>
