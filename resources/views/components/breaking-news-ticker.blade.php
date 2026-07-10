<section class="border-y border-slate-200/80 bg-slate-900 text-slate-50">
    <div class="mx-auto flex max-w-7xl items-center gap-4 px-4 py-3 sm:px-6 lg:px-8">
        <span class="shrink-0 rounded-full bg-white/10 px-3 py-1 text-sm font-semibold uppercase tracking-[0.25em]">Breaking News</span>
        <div class="relative flex-1 overflow-hidden">
            <div class="animate-[marquee_18s_linear_infinite] whitespace-nowrap hover:[animation-play-state:paused]">
                @foreach ($items as $item)
                    <span class="mr-10 text-sm font-medium">{{ $item['title'] }}</span>
                @endforeach
            </div>
        </div>
    </div>
</section>
