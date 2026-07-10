<section class="grid gap-5 lg:grid-cols-2">
    @foreach ($items as $item)
        <article class="group overflow-hidden rounded-[2rem] border border-slate-200/80 bg-white shadow-[0_20px_70px_rgba(15,23,42,0.04)]">
            <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" class="h-56 w-full object-cover transition duration-300 group-hover:scale-105" loading="lazy">
            <div class="p-6">
                <p class="text-sm font-semibold uppercase tracking-[0.25em] text-slate-500">Editor’s Pick</p>
                <h3 class="mt-3 text-2xl font-semibold leading-tight text-slate-950">{{ $item['title'] }}</h3>
                <p class="mt-3 text-base leading-8 text-slate-600">{{ $item['summary'] }}</p>
            </div>
        </article>
    @endforeach
</section>
