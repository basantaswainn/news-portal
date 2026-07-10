<section class="grid gap-6 lg:grid-cols-[1.4fr_0.8fr]">
    <article class="overflow-hidden rounded-[2rem] border border-slate-200/80 bg-white shadow-[0_20px_70px_rgba(15,23,42,0.08)]">
        <img src="{{ $story['image'] }}" alt="{{ $story['title'] }}" class="h-72 w-full object-cover" loading="lazy">
        <div class="space-y-4 p-6 sm:p-8">
            <div class="flex flex-wrap items-center gap-3 text-sm text-slate-500">
                <span class="rounded-full bg-slate-100 px-3 py-1 font-medium text-slate-700">{{ $story['category'] }}</span>
                <span>{{ $story['author'] }}</span>
                <span>•</span>
                <span>{{ $story['date'] }}</span>
                <span>•</span>
                <span>{{ $story['readTime'] }}</span>
            </div>
            <h1 class="text-3xl font-semibold leading-tight text-slate-950 sm:text-4xl">{{ $story['title'] }}</h1>
            <p class="max-w-2xl text-lg leading-8 text-slate-600">{{ $story['summary'] }}</p>
            <a href="#" class="inline-flex items-center rounded-full bg-slate-950 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-slate-800">Read full story</a>
        </div>
    </article>

    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-1">
        @foreach ($cards as $card)
            <article class="group overflow-hidden rounded-[1.5rem] border border-slate-200/70 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-xl">
                <img src="{{ $card['image'] }}" alt="{{ $card['title'] }}" class="h-36 w-full object-cover" loading="lazy">
                <div class="p-4">
                    <p class="text-xs font-semibold uppercase tracking-[0.25em] text-slate-500">{{ $card['category'] }}</p>
                    <h2 class="mt-2 text-lg font-semibold leading-7 text-slate-950">{{ $card['title'] }}</h2>
                </div>
            </article>
        @endforeach
    </div>
</section>
