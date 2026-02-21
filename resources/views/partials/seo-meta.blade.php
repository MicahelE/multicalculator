@php
    $seo = config('seo.pages.' . ($seoPage ?? 'home'));
    $siteName = config('seo.site_name', 'MultiCalculator');
    $baseUrl = config('seo.base_url', 'https://multicalculator.itechy.xyz');
@endphp

<title>{{ $seo['title'] ?? $siteName }}</title>
<meta name="description" content="{{ $seo['description'] ?? '' }}">
@if(!empty($seo['keywords']))
<meta name="keywords" content="{{ $seo['keywords'] }}">
@endif
<link rel="canonical" href="{{ $baseUrl }}{{ $seo['canonical'] ?? '/' }}">

<!-- Open Graph -->
<meta property="og:title" content="{{ $seo['title'] ?? $siteName }}">
<meta property="og:description" content="{{ $seo['description'] ?? '' }}">
<meta property="og:type" content="website">
<meta property="og:url" content="{{ $baseUrl }}{{ $seo['canonical'] ?? '/' }}">
<meta property="og:site_name" content="{{ $siteName }}">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="{{ $seo['title'] ?? $siteName }}">
<meta name="twitter:description" content="{{ $seo['description'] ?? '' }}">
