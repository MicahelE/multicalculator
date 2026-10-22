@php
    $calculators = collect(config('seo.calculators'));
    $groups = collect(config('seo.groups'))->mapWithKeys(fn ($g) => [$g => $calculators->where('group', $g)]);
@endphp

<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <a class="navbar-brand" href="/"><i class="fas fa-calculator mr-1" aria-hidden="true"></i> MULTICALCULATOR</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
            </li>
            @foreach($groups as $group => $calcs)
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle {{ $calcs->keys()->contains(request()->path()) ? 'active' : '' }}" href="#" id="nav-{{ Str::slug($group) }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ $group }}</a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="nav-{{ Str::slug($group) }}">
                    @foreach($calcs as $key => $calc)
                    <a class="dropdown-item {{ request()->is($key) ? 'active' : '' }}" href="{{ $calc['url'] }}">
                        <i class="{{ $calc['icon'] }} fa-fw mr-1" style="color: {{ $calc['color'] }};" aria-hidden="true"></i>
                        {{ $calc['name'] }}
                        @if(!empty($calc['new']))<span class="badge-new">New</span>@endif
                    </a>
                    @endforeach
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</nav>
