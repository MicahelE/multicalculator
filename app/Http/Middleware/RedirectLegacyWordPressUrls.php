<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

/**
 * The old WordPress site (pre-Laravel rebuild) left ?p=XXXXX links indexed
 * by Google. Laravel ignores the query string and serves whatever route
 * matched (usually the homepage) with a 200, which duplicates content
 * against the real canonical URL. Redirect them decisively instead of
 * relying on the canonical tag to soft-consolidate them.
 *
 * ponytail: blanket-redirects to home rather than mapping old post IDs to
 * new slugs — that WordPress ID->slug mapping no longer exists. If GSC later
 * shows a specific ?p= id worth preserving, add a specific redirect above
 * this catch-all.
 */
class RedirectLegacyWordPressUrls
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->query('p') !== null) {
            return redirect('/', 301);
        }

        return $next($request);
    }
}
