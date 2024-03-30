@props(['tags'])

<ul
  {{$attributes->merge(['class' => "self-center grid grid-cols-2 gap-2 w-fit md:grid-cols-4" ])}}>
  @foreach (explode(', ', $tags) as $tag)
    <a href="/?tag={{ $tag }}" class="uppercase mr-2 flex items-center justify-center rounded-md bg-primary px-4 py-1 text-xs font-bold text-white transition-all hover:bg-primary-lighter hover:text-red-600 hover:rounded-tl-sm hover:rounded-br-sm">
      {{ $tag }}
    </a>
  @endforeach
</ul>
