@props(['listing'])

<x-card> 
  <div class="flex">
    <img src="{{ $listing->logo ? asset("storage/{$listing->logo}") : asset("/images/no-image.png")  }}" alt="" class="mr-6 hidden h-48 w-48 self-center md:block" />
    <div class="flex flex-col justify-center">
      <h2 class="text-2xl hover:underline">
        <a href="/listings/{{ $listing->id }}">
          {{ $listing->title }}
        </a>
      </h2>

      <div class="text-l mb-4 mt-1 font-semibold">
        <i class="fa-solid fa-building"></i>
        {{ $listing->company }}
      </div>

      <p class="mb-2 hidden md:block">{{ limitCharacterCount($listing->description, 255) }}</p>

      <x-job-tags :tags="$listing->tags"/>
    
      <div class="text-l mt-4">
        <i class="fa-sharp fa-solid fa-location-dot"></i>
        {{ $listing->location }}
      </div>
    </div>
  </div>
</x-card>
