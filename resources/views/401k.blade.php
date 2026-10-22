@extends('layouts.calculator')

@section('guide')
<h2>How Much Will My 401(k) Be Worth?</h2>

<p>A 401(k) grows from three sources: your contributions, your employer's match, and investment returns. Over decades, returns usually become the biggest piece. This calculator projects your balance year by year, with raises and the 2026 contribution limits.</p>

<h3>2026 401(k) limits</h3>
<ul>
    <li><strong>Employee contributions:</strong> $24,500</li>
    <li><strong>Catch-up (age 50+):</strong> an extra $8,000, for $32,500 total</li>
    <li><strong>Ages 60&ndash;63:</strong> a larger catch-up of $11,250</li>
    <li><strong>Total including employer:</strong> $72,000</li>
</ul>

<h3>How employer matching works</h3>
<p>A common match is "50% of your contributions, up to 6% of salary." If you earn $70,000 and contribute 6% ($4,200), your employer adds $2,100. Contribute only 3% and they add $1,050. Contributing at least enough to get the full match is the closest thing to free money in personal finance.</p>

<h3>Example</h3>
<p>A 30-year-old earning $70,000 has $20,000 saved, contributes 6%, gets a 50% match up to 6%, earns 7% a year and gets 3% raises. By 65 the balance is about $1.45 million: $253,941 from their contributions, $126,970 from the employer, and over $1 million from growth.</p>
<p>Contributing 10% instead raises the balance to about $2.0 million. Contributing just 3% leaves about $833,000.</p>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>Traditional or Roth 401(k)?</h4>
    <p>Traditional contributions lower your taxes now; withdrawals are taxed later. Roth contributions are taxed now; qualified withdrawals are tax-free. If you expect a higher tax rate in retirement, Roth often wins.</p>

    <h4>Is $1.45 million really that much?</h4>
    <p>These figures aren't adjusted for inflation. At 3% inflation, $1.45 million in 35 years buys roughly what $515,000 buys today. Use a lower return (like 4&ndash;5%) to see results in today's dollars.</p>

    <h4>What return should I assume?</h4>
    <p>A diversified stock-heavy portfolio has historically returned around 7% after inflation, but with big swings. Use 5&ndash;7% for a cautious plan.</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>Find the total you'll need with the <a href="/retirement">retirement calculator</a>.</li>
        <li>See how contributions change your paycheck with the <a href="/take-home-pay">take home pay calculator</a>.</li>
    </ul>
</div>
@endsection
