<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Response;

class PageController extends Controller
{
    public function home(): View
    {
        return view('pages.home', [
            'meta' => [
                'title' => 'SOS wilde dieren | Opvangcentrum voor vogels en wilde dieren',
                'description' => 'SOS wilde dieren vangt en verzorgt zieke, gewonde en hulpbehoevende wilde dieren in Geraardsbergen.',
                'canonical' => $this->canonical('/'),
            ],
            'workItems' => $this->workItems(),
            'supportItems' => $this->supportItems(),
            'newsItems' => $this->newsItems(),
        ]);
    }

    public function about(): View
    {
        return view('pages.about', [
            'meta' => $this->meta('Wie zijn wij?', 'Maak kennis met SOS wilde dieren, het opvangcentrum voor zieke, gewonde en hulpbehoevende wilde dieren.', '/wie-zijn-wij'),
            'workItems' => $this->workItems(),
        ]);
    }

    public function work(): View
    {
        return view('pages.work', [
            'meta' => $this->meta('Wat doen wij?', 'Van redding tot verzorging, revalidatie en vrijlating: zo helpt SOS wilde dieren wilde dieren terug naar de natuur.', '/wat-doen-wij'),
            'workItems' => $this->workItems(),
        ]);
    }

    public function help(): View
    {
        return view('pages.help', [
            'meta' => $this->meta('Hoe helpen?', 'Steun SOS wilde dieren als lid, schenker, vrijwilliger, bedrijf of met materiele steun.', '/hoe-helpen'),
            'supportItems' => $this->supportItems(),
        ]);
    }

    public function visit(): View
    {
        return view('pages.visit', [
            'meta' => $this->meta('Op bezoek', 'Praktische informatie voor een rustig en respectvol bezoek aan SOS wilde dieren in Geraardsbergen.', '/op-bezoek'),
        ]);
    }

    public function contact(): View
    {
        return view('pages.contact', [
            'meta' => $this->meta('Contact', 'Neem contact op met SOS wilde dieren. Bel eerst bij een dier in nood.', '/contact'),
        ]);
    }

    public function robots(): Response
    {
        $sitemap = config('sos.url').'/sitemap.xml';

        return response("User-agent: *\nAllow: /\nSitemap: {$sitemap}\n", 200, [
            'Content-Type' => 'text/plain; charset=UTF-8',
        ]);
    }

    public function sitemap(): Response
    {
        $urls = collect(['/', '/wie-zijn-wij', '/wat-doen-wij', '/hoe-helpen', '/op-bezoek', '/contact'])
            ->map(fn (string $path): string => '<url><loc>'.e($this->canonical($path)).'</loc><changefreq>monthly</changefreq><priority>'.($path === '/' ? '1.0' : '0.8').'</priority></url>')
            ->implode('');

        return response('<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'.$urls.'</urlset>', 200, [
            'Content-Type' => 'application/xml; charset=UTF-8',
        ]);
    }

    private function meta(string $title, string $description, string $path): array
    {
        return [
            'title' => $title.' | SOS wilde dieren',
            'description' => $description,
            'canonical' => $this->canonical($path),
        ];
    }

    private function canonical(string $path): string
    {
        return rtrim((string) config('sos.url'), '/').($path === '/' ? '' : $path);
    }

    private function workItems(): array
    {
        return [
            ['title' => 'Opvang & redding', 'text' => 'We vangen en redden zieke, gewonde en hulpbehoevende wilde dieren.'],
            ['title' => 'Verzorging & revalidatie', 'text' => 'Dieren krijgen rust, zorg en aangepaste voeding tot ze sterk genoeg zijn.'],
            ['title' => 'Vrijlaten in de natuur', 'text' => 'Na herstel keren dieren terug naar hun natuurlijke leefomgeving.'],
            ['title' => 'Bewustmaking', 'text' => 'We brengen mensen dichter bij wilde dieren en hun plaats in de natuur.'],
        ];
    }

    private function supportItems(): array
    {
        return [
            ['id' => 'lid', 'title' => 'Word lid', 'text' => 'Steun ons met een jaarlijks lidmaatschap en help dieren in nood.'],
            ['id' => 'gift', 'title' => 'Doe een gift', 'text' => 'Elke bijdrage helpt bij voeding, verzorging, materiaal en opvang.'],
            ['id' => 'vrijwilliger', 'title' => 'Vrijwilliger worden', 'text' => 'Help mee achter de schermen, bij onderhoud of ondersteuning.'],
            ['id' => 'materiaal', 'title' => 'Materiele steun', 'text' => 'Ook materiaal, voeding en praktische hulp maken verschil.'],
            ['id' => 'testament', 'title' => 'Testament', 'text' => 'Neem SOS wilde dieren op in je nalatenschap.'],
            ['id' => 'bedrijven', 'title' => 'Bedrijven', 'text' => 'Bedrijven kunnen helpen met sponsoring, materiaal of acties.'],
        ];
    }

    private function newsItems(): array
    {
        return [
            [
                'title' => 'Een weekend vol spechtenzorgen',
                'date' => '08.06.2026',
                'image' => 'news-spechten.jpg',
                'alt' => 'Twee jonge spechten in opvang.',
                'text' => 'In korte tijd kwamen meerdere jonge spechten binnen na botsingen tegen ramen.',
            ],
            [
                'title' => 'Niet enkel regen die uit de lucht valt',
                'date' => '06.06.2026',
                'image' => 'news-weasel.jpg',
                'alt' => 'Een jonge wezel wordt gevoerd.',
                'text' => 'Een kleine wezel overleefde een val na een gevecht hoog in de lucht.',
            ],
            [
                'title' => 'Vrolijk Pasen',
                'date' => '04.04.2026',
                'image' => 'news-ducks.jpg',
                'alt' => 'Jonge eendenkuikens in de opvang.',
                'text' => 'Het jonge dierenseizoen brengt opnieuw heel wat moederloze kuikens binnen.',
            ],
        ];
    }
}
