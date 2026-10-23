<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    /**
     * Generate and return the sitemap XML from config('seo.pages')
     */
    public function index(Request $request): Response
    {
        $baseUrl = rtrim(config('app.url') ?: $request->getSchemeAndHttpHost(), '/');

        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

        foreach (config('seo.pages') as $key => $page) {
            // lastmod = when the page's view last changed; deploys `git pull`, which only touches changed files.
            // The home page also lists every calculator, so config changes count for it.
            $files = [resource_path("views/$key.blade.php")];
            if ($key === 'home') {
                array_push($files, config_path('seo.php'), config_path('tools.php'));
            }
            $modified = max(array_map(fn ($f) => is_file($f) ? filemtime($f) : 0, $files)) ?: time();

            $url = $baseUrl . ($page['canonical'] === '/' ? '' : $page['canonical']);
            $xml .= '  <url>' . "\n";
            $xml .= '    <loc>' . htmlspecialchars($url, ENT_XML1, 'UTF-8') . '</loc>' . "\n";
            $xml .= '    <lastmod>' . date('Y-m-d', $modified) . '</lastmod>' . "\n";
            $xml .= '    <changefreq>' . ($key === 'home' ? 'weekly' : 'monthly') . '</changefreq>' . "\n";
            $xml .= '    <priority>' . ($key === 'home' ? '1.0' : '0.8') . '</priority>' . "\n";
            $xml .= '  </url>' . "\n";
        }

        $xml .= '</urlset>';

        return response($xml, 200)
            ->header('Content-Type', 'application/xml')
            ->header('Cache-Control', 'public, max-age=3600');
    }
}
