<?php

namespace Tests\Feature;

use Tests\TestCase;

class PublicPagesTest extends TestCase
{
    public function test_public_pages_render_successfully(): void
    {
        $pages = [
            '/' => 'Samen voor wilde dieren',
            '/wie-zijn-wij' => 'Wie zijn wij?',
            '/wat-doen-wij' => 'Wat doen wij?',
            '/hoe-helpen' => 'Hoe helpen?',
            '/op-bezoek' => 'Op bezoek',
            '/contact' => 'Contact',
        ];

        foreach ($pages as $url => $expectedText) {
            $this->get($url)
                ->assertOk()
                ->assertSee($expectedText)
                ->assertSee('0468 / 28 23 68')
                ->assertSee('info@soswildedieren.be');
        }
    }

    public function test_old_urls_redirect_to_new_routes(): void
    {
        $redirects = [
            '/content/wie-zijn-wij' => '/wie-zijn-wij',
            '/node/4' => '/wat-doen-wij',
            '/node/9' => '/hoe-helpen',
            '/content/op-bezoek-0' => '/op-bezoek',
            '/node/11' => '/hoe-helpen',
            '/content/contact' => '/contact',
            '/content/help-ik-vind-een-dier' => '/contact',
            '/frontpage' => '/',
        ];

        foreach ($redirects as $from => $to) {
            $this->get($from)->assertRedirect($to)->assertStatus(301);
        }
    }

    public function test_sitemap_and_robots_are_available(): void
    {
        $this->get('/sitemap.xml')
            ->assertOk()
            ->assertHeader('content-type', 'application/xml; charset=UTF-8')
            ->assertSee('https://www.sos-wildedieren.be/contact');

        $this->get('/robots.txt')
            ->assertOk()
            ->assertSee('Sitemap: https://www.sos-wildedieren.be/sitemap.xml');
    }
}
