<?php

namespace Tests\Feature;

use Tests\TestCase;

class LegacyUrlRedirectTest extends TestCase
{
    /** Old WordPress ?p=XXXXX links should 301 to the homepage instead of duplicating it at 200. */
    public function test_legacy_wordpress_query_redirects_to_home(): void
    {
        $this->get('/?p=971143')->assertRedirect('/');
    }

    /** The redirect middleware must not interfere with normal calculator routes. */
    public function test_commission_page_still_loads_normally(): void
    {
        $this->get('/commission')->assertStatus(200);
    }
}
