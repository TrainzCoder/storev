<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Store</title>

  <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">
  
  <script src="{{ url(mix('js/app.js')) }}" defer></script>
</head>
<body>
  <main class="flex w-full min-h-screen font-sans bg-gray-50">
    <section class="flex items-center w-full px-5 bg-white lg:mx-auto lg:w-3/5">
      <form action="#" class="w-full">
        <h2 class="mb-10 text-3xl text-center">Create Store</h2>
        <div class="relative mb-5 float-input">
          <input 
            type="text" 
            id="name-store" 
            class="w-full p-3 text-gray-600 bg-gray-100 border-none rounded-md h-14 focus:outline-none" 
            placeholder="name-store" 
          />
          <label for="name-store" class="absolute top-0 left-0 h-full px-3 py-4 text-gray-400 transition-all duration-100 ease-in-out origin-left transform pointer-events-none ">Store's name</label>
        </div>
        
        <div class="relative mb-5 float-input">
          <input 
            type="text" 
            id="address" 
            class="w-full p-3 text-gray-600 bg-gray-100 border-none rounded-md h-14 focus:outline-none" 
            placeholder="address" 
          />
          <label for="location" class="absolute top-0 left-0 h-full px-3 py-4 text-gray-400 transition-all duration-100 ease-in-out origin-left transform pointer-events-none ">Adress</label>
        </div>

        <div class="relative mb-5 float-input">
          <input 
            type="number" 
            id="contact" 
            class="w-full p-3 text-gray-600 bg-gray-100 border-none rounded-md h-14 focus:outline-none" 
            placeholder="08080" 
          />
          <label for="contact" class="absolute top-0 left-0 h-full px-3 py-4 text-gray-400 transition-all duration-100 ease-in-out origin-left transform pointer-events-none ">Contact</label>
        </div>

        <div class="mb-5">
          <textarea 
            class="w-full px-3 py-2 text-gray-600 placeholder-gray-400 bg-gray-100 border border-none rounded-md focus:outline-none" 
            rows="3"
            placeholder="Type about your store here.."></textarea>
        </div>
        
        <a href="{{ route('home') }}">
          <button type="submit" class="w-full py-3 tracking-wider text-white transition-all rounded-md shadow-lg hover:shadow-none bg-darkBlue hover:bg-crayola">
            Create Store
          </button>
        </a>

        <a href="{{ route('user') }}" class="block text-lg text-center mt-7 text-darkBlue">Back</a>
      </form>
    </section>
  </main>
</body>
</html>