@extends('layouts.frontend')

@section('content')
<div class="min-h-screen bg-[radial-gradient(circle_at_top,_rgba(255,255,255,0.14),_transparent_55%)] text-slate-900">
    <x-site-header :navigation="$viewModel->navigation" :today="$viewModel->today" :weather="$viewModel->weatherLabel" />
    <x-breaking-news-ticker :items="$viewModel->breakingNews" />

    <main class="mx-auto flex max-w-7xl flex-col gap-8 px-4 py-8 sm:px-6 lg:px-8">
        <x-breadcrumb :items="$viewModel->breadcrumbs" />

        <div class="grid gap-8 xl:grid-cols-[1.7fr_0.8fr]">
            <div class="space-y-8">
                <x-hero-section :story="$viewModel->heroStory" :cards="$viewModel->featuredCards" />
                <x-trending-section :items="$viewModel->trending" />
                <x-latest-news-section :items="$viewModel->latestNews" />

                <div class="grid gap-8 lg:grid-cols-2">
                    @foreach ($viewModel->categorySections as $category)
                        <x-category-block :category="$category" />
                    @endforeach
                </div>

                <x-video-section :videos="$viewModel->videos" />
                <x-photo-gallery :items="$viewModel->gallery" />
                <x-editors-picks-section :items="$viewModel->editorsPicks" />
            </div>

            <aside class="space-y-8">
                <x-advertisement-banner :advertisement="$viewModel->ads['sidebar']" />
                <x-most-read-widget :items="$viewModel->mostRead" />
                <x-advertisement-banner :advertisement="$viewModel->ads['content']" />
                <x-newsletter-section :newsletter="$viewModel->newsletter" />
            </aside>
        </div>
    </main>

    <x-site-footer :links="$viewModel->footerLinks" :socials="$viewModel->socials" />
</div>
@endsection
