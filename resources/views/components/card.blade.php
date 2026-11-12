@if ($attributes->has('href'))
    <a {{ $attributes(['class' => 'block border border-border rounded-lg bg-card p-4 md:text-sm']) }}>
        {{ $slot }}
    </a>
@else
    <div {{ $attributes(['class' => 'border border-border rounded-lg bg-card p-4 md:text-sm']) }}>
        {{ $slot }}
    </div>
@endif