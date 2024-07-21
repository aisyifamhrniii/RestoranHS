<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .background {
            background-image: url('{{ asset("assets/background.svg") }}');
        }
    </style>
</head>

  <x-app-layout></x-app-layout>
  <div class="w-full background">

    <div class=" bg-white shadow-md  mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
      <header>
        <h2 class="text-lg mt-2 mb-5 font-bold text-center text-red-900 sm:text-4xl">About Us</h2>
      </header>
      
    
      {{-- {{ dd($images) }} --}}
      <div class=" mt-8 grid place-items-center  gap-4 row-span-2 sm:grid-cols-2 lg:grid-cols-2">
        <a href="#" class="h-[450px] w-[400px] group relative block bg-black">
          <img
            alt=""
            src="{{ asset('assets/nji.jpg') }}"
            class="absolute  inset-0 h-[450px] w-[400px] object-cover opacity-75 transition-opacity group-hover:opacity-50"
          />
        
          <div class="relative p-4 sm:p-6 lg:p-8">
            <p class="text-sm font-medium uppercase tracking-widest text-red-500">Developer</p>
        
            <p class="text-xl font-bold text-white sm:text-2xl">Fadli Ahmad Fauzi</p>
        
            <div class="mt-32 sm:mt-48 lg:mt-64">
              <div
                class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100"
              >
                <p class="text-sm text-center text-white">
                  2203421037 |
                  BM 4 A |
                  PEMROGRAMAN WEB 
                </p>
              </div>
            </div>
          </div>
        </a>
       

          <a href="#" class="h-[450px] w-[400px] group relative block bg-black">
            <img
            alt=""
            src="{{ asset('assets/sipa2.jpg') }}"
            class="absolute  inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-50"
            />
            
            <div class="relative p-4 sm:p-6 lg:p-8">
              <p class="text-sm font-medium uppercase tracking-widest text-pink-500">Developer</p>
              
              <p class="text-xl font-bold text-white sm:text-2xl">Ai Syifa Maharani</p>
              
              <div class="mt-32 sm:mt-48 lg:mt-64">
                <div
                class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100"
                >
                <p class="text-sm text-center text-white">
                  2203421001 |
                  BM 4 A |
                  PEMROGRAMAN WEB 
                </p>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
  <x-footer></x-footer>

  


</html>