@props([
    'href',
    'type' => 'button',
    'buttonClasses' => 'shadow rounded-md',
    'class' => "",
])

  @isset($href)
      <a href="{{ $href }}" class="{{ $buttonClasses }} {{$size}} {{ $class }}">
          {{ $slot }}
      </a>
  @else
      <button type="{{ $type }}" class="{{ $buttonClasses }} {{$size}} {{ $class }}">
          {{ $slot }}
      </button>
  @endisset