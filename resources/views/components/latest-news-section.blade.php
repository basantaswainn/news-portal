<section class="rounded-[2rem] border border-slate-200/80 bg-white p-6 shadow-[0_20px_70px_rgba(15,23,42,0.04)] sm:p-8">
    <div class="mb-6 flex items-center justify-between">
        <div>
            <p class="text-sm font-semibold uppercase tracking-[0.25em] text-slate-500">Coverage</p>
            <h2 class="text-2xl font-semibold text-slate-950">Latest News</h2>
        </div>
        <a href="#" class="text-sm font-medium text-slate-600 transition hover:text-slate-950">More stories</a>
    </div>
    <div class="grid gap-5 lg:grid-cols-2">
        @foreach ($items as $item)
            <article class="flex flex-col overflow-hidden rounded-[1.5rem] border border-slate-200/80 bg-slate-50 md:flex-row">
                <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" class="h-44 w-full object-cover md:h-auto md:w-36" loading="lazy">
                <div class="flex flex-1 flex-col p-5">
                    <p class="text-xs font-semibold uppercase tracking-[0.25em] text-slate-500">{{ $item['category'] }}</p>
                    <h3 class="mt-2 text-lg font-semibold leading-7 text-slate-950">{{ $item['title'] }}</h3>
                    <p class="mt-3 text-sm leading-7 text-slate-600">{{ $item['summary'] }}</p>
                    <div class="mt-4 text-sm text-slate-500">{{ $item['date'] }}</div>
                </div>
            </article>
        @endforeach
    </div>
</section>
