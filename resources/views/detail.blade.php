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

    <div class="flex gap-5  mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
      
      <div class=" p-10 shadow-xl rounded-xl bg-slate-50 grid gap-4 row-span-2 sm:grid-cols-2 lg:grid-cols-3">
        
            <div class=" w-[400px] row-span-2 ">
                <a href=" " class="group  block overflow-hidden">
                    <img
                    src="{{$menuslist['url']}}"
                    alt="{{$menuslist['nama']}}"
                    class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
                    />
                </a>
            </div>

            <div class="mt-8 px-16">
                <x-detaillist :menu="$menuslist"></x-detaillist>
            </div>
      </div>
      
    </div>
  </div>

  <x-footer></x-footer>
  <x-add></x-add>


</html>