@extends('layouts.frontend')

@section('content')
<div class="min-h-screen bg-slate-950 text-slate-100">
    <div class="mx-auto max-w-7xl px-4 py-10 sm:px-6 lg:px-8">
        <div class="flex flex-wrap items-center justify-between gap-4">
            <div>
                <p class="text-sm font-semibold uppercase tracking-[0.3em] text-cyan-400">Admin Panel</p>
                <h1 class="mt-2 text-3xl font-semibold">Dashboard</h1>
                <p class="mt-2 text-slate-400">Welcome back, {{ auth()->user()->name }}.</p>
            </div>
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit" class="rounded-lg border border-slate-700 bg-slate-900 px-4 py-2 text-sm font-medium text-slate-200 transition hover:border-cyan-400 hover:text-cyan-300">Logout</button>
            </form>
        </div>

        <div class="mt-8 grid gap-6 md:grid-cols-3">
            <div class="rounded-2xl border border-slate-800 bg-slate-900 p-6">
                <p class="text-sm text-slate-400">Total visitors</p>
                <p class="mt-3 text-3xl font-semibold">12.4k</p>
            </div>
            <div class="rounded-2xl border border-slate-800 bg-slate-900 p-6">
                <p class="text-sm text-slate-400">Published stories</p>
                <p class="mt-3 text-3xl font-semibold">118</p>
            </div>
            <div class="rounded-2xl border border-slate-800 bg-slate-900 p-6">
                <p class="text-sm text-slate-400">Pending review</p>
                <p class="mt-3 text-3xl font-semibold">7</p>
            </div>
        </div>
    </div>
</div>
@endsection
