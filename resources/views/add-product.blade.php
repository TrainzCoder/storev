<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Product</title>

  <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">
  
  <script src="{{ url(mix('js/app.js')) }}" defer></script>
</head>
<body>
  <main class="flex w-full min-h-screen py-12 font-sans bg-gray-50">
    <section class="flex items-center w-full px-5 bg-white lg:mx-auto lg:w-3/5">
      <form action="#" class="w-full" method="POST" enctype="multipart/form-data">
        <h2 class="mb-10 text-3xl text-center">Add Product</h2>
        <div class="relative mb-5 float-input">
          <input 
            type="text" 
            id="name-product" 
            class="w-full p-3 text-gray-600 bg-gray-100 border-none rounded-md h-14 focus:outline-none" 
            placeholder="name-product" 
          />
          <label for="name-product" class="absolute top-0 left-0 h-full px-3 py-4 text-gray-400 transition-all duration-100 ease-in-out origin-left transform pointer-events-none ">Product's name</label>
        </div>
        
        <div class="relative mb-5 float-input">
          <input 
            type="number" 
            id="price" 
            class="w-full p-3 text-gray-600 bg-gray-100 border-none rounded-md h-14 focus:outline-none" 
            placeholder="name@example.com" 
          />
          <label for="price" class="absolute top-0 left-0 h-full px-3 py-4 text-gray-400 transition-all duration-100 ease-in-out origin-left transform pointer-events-none ">Price</label>
        </div>
        
        <div class="relative mb-5 float-input">
          <input 
            type="number" 
            id="stock" 
            class="w-full p-3 text-gray-600 bg-gray-100 border-none rounded-md h-14 focus:outline-none" 
            placeholder="name@example.com" 
          />
          <label for="stock" class="absolute top-0 left-0 h-full px-3 py-4 text-gray-400 transition-all duration-100 ease-in-out origin-left transform pointer-events-none ">Stock</label>
        </div>
        
        <div class="mb-5">
          <textarea 
            class="w-full px-3 py-2 text-gray-600 placeholder-gray-400 bg-gray-100 border border-none rounded-md focus:outline-none" 
            rows="3"
            placeholder="Type about your product here.."></textarea>
        </div>

        <div class="relative mb-5 float-input">
          <label for="category" class="text-gray-600">Category :</label>
          <select name="category" id="category" class="ml-4 text-gray-600 bg-gray-100 border-none">
            <option value="Electronic">Electronic</option>
            <option value="Fashion">Fashion</option>
            <option value="Mercedes">Accessories</option>
            <option value="School">School</option>
            <option value="Furniture">Furniture</option>
            <option value="Art">Art</option>
          </select>
        </div>
        <div class="w-full mb-7">
          <p class="mb-3 text-base text-gray-600">Photo of Product</p>
          <div class="w-full p-8 bg-gray-100 rounded-lg">
            <div class="" x-data="imageData()">
              <div x-show="previewUrl == ''">
                <p class="text-center uppercase text-bold">
                  <label for="thumbnail" class="text-gray-500 cursor-pointer">
                    Upload a file
                  </label>
                  <input type="file" name="thumbnail" id="thumbnail" class="hidden" @change="updatePreview()">
                </p>
              </div>
              <div x-show="previewUrl !== ''">
                <img :src="previewUrl" alt="" class="rounded">
                <div class="">
                  <button type="button" class="text-gray-400" @click="clearPreview()">change</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <a href="#">
          <button type="submit" class="w-full py-3 tracking-wider text-white transition-all rounded-md shadow-lg hover:shadow-none bg-darkBlue hover:bg-crayola">
            Add Product
          </button>
        </a>

        <a href="{{ route('user') }}" class="block text-lg text-center mt-7 text-darkBlue">Back</a>
      </form>
    </section>
  </main>

  <script>
    function imageData() {
      return {
        previewUrl: "",
        updatePreview() {
          let reader,
            files = document.getElementById("thumbnail").files;

          reader = new FileReader();

          reader.onload = e => {
            this.previewUrl = e.target.result;
          };

          reader.readAsDataURL(files[0]);
        },
        clearPreview() {
          document.getElementById("thumbnail").value = null;
          this.previewUrl = "";
        }
      };
    }

  </script>
</body>
</html>