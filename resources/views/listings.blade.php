@extends('layout')

@section('content')
  <div class="mx-4 gap-4 space-y-4 md:space-y-0 lg:grid lg:grid-cols-2">
    @unless (count($listings) == 0)
      @foreach ($listings as $listing)
        <div class="rounded border border-gray-200 bg-gray-50 p-6">
          <div class="flex">
            <img src="{{ asset('images/no-image.png') }}" alt="" class=" self-center mr-6 hidden w-48 h-48 md:block" />
            <div>
              <h2 class="text-2xl hover:underline">
                <a href="/listings/{{ $listing->id }}">
                  {{ $listing->title }}
                </a>
              </h2>

              <div class="mb-4 mt-1 text-l font-semibold">
                <i class="fa-solid fa-building"></i>
                {{ $listing->company }}
              </div>

              <p class="mb-2">{{ $listing->description }}</p>

              <ul class="flex">
                @foreach (explode(', ', $listing->tags) as $tag)
                  <li class="mr-2 flex items-center justify-center rounded-xl bg-black px-3 py-1 text-xs text-white">
                    <a href="#">{{ $tag }}</a>
                  </li>
                @endforeach
              </ul>

              <div class="mt-4 text-l">
                <i class="fa-sharp fa-solid fa-location-dot"></i>
                {{ $listing->location }}
              </div>
            </div>
          </div>
        </div>
      @endforeach
    @else
      <p>No listings found!</p>
    @endunless
  </div>
@endsection
