@extends('layouts.app')

@section('content')
@include('partials.calculator-hero')

<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="calculator-card">
                <h2 id="averagepage" class="text-center section-heading">Average Calculator</h2>

                <form>
                    <label for="exampleInputnumber1">Enter your numbers</label>
                    <input type="number" class="form-control" id="exampleInputnumber1" aria-describedby="numberHelp" placeholder="#1">
                    <input type="number" class="form-control mt-2" id="exampleInputnumber2" aria-describedby="numberHelp" placeholder="#2">
                    <input type="number" class="form-control mt-2" id="exampleInputnumber3" aria-describedby="numberHelp" placeholder="#3">
                    <input type="number" class="form-control mt-2" id="exampleInputnumber4" aria-describedby="numberHelp" placeholder="#4">
                    <input type="number" class="form-control mt-2" id="exampleInputnumber5" aria-describedby="numberHelp" placeholder="#5">
                    <input type="number" class="form-control mt-2" id="exampleInputnumber6" aria-describedby="numberHelp" placeholder="#6">
                    <input type="number" class="form-control mt-2" id="exampleInputnumber7" aria-describedby="numberHelp" placeholder="#7">
                    <input type="number" class="form-control mt-2" id="exampleInputnumber8" aria-describedby="numberHelp" placeholder="#8">

                    <div class="results-section">
                        <h5>Results</h5>
                        <textarea name="" id="" cols="42" rows="3" disabled></textarea>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@include('partials.related-calculators')

<div class="container">
    <article class="calculator-guide">
        <h2>Understanding Average Calculator: A Complete Guide</h2>

        <h3>What is an Average?</h3>
        <p>An average, also known as the arithmetic mean, is a central value that represents a set of numbers. It's calculated by adding all numbers in a dataset and dividing by the count of numbers. Averages are essential in statistics, business analysis, academic grading, and everyday calculations.</p>

        <h3>How to Calculate an Average</h3>
        <p>Follow these simple steps to calculate an average:</p>
        <ol>
            <li>Add all your numbers together (sum)</li>
            <li>Count how many numbers you have (count)</li>
            <li>Divide the sum by the count</li>
        </ol>

        <h3>Common Uses for Average Calculator</h3>
        <ul>
            <li><strong>Academic Use:</strong> Calculate grade point averages (GPA), test scores, and class performance metrics</li>
            <li><strong>Business Applications:</strong> Determine average sales, customer satisfaction ratings, and performance metrics</li>
            <li><strong>Personal Finance:</strong> Calculate average monthly expenses, income, or investment returns</li>
            <li><strong>Sports Statistics:</strong> Compute batting averages, scoring averages, and other performance statistics</li>
        </ul>

        <h3>Tips for Using Our Average Calculator</h3>
        <p>To get the most accurate results:</p>
        <ul>
            <li>Enter numbers in any order - the average will remain the same</li>
            <li>Use up to 8 different values</li>
            <li>Include both positive and negative numbers if needed</li>
            <li>Double-check your inputs for accuracy</li>
        </ul>

        <h3>Why Use an Online Average Calculator?</h3>
        <p>While calculating averages manually is possible, an online calculator offers several advantages:</p>
        <ul>
            <li>Saves time and eliminates manual calculation errors</li>
            <li>Handles multiple numbers efficiently</li>
            <li>Provides instant results for quick decision-making</li>
            <li>Perfect for students, professionals, and anyone needing quick calculations</li>
        </ul>

        <div class="calculator-faq mt-4">
            <h3>Frequently Asked Questions</h3>
            <h4>What's the difference between mean, median, and mode?</h4>
            <p>While our calculator focuses on the mean (average), it's important to understand that there are other types of central tendencies:</p>
            <ul>
                <li><strong>Mean (Average):</strong> The sum of all numbers divided by the count</li>
                <li><strong>Median:</strong> The middle value when numbers are arranged in order</li>
                <li><strong>Mode:</strong> The most frequently occurring number in a dataset</li>
            </ul>
        </div>
    </article>
</div>
@endsection
