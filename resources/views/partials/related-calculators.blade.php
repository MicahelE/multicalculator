@php
    $seo = config('seo.pages.' . ($seoPage ?? 'home'));
    $allCalcs = config('seo.calculators');
    $relatedKeys = $seo['related'] ?? [];
@endphp

@if(!empty($relatedKeys))
<section class="related-calculators">
    <div class="container">
        <h2>Related Calculators</h2>
        <div class="row">
            @foreach($relatedKeys as $key)
                @if(isset($allCalcs[$key]))
                <div class="col-md-4 mb-3">
                    <a href="{{ $allCalcs[$key]['url'] }}" class="related-calc-card">
                        <div class="card-icon" style="background: {{ $allCalcs[$key]['color'] }};">
                            <i class="{{ $allCalcs[$key]['icon'] }}"></i>
                        </div>
                        <h3>{{ $allCalcs[$key]['name'] }}</h3>
                    </a>
                </div>
                @endif
            @endforeach
        </div>
    </div>
</section>
@endif
