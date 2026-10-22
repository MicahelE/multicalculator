@extends('layouts.calculator')

@section('guide')
<h2>How to Estimate Tariffs and Landed Cost</h2>

<p>A tariff (or import duty) is a tax on goods brought into a country. In the U.S., it's paid by the importer of record when goods clear customs, and it's usually charged as a percentage of the goods' customs value. Your landed cost is everything it takes to get a product to your door: the goods, duties, freight, and fees.</p>

<div class="card bg-light p-3 mb-4">
    <p class="mb-1"><strong>Duty = Customs value &times; Total tariff rate</strong></p>
    <p class="mb-1"><strong>Landed cost = Goods + Duty + Freight and insurance + Fees</strong></p>
    <p class="mb-0"><strong>Landed cost per unit = Landed cost &divide; Units</strong></p>
</div>
<p>The U.S. generally values imports at the price paid for the goods, not counting international freight and insurance. That's why freight is added separately here and isn't taxed.</p>

<h3>Example</h3>
<p>You import 500 units worth $10,000 at a combined 25% tariff rate. The duty is $2,500. Add $1,200 of freight and $300 of broker fees, and your landed cost is $14,000, or $28 per unit, 40% more than the goods alone.</p>

<h3>Finding your tariff rate</h3>
<ul>
    <li><strong>HTS code:</strong> every product has a Harmonized Tariff Schedule code. Look it up at the USITC's HTS search (hts.usitc.gov) for the base duty rate.</li>
    <li><strong>Additional duties:</strong> extra tariffs can apply by country and product, such as Section 301 duties on many Chinese goods and Section 232 duties on steel, aluminum and autos. These have changed often, so confirm current rates with CBP or a licensed customs broker.</li>
    <li><strong>Add them up:</strong> enter the base rate plus any additional duties as the total rate.</li>
</ul>

<h3>Other import costs</h3>
<ul>
    <li><strong>Merchandise Processing Fee:</strong> 0.3464% of value on formal entries, with a minimum and maximum.</li>
    <li><strong>Harbor Maintenance Fee:</strong> 0.125% on ocean shipments.</li>
    <li><strong>Customs broker:</strong> typically a flat fee per entry.</li>
</ul>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>Do small packages still come in duty-free?</h4>
    <p>The U.S. suspended the $800 "de minimis" duty-free exemption for all countries in August 2025, so low-value shipments now generally owe duties too.</p>

    <h4>Who pays the tariff?</h4>
    <p>The U.S. importer pays it to Customs. Whether that cost is passed on to customers depends on pricing.</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>Plug your landed cost per unit into the <a href="/margin">profit margin calculator</a> to set prices.</li>
        <li>Check whether a price increase covers the tariff with the <a href="/markup">markup calculator</a>.</li>
    </ul>
</div>
@endsection
