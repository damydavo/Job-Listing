<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Laragigs</title>
</head>
<body>
   <!-- output views -->
   <!-- Menu -->
   <nav class="relative container mx-auto p-6">
    <!-- flex container-->
    <div class="flex items-center justify-between">
        <!-- logo -->
        <div class="pt-2">
            <img src="assets/images/logo.svg" alt="jobs">
        </div>
        <!--menu items-->
        <div class="form-control">
            <div class="input-group">
              <input id="wide" type="text" placeholder="Search…" class="input input-bordered" />
              <button class="btn btn-square">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
              </button>
            </div>
          </div>
        <!--Button-->
        <div class="flex mx-6">
            <a href="#" class="hidden md:block text-dark p-3 px-6">Register</a>
            <a href="#" class="hidden md:block text-dark p-3 px-6">Login</a>

        </div>

    </div>
</nav>
   <!-- End of Menu -->
   <!-- Hero -->
   <div class="hero min-h-40 bg-base-200">
    <div class="hero-content flex-col lg:flex-row-reverse">
      <img src="assets/images/jobber.png" class="max-w-sm rounded-lg shadow-2xl" />
      <div>
        <h1 class="text-5xl font-bold">Post a GIGS</h1>
        <p class="py-6">There's are pool of Talent available out there, 
        you can post your latest vacancies. Hire a very skillful software engineer with many years of experiences and expertise.</p>
        <button class="btn">Sign up to post a GIGS</button>
      </div>
    </div>
  </div>
  <!-- end of Hero-->
  <Main class="container mx-auto p-6">
    @yield('content') 
  </Main>
</body>
</html>