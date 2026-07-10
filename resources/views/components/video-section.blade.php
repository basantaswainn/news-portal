<section class="rounded-[2rem] border border-slate-200/80 bg-white p-6 shadow-[0_20px_70px_rgba(15,23,42,0.04)] sm:p-8">
    <div class="mb-6 flex items-center justify-between">
        <div>
            <p class="text-sm font-semibold uppercase tracking-[0.25em] text-slate-500">Video</p>
            <h2 class="text-2xl font-semibold text-slate-950">Watch</h2>
        </div>
        <a href="#" class="text-sm font-medium text-slate-600 transition hover:text-slate-950">View all</a>
    </div>
    <div class="grid gap-5 md:grid-cols-3">
        @foreach ($videos as $video)
            <article class="group overflow-hidden rounded-[1.5rem] border border-slate-200/80 bg-slate-50">
                <div class="relative">
                    <img src="{{ $video['image'] }}" alt="{{ $video['title'] }}" class="h-40 w-full object-cover" loading="lazy">
                    <div class="absolute inset-0 flex items-center justify-center bg-slate-950/30">
                        <div class="flex h-14 w-14 items-center justify-center rounded-full bg-white/90 text-slate-950 shadow-lg">▶</div>
                    </div>
                </div>
                <div class="p-4">
                    <p class="text-sm font-medium text-slate-500">{{ $video['duration'] }}</p>
                    <h3 class="mt-2 text-base font-semibold leading-7 text-slate-950">{{ $video['title'] }}</h3>
                </div>
            </article>
        @endforeach
    </div>
</section>
