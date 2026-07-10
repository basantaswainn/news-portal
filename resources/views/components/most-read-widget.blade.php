<section class="rounded-[2rem] border border-slate-200/80 bg-white p-6 shadow-sm">
    <div class="mb-4 flex items-center justify-between">
        <h3 class="text-xl font-semibold text-slate-950">Most Read</h3>
        <a href="#" class="text-sm font-medium text-slate-600 transition hover:text-slate-950">View all</a>
    </div>
    <ol class="space-y-3">
        @foreach ($items as $item)
            <li class="flex items-center gap-3 rounded-[1rem] bg-slate-50 p-3">
                <span class="flex h-8 w-8 items-center justify-center rounded-full bg-slate-950 text-sm font-semibold text-white">{{ $item['count'] }}</span>
                <span class="text-sm font-medium leading-6 text-slate-700">{{ $item['title'] }}</span>
            </li>
        @endforeach
    </ol>
</section>
