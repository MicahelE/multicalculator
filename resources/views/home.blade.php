@extends('layouts.app')

@section('content')
<section class="home-hero">
    <div class="container text-center">
        <a href="/no-tax-on-overtime" class="hero-pill">
            <span class="badge-new">New</span> No tax on overtime &amp; tips calculators for 2025&ndash;2028 <i class="fas fa-arrow-right ml-1" aria-hidden="true"></i>
        </a>
        <h1 class="mb-3">Free Calculators for Pay, Taxes &amp; Business</h1>
        <p class="lead mb-4 mx-auto">{{ count(config('seo.calculators')) }} free tools for paychecks, 2026 taxes, loans, savings, business and everyday math. Results update as you type.</p>
        <div class="hero-ctas">
            <a href="/no-tax-on-overtime" class="btn btn-light btn-lg">No Tax on Overtime</a>
            <a href="/no-tax-on-tips" class="btn btn-outline-light btn-lg">No Tax on Tips</a>
        </div>
        <nav class="group-chips" aria-label="Calculator categories">
            @foreach(config('seo.groups') as $group)
            <a href="#{{ Str::slug($group) }}">{{ $group }}</a>
            @endforeach
        </nav>
    </div>
</section>

<section class="py-5">
    <div class="container">
        @foreach(config('seo.groups') as $group)
        @php $calcs = collect(config('seo.calculators'))->where('group', $group); @endphp
        <h2 class="grid-heading" id="{{ Str::slug($group) }}">{{ $group }}</h2>
        <div class="row mb-4">
            @foreach($calcs as $calc)
            <div class="col-lg-4 col-md-6 mb-3">
                <a href="{{ $calc['url'] }}" class="calculator-grid-card">
                    <div class="card-icon" style="background: {{ $calc['color'] }};">
                        <i class="{{ $calc['icon'] }}" aria-hidden="true"></i>
                    </div>
                    <div>
                        <h3>{{ $calc['name'] }}@if(!empty($calc['new']))<span class="badge-new">New</span>@endif</h3>
                        <p>{{ $calc['blurb'] }}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        @endforeach
    </div>
</section>

<section class="py-5" style="background: #fff;">
    <div class="container">
        <h2 class="text-center mb-5" style="font-weight: 700;">Why Use MultiCalculator?</h2>
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="feature-icon"><i class="fas fa-bolt fa-2x text-primary" aria-hidden="true"></i></div>
                <h3 class="h5">Instant results</h3>
                <p class="text-muted">Every calculator updates as you type. No submit buttons, no page reloads.</p>
            </div>
            <div class="col-md-4 mb-4">
                <div class="feature-icon"><i class="fas fa-lock fa-2x text-primary" aria-hidden="true"></i></div>
                <h3 class="h5">Private by design</h3>
                <p class="text-muted">Calculations run in your browser. Your salary and numbers are never sent to our server.</p>
            </div>
            <div class="col-md-4 mb-4">
                <div class="feature-icon"><i class="fas fa-book-open fa-2x text-primary" aria-hidden="true"></i></div>
                <h3 class="h5">Formulas explained</h3>
                <p class="text-muted">Each tool comes with a plain-English guide to the formula and worked examples.</p>
            </div>
        </div>
    </div>
</section>
@endsection
