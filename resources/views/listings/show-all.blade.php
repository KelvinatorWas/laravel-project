<x-layout>
  <x-search-bar/>
  <div class="mx-4 gap-4 space-y-4 md:space-y-0 lg:grid lg:grid-cols-2">
    @unless (count($listings) == 0)
      @foreach ($listings as $listing)
        <x-job-card :listing="$listing" />
      @endforeach
    @else
      <p>No listings found!</p>
    @endunless
  </div>
</x-layout>
