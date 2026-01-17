<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    /**
     * Generate and return the sitemap XML
     */
    public function index(Request $request): Response
    {
        // Get base URL from config or use the current request's base URL
        $baseUrl = config('app.url') ?: $request->getSchemeAndHttpHost();
        
        // Remove trailing slash if present
        $baseUrl = rtrim($baseUrl, '/');
        
        // Define all routes with their priorities and change frequencies
        $routes = [
            [
                'url' => $baseUrl,
                'priority' => '1.0',
                'changefreq' => 'weekly',
            ],
            [
                'url' => $baseUrl . '/average',
                'priority' => '0.8',
                'changefreq' => 'monthly',
            ],
            [
                'url' => $baseUrl . '/payraise',
                'priority' => '0.8',
                'changefreq' => 'monthly',
            ],
            [
                'url' => $baseUrl . '/discount',
                'priority' => '0.8',
                'changefreq' => 'monthly',
            ],
            [
                'url' => $baseUrl . '/markup',
                'priority' => '0.8',
                'changefreq' => 'monthly',
            ],
            [
                'url' => $baseUrl . '/monthly-income',
                'priority' => '0.8',
                'changefreq' => 'monthly',
            ],
            [
                'url' => $baseUrl . '/overtime',
                'priority' => '0.8',
                'changefreq' => 'monthly',
            ],
            [
                'url' => $baseUrl . '/commission',
                'priority' => '0.8',
                'changefreq' => 'monthly',
            ],
            [
                'url' => $baseUrl . '/cagr',
                'priority' => '0.8',
                'changefreq' => 'monthly',
            ],
        ];

        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

        foreach ($routes as $route) {
            $xml .= '  <url>' . "\n";
            $xml .= '    <loc>' . htmlspecialchars($route['url'], ENT_XML1, 'UTF-8') . '</loc>' . "\n";
            $xml .= '    <lastmod>' . date('Y-m-d') . '</lastmod>' . "\n";
            $xml .= '    <changefreq>' . $route['changefreq'] . '</changefreq>' . "\n";
            $xml .= '    <priority>' . $route['priority'] . '</priority>' . "\n";
            $xml .= '  </url>' . "\n";
        }

        $xml .= '</urlset>';

        return response($xml, 200)
            ->header('Content-Type', 'application/xml')
            ->header('Cache-Control', 'public, max-age=3600');
    }
}

