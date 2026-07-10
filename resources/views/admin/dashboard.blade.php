@extends('layouts.frontend')

@section('content')
<div class="min-h-screen bg-slate-50 text-slate-800">
    <div class="mx-auto flex max-w-7xl flex-col gap-6 px-4 py-8 sm:px-6 lg:flex-row lg:px-8">
        <aside class="w-full rounded-3xl border border-slate-200 bg-white p-6 shadow-sm lg:w-72">
            <div>
                <p class="text-sm font-semibold uppercase tracking-[0.3em] text-cyan-600">Admin Panel</p>
                <h1 class="mt-2 text-2xl font-semibold text-slate-900">News Portal</h1>
                <p class="mt-2 text-sm text-slate-500">Welcome back, {{ auth()->user()->name }}.</p>
            </div>

            <nav class="mt-8 space-y-2">
                <a href="#overview" class="block rounded-xl bg-cyan-50 px-4 py-3 text-sm font-medium text-cyan-700">System Overview</a>
                <a href="#articles" class="block rounded-xl px-4 py-3 text-sm text-slate-600 transition hover:bg-slate-100">Article Management</a>
                <a href="#users" class="block rounded-xl px-4 py-3 text-sm text-slate-600 transition hover:bg-slate-100">User Management</a>
                <a href="#settings" class="block rounded-xl px-4 py-3 text-sm text-slate-600 transition hover:bg-slate-100">Site Settings</a>
            </nav>

            <form method="POST" action="{{ route('admin.logout') }}" class="mt-8">
                @csrf
                <button type="submit" class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-2 text-sm font-medium text-slate-700 transition hover:border-cyan-500 hover:text-cyan-700">Logout</button>
            </form>
        </aside>

        <main class="flex-1 space-y-6">
            <section id="overview" class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
                <div class="flex flex-wrap items-center justify-between gap-4">
                    <div>
                        <p class="text-sm uppercase tracking-[0.3em] text-cyan-600">System Overview</p>
                        <h2 class="mt-2 text-3xl font-semibold text-slate-900">Control your newsroom in one place</h2>
                    </div>
                    <div class="rounded-full border border-cyan-200 bg-cyan-50 px-4 py-2 text-sm text-cyan-700">Live publishing</div>
                </div>

                <div class="mt-6 grid gap-4 md:grid-cols-3">
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-5">
                        <p class="text-sm text-slate-500">Total visitors</p>
                        <p class="mt-2 text-3xl font-semibold">12.4k</p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-5">
                        <p class="text-sm text-slate-500">Published stories</p>
                        <p class="mt-2 text-3xl font-semibold">118</p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-5">
                        <p class="text-sm text-slate-500">Pending review</p>
                        <p class="mt-2 text-3xl font-semibold">7</p>
                    </div>
                </div>
            </section>

            <section id="articles" class="grid gap-6 lg:grid-cols-[1.2fr_0.8fr]">
                <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
                    <div class="flex items-center justify-between">
                        <h3 class="text-xl font-semibold text-slate-900">Article Management</h3>
                        <button class="rounded-lg bg-cyan-600 px-4 py-2 text-sm font-semibold text-white">New Article</button>
                    </div>
                    <ul class="mt-6 space-y-3 text-sm text-slate-600">
                        <li class="rounded-xl border border-slate-200 bg-slate-50 px-4 py-3">Breaking News update scheduled for 10:00 AM</li>
                        <li class="rounded-xl border border-slate-200 bg-slate-50 px-4 py-3">Editorial review for the technology feature</li>
                        <li class="rounded-xl border border-slate-200 bg-slate-50 px-4 py-3">Photo gallery approved for the weekend edition</li>
                    </ul>
                </div>

                <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
                    <h3 class="text-xl font-semibold text-slate-900">Quick Actions</h3>
                    <div class="mt-6 space-y-3">
                        <a href="#" class="block rounded-xl border border-slate-200 px-4 py-3 text-sm text-slate-600 transition hover:border-cyan-500 hover:text-cyan-700">Publish latest update</a>
                        <a href="#" class="block rounded-xl border border-slate-200 px-4 py-3 text-sm text-slate-600 transition hover:border-cyan-500 hover:text-cyan-700">Review pending stories</a>
                        <a href="#" class="block rounded-xl border border-slate-200 px-4 py-3 text-sm text-slate-600 transition hover:border-cyan-500 hover:text-cyan-700">Manage homepage widgets</a>
                    </div>
                </div>
            </section>

            <section id="users" class="grid gap-6 lg:grid-cols-[0.9fr_1.1fr]">
                <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
                    <h3 class="text-xl font-semibold text-slate-900">User Management</h3>
                    <p class="mt-2 text-sm text-slate-500">Keep your editors and moderators organized.</p>
                    <div class="mt-6 rounded-2xl border border-slate-200 bg-slate-50 p-4">
                        <p class="text-sm text-slate-500">Active admins</p>
                        <p class="mt-2 text-2xl font-semibold">3</p>
                    </div>
                </div>

                <div id="settings" class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
                    <h3 class="text-xl font-semibold text-slate-900">Site Settings</h3>
                    <p class="mt-2 text-sm text-slate-500">Tune the site’s appearance and publishing workflow.</p>
                    <div class="mt-6 space-y-3 text-sm text-slate-600">
                        <div class="rounded-xl border border-slate-200 bg-slate-50 px-4 py-3">Homepage hero section</div>
                        <div class="rounded-xl border border-slate-200 bg-slate-50 px-4 py-3">Breaking news ticker</div>
                        <div class="rounded-xl border border-slate-200 bg-slate-50 px-4 py-3">Email newsletter settings</div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</div>
@endsection
