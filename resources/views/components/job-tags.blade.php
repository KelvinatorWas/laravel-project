@props(['tags'])

<ul class="flex">
  @foreach (explode(', ', $tags) as $tag)
    <li class="mr-2 flex items-center justify-center rounded-xl bg-black px-4 py-1 text-sm text-white">
      <a href="/?tag={{ $tag }}">{{ $tag }}</a>
    </li>
  @endforeach
</ul>
