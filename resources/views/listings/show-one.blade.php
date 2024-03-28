<x-layout>

  <a href="/" class="mb-4 ml-4 inline-block text-xl font-bold text-black">
    <i class="fa-solid fa-arrow-left"></i>
    Back
  </a>

  <div class="mx-4">
    <x-card class="p-10">
      <div class="flex flex-col items-center text-center">
        <img class="mb-6 mr-6 w-48"
          src="{{ $listing->logo ? asset("storage/{$listing->logo}") : asset('/images/no-image.png') }}" alt="" />

        <h3 class="mb-2 text-2xl">{{ $listing->title }}r</h3>
        <div class="mb-4 text-xl font-bold">
          <i class="fa-solid fa-building"></i>
          {{ $listing->company }}
        </div>

        <x-job-tags :tags="$listing->tags" />

        <div class="my-4 w-full border-b-4 border-gray-200 pb-4 text-lg"><i
            class="fa-sharp fa-solid fa-location-dot"></i>
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
  </x-card>

  @if (auth()->user()->id === $listing->user_id)
    <x-card class="m-4 flex w-fit gap-4 p-3">
      <a href="/listings/{{ $listing->id }}/edit" class="rounded-md bg-red-600 px-4 py-2 font-bold text-white">
        <i class="fa-solid fa-pen-to-square"></i>
        Edit
      </a>
  @endif
  </x-card>
</x-layout>
