@props(['labelLeft' => "Save", 'labelRight' => "Cancel", "size"=>"sm"])

<div class="mb-6">
  <x-button.secondary :size="$size" type="submit">
    {{$labelLeft}}
  </x-button.secondary>
  <x-button.primary href="/" :size="$size">{{$labelRight}}</x-button.primary>
</div>

