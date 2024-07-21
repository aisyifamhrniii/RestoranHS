
<div class="flow-root w-[40rem]">
    <dl class="-my-3 text-sm">
     
  
      <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
        <dt class="font-medium text-xl text-gray-900">Name:</dt>
        <dd class="text-red-900 font-bold text-3xl sm:col-span-2">{{ $menu['nama'] }}</dd>
      </div>
  
      <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
        <dt class="font-medium text-xl text-gray-900">Price</dt>
        <dd class="text-gray-700 text-xl sm:col-span-2">{{ $menu['harga'] }}</dd>
      </div>
  
      <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
        <dt class="font-medium text-xl text-gray-900">Inggredients</dt>
        <dd class="text-gray-700 text-xl sm:col-span-2">{{ $menu['igg'] }}</dd>
      </div>
  
      <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
        <dt class="font-medium text-xl text-gray-900">Description</dt>
        <dd class="text-gray-700 text-justify text-xl sm:col-span-2">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et facilis debitis explicabo
          doloremque impedit nesciunt dolorem facere, dolor quasi veritatis quia fugit aperiam
          aspernatur neque molestiae labore aliquam soluta architecto?
        </dd>
      </div>
    </dl>
  </div>