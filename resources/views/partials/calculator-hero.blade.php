@php
    $seo = config('seo.pages.' . ($seoPage ?? 'home'));
    $calc = config('seo.calculators.' . ($seoPage ?? 'home'), []);
@endphp

<section class="calculator-hero" style="--accent: {{ $calc['color'] ?? '#4F46E5' }};">
    <div class="container hero-row">
        <div class="hero-icon" aria-hidden="true">
            <i class="{{ $seo['icon'] ?? 'fas fa-calculator' }}"></i>
        </div>
        <div>
            @isset($calc['group'])
            <a class="hero-eyebrow" href="/#{{ Str::slug($calc['group']) }}">{{ $calc['group'] }}</a>
            @endisset
            <h1>{{ $seo['hero_title'] ?? 'Calculator' }} <i id="favToolImg" class="hideden" style="cursor: pointer; font-size:large;" aria-hidden="true" title="make it favourite"></i></h1>
            <p>{{ $seo['hero_description'] ?? '' }}</p>
        </div>
    </div>
</section>
