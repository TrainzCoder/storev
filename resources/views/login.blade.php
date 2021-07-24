<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>

  <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">
  
  <script src="{{ url(mix('js/app.js')) }}" defer></script>
</head>
<body>
  <main class="flex w-full min-h-screen font-sans">
    <section class="hidden w-2/5 px-20 pt-48 text-white lg:block bg-gradient-to-br from-crayola to-darkBlue">
      <div>
        <h1 class="text-4xl mb-7">Welcome to Storev</h1>
        <p class="text-lg">Shop from home with us and get some special offer</p>
      </div>
    </section>
    <section class="flex items-center w-full px-5 bg-white md:px-24 lg:w-3/5">
      <form action="{{ route('login.proses') }}" method="POST" class="w-full">
        @csrf
        <h2 class="mb-10 text-3xl text-center">Sign in to Storev</h2>
        <div class="relative mb-5 float-input">
          <input 
            type="text" 
            id="username" 
            class="w-full p-3 text-gray-600 bg-gray-100 border-none rounded-md h-14 focus:outline-none" 
            placeholder="Username" 
            name="duUsername"
          />
          <label for="username" class="absolute top-0 left-0 h-full px-3 py-4 text-gray-400 transition-all duration-100 ease-in-out origin-left transform pointer-events-none ">Username</label>
        </div>
        
        <div class="relative mb-1 float-input">
          <input 
            type="password" 
            id="password" 
            class="w-full p-3 text-gray-600 bg-gray-100 border-none rounded-md h-14 focus:outline-none" 
            placeholder="Password" 
            name="duPassword"
          />
          <label for="password" class="absolute top-0 left-0 h-full px-3 py-4 text-gray-400 transition-all duration-100 ease-in-out origin-left transform pointer-events-none ">Password</label>
        </div>

        <a href="{{ route('reset') }}" class="block text-sm text-right text-gray-600 ">Forgot password?</a>
        
        <div class="mt-5 mb-7">
          <label class="block text-gray-700" for="remember">
            <input class="leading-tight" type="checkbox" id="remember" name="remember">
            <span class="text-base">Remember me</span>
          </label>
        </div>

        <a href="{{ route('home') }}">
          <button type="submit" class="w-full py-3 tracking-wider text-white transition-all rounded-md shadow-lg hover:shadow-none bg-darkBlue hover:bg-crayola">
            LOGIN
          </button>
        </a>

        <p class="divider">
          <span class="px-3 bg-white">OR</span>
        </p>

        <a href="{{ route('register.index') }}" class="block text-lg text-center text-darkBlue">Create account</a>
      </form>
    </section>
  </main>
</body>
</html>