<section class="rounded-[2rem] border border-slate-200/80 bg-white p-6 shadow-sm">
    <div class="mb-4 flex items-center justify-between">
        <h3 class="text-xl font-semibold text-slate-950">{{ $category['name'] }}</h3>
        <a href="#" class="text-sm font-medium text-slate-600 transition hover:text-slate-950">More</a>
    </div>
    <article class="overflow-hidden rounded-[1.25rem] border border-slate-200/80 bg-slate-50">
        <img src="{{ $category['featured']['image'] }}" alt="{{ $category['featured']['title'] }}" class="h-40 w-full object-cover" loading="lazy">
        <div class="p-4">
            <h4 class="text-base font-semibold leading-7 text-slate-950">{{ $category['featured']['title'] }}</h4>
        </div>
    </article>
    <ul class="mt-4 space-y-3 text-sm text-slate-600">
        @foreach ($category['items'] as $item)
            <li class="flex items-start justify-between gap-3 border-t border-slate-200/80 pt-3">
                <span>{{ $item['title'] }}</span>
                <span class="shrink-0 text-xs uppercase tracking-[0.2em] text-slate-400">{{ $item['category'] }}</span>
            </li>
        @endforeach
    </ul>
</section>
