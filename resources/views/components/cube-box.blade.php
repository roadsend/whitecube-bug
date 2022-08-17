
<div class="flex justify-between">
{{--    Next line causes it to break --}}
{{--    <li {{ $attributes->merge(['class' => 'list-none text-blue-400']) }}> {{ $cube->name }} </li>--}}
    <li class="list-none">{{ $section->body }}</li>
    <li class="list-none">{{ $section->slug }}</li>
</div>
