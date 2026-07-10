<?php

namespace App\Services;

use App\ViewModels\HomeViewModel;
use Carbon\Carbon;

class FrontendService
{
    public function getHomeViewModel(): HomeViewModel
    {
        $today = Carbon::now()->translatedFormat('l, d M Y');

        return new HomeViewModel([
            'today' => $today,
            'weatherLabel' => '24°C · Clear skies',
            'breadcrumbs' => [
                ['label' => 'Home', 'url' => '/'],
                ['label' => 'World', 'url' => '#'],
                ['label' => 'Coverage', 'url' => null],
            ],
            'navigation' => [
                ['label' => 'World', 'url' => '#'],
                ['label' => 'Business', 'url' => '#'],
                ['label' => 'Technology', 'url' => '#'],
                ['label' => 'Culture', 'url' => '#'],
                ['label' => 'Sports', 'url' => '#'],
            ],
            'breakingNews' => [
                ['title' => 'Central Bank signals lower rates as inflation cools across key markets.'],
                ['title' => 'New clean-energy partnership accelerates grid modernization in Europe.'],
                ['title' => 'Editors confirm a new wave of AI tools reshaping newsroom workflows.'],
            ],
            'heroStory' => [
                'title' => 'Global leaders gather for a new era of resilient, technology-led growth.',
                'summary' => 'From climate resilience to sovereign AI strategy, the industry is redefining what modern leadership looks like in 2026.',
                'image' => 'https://images.unsplash.com/photo-1495020689067-958852a7765e?auto=format&fit=crop&w=1200&q=80',
                'category' => 'Analysis',
                'author' => 'Mina Chen',
                'date' => '6 min ago',
                'readTime' => '7 min read',
            ],
            'featuredCards' => [
                [
                    'title' => 'The next wave of enterprise software is being built for trust',
                    'category' => 'Enterprise',
                    'image' => 'https://images.unsplash.com/photo-1516321497487-e288fb19713f?auto=format&fit=crop&w=900&q=80',
                ],
                [
                    'title' => 'Cities are racing to modernize transit with data-led planning',
                    'category' => 'Cities',
                    'image' => 'https://images.unsplash.com/photo-1480714378408-67cf0d13bc1b?auto=format&fit=crop&w=900&q=80',
                ],
                [
                    'title' => 'What investors want from sustainable manufacturing in 2026',
                    'category' => 'Markets',
                    'image' => 'https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?auto=format&fit=crop&w=900&q=80',
                ],
                [
                    'title' => 'Media groups expand digital-first distribution for audience growth',
                    'category' => 'Media',
                    'image' => 'https://images.unsplash.com/photo-1495020689067-958852a7765e?auto=format&fit=crop&w=900&q=80',
                ],
            ],
            'trending' => [
                [
                    'title' => 'The rise of precision medicine in everyday care',
                    'category' => 'Health',
                    'views' => '18.4K',
                    'readTime' => '5 min',
                    'image' => 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&w=900&q=80',
                ],
                [
                    'title' => 'Why regional airlines are redesigning loyalty programs',
                    'category' => 'Travel',
                    'views' => '12.1K',
                    'readTime' => '4 min',
                    'image' => 'https://images.unsplash.com/photo-1436491865332-7a61a109cc05?auto=format&fit=crop&w=900&q=80',
                ],
                [
                    'title' => 'Inside the retail supply chain reinvention',
                    'category' => 'Business',
                    'views' => '9.8K',
                    'readTime' => '6 min',
                    'image' => 'https://images.unsplash.com/photo-1517048676732-d65bc937f952?auto=format&fit=crop&w=900&q=80',
                ],
            ],
            'latestNews' => [
                [
                    'title' => 'Boardrooms revisit cyber resilience with AI-driven threat monitoring.',
                    'summary' => 'Security teams are prioritizing governance, automation and fast incident response.',
                    'category' => 'Technology',
                    'date' => '4h ago',
                    'image' => 'https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=900&q=80',
                ],
                [
                    'title' => 'New housing policy aims to balance affordability with long-term growth.',
                    'summary' => 'Officials say the plan focuses on transit-led development and mixed-use districts.',
                    'category' => 'Politics',
                    'date' => '5h ago',
                    'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=900&q=80',
                ],
                [
                    'title' => 'Sports franchises invest in fan experience as stadiums go digital.',
                    'summary' => 'Immersive screens and mobile-first concessions are changing match-day expectations.',
                    'category' => 'Sports',
                    'date' => '7h ago',
                    'image' => 'https://images.unsplash.com/photo-1547347298-4074fc3086f0?auto=format&fit=crop&w=900&q=80',
                ],
                [
                    'title' => 'Private capital pours into climate infrastructure across emerging markets.',
                    'summary' => 'Analysts say the capital wave reflects stronger public-private collaboration.',
                    'category' => 'Business',
                    'date' => '9h ago',
                    'image' => 'https://images.unsplash.com/photo-1466611653911-95081537e5b7?auto=format&fit=crop&w=900&q=80',
                ],
            ],
            'categorySections' => [
                [
                    'name' => 'Technology',
                    'featured' => [
                        'title' => 'Cloud architecture becomes the backbone of global digital operations.',
                        'image' => 'https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=1000&q=80',
                    ],
                    'items' => [
                        ['title' => 'Quantum startups gain ground in enterprise R&D', 'category' => 'Technology'],
                        ['title' => 'Semiconductor firms expand with regional chip hubs', 'category' => 'Technology'],
                        ['title' => 'AI copilots are changing support operations', 'category' => 'Technology'],
                        ['title' => 'Open-source standards gain momentum in finance', 'category' => 'Technology'],
                    ],
                ],
                [
                    'name' => 'Business',
                    'featured' => [
                        'title' => 'Investors look for durable growth in borderless commerce.',
                        'image' => 'https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?auto=format&fit=crop&w=1000&q=80',
                    ],
                    'items' => [
                        ['title' => 'Supply-chain partnerships now drive margins', 'category' => 'Business'],
                        ['title' => 'Retail brands rethink loyalty in a crowded market', 'category' => 'Business'],
                        ['title' => 'Private equity targets resilient industrial software', 'category' => 'Business'],
                        ['title' => 'Green finance shapes the new capital stack', 'category' => 'Business'],
                    ],
                ],
            ],
            'videos' => [
                ['title' => 'How the world is rebuilding critical infrastructure', 'duration' => '07:18', 'image' => 'https://images.unsplash.com/photo-1477959858617-67f85cf4f1df?auto=format&fit=crop&w=900&q=80'],
                ['title' => 'Why premium journalism still matters in the AI era', 'duration' => '04:42', 'image' => 'https://images.unsplash.com/photo-1495020689067-958852a7765e?auto=format&fit=crop&w=900&q=80'],
                ['title' => 'The next decade of smart cities', 'duration' => '06:10', 'image' => 'https://images.unsplash.com/photo-1480714378408-67cf0d13bc1b?auto=format&fit=crop&w=900&q=80'],
            ],
            'gallery' => [
                'https://images.unsplash.com/photo-1516321497487-e288fb19713f?auto=format&fit=crop&w=800&q=80',
                'https://images.unsplash.com/photo-1495020689067-958852a7765e?auto=format&fit=crop&w=800&q=80',
                'https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?auto=format&fit=crop&w=800&q=80',
                'https://images.unsplash.com/photo-1477959858617-67f85cf4f1df?auto=format&fit=crop&w=800&q=80',
            ],
            'mostRead' => [
                ['title' => 'The new rules of enterprise AI deployment', 'count' => '1'],
                ['title' => 'What next for global energy markets', 'count' => '2'],
                ['title' => 'How cities are using public data to reduce emissions', 'count' => '3'],
                ['title' => 'Why media leaders are rethinking subscriptions', 'count' => '4'],
                ['title' => 'A practical roadmap for sustainable growth', 'count' => '5'],
            ],
            'editorsPicks' => [
                [
                    'title' => 'Inside the future of hybrid work',
                    'summary' => 'Design and productivity executives are rewriting the office playbook.',
                    'image' => 'https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=1000&q=80',
                ],
                [
                    'title' => 'The quiet power of regional journalism',
                    'summary' => 'Local reporting is becoming more critical than ever for civic trust.',
                    'image' => 'https://images.unsplash.com/photo-1504711434969-e33886168f5c?auto=format&fit=crop&w=1000&q=80',
                ],
            ],
            'ads' => [
                'top' => ['title' => 'Premium Corporate Briefing', 'description' => 'A weekly intelligence report for decision-makers.', 'cta' => 'Preview'],
                'sidebar' => ['title' => 'Ad Space', 'description' => 'Sponsorship placeholder for high-value brand campaigns.', 'cta' => 'Contact Us'],
                'content' => ['title' => 'Strategic Insights', 'description' => 'A thought-leadership banner ready for a partner brand.', 'cta' => 'Learn More'],
                'footer' => ['title' => 'Innovation Report', 'description' => 'This section can be replaced with your campaign creative.', 'cta' => 'Explore'],
            ],
            'newsletter' => [
                'title' => 'Get the daily briefing',
                'description' => 'Subscribe for curated reporting, analysis and market signals in your inbox.',
            ],
            'footerLinks' => [
                ['label' => 'Quick Links', 'url' => '#'],
                ['label' => 'Categories', 'url' => '#'],
                ['label' => 'About', 'url' => '#'],
                ['label' => 'Privacy', 'url' => '#'],
                ['label' => 'Terms', 'url' => '#'],
                ['label' => 'Contact', 'url' => '#'],
            ],
            'socials' => [
                ['label' => 'X', 'url' => '#'],
                ['label' => 'LinkedIn', 'url' => '#'],
                ['label' => 'Instagram', 'url' => '#'],
            ],
        ]);
    }
}
