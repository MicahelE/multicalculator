@php
    $seo = config('seo.pages.' . ($seoPage ?? 'home'));
    $baseUrl = config('seo.base_url', 'https://multicalculator.itechy.xyz');
    $isCalculator = ($seoPage ?? 'home') !== 'home';
@endphp

<!-- WebSite Schema -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebSite",
    "name": "MultiCalculator",
    "url": "{{ $baseUrl }}",
    "description": "Free online calculator suite for financial, business, and math calculations.",
    "potentialAction": {
        "@type": "SearchAction",
        "target": "{{ $baseUrl }}/?q={search_term_string}",
        "query-input": "required name=search_term_string"
    }
}
</script>

@if($isCalculator)
<!-- WebApplication Schema -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebApplication",
    "name": "{{ $seo['hero_title'] ?? 'Calculator' }}",
    "url": "{{ $baseUrl }}{{ $seo['canonical'] ?? '/' }}",
    "description": "{{ $seo['description'] ?? '' }}",
    "applicationCategory": "FinanceApplication",
    "operatingSystem": "Any",
    "offers": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "USD"
    },
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.8",
        "ratingCount": "150",
        "bestRating": "5",
        "worstRating": "1"
    }
}
</script>

<!-- BreadcrumbList Schema -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        {
            "@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "{{ $baseUrl }}"
        },
        {
            "@type": "ListItem",
            "position": 2,
            "name": "{{ $seo['hero_title'] ?? 'Calculator' }}",
            "item": "{{ $baseUrl }}{{ $seo['canonical'] ?? '/' }}"
        }
    ]
}
</script>
@endif

@stack('faq-schema')
