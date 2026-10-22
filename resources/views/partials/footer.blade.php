<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-4 mb-4">
                <h5>MultiCalculator</h5>
                <p>Your all-in-one suite of free online calculators for pay, taxes, business, and everyday math.</p>
                <p class="small">Tax calculators give estimates only and are not tax advice.</p>
            </div>
            @foreach(config('seo.groups') as $group)
            @php $calcs = collect(config('seo.calculators'))->where('group', $group); @endphp
            <div class="col-lg-2 col-md-4 col-6 mb-4">
                <h5>{{ $group }}</h5>
                <ul class="footer-links">
                    @foreach($calcs as $calc)
                    <li><a href="{{ $calc['url'] }}">{{ $calc['name'] }}</a></li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>
        <div class="footer-bottom text-center">
            &copy; {{ date('Y') }} MultiCalculator. All rights reserved.
        </div>
    </div>
</footer>
