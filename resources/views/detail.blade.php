<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Page</title>

  <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">
  <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
  
  <script src="{{ url(mix('js/app.js')) }}" defer></script>
</head>
<body class="font-sans">
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

  <main class="px-4 mt-28 lg:px-16">
    <a href="{{ route('home') }}" class="inline-block mb-5 text-lg text-gray-400">
      Back to home
    </a>

    <section class="flex flex-col items-center w-full gap-12 px-4 py-3 mt-3 border border-gray-200 lg:flex-row">
      <img src="{{ url('/img/banner/shop-banner.jpg') }}" class="object-cover w-full h-80 lg:w-80" alt="product-photo">
      <div class="w-full text-lg lg:w-max ">
        <h2 class="text-2xl">Nama Product</h2>
        <div class="flex gap-5 mt-3 mb-4 text-base divide-x divide-gray-400">
          <span class="flex items-center gap-1 text-yellow-400">
            <i class="lni lni-star-filled"></i>
            <p class="text-black">4.0</p>
          </span>
          <p class="pl-5"><span class="font-semibold">10</span> Review</p>
          <p class="pl-5"><span class="font-semibold">10</span> sold</p>
        </div>
        <p>Electronic</p>
        <p class="font-semibold">Jakarta,Indonesia</p>
        <h2 class="mt-4 mb-5 text-3xl text-darkBlue">Rp.10.000</h2>
        <div class="flex items-center gap-2">
          <div x-data="{ count: 1 }" class="flex items-center text-lg border border-gray-400 w-max">
            <button class="px-2 text-gray-600 border-r border-gray-400 disabled:opacity-30" @click="count--" x-show="count == 1" disabled x-cloak>
              -
            </button>
            <button class="px-2 text-gray-600 border-r border-gray-400 " @click="count--" x-show="count > 1" x-cloak >
              -
            </button>
            <p x-text="count" class="px-4"></p>
            <button @click="count++" class="px-2 text-gray-600 border-l border-gray-400 ">
              +
            </button>
          </div>
          <p class="text-lg text-gray-500">10 products left</p>
        </div>  
        <button class="py-2 text-base text-white rounded-sm shadow-md px-7 mt-7 bg-darkBlue hover:bg-crayola">
          Get Now
        </button>
      </div>
    </section>

    <section class="w-full px-4 py-3 mt-10 border border-gray-200">
      <div class="flex items-center gap-5">
        <img src="{{ url('/img/banner/shop-banner.jpg') }}" class="object-cover w-32 h-32 rounded-full " alt="logo_lapak">
        <div>
          <h3 class="mb-5 text-xl">Nama Lapak</h3>
          <a href="#">
            <button class="px-5 py-1 border rounded-sm text-darkBlue border-darkBlue hover:text-white hover:bg-darkBlue">
              Visit Store
            </button>
          </a>
        </div>
      </div>
    </section>

    <section class="grid grid-cols-1 gap-10 mt-10 lg:grid-cols-3">
      <div class="px-4 py-3 border border-gray-200 lg:col-span-2">
        <h2 class="px-4 py-2 text-2xl text-gray-800 bg-gray-100">Product Description</h2>

        <p class="mt-5 text-base text-gray-600">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis ad tempora repellendus aperiam amet, quis necessitatibus sed illo, architecto excepturi iusto, qui exercitationem eveniet. Cupiditate reiciendis sequi consequatur quod laboriosam.
        </p>
      </div>
      <div class="px-4 py-3 border border-gray-200">
        <h2 class="px-4 py-2 text-2xl text-gray-800 bg-gray-100">Review</h2>

        <div class="flex gap-8 mt-3">
          <div class="flex w-full gap-3">
            <img src="{{ url('/img/icon/user.svg') }}" class="object-cover rounded-full w-9 h-9" alt="photo_profile">
            <form class="w-full">
              <div class="flex flex-col">
                <div class="w-full mb-2">
                  <textarea class="w-full h-20 px-3 py-2 leading-normal placeholder-gray-400 bg-gray-100 border border-gray-300 rounded resize-none focus:outline-none focus:bg-gray-50" name="body" placeholder='Type Your Comment' required></textarea>
                </div>
                <div class="flex flex-row items-center w-full">
                  <div x-data="
                    {
                      rating: 0,
                      hoverRating: 0,
                      ratings: [{'amount': 1}, {'amount': 2}, {'amount': 3}, {'amount': 4}, {'amount': 5}],
                      rate(amount) {
                        if (this.rating == amount) {
                          this.rating = 0;
                        }
                        else this.rating = amount;
                      }
                    }
                    ">
                    <div class="flex">
                      <template x-for="(star, index) in ratings" :key="index">
                        <button @click="rate(star.amount)" @mouseover="hoverRating = star.amount" @mouseleave="hoverRating = rating"
                          aria-hidden="true"
                          class="w-5 p-1 text-gray-400 cursor-pointer focus:outline-none focus:shadow-outline"
                          :class="{'text-gray-600': hoverRating >= star.amount, 'text-yellow-400': rating >= star.amount && hoverRating >= star.amount}">
                          <i class="lni lni-star-filled"></i>
                        </button>
                      </template>
                    </div>
                  </div>
                  <button type='submit' class="px-3 py-1 ml-auto text-sm tracking-wide text-gray-700 border border-gray-600 rounded-sm w-max hover:bg-gray-100">
                    Post
                  <button>
                  </div>
                </div>
              </div>
            </form>
          </div>

          <div class="flex flex-col gap-5 mt-10">
            <div class="flex gap-3 ">
              <img src="{{ url('/img/icon/user.svg') }}" class="object-cover rounded-full w-9 h-9" alt="photo_profile">
              <div class="">
                <p class="mb-1 text-sm">Nama Orang</p>
                <span class="flex gap-1 mb-2 text-sm text-yellow-400">
                  <i class="lni lni-star-filled"></i>
                  <i class="lni lni-star-filled"></i>
                  <i class="lni lni-star-filled"></i>
                </span>
                <p class="text-base text-gray-700">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium velit dolore odit.</p>
              </div>
            </div>
            <div class="flex gap-3 ">
              <img src="{{ url('/img/icon/user.svg') }}" class="object-cover rounded-full w-9 h-9" alt="photo_profile">
              <div class="">
                <p class="mb-1 text-sm">Nama Orang</p>
                <span class="flex gap-1 mb-2 text-sm text-yellow-400">
                  <i class="lni lni-star-filled"></i>
                  <i class="lni lni-star-filled"></i>
                  <i class="lni lni-star-filled"></i>
                </span>
                <p class="text-base text-gray-700">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium velit dolore odit.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</body>
</html>