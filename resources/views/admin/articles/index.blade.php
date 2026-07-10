@extends('layouts.frontend')

@section('content')
<div class="min-h-screen bg-slate-950 text-slate-100">
    <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
        <div class="mb-6 flex flex-wrap items-center justify-between gap-4">
            <div>
                <p class="text-sm uppercase tracking-[0.3em] text-cyan-400">Article Management</p>
                <h1 class="mt-2 text-3xl font-semibold">Articles</h1>
            </div>
            <a href="{{ route('admin.articles.create') }}" class="rounded-lg bg-cyan-500 px-4 py-2 font-semibold text-slate-950">Create Article</a>
        </div>

        @if (session('success'))
            <div class="mb-6 rounded-xl border border-emerald-500/30 bg-emerald-500/10 px-4 py-3 text-sm text-emerald-300">
                {{ session('success') }}
            </div>
        @endif

        <div class="rounded-3xl border border-slate-800 bg-slate-900/80 p-6">
            <div class="overflow-x-auto">
                <table class="min-w-full text-left text-sm">
                    <thead>
                        <tr class="border-b border-slate-800 text-slate-400">
                            <th class="pb-3">Title</th>
                            <th class="pb-3">Status</th>
                            <th class="pb-3">Created</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($articles as $article)
                            <tr class="border-b border-slate-800/70">
                                <td class="py-4 font-medium text-slate-200">{{ $article->title }}</td>
                                <td class="py-4">
                                    <span class="rounded-full bg-slate-800 px-3 py-1 text-xs uppercase tracking-[0.2em] text-slate-300">{{ $article->status }}</span>
                                </td>
                                <td class="py-4 text-slate-400">{{ $article->created_at->format('M d, Y') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="py-8 text-center text-slate-400">No articles yet.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
