@extends('layout')
@section('content')
  <a href="/" class="mb-4 ml-4 inline-block text-xl font-bold text-black"><i class="fa-solid fa-arrow-left"></i>
    Back</a>

  <div class="mx-4">
    <div class="flex items-center justify-center rounded border border-gray-200 bg-gray-50 p-10">
      <div class="flex flex-col text-center">
        <img class="mb-6 mr-6 w-48" src="{{ asset('images/no-image.png') }}" alt="" />

        <h3 class="mb-2 text-2xl">{{ $listing->title }}r</h3>
        <div class="mb-4 text-xl font-bold">
          <i class="fa-solid fa-building"></i>
          {{ $listing->company }}
        </div>

        <ul class="flex">
          @foreach (explode(', ', $listing->tags) as $tag)
            <li class="mr-2 flex items-center justify-center rounded-xl bg-black px-4 py-1 text-sm text-white">
              <a href="#">{{ $tag }}</a>
            </li>
          @endforeach
        </ul>

        <div class="my-4 w-full border-b-4 border-gray-200 pb-4 text-lg"><i class="fa-sharp fa-solid fa-location-dot"></i>
          {{ $listing->location }}</div>
        <div>
          <h3 class="mb-4 text-3xl font-bold">
            Job Description
          </h3>
          <div class="flex flex-col space-y-6 text-lg">
            <p>
              {{ $listing->description }}
            </p>

            <div class="flex flex-col items-center">
              <a href="{{ $listing->email }}"
                class="mb-4 mt-6 block w-2/3 rounded-xl bg-red-600 py-2 text-white hover:opacity-80">
                <i class="fa-solid fa-globe"></i>
                Contact Employer
              </a>

              <a href="{{ $listing->website }}" target="_blank"
                class="block w-2/3 rounded-xl bg-black py-2 text-white hover:opacity-80">
                <i class="fa-solid fa-envelope"></i>
                Visit Website
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
