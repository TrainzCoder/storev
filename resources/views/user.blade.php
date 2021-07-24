<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Page</title>

  <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">
  <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
  
  <script src="{{ url(mix('js/app.js')) }}" defer></script>

</head>
<body class="font-sans">
  <header class="fixed top-0 z-40 w-full shadow-lg">
    <nav class="flex items-center justify-between px-4 py-3 bg-white lg:py-4 lg:px-16">
      <a href="{{ route('home') }}">Back to home</a>

      <a href="{{ route('logout') }}">
        <button 
          class="px-4 py-1 text-sm border-2 rounded-md shadow-md hover:bg-darkBlue hover:text-white lg:px-6 lg:py-2 text-darkBlue border-darkBlue">
          Log Out
        </button>
      </a>
    </nav>
  </header>

  <div class="w-full h-64 mt-16">
    <img src="" class="object-cover w-full h-full bg-gray-400" alt="banner">
  </div>

  <main class="px-4 -mt-20 lg:px-16">
    <section class="flex flex-col items-center justify-center text-center">
      <div class="relative w-36 h-36">
        <img src="{{ url('/img/icon/user.svg') }}" class="object-cover w-full h-full bg-white rounded-full" alt="user_photo">
        <form action="" method="POST" class="absolute bottom-2 -right-0" enctype="multipart/form-data">
          <label for="edit-pic-user" class="px-3 py-2 text-lg border rounded-full shadow-md cursor-pointer text-darkBlue border-darkBlue bg-gray-50">
            <i class="lni lni-pencil-alt"></i>
          </label>
          <input accept="image/*" type="file" class="hidden" id="edit-pic-user" name="user-profile" onchange="form.submit()">
        </form>
      </div>
      <h2 class="mt-4 text-xl">Nama Orang</h2>
      <h4 class="mb-4 text-lg">Location</h4>
      <a href="#">085858055</a>
       <!-- Modal Edit User -->
      <div x-data="{ showModal : false }">
        <button class="px-2 py-1 mt-5 text-sm border rounded-md shadow-md border-darkBlue text-darkBlue" @click="showModal = !showModal">
          Edit
        </button>

        <div x-show="showModal" x-cloak class="fixed top-0 bottom-0 left-0 right-0 z-50 flex items-center justify-center overflow-auto text-gray-500 bg-black bg-opacity-40" x-transition:enter="transition ease duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
          <div x-show="showModal" 
               class="w-full p-6 mx-10 bg-white shadow-2xl rounded-xl lg:w-1/2" 
               @click.away="showModal = false" 
               x-transition:enter="transition ease duration-100 transform" x-transition:enter-start="opacity-0 scale-90 translate-y-1" x-transition:enter-end="opacity-100 scale-100 translate-y-0" x-transition:leave="transition ease duration-100 transform" x-transition:leave-start="opacity-100 scale-100 translate-y-0" x-transition:leave-end="opacity-0 scale-90 translate-y-1"
          >
            <div class="flex items-center justify-between w-full mb-10">
              <h2 class="text-2xl">Edit Profile</h2>
              <button @click="showModal = !showModal" class="px-4 py-2 text-sm text-gray-500 transition-colors duration-150 ease-linear bg-white border border-gray-200 rounded-md focus:outline-none">
                Cancel
              </button>
            </div>
            <form action="#" class="w-full">
              <div class="relative mb-5 float-input">
                <input 
                  type="text" 
                  id="username" 
                  class="w-full p-3 text-gray-600 bg-gray-100 border-none rounded-md h-14 focus:outline-none" 
                  placeholder="Username" 
                />
                <label for="username" class="absolute top-0 left-0 h-full px-3 py-4 text-gray-400 transition-all duration-100 ease-in-out origin-left transform pointer-events-none ">Username</label>
              </div>     
              <div class="relative mb-5 float-input">
                <input 
                  type="text" 
                  id="fullname" 
                  class="w-full p-3 text-gray-600 bg-gray-100 border-none rounded-md h-14 focus:outline-none" 
                  placeholder="Your fullname" 
                />
                <label for="email" class="absolute top-0 left-0 h-full px-3 py-4 text-gray-400 transition-all duration-100 ease-in-out origin-left transform pointer-events-none ">Your fullname</label>
              </div>
              <div class="relative mb-5 float-input">
                <input 
                  type="email" 
                  id="email" 
                  class="w-full p-3 text-gray-600 bg-gray-100 border-none rounded-md h-14 focus:outline-none" 
                  placeholder="name@example.com" 
                />
                <label for="email" class="absolute top-0 left-0 h-full px-3 py-4 text-gray-400 transition-all duration-100 ease-in-out origin-left transform pointer-events-none ">Email address</label>
              </div>
              <div class="relative mb-5 float-input">
                <input 
                  type="text" 
                  id="location" 
                  class="w-full p-3 text-gray-600 bg-gray-100 border-none rounded-md h-14 focus:outline-none" 
                  placeholder="location" 
                />
                <label for="email" class="absolute top-0 left-0 h-full px-3 py-4 text-gray-400 transition-all duration-100 ease-in-out origin-left transform pointer-events-none ">Your Location</label>
              </div>
              <div class="relative mb-5 float-input">
                <input 
                  type="number" 
                  id="phone-number" 
                  class="w-full p-3 text-gray-600 bg-gray-100 border-none rounded-md h-14 focus:outline-none" 
                  placeholder="phone" 
                />
                <label for="email" class="absolute top-0 left-0 h-full px-3 py-4 text-gray-400 transition-all duration-100 ease-in-out origin-left transform pointer-events-none ">Phone Number</label>
              </div>
              
              <a href="{{ route('home') }}">
                <button type="submit" class="w-full py-3 tracking-wider text-white transition-all rounded-md shadow-lg hover:shadow-none bg-darkBlue hover:bg-crayola">
                  Save Changes
                </button>
              </a>
            </form>
          </div>
        </div>
      </div>
    </section>

    <span class="block w-full my-20 border border-gray-300">
    </span>

    <!-- Kalo belum bikin lapak -->
    <section class="mb-8">
      <div class="flex flex-col items-center justify-center gap-5 border border-gray-300 h-52">
        <h2 class="text-2xl text-gray-600">You don't have a store</h2>
        <a href="{{ route('create-store') }}">
          <button class="px-4 py-1 text-white rounded-md shadow-md bg-darkBlue hover:bg-crayola lg:px-6 lg:py-2">
            Create Store
          </button>
        </a>
      </div>
    </section>

<!-- Udh bikin lapak -->
    <section class="mb-8">
      <div class="flex flex-col items-center gap-8 lg:flex-row lg:gap-16">
        <div class="relative w-40 h-40">
          <img src="{{ url('/img/banner/secure-banner.jpg') }}" class="object-cover w-full h-full bg-white rounded-full" alt="store_photo">
          <form action="" method="POST" class="absolute bottom-2 right-2" enctype="multipart/form-data">
            <label for="edit-pic-user" class="px-3 py-2 text-lg border rounded-full shadow-md cursor-pointer text-darkBlue border-darkBlue bg-gray-50">
              <i class="lni lni-pencil-alt"></i>
            </label>
            <input accept="image/*" type="file" class="hidden" id="edit-pic-user" name="user-profile" onchange="form.submit()">
          </form>
        </div>
        <div class="text-center lg:text-left">
          <span class="flex justify-center gap-2 mx-auto ml-12 lg:justify-start lg:mx-0">
            <h2 class="text-xl">Nama Lapak</h2>
        <!-- Modal Edit lapak -->
        <div x-data="{ showModal : false }">
          <button class="px-2 py-1 text-sm border rounded-md shadow-md border-darkBlue text-darkBlue" @click="showModal = !showModal">
            Edit
          </button>

          <div x-show="showModal" x-cloak class="fixed top-0 bottom-0 left-0 right-0 z-50 flex items-center justify-center overflow-auto text-gray-500 bg-black bg-opacity-40" x-transition:enter="transition ease duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
            <div x-show="showModal" 
                class="w-full p-6 mx-10 bg-white shadow-2xl rounded-xl lg:w-1/2" 
                @click.away="showModal = false" 
                x-transition:enter="transition ease duration-100 transform" x-transition:enter-start="opacity-0 scale-90 translate-y-1" x-transition:enter-end="opacity-100 scale-100 translate-y-0" x-transition:leave="transition ease duration-100 transform" x-transition:leave-start="opacity-100 scale-100 translate-y-0" x-transition:leave-end="opacity-0 scale-90 translate-y-1"
            >
              <div class="flex items-center justify-between w-full mb-10">
                <h2 class="text-2xl">Edit Store Info</h2>
                <button @click="showModal = !showModal" class="px-4 py-2 text-sm text-gray-500 transition-colors duration-150 ease-linear bg-white border border-gray-200 rounded-md focus:outline-none">
                  Cancel
                </button>
              </div>
              <form action="#" class="w-full">
                <div class="relative mb-5 float-input">
                  <input 
                    type="text" 
                    id="store-name" 
                    class="w-full p-3 text-gray-600 bg-gray-100 border-none rounded-md h-14 focus:outline-none" 
                    placeholder="Store's Name" 
                  />
                  <label for="username" class="absolute top-0 left-0 h-full px-3 py-4 text-gray-400 transition-all duration-100 ease-in-out origin-left transform pointer-events-none ">Store's Name</label>
                </div>     
                <div class="relative mb-5 float-input">
                  <input 
                    type="text" 
                    id="contact-store" 
                    class="w-full p-3 text-gray-600 bg-gray-100 border-none rounded-md h-14 focus:outline-none" 
                    placeholder="Store's Name" 
                  />
                  <label for="contact-store" class="absolute top-0 left-0 h-full px-3 py-4 text-gray-400 transition-all duration-100 ease-in-out origin-left transform pointer-events-none ">Store's Contact</label>
                </div>     
                <div class="relative mb-5 float-input">
                  <input 
                    type="text" 
                    id="location" 
                    class="w-full p-3 text-gray-600 bg-gray-100 border-none rounded-md h-14 focus:outline-none" 
                    placeholder="Store's location" 
                  />
                  <label for="email" class="absolute top-0 left-0 h-full px-3 py-4 text-gray-400 transition-all duration-100 ease-in-out origin-left transform pointer-events-none ">Store's location</label>
                </div>
                <div class="mb-5">
                  <textarea 
                    class="w-full px-3 py-2 text-gray-600 placeholder-gray-400 bg-gray-100 border border-none rounded-md focus:outline-none" 
                    rows="3"
                    placeholder="Type about your store here.."></textarea>
                </div>
                
                <a href="{{ route('home') }}">
                  <button type="submit" class="w-full py-3 tracking-wider text-white transition-all rounded-md shadow-lg hover:shadow-none bg-darkBlue hover:bg-crayola">
                    Save Changes
                  </button>
                </a>
              </form>
            </div>
          </div>
        </div>
          </span>
          <p class="text-lg">contact</p>
          <p class="mb-2 text-lg">alamat</p>
          <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo voluptatum iure vero labore!</p>
        </div>
      </div>  

     <a href="{{ route('add-product')}}">
      <button class="px-3 py-1 mb-8 text-white mt-14 bg-darkBlue">
        Add Product
      </button>
     </a>

<!-- blm ada produk di jual -->
      <div class="flex items-center justify-center border border-gray-300 h-52">
        <h2 class="text-2xl text-gray-600">You don't have product to sell..</h2>
      </div>
  
<!-- yg ini udh ada -->
      <div class="grid grid-cols-2 gap-1 lg:grid-cols-6 lg:gap-4">       
        <div class="relative w-full border border-gray-300">
          <!-- ini buat link ke detailnya -->
          <a href="#" class="absolute top-0 bottom-0 left-0 right-0 z-10">
          </a>

          <div class="relative w-full h-32 bg-gray-500">
            <img src="{{ url('/img/banner/shop-banner.jpg') }}" class="object-cover w-full h-full"
              alt="product-1">
            <div class="absolute top-0 right-0 z-30" x-data="{ show: false }" @click.stop>
              <button class="p-1 text-lg transform rotate-90 text-gray-50"  @click="show = !show">
                <i class="lni lni-more-alt"></i>
              </button>

              <div class="absolute flex justify-between gap-3 px-2 py-1 text-lg text-white bg-gray-800 top-1 right-6 bg-opacity-90" x-show="show" x-cloak>
                <a href="{{ route('edit-product') }}">
                  <i class="lni lni-pencil"></i>
                </a>
                <button>
                  <i class="lni lni-trash-can"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="px-2 py-3">
            <h3 class="mb-2 text-base lg:text-lg overflow-ellipsis">Product-1</h3>

            <h3 class="mb-3 text-xl lg:mb-4 text-darkBlue"><span class="text-sm">Rp. </span>10.000</h3>

            <div class="flex items-center justify-between">
              <span class="flex items-center gap-1 text-xs lg:text-sm">
                <img src="{{ url('/img/icon/star-filled.svg') }}" class="w-3 h-3 lg:w-4 lg:h-4"
                  alt="">
                <p>4.0</p>
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
</body>
</html>