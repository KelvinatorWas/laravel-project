<x-layout>
  <x-card class="mx-auto mt-20 max-w-lg p-10">
    <header class="text-center">
      <h2 class="mb-1 text-2xl font-bold uppercase">
        Create a Job Listing
      </h2>
      <p class="mb-4">Post a Job to find a developer</p>
    </header>

    <form method="POST" action="/listings" enctype="multipart/form-data">
      @csrf

      <div class="mb-6">
        <label for="company" class="mb-2 inline-block text-lg">Company Name</label>
        <input value="{{old("company")}}" type="text" class="w-full rounded border border-gray-200 p-2" name="company" />

        @error('company')
          <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="title" class="mb-2 inline-block text-lg">Job Title</label>
        <input value="{{old("title")}}" type="text" class="w-full rounded border border-gray-200 p-2" name="title"
          placeholder="Example: Senior Java Developer" />

        @error('title')
          <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="location" class="mb-2 inline-block text-lg">Job Location</label>
        <input value="{{old("location")}}" type="text" class="w-full rounded border border-gray-200 p-2" name="location"
          placeholder="Example: Remote, Boston MA, etc" />

        @error('location')
          <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="email" class="mb-2 inline-block text-lg">Contact Email</label>
        <input value="{{old("emial")}}" type="text" class="w-full rounded border border-gray-200 p-2" name="email" />

        @error('email')
          <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="website" class="mb-2 inline-block text-lg">
          Website/Application URL
        </label>

        <input value="{{old("website")}}" type="text" class="w-full rounded border border-gray-200 p-2" name="website" />

        @error('website')
          <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="tags" class="mb-2 inline-block text-lg">
          Tags (Comma Separated)
        </label>

        <input value="{{old("tags")}}" type="text" class="w-full rounded border border-gray-200 p-2" name="tags"
          placeholder="Example: Laravel, Backend, Postgres, etc" />

        @error('tags')
          <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
        @enderror
      </div>

      
      <div class="mb-6">
        <label for="logo" class="mb-2 inline-block text-lg">
          Company Logo
        </label>
        <input type="file" class="w-full rounded border border-gray-200 p-2" name="logo" />
        
        @error('logo')
          <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="description" class="mb-2 inline-block text-lg">
          Job Description
        </label>
        <textarea class="w-full rounded border border-gray-200 p-2" name="description" rows="10"
          placeholder="Include tasks, requirements, salary, etc">{{old("description")}}</textarea>

        @error('description')
          <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-6">
        <button class="rounded bg-red-600 px-4 py-2 text-white hover:bg-black">
          Create Gig
        </button>

        <a href="/" class="ml-4 text-black"> Back </a>
      </div>
    </form>
  </x-card>
</x-layout>
