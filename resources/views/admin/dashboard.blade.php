@extends('layouts.frontend')

@section('content')
<div class="min-h-screen bg-slate-950 text-slate-100">
    <div class="mx-auto flex max-w-7xl flex-col gap-6 px-4 py-8 sm:px-6 lg:flex-row lg:px-8">
        <aside class="w-full rounded-3xl border border-slate-800 bg-slate-900/80 p-6 lg:w-72">
            <div>
                <p class="text-sm font-semibold uppercase tracking-[0.3em] text-cyan-400">Admin Panel</p>
                <h1 class="mt-2 text-2xl font-semibold">News Portal</h1>
                <p class="mt-2 text-sm text-slate-400">Welcome back, {{ auth()->user()->name }}.</p>
            </div>

            <nav class="mt-8 space-y-2">
                <a href="#overview" class="block rounded-xl bg-slate-800 px-4 py-3 text-sm font-medium text-white">System Overview</a>
                <a href="#articles" class="block rounded-xl px-4 py-3 text-sm text-slate-300 transition hover:bg-slate-800">Article Management</a>
                <a href="#users" class="block rounded-xl px-4 py-3 text-sm text-slate-300 transition hover:bg-slate-800">User Management</a>
                <a href="#settings" class="block rounded-xl px-4 py-3 text-sm text-slate-300 transition hover:bg-slate-800">Site Settings</a>
            </nav>

            <form method="POST" action="{{ route('admin.logout') }}" class="mt-8">
                @csrf
                <button type="submit" class="w-full rounded-xl border border-slate-700 bg-slate-800 px-4 py-2 text-sm font-medium text-slate-200 transition hover:border-cyan-400 hover:text-cyan-300">Logout</button>
            </form>
        </aside>

        <main class="flex-1 space-y-6">
            <section id="overview" class="rounded-3xl border border-slate-800 bg-slate-900/80 p-6">
                <div class="flex flex-wrap items-center justify-between gap-4">
                    <div>
                        <p class="text-sm uppercase tracking-[0.3em] text-cyan-400">System Overview</p>
                        <h2 class="mt-2 text-3xl font-semibold">Control your newsroom in one place</h2>
                    </div>
                    <div class="rounded-full border border-cyan-500/40 bg-cyan-500/10 px-4 py-2 text-sm text-cyan-300">Live publishing</div>
                </div>

                <div class="mt-6 grid gap-4 md:grid-cols-3">
                    <div class="rounded-2xl border border-slate-800 bg-slate-950/70 p-5">
                        <p class="text-sm text-slate-400">Total visitors</p>
                        <p class="mt-2 text-3xl font-semibold">12.4k</p>
                    </div>
                    <div class="rounded-2xl border border-slate-800 bg-slate-950/70 p-5">
                        <p class="text-sm text-slate-400">Published stories</p>
                        <p class="mt-2 text-3xl font-semibold">118</p>
                    </div>
                    <div class="rounded-2xl border border-slate-800 bg-slate-950/70 p-5">
                        <p class="text-sm text-slate-400">Pending review</p>
                        <p class="mt-2 text-3xl font-semibold">7</p>
                    </div>
                </div>
            </section>

            <section id="articles" class="grid gap-6 lg:grid-cols-[1.2fr_0.8fr]">
                <div class="rounded-3xl border border-slate-800 bg-slate-900/80 p-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-xl font-semibold">Article Management</h3>
                        <button class="rounded-lg bg-cyan-500 px-4 py-2 text-sm font-semibold text-slate-950">New Article</button>
                    </div>
                    <ul class="mt-6 space-y-3 text-sm text-slate-300">
                        <li class="rounded-xl border border-slate-800 bg-slate-950/70 px-4 py-3">Breaking News update scheduled for 10:00 AM</li>
                        <li class="rounded-xl border border-slate-800 bg-slate-950/70 px-4 py-3">Editorial review for the technology feature</li>
                        <li class="rounded-xl border border-slate-800 bg-slate-950/70 px-4 py-3">Photo gallery approved for the weekend edition</li>
                    </ul>
                </div>

                <div class="rounded-3xl border border-slate-800 bg-slate-900/80 p-6">
                    <h3 class="text-xl font-semibold">Quick Actions</h3>
                    <div class="mt-6 space-y-3">
                        <a href="#" class="block rounded-xl border border-slate-800 px-4 py-3 text-sm text-slate-300 transition hover:border-cyan-400 hover:text-cyan-300">Publish latest update</a>
                        <a href="#" class="block rounded-xl border border-slate-800 px-4 py-3 text-sm text-slate-300 transition hover:border-cyan-400 hover:text-cyan-300">Review pending stories</a>
                        <a href="#" class="block rounded-xl border border-slate-800 px-4 py-3 text-sm text-slate-300 transition hover:border-cyan-400 hover:text-cyan-300">Manage homepage widgets</a>
                    </div>
                </div>
            </section>

            <section id="users" class="grid gap-6 lg:grid-cols-[0.9fr_1.1fr]">
                <div class="rounded-3xl border border-slate-800 bg-slate-900/80 p-6">
                    <h3 class="text-xl font-semibold">User Management</h3>
                    <p class="mt-2 text-sm text-slate-400">Keep your editors and moderators organized.</p>
                    <div class="mt-6 rounded-2xl border border-slate-800 bg-slate-950/70 p-4">
                        <p class="text-sm text-slate-400">Active admins</p>
                        <p class="mt-2 text-2xl font-semibold">3</p>
                    </div>
                </div>

                <div id="settings" class="rounded-3xl border border-slate-800 bg-slate-900/80 p-6">
                    <h3 class="text-xl font-semibold">Site Settings</h3>
                    <p class="mt-2 text-sm text-slate-400">Tune the site’s appearance and publishing workflow.</p>
                    <div class="mt-6 space-y-3 text-sm text-slate-300">
                        <div class="rounded-xl border border-slate-800 bg-slate-950/70 px-4 py-3">Homepage hero section</div>
                        <div class="rounded-xl border border-slate-800 bg-slate-950/70 px-4 py-3">Breaking news ticker</div>
                        <div class="rounded-xl border border-slate-800 bg-slate-950/70 px-4 py-3">Email newsletter settings</div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</div>
@endsection
