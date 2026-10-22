@extends('layouts.calculator')

@section('guide')
<h2>What Do I Need on My Final?</h2>

<p>If you know your current grade and how much the final exam is worth, you can work out exactly what score you need to finish with the grade you want.</p>

<div class="card bg-light p-3 mb-4">
    <p class="mb-0"><strong>Score needed = (Target grade &minus; Current grade &times; (1 &minus; Final weight)) &divide; Final weight</strong></p>
</div>

<h3>Example</h3>
<p>Your current grade is 85% and the final is worth 30% of your grade. To finish with an 88%, you need (88 &minus; 85 &times; 0.70) &divide; 0.30 = 95% on the final.</p>
<p>If you only need a B (80%), the answer is (80 &minus; 59.5) &divide; 0.30 = 68.3%.</p>

<h3>Where to find the numbers</h3>
<ul>
    <li><strong>Current grade:</strong> your grade in the class before the final, from your school portal or syllabus.</li>
    <li><strong>Final weight:</strong> listed in the syllabus, usually 15&ndash;40%.</li>
    <li><strong>Target:</strong> the cutoff for the letter grade you want, such as 90% for an A&minus; or 80% for a B&minus; on many scales.</li>
</ul>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>What if I need more than 100%?</h4>
    <p>Then the target isn't reachable with the final alone. Ask about extra credit, or aim for the next grade down.</p>

    <h4>My class uses points, not percentages. What do I do?</h4>
    <p>Divide points earned by points possible so far to get your current percentage, and divide the final's points by the total points in the course to get its weight.</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>See how the semester affects your overall standing with the <a href="/gpa">GPA calculator</a>.</li>
        <li>Average a set of test scores with the <a href="/average">average calculator</a>.</li>
    </ul>
</div>
@endsection
