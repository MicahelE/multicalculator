@extends('layouts.calculator')

@section('guide')
<h2>How Much Do I Need to Retire?</h2>

<p>A simple way to find your retirement number is the 4% rule: if you withdraw 4% of your savings in the first year of retirement and adjust for inflation after that, your money has historically lasted at least 30 years. Flip it around and you need about 25 times your yearly spending.</p>

<div class="card bg-light p-3 mb-4">
    <p class="mb-1"><strong>Retirement number = Yearly spending &divide; Withdrawal rate</strong></p>
    <p class="mb-0">At 4%: Yearly spending &times; 25. At 3.5%: about &times; 28.6.</p>
</div>

<h3>Example</h3>
<p>You expect to spend $50,000 a year in retirement. At a 4% withdrawal rate, you need $1,250,000. With $100,000 saved, adding $20,000 a year and earning 7%, you'd get there in about 21 years. At a more cautious 3.5% rate, you'd need about $1.43 million, which takes about 23 years.</p>

<h3>What to count as spending</h3>
<p>Use what you'll spend from savings. If Social Security or a pension will cover $25,000 of a $50,000 budget, enter $25,000. Your number drops by half.</p>

<h3>Choosing a withdrawal rate</h3>
<ul>
    <li><strong>4%:</strong> the classic rule, based on a 30-year retirement.</li>
    <li><strong>3&ndash;3.5%:</strong> more cautious, for early retirees (FIRE) or anyone planning for 40+ years.</li>
    <li><strong>5%:</strong> may work for later retirements or if you can cut spending in bad years.</li>
</ul>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>Should I use today's dollars?</h4>
    <p>Yes. Enter spending in today's dollars and use an after-inflation return (around 4&ndash;5% for a stock-heavy portfolio). The result is your target in today's money.</p>

    <h4>What is FIRE?</h4>
    <p>Financial Independence, Retire Early. People aim for 25&ndash;30 times their spending and save 40&ndash;70% of their income to get there decades sooner.</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>See how your employer plan contributes with the <a href="/401k">401(k) calculator</a>.</li>
        <li>Check your 2027 Social Security increase with the <a href="/social-security-cola">COLA calculator</a>.</li>
    </ul>
</div>
@endsection
