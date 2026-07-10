<section class="rounded-[2rem] border border-slate-200/80 bg-slate-950 p-6 text-slate-50 shadow-sm">
    <p class="text-sm font-semibold uppercase tracking-[0.25em] text-slate-400">Newsletter</p>
    <h3 class="mt-3 text-2xl font-semibold">{{ $newsletter['title'] }}</h3>
    <p class="mt-3 text-sm leading-7 text-slate-300">{{ $newsletter['description'] }}</p>
    <form class="mt-5 space-y-3" data-newsletter-form>
        <label class="block text-sm text-slate-300" for="newsletter-email">Email address</label>
        <input id="newsletter-email" name="email" type="email" required class="w-full rounded-full border border-slate-700 bg-slate-900 px-4 py-3 text-sm text-white placeholder:text-slate-500 focus:outline-none focus:ring-2 focus:ring-slate-400" placeholder="you@example.com">
        <button type="submit" class="w-full rounded-full bg-white px-4 py-3 text-sm font-semibold text-slate-950 transition hover:bg-slate-200">Subscribe</button>
    </form>
    <p class="mt-3 hidden text-sm text-emerald-300" data-newsletter-success>Thanks for subscribing. Your first briefing is on the way.</p>
    <p class="mt-3 text-xs text-slate-400">No spam. Unsubscribe anytime.</p>
</section>
