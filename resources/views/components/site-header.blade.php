<header class="sticky top-0 z-40 border-b border-slate-200/70 bg-white/90 backdrop-blur-xl">
    <div class="mx-auto flex max-w-7xl flex-col px-4 py-3 sm:px-6 lg:px-8">
        <div class="flex flex-wrap items-center justify-between gap-3 border-b border-slate-200/80 pb-3 text-sm text-slate-600">
            <div class="flex flex-wrap items-center gap-4">
                <span class="font-medium text-slate-900">{{ $today }}</span>
                <span class="rounded-full bg-slate-100 px-3 py-1">{{ $weather }}</span>
                <span class="hidden sm:block">EN</span>
            </div>
            <div class="flex items-center gap-4">
                <a href="#" class="transition hover:text-slate-950">Login</a>
                <a href="#" class="rounded-full border border-slate-300 px-3 py-1.5 font-medium transition hover:border-slate-900 hover:text-slate-950">Register</a>
                <a href="#" class="transition hover:text-slate-950" aria-label="Search">⌕</a>
                <div class="flex gap-2">
                    <a href="#" class="transition hover:text-slate-950" aria-label="X">𝕏</a>
                    <a href="#" class="transition hover:text-slate-950" aria-label="LinkedIn">in</a>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-between gap-4 py-4">
            <a href="{{ url('/') }}" class="text-2xl font-semibold tracking-[0.25em] text-slate-950 sm:text-3xl">ENTERPRISE NEWS</a>
            <nav class="hidden items-center gap-6 lg:flex">
                @foreach ($navigation as $item)
                    <a href="{{ $item['url'] }}" class="text-sm font-medium uppercase tracking-[0.2em] text-slate-600 transition hover:text-slate-950">{{ $item['label'] }}</a>
                @endforeach
            </nav>
            <button class="rounded-full border border-slate-300 p-2 text-slate-700 lg:hidden" data-mobile-nav-toggle aria-controls="mobile-nav" aria-expanded="false" aria-label="Open menu">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /></svg>
            </button>
        </div>

        <nav id="mobile-nav" class="hidden flex-col gap-3 border-t border-slate-200/80 pt-3 lg:hidden">
            @foreach ($navigation as $item)
                <a href="{{ $item['url'] }}" class="text-sm font-medium uppercase tracking-[0.2em] text-slate-600 transition hover:text-slate-950">{{ $item['label'] }}</a>
            @endforeach
        </nav>
    </div>
</header>
