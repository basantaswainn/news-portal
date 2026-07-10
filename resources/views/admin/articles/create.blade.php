@extends('layouts.frontend')

@section('content')
<div class="min-h-screen bg-slate-50 text-slate-800">
    <div class="mx-auto max-w-3xl px-4 py-8 sm:px-6 lg:px-8">
        <div class="mb-6">
            <p class="text-sm uppercase tracking-[0.3em] text-cyan-600">Article Management</p>
            <h1 class="mt-2 text-3xl font-semibold text-slate-900">Create Article</h1>
        </div>

        <form method="POST" action="{{ route('admin.articles.store') }}" class="space-y-5 rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
            @csrf

            <div>
                <label class="mb-2 block text-sm font-medium">Title</label>
                <input name="title" value="{{ old('title') }}" required class="w-full rounded-xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-800 outline-none focus:border-cyan-500" />
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium">Excerpt</label>
                <textarea name="excerpt" rows="3" class="w-full rounded-xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-800 outline-none focus:border-cyan-500">{{ old('excerpt') }}</textarea>
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium">Content</label>
                <textarea name="content" rows="8" class="w-full rounded-xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-800 outline-none focus:border-cyan-500">{{ old('content') }}</textarea>
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium">Status</label>
                <select name="status" class="w-full rounded-xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-800 outline-none focus:border-cyan-500">
                    <option value="draft">Draft</option>
                    <option value="published">Published</option>
                </select>
            </div>

            <div class="flex gap-3">
                <button type="submit" class="rounded-lg bg-cyan-600 px-4 py-2 font-semibold text-white">Save Article</button>
                <a href="{{ route('admin.articles.index') }}" class="rounded-lg border border-slate-300 px-4 py-2 font-semibold text-slate-600">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
