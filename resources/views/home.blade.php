<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home | Storev</title>

  <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">
  
</head>
<body class="overflow-x-hidden max-w-screen">
  <header class="fixed top-0 z-40 w-screen shadow-lg">
    <nav class="flex items-center justify-between px-4 py-3 bg-white lg:py-4 lg:px-16">
      <div>
        <h3 class="text-2xl font-semibold">Storev</h3>
      </div>

      <form class="items-center justify-between hidden w-1/3 pr-3 border border-gray-300 rounded-md lg:flex">
        <input 
          class="w-full text-base text-gray-600 bg-transparent border-none focus:outline-none"
          type="text" 
          name="search" 
          placeholder="Search">

        <button type="submit">
         <img src="{{url('/img/icon/search.svg')}}" class="w-5 h-5" alt="search icon">
        </button>
      </form>

      <div>
        <a href="{{ route('login') }}">
          <button class="px-4 py-1 text-sm border-2 rounded-md shadow-md hover:bg-darkBlue hover:text-white lg:px-6 lg:py-2 text-darkBlue border-darkBlue">
            Login
          </button>
        </a>

        <!--Kalo dah login  -->
        <!-- <a href="#">
          <img src="{{ url('/img/icon/user.svg') }}" class="w-8 h-8 lg:w-9 lg:h-9" alt="">
        </a> -->
      </div>
    </nav>
  </header>

  <main>
    <section class="px-4 mt-28">
      <form class="flex items-center justify-between w-full pr-3 border border-gray-300 rounded-md lg:hidden">
        <input 
          class="w-full text-base text-gray-600 bg-transparent border-none focus:outline-none"
          type="text" 
          name="search" 
          placeholder="Search">

        <button type="submit">
          <img src="{{url('/img/icon/search.svg')}}" class="w-5 h-5" alt="search icon">
        </button>
      </form>
    </section>

    <section class="px-4 mt-10 lg:px-16">
      <div class="overflow-x-scroll lg:overflow-x-hidden">
        <div class="grid grid-cols-3 gap-4 lg:grid-cols-2 w-max lg:w-full h-80">
          <div class="relative bg-center bg-no-repeat bg-cover w-72 bg-shopBanner lg:w-auto lg:row-span-2">
            <div class="absolute z-10 ml-5 transform -translate-y-1/2 top-1/2">
              <h3 class="text-3xl text-white">Shop From Home</h3>
              <button class="px-6 py-2 mt-8 text-sm text-white border border-white">
                Discover Now
              </button>
            </div>
          </div>
          <div class="relative bg-center bg-no-repeat bg-cover w-72 bg-secureBanner lg:w-auto">
            <div class="absolute z-10 ml-5 transform -translate-y-1/2 top-1/2">
              <h3 class="text-3xl text-white">Secure Transaction</h3>
            </div>
          </div>
          <div class="relative bg-center bg-no-repeat bg-cover w-72 bg-saleBanner lg:w-auto">
            <div class="absolute z-10 ml-5 transform -translate-y-1/2 top-1/2">
              <h3 class="text-3xl text-white">Get Special Offer</h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="px-3 mt-20 lg:px-16">
      <div class="overflow-x-scroll lg:overflow-x-auto">
        <div class="flex gap-4 lg:gap-9" x-data="{ status: 'all' }">
          <button 
            class="px-3 py-1 text-xs shadow-sm lg:text-sm" 
            @click="status = 'all'"  
            :class="status === 'all' ? 'text-white bg-crayola' : 'text-crayola border border-crayola'" 
          >
            All
          </button>
          <button 
            class="px-3 py-1 text-xs shadow-sm lg:text-sm" 
            @click="status = 'fashion'"  
            :class="status === 'fashion' ? 'text-white bg-crayola' : 'text-crayola border border-crayola'" 
          >
            Fashion
          </button>
          <button 
            class="px-3 py-1 text-xs shadow-sm lg:text-sm" 
            @click="status = 'electronic'"  
            :class="status === 'electronic' ? 'text-white bg-crayola' : 'text-crayola border border-crayola'" 
          >
            Electronic
          </button>
          <button 
            class="px-3 py-1 text-xs shadow-sm lg:text-sm" 
            @click="status = 'school'"  
            :class="status === 'school' ? 'text-white bg-crayola' : 'text-crayola border border-crayola'" 
          >
            School
          </button>
          <button 
            class="px-3 py-1 text-xs shadow-sm lg:text-sm" 
            @click="status = 'accessories'"  
            :class="status === 'accessories' ? 'text-white bg-crayola' : 'text-crayola border border-crayola'" 
          >
            Accessories
          </button>
          <button 
            class="px-3 py-1 text-xs shadow-sm lg:text-sm" 
            @click="status = 'furniture'"  
            :class="status === 'furniture' ? 'text-white bg-crayola' : 'text-crayola border border-crayola'" 
          >
            Furniture
          </button>
          <button 
            class="px-3 py-1 text-xs shadow-sm lg:text-sm" 
            @click="status = 'art'"  
            :class="status === 'art' ? 'text-white bg-crayola' : 'text-crayola border border-crayola'" 
          >
            Art
          </button>
        </div>
      </div>

      <h2 class="text-3xl lg:text-4xl mt-14 mb-9">Weekly Best Deals</h2>

      <div class="grid grid-cols-2 gap-1 lg:grid-cols-6 lg:gap-4">   
        <a href="#">
          <div class="w-full border border-gray-300">
            <div class="w-full h-32 bg-gray-500">
              <img src="{{url('/img/banner/shop-banner.jpg')}}" class="object-cover w-full h-full" alt="product-1">
            </div>
            <div class="px-2 py-3">
              <h3 class="mb-2 text-base lg:text-lg overflow-ellipsis">Product-1</h3>
              
              <h3 class="mb-3 text-xl lg:mb-4 text-darkBlue"><span class="text-sm">Rp </span>10.000</h3>

              <div class="flex items-center justify-between">
                <span class="flex items-center gap-1 text-xs lg:text-sm">
                  <img src="{{url('/img/icon/star-filled.svg')}}" class="w-3 h-3 lg:w-4 lg:h-4" alt="">
                  <p>4</p>
                </span>

                <p class="px-3 text-xs text-green-600 border border-green-600 lg:text-sm rounded-3xl">
                  In-stock
                </p>
                <!-- <p class="px-3 text-xs text-red-600 border border-red-600 lg:text-sm rounded-3xl">
                  Out-stock
                </p> -->
              </div>

              <p class="mt-2 text-xs text-right text-gray-700 lg:text-sm lg:text-base">Jakarta,Indonesia</p>
            </div>
          </div>
        </a>

      </div>
    </section>
  </main>

  <footer class="px-4 py-10 mt-20 lg:px-16 bg-darkBlue">
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

  <script src="{{ url(mix('js/app.js')) }}" defer></script>

</body>
</html>