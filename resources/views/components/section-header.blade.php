<div class="flex items-center justify-between">
    <div>
        <p class="text-sm font-semibold uppercase tracking-[0.25em] text-slate-500">{{ $eyebrow }}</p>
        <h2 class="text-2xl font-semibold text-slate-950">{{ $title }}</h2>
    </div>
    @if ($link)
        <a href="{{ $link['url'] }}" class="text-sm font-medium text-slate-600 transition hover:text-slate-950">{{ $link['label'] }}</a>
    @endif
</div>
