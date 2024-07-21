<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
  {{-- <link href="{{ asset('assets/background.svg') }}" --}}
  <style>
    .background {
            background-image: url('{{ asset('assets/background.svg') }}');
        }
    </style>
</head>

  <x-app-layout></x-app-layout>
  <div class="w-full background">

    <div class=" mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
      <header>
        <h2 class="text-xl mt-5 mb-5 font-bold text-center text-red-900 sm:text-5xl">Our Menus Collection</h2>
      </header>
      <p class="mx-auto  max-w-2xl text-center text-gray-500">
        Each dish is a testament to our dedication to quality and culinary excellence. Experience the best of gourmet dining with our unique and delectable offerings.
     </p>
    
      {{-- {{ dd($images) }} --}}
      <div class=" mt-8 grid gap-4 row-span-2 sm:grid-cols-2 lg:grid-cols-3">
        @foreach ( $menuslist as $menu )


        <x-overview :menu="$menu"></x-overview>
        
        @endforeach
      </div>
      
    </div>
  </div>
  <x-review></x-review>
  <x-add></x-add>


</html>