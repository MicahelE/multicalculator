@extends('layouts.calculator')

@section('guide')
<h2>How CD Interest Is Calculated</h2>

<p>A certificate of deposit (CD) pays a fixed rate for a fixed term, from a few months to five years or more. Banks advertise CDs by APY (annual percentage yield), which already includes compounding. That makes the math simple: your money grows by the APY each year it stays in the CD.</p>

<h3>The formula</h3>
<div class="card bg-light p-3 mb-4">
    <p class="mb-1"><strong>Balance at maturity = Deposit &times; (1 + APY)<sup>months &divide; 12</sup></strong></p>
    <p class="mb-0"><strong>Interest after tax = Interest &times; (1 &minus; your tax bracket)</strong></p>
</div>

<h3>Example</h3>
<p>You put $10,000 in a 1-year CD at 4.00% APY. At maturity you have $10,400, so you earn $400 in interest. In the 22% federal bracket you keep $312 after tax. Stretch it to an 18-month CD at the same APY and you earn $605.96.</p>

<h3>APY vs. APR on a CD</h3>
<p>APR is the simple annual rate; APY adds the effect of compounding. A CD with a 3.93% rate compounded daily has an APY of about 4.00%. Always compare CDs by APY, which is what this calculator uses.</p>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>Is CD interest taxable?</h4>
    <p>Yes. CD interest is taxed as ordinary income in the year it's credited, even if you can't withdraw it until maturity. Your bank sends a 1099-INT. CDs held in an IRA aren't taxed until you withdraw.</p>

    <h4>What happens if I withdraw early?</h4>
    <p>Most banks charge a penalty, often 3 to 12 months of interest. For short terms that can eat into your principal. No-penalty CDs exist but usually pay a bit less.</p>

    <h4>Are CDs safe?</h4>
    <p>CDs at FDIC-insured banks or NCUA-insured credit unions are covered up to $250,000 per depositor, per institution, per ownership category.</p>

    <h4>CD or high-yield savings?</h4>
    <p>A CD locks in a rate, which helps if rates fall. A high-yield savings account lets you withdraw any time, but its rate can change. Many people use both: savings for emergencies, CDs for money with a set date.</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>Build a CD ladder: split money across 1-, 2- and 3-year CDs so part of it matures every year.</li>
        <li>Check whether your interest beats inflation with the <a href="/inflation">inflation calculator</a>.</li>
        <li>Adding money every month instead? Use the <a href="/compound-interest">compound interest calculator</a>.</li>
    </ul>
</div>
@endsection
