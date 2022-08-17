<div>
    <span> Section passed to component breaking attributes</span>
    <a {{ $attributes->merge(['class' => 'text-blue-400']) }} href="{{ $section->link }}">
        {{ $section->caption }}
    </a>
</div>
