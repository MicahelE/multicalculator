{{--
    Config-driven calculator page. The page's config('seo.pages.<key>') supplies:
      'inputs'  => [[name, label, default, type?], ...]  type: 'number' (default) | 'signed' (allows negatives) | 'date' | 'time' | [value => label] for a select
      'outputs' => [name => [label, format], ...]       format: money | money2 | percent | number | text
    The formula lives in resources/js/calculators.js under the same key. Views only supply @section('guide').
--}}
@extends('layouts.app')

@section('content')
@include('partials.calculator-hero')

@php
    $page = config('seo.pages.' . $seoPage);
    $color = config('seo.calculators.' . $seoPage . '.color');
@endphp

<div class="container">
    <div class="row">
        <div class="col-md-8 col-lg-6 mx-auto">
            <form class="calculator-card" id="genericCalc" data-calc="{{ $seoPage }}" style="border-top-color: {{ $color }};" onsubmit="return false">
                <div class="input-grid">
                    @foreach($page['inputs'] as $input)
                        @php [$name, $label, $default, $type] = $input + [3 => 'number']; @endphp
                        <div class="input-cell {{ is_array($type) ? 'input-select' : 'input-' . $type }}">
                            <label for="in-{{ $name }}">{{ $label }}</label>
                            @if(is_array($type))
                                <select class="form-control" id="in-{{ $name }}" name="{{ $name }}">
                                    @foreach($type as $value => $text)
                                    <option value="{{ $value }}" @selected((string) $value === (string) $default)>{{ $text }}</option>
                                    @endforeach
                                </select>
                            @else
                                <input class="form-control" type="{{ $type === 'signed' ? 'number' : $type }}" id="in-{{ $name }}" name="{{ $name }}" value="{{ $default === 'today' ? '' : $default }}"
                                    @if($default === 'today') data-today @endif
                                    @if($type === 'number') step="any" min="0" inputmode="decimal" @endif
                                    @if($type === 'signed') step="any" @endif>
                            @endif
                        </div>
                    @endforeach
                </div>

                <div class="results-section" aria-live="polite">
                    <h5>Results</h5>
                    <dl class="result-list">
                        @foreach($page['outputs'] as $name => [$label, $format])
                        <dt>{{ $label }}</dt>
                        <dd data-out="{{ $name }}" data-format="{{ $format }}" @class(['result-main' => $loop->first])>&ndash;</dd>
                        @endforeach
                    </dl>
                    <p class="small text-muted mb-0" data-out="note" data-format="text"></p>
                </div>

                @isset($page['disclaimer'])
                <p class="small text-muted mt-3 mb-0">{{ $page['disclaimer'] }}</p>
                @endisset
            </form>
        </div>
    </div>
</div>

@include('partials.related-calculators')

<div class="container">
    <article class="calculator-guide">
        @yield('guide')
    </article>
</div>
@endsection
