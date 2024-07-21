 {{-- x-slot:
 @foreach ( as )
    
  @endforeach --}}
  {{-- {{ dd($images) }} --}}

    <a href="/menu/{{ $menu['slug'] }}" class="group block overflow-hidden">
      <img
      src="{{$menu['url']}}"
      alt="{{$menu['nama']}}"
      class="h-[350px]  w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
      />
      
      <div class="text-center relative  pt-3">
        <h3 class="text-xl font-semibold text-gray-700 group-hover:underline group-hover:underline-offset-4">
          {{$menu['nama']}}
          </h3>

          <p class="py-2">
            <span class="tracking-wider text-gray-900">Rp {{$menu['harga']}}. </span>
          </p>
        </div>
      </a>
