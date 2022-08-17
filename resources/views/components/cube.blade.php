<div {{ $attributes->merge(['class' => 'text-sm text-center p-4 mb-4']) }}>

    @php($section = $cube->sections->first())
        <x-cube-box class='list-disc' :cube="$cube" :section="$section"/>
        <x-cube-caption-link :section="$section" />

{{--    <x-cube-caption-link-with-attributes class='hover:text-purple-500' :section="$section" />--}}
</div>
