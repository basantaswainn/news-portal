<nav aria-label="Breadcrumb" class="text-sm text-slate-500">
    <ol class="flex flex-wrap items-center gap-2">
        @foreach ($items as $index => $item)
            <li class="flex items-center gap-2">
                @if ($item['url'])
                    <a href="{{ $item['url'] }}" class="transition hover:text-slate-900">{{ $item['label'] }}</a>
                @else
                    <span class="font-medium text-slate-900">{{ $item['label'] }}</span>
                @endif
                @if (! $loop->last)
                    <span>/</span>
                @endif
            </li>
        @endforeach
    </ol>
</nav>
