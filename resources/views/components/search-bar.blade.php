<form action="">
  <div class="relative m-4 rounded-lg border-2 border-gray-100">
    <div class="absolute left-3 top-4">
      <i class="fa fa-search z-20 text-gray-400 hover:text-gray-500"></i>
    </div>

    <input 
      type="text"
      name="search"
      class="z-0 h-14 w-full rounded-lg pl-10 pr-20 focus:shadow focus:outline-none"
      placeholder="Search..."
    />
    
    <div class="absolute right-2 top-2">
      <x-button.secondary type="submit" size="sm" class="">Search</x-button.secondary>
    </div>
  </div>
</form>
