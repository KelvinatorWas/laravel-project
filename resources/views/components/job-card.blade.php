@props(['listing'])

<x-card class="overflow-hidden"> 
  <div class="flex justify-center md:justify-start">
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

      <div class="border-2 p-2 border-transparent border-t-gray-900 border-b-gray-900">
        <x-job-tags :tags="$listing->tags"/>
      </div>
    
      <div class="text-l mt-4 flex flex-col items-start justify-between md:flex-row md:items-center">
        <div>
          <i class="fa-sharp fa-solid fa-location-dot"></i>
          {{ $listing->location }}
        </div>
        <p class="text-xs font-bold mt-2 md:mt-0">
          Posted at: {{ $listing->created_at }}
        </p>
      </div>
    </div>
  </div>
</x-card>
