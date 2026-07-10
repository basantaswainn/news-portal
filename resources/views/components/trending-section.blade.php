<section class="rounded-[2rem] border border-slate-200/80 bg-white p-6 shadow-[0_20px_70px_rgba(15,23,42,0.04)] sm:p-8">
    <div class="mb-6 flex items-center justify-between">
        <div>
            <p class="text-sm font-semibold uppercase tracking-[0.25em] text-slate-500">Trending</p>
            <h2 class="text-2xl font-semibold text-slate-950">Trending News</h2>
        </div>
        <a href="#" class="text-sm font-medium text-slate-600 transition hover:text-slate-950">View all</a>
    </div>
    <div class="grid gap-5 md:grid-cols-3">
        @foreach ($items as $item)
            <article class="group overflow-hidden rounded-[1.25rem] border border-slate-200/80 bg-slate-50 transition hover:-translate-y-1 hover:shadow-lg">
                <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" class="h-40 w-full object-cover" loading="lazy">
                <div class="p-4">
                    <p class="text-xs font-semibold uppercase tracking-[0.25em] text-slate-500">{{ $item['category'] }}</p>
                    <h3 class="mt-2 text-base font-semibold leading-7 text-slate-950">{{ $item['title'] }}</h3>
                    <div class="mt-4 flex items-center justify-between text-sm text-slate-500">
                        <span>{{ $item['views'] }} views</span>
                        <span>{{ $item['readTime'] }}</span>
                    </div>
                </div>
            </article>
        @endforeach
    </div>
</section>
