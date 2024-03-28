@props(['label', "for", "type", "placeholder"])

<div class="mb-6">
  <label for="{{$for}}" class="mb-2 inline-block text-lg">{{$label}}</label>
  <input 
    type="{{$type}}"
    class="w-full rounded border border-gray-200 p-2"
    name="{{$for}}"
    placeholder="{{$placeholder ?? false}}"
    value="{{old($for)}}"
  />
  {{
    $slot
  }}
</div>
