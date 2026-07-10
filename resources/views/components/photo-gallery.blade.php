<section class="rounded-[2rem] border border-slate-200/80 bg-white p-6 shadow-[0_20px_70px_rgba(15,23,42,0.04)] sm:p-8">
    <div class="mb-6 flex items-center justify-between">
        <div>
            <p class="text-sm font-semibold uppercase tracking-[0.25em] text-slate-500">Gallery</p>
            <h2 class="text-2xl font-semibold text-slate-950">Photo Gallery</h2>
        </div>
        <a href="#" class="text-sm font-medium text-slate-600 transition hover:text-slate-950">Explore</a>
    </div>
    <div class="grid gap-4 sm:grid-cols-2">
        @foreach ($items as $item)
            <img src="{{ $item }}" alt="Editorial gallery image" class="h-56 w-full rounded-[1.25rem] object-cover transition duration-300 hover:scale-[1.02]" loading="lazy">
        @endforeach
    </div>
</section>
