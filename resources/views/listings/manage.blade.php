<x-layout>
  <x-card class="p-10 flex flex-col">
    <header>
      <h1 class="my-6 text-center text-3xl font-bold uppercase">
        Manage Listed Jobs
      </h1>
    </header>

    @unless (!$listings->isEmpty())
      <p class="self-center text-md font-bold text-red-600 ">You have not posted any job listing!</p>
    @else
      <table class="w-full table-auto rounded-sm">

        <tbody>
          @foreach ($listings as $listing)
            <tr class="border-gray-300">
              <td class="border-b border-t border-gray-300 px-4 py-8 text-lg">
                <a href="/listings/{{ $listing->id }}">
                  {{ $listing->title }}
                </a>
              </td>

              <td class="border-b border-t border-gray-300 px-4 py-8 text-lg">
                <a href="/listings/{{ $listing->id }}/edit" class="rounded-xl px-6 py-2 text-blue-400">
                  <i class="fa-solid fa-pen-to-square"></i>
                  Edit
                </a>
              </td>

              <td class="border-b border-t border-gray-300 px-4 py-8 text-lg">
                <form method="POST" action="/listings/{{ $listing->id }}">
                  @csrf
                  @method('DELETE')
                  <button class="text-red-600">
                    <i class="fa-solid fa-trash-can"></i>
                    Delete
                  </button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      @endunless
    </table>

  </x-card>
</x-layout>
