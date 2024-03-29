<x-layout>
  <x-card class="mx-auto mt-20 max-w-lg p-10">
    <header class="text-center">
      <h2 class="mb-3 text-2xl font-bold uppercase">
        Edit a Job Listing
      </h2>
    </header>

    <form method="POST" action="/listings/{{ $listing->id }}" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="mb-6">
        <label for="company" class="mb-2 inline-block text-lg">Company Name</label>
        <input value="{{ $listing->company }}" type="text" class="w-full rounded border border-gray-200 p-2"
          name="company" />

        @error('company')
          <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="title" class="mb-2 inline-block text-lg">Job Title</label>
        <input value="{{ $listing->title }}" type="text" class="w-full rounded border border-gray-200 p-2"
          name="title" placeholder="Example: Senior Java Developer" />

        @error('title')
          <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="location" class="mb-2 inline-block text-lg">Job Location</label>
        <input value="{{ $listing->location }}" type="text" class="w-full rounded border border-gray-200 p-2"
          name="location" placeholder="Example: Remote, Boston MA, etc" />

        @error('location')
          <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="email" class="mb-2 inline-block text-lg">Contact Email</label>
        <input value="{{ $listing->email }}" type="text" class="w-full rounded border border-gray-200 p-2"
          name="email" />

        @error('email')
          <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="website" class="mb-2 inline-block text-lg">
          Website/Application URL
        </label>

        <input value="{{ $listing->website }}" type="text" class="w-full rounded border border-gray-200 p-2"
          name="website" />

        @error('website')
          <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="tags" class="mb-2 inline-block text-lg">
          Tags (Comma Separated)
        </label>

        <input value="{{ $listing->tags }}" type="text" class="w-full rounded border border-gray-200 p-2"
          name="tags" placeholder="Example: Laravel, Backend, Postgres, etc" />

        @error('tags')
          <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
        @enderror
      </div>


      <div class="mb-6">
        <label for="logo" class="mb-2 inline-block text-lg">
          Company Logo
        </label>
        <input type="file" class="w-full rounded border border-gray-200 p-2" name="logo" />

        <img class="my-6 mr-6 w-48"
          src="{{ $listing->logo ? asset("storage/{$listing->logo}") : asset('/images/no-image.png') }}"
          alt="" />

        @error('logo')
          <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="description" class="mb-2 inline-block text-lg">
          Job Description
        </label>
        <textarea class="w-full rounded border border-gray-200 p-2" name="description" rows="10"
          placeholder="Include tasks, requirements, salary, etc">{{ $listing->description }}</textarea>

        @error('description')
          <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
        @enderror
      </div>

      <x-save-cancel-buttons labelLeft="Save" labelRight="Back" />

    </form>
  </x-card>
</x-layout>
