@php
    $seo = config('seo.pages.' . ($seoPage ?? 'home'));
@endphp

<section class="calculator-hero">
    <div class="container">
        <div class="hero-icon">
            <i class="{{ $seo['icon'] ?? 'fas fa-calculator' }}"></i>
        </div>
        <h1>{{ $seo['hero_title'] ?? 'Calculator' }} <i id="favToolImg" class="hideden" style="cursor: pointer; font-size:large;" aria-hidden="true" title="make it favourite"></i></h1>
        <p>{{ $seo['hero_description'] ?? '' }}</p>
    </div>
</section>
