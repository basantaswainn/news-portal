<footer class="border-t border-slate-200/80 bg-white/90">
    <div class="mx-auto flex max-w-7xl flex-col gap-8 px-4 py-10 sm:px-6 lg:flex-row lg:justify-between lg:px-8">
        <div class="max-w-sm">
            <a href="{{ url('/') }}" class="text-2xl font-semibold tracking-[0.25em] text-slate-950">ENTERPRISE NEWS</a>
            <p class="mt-4 text-sm leading-7 text-slate-600">Premium reporting, analysis and storytelling for modern audiences.</p>
        </div>
        <div class="grid gap-8 sm:grid-cols-3">
            <div>
                <h3 class="text-sm font-semibold uppercase tracking-[0.25em] text-slate-500">Quick Links</h3>
                <ul class="mt-4 space-y-2 text-sm text-slate-600">
                    @foreach ($links as $link)
                        <li><a href="{{ $link['url'] }}" class="transition hover:text-slate-950">{{ $link['label'] }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div>
                <h3 class="text-sm font-semibold uppercase tracking-[0.25em] text-slate-500">Follow</h3>
                <ul class="mt-4 space-y-2 text-sm text-slate-600">
                    @foreach ($socials as $social)
                        <li><a href="{{ $social['url'] }}" class="transition hover:text-slate-950">{{ $social['label'] }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div>
                <h3 class="text-sm font-semibold uppercase tracking-[0.25em] text-slate-500">About</h3>
                <p class="mt-4 text-sm leading-7 text-slate-600">Independent, editorially-led coverage for professionals and curious readers.</p>
            </div>
        </div>
    </div>
    <div class="border-t border-slate-200/80 px-4 py-5 text-center text-sm text-slate-500 sm:px-6 lg:px-8">
        © {{ date('Y') }} Enterprise News. All rights reserved.
    </div>
</footer>
