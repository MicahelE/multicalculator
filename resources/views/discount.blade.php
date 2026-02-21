@extends('layouts.app')

@section('content')
@include('partials.calculator-hero')

<div class="container">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="calculator-card border-warning">
                <h2 id="discountpage" class="text-center section-heading">Discount Calculator</h2>

                <div id="count1">
                    <div class="row">
                        <div class="col-md-6">
                            <form>
                                <label for="discountpay">What type of discount?</label>
                                <select name="discountpay" id="discountpay" class="form-control">
                                    <option value="1">% off</option>
                                    <option value="2">% off on 2nd product</option>
                                    <option value="3">% off on 3rd product</option>
                                    <option value="4">fixed amount off</option>
                                    <option value="5">2 for 1</option>
                                    <option value="6">3 for 2</option>
                                    <option value="7">4 for 3</option>
                                    <option value="8">double discount</option>
                                    <option value="9">triple discount</option>
                                    <option value="10">discount on multiple units</option>
                                </select>
                                <label for="discountInputnumber1">Original Price</label>
                                <input type="number" class="form-control" id="discountInputnumber1" aria-describedby="numberHelp" placeholder="Enter amount">
                                <label for="discountInputnumber2">Discount</label>
                                <input type="number" class="form-control" id="discountInputnumber2" aria-describedby="numberHelp" placeholder="%">
                            </form>
                        </div>

                        <div class="col-md-6">
                            <div class="results-section" style="margin-top: 0;">
                                <h5>Results</h5>
                                <label for="discountInputnumber3">You Pay</label>
                                <input type="number" class="form-control" id="discountInputnumber3" aria-describedby="numberHelp" placeholder="">
                                <label for="discountInputnumber4">You're saving</label>
                                <input type="number" class="form-control" id="discountInputnumber4" aria-describedby="numberHelp" placeholder="">
                            </div>
                        </div>
                    </div>
                </div>

                <div id="count2">
                    <div class="row">
                        <div class="col-md-6">
                            <form>
                                <label for="discountpay">What type of discount?</label>
                                <select name="discountpay" id="discountpay" class="form-control">
                                    <option value="1">% off</option>
                                    <option value="2">% off on 2nd product</option>
                                    <option value="3">% off on 3rd product</option>
                                    <option value="4">fixed amount off</option>
                                    <option value="5">2 for 1</option>
                                    <option value="6">3 for 2</option>
                                    <option value="7">4 for 3</option>
                                    <option value="8">double discount</option>
                                    <option value="9">triple discount</option>
                                    <option value="10">discount on multiple units</option>
                                </select>
                                <label for="discountInputnumber1">Discount</label>
                                <input type="number" class="form-control" id="discountInputnumber1" aria-describedby="numberHelp" placeholder="%">
                                <label for="discountInputnumber2">Product 1</label>
                                <input type="number" class="form-control" id="discountInputnumber2" aria-describedby="numberHelp" placeholder="Product 1">
                                <label>Product 2</label>
                                <input type="number" class="form-control" id="discountInputnumber2" aria-describedby="numberHelp" placeholder="Product 2">
                            </form>
                        </div>

                        <div class="col-md-6">
                            <div class="results-section" style="margin-top: 0;">
                                <h5>Results</h5>
                                <label for="discountInputnumber3">You Pay</label>
                                <input type="number" class="form-control" id="discountInputnumber3" aria-describedby="numberHelp" placeholder="">
                                <label>One item costs on average</label>
                                <input type="number" class="form-control" id="discountInputnumber3" aria-describedby="numberHelp" placeholder="">
                                <label for="discountInputnumber4">You're saving</label>
                                <input type="number" class="form-control" id="discountInputnumber4" aria-describedby="numberHelp" placeholder="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('partials.related-calculators')

<div class="container">
    <article class="calculator-guide">
        <h2>Discount Calculator: Your Guide to Savings and Price Reductions</h2>

        <h3>What is a Discount Calculator?</h3>
        <p>A discount calculator helps determine the final price of a product or service after applying percentage or fixed amount discounts. It's essential for both shoppers looking to understand their savings and businesses planning promotional strategies.</p>

        <h3>How to Calculate Discounts</h3>
        <p>The basic discount calculation follows these steps:</p>
        <ol>
            <li>Multiply the original price by the discount percentage (converted to decimal)</li>
            <li>Subtract the discount amount from the original price</li>
            <li>The result is your final price after discount</li>
        </ol>

        <div class="card bg-light p-3 mb-4">
            <p class="mb-0"><strong>Formula: Final Price = Original Price - (Original Price x Discount Percentage)</strong></p>
        </div>

        <h3>Types of Discounts</h3>
        <ul>
            <li><strong>Percentage Off:</strong> Most common type (e.g., 20% off)</li>
            <li><strong>Buy One Get One (BOGO):</strong> Second item free or discounted</li>
            <li><strong>Multiple Unit Discount:</strong> Savings on bulk purchases</li>
            <li><strong>Fixed Amount Off:</strong> Specific dollar amount reduction</li>
            <li><strong>Seasonal Discounts:</strong> Holiday or clearance sales</li>
        </ul>

        <h3>Common Uses for Discount Calculator</h3>
        <ul>
            <li><strong>Retail Shopping:</strong> Calculate final prices during sales</li>
            <li><strong>Business Planning:</strong> Determine promotion strategies</li>
            <li><strong>Inventory Clearance:</strong> Plan clearance pricing</li>
            <li><strong>Budgeting:</strong> Estimate potential savings</li>
        </ul>

        <h3>Tips for Using Discounts Effectively</h3>
        <ul>
            <li>Compare multiple discounts to find the best deal</li>
            <li>Check if discounts can be combined</li>
            <li>Calculate the total savings, not just the percentage</li>
            <li>Consider bulk purchase discounts for additional savings</li>
        </ul>

        <div class="calculator-faq mt-4">
            <h3>Frequently Asked Questions</h3>

            <h4>Can I stack multiple discounts?</h4>
            <p>This depends on the retailer's policy. Some allow combining discounts, while others apply only the highest discount. Our calculator can help you compare different discount scenarios.</p>

            <h4>Which is better: percentage or fixed amount discount?</h4>
            <p>It depends on the original price:</p>
            <ul>
                <li>For high-priced items, percentage discounts often yield higher savings</li>
                <li>For low-priced items, fixed amount discounts might be more valuable</li>
                <li>Use our calculator to compare both options</li>
            </ul>

            <h4>How do I calculate the percentage saved?</h4>
            <p>Divide the discount amount by the original price and multiply by 100 to get the percentage saved.</p>
        </div>

        <div class="pro-tips mt-4">
            <h3>Smart Shopping Tips</h3>
            <ul>
                <li>Always verify the original price before discount</li>
                <li>Check return policies on discounted items</li>
                <li>Compare prices across different retailers</li>
                <li>Consider timing your purchases during major sale events</li>
            </ul>
        </div>
    </article>
</div>
@endsection
