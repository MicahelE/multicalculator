@extends('layouts.app')

@section('content')
@php
    // Worked examples from the guides (checked in resources/js/calculators.test.js).
    $receipt = [
        ['Take-home, $85K in California', '$5,090/mo', '/california-income-tax'],
        ['Same job in Texas', '+$4,230/yr', '/texas-income-tax'],
        ['No tax on overtime, 5 hrs/wk', '−$715 tax', '/no-tax-on-overtime'],
        ['$25K loan at $500/mo', '7.42% APR', '/interest-rate'],
        ['1-year CD, $10K at 4%', '+$400', '/cd'],
        ['Maintenance calories, 180 lb', '2,763', '/tdee'],
    ];
@endphp
<section class="home-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <a href="/no-tax-on-overtime" class="hero-pill">
                    <span class="badge-new">New</span> No tax on overtime &amp; tips, 2025&ndash;2028 <i class="fas fa-arrow-right" aria-hidden="true"></i>
                </a>
                <h1>Free calculators for <span class="marker">pay, taxes</span> &amp;&nbsp;business</h1>
                <p class="lead">{{ count(config('seo.calculators')) }} free tools for paychecks, 2026 taxes, loans, savings, business and everyday math. Results update as you type.</p>
                <div class="hero-ctas">
                    <a href="/no-tax-on-overtime" class="btn-key btn-key-primary">No Tax on Overtime</a>
                    <a href="/no-tax-on-tips" class="btn-key">No Tax on Tips</a>
                </div>
                <nav class="group-chips" aria-label="Calculator categories">
                    @foreach(config('seo.groups') as $group)
                    <a href="#{{ Str::slug($group) }}">{{ $group }}</a>
                    @endforeach
                </nav>
            </div>
            <div class="col-lg-5 d-none d-md-block">
                <div class="receipt-wrap">
                    <div class="receipt">
                        <p class="receipt-head">MultiCalculator<span>Example results from our guides</span></p>
                        <ul>
                            @foreach($receipt as [$label, $value, $url])
                            <li><a href="{{ $url }}"><span>{{ $label }}</span><b>{{ $value }}</b></a></li>
                            @endforeach
                        </ul>
                        <p class="receipt-total"><span>Calculators</span><b>{{ count(config('seo.calculators')) }}</b></p>
                        <p class="receipt-foot">No sign-up &middot; Runs in your browser</p>
                        <div class="receipt-barcode" aria-hidden="true"></div>
                    </div>
                </div>
            </div>
        </div>
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
