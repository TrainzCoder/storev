<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Product List</title>

  <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">
  <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">

  <script src="{{ url(mix('js/app.js')) }}" defer></script>
</head>
<body class="font-sans ">
	<header class="fixed top-0 z-40 w-full shadow-lg">
		<nav class="flex items-center justify-between gap-4 px-4 py-3 bg-white lg:gap-0 lg:py-4 lg:px-16">
			<div class="hidden lg:block">
				<h3 class="text-2xl font-semibold">Storev</h3>
			</div>

			<form class="flex items-center justify-between w-full pr-3 border border-gray-300 rounded-md lg:w-1/3">
				<input class="w-full text-base text-gray-600 bg-transparent border-none focus:outline-none" type="text"
				name="search" placeholder="Search">

				<button type="submit">
					<img src="{{ url('/img/icon/search.svg') }}" class="w-5 h-5" alt="search icon">
				</button>
			</form>	

			<div>
			@if (Auth::check())
				<a href="{{ route('user') }}">
					<img src="{{ url('/img/icon/user.svg') }}" class="w-8 h-8 lg:w-9 lg:h-9" alt="">
				</a>
			@else
				<a href="{{ route('login.index') }}">
					<button
						class="px-4 py-2 text-sm border-2 rounded-md shadow-md hover:bg-darkBlue hover:text-white lg:px-6 text-darkBlue border-darkBlue">
						Login
					</button>
				</a>
			@endif
			</div>
		</nav>
	</header>

	<main class="px-4 mt-24 lg:px-16">
		<a href="{{ route('home') }}" class="my-6 text-sm text-gray-400 lg:text-base">Back to home</a>

		<section class="mt-5">
			<h2 class="mb-10 text-lg text-gray-800 lg:text-xl">Search Result of <span class="text-darkBlue">(nama product)</span></h2>

			<!-- Kalo ga ada productnya -->
			<div class="flex items-center justify-center w-full bg-gray-100 h-52">
				<h2 class="text-xl text-gray-400">Product not found!</h2>
			</div>

			<!-- kalo ada productnya -->
			<div class="grid grid-cols-2 gap-1 lg:grid-cols-6 lg:gap-4">       
        <div class="relative w-full border border-gray-300">
					<!-- ini buat link ke detailnya -->
          <a href="#" class="absolute top-0 bottom-0 left-0 right-0 z-10">
          </a>
					
          <div class="w-full h-32 bg-gray-500">
            <img src="{{ url('/img/banner/shop-banner.jpg') }}" class="object-cover w-full h-full"
              alt="product-1">
          </div>
          <div class="px-2 py-3">
            <h3 class="mb-2 text-base lg:text-lg overflow-ellipsis">Product-1</h3>

            <h3 class="mb-3 text-xl lg:mb-4 text-darkBlue"><span class="text-sm">Rp. </span>10.000</h3>

            <div class="flex items-center justify-between">
              <span class="flex items-center gap-1 text-xs lg:text-sm">
                <img src="{{ url('/img/icon/star-filled.svg') }}" class="w-3 h-3 lg:w-4 lg:h-4"
                  alt="">
                <p>4</p>
              </span>

              <p class="px-3 text-xs text-green-600 border border-green-600 lg:text-sm rounded-3xl">
                In-stock
              </p>
              <!-- <p class="px-3 text-xs text-red-600 border border-red-600 lg:text-sm rounded-3xl">
                Out-stock
              </p>  -->
            </div>
            <p class="mt-2 text-sm text-right text-gray-700 lg:text-base">Jakarta,Indonesia</p>
          </div>
        </div> 
      </div>
			
		</section>

	</main>

	<footer class="w-full px-4 py-10 mt-20 lg:px-16 bg-darkBlue">
		<div class="flex flex-col items-center gap-9 lg:gap-0 lg:flex-row">
			<div class="text-center text-white lg:text-left">
				<h3 class="mb-3 text-2xl font-semibold">Storev</h3>
				<p class="mb-1 text-gray-300">Jakarta, Indonesia</p>
				<p class="text-gray-300">admin@storev.com</p>
			</div>
			<div class="flex flex-col gap-6 mx-auto text-center text-gray-300 lg:gap-10 lg:text-left lg:flex-row">
				<a href="#">Fashion</a>
				<a href="#">Electronic</a>
				<a href="#">School</a>
				<a href="#">Accessories</a>
				<a href="#">Furniture</a>
				<a href="#">Art</a>
			</div>
		</div>
	</footer>
</body>
</html>