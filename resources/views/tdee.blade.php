@extends('layouts.calculator')

@section('guide')
<h2>What Is TDEE?</h2>

<p>Your total daily energy expenditure (TDEE) is the number of calories you burn in a day. It's your basal metabolic rate (BMR), the energy your body uses at rest, plus everything you burn moving, exercising and digesting food. Eat about your TDEE and your weight stays steady; eat less and you lose weight; eat more and you gain.</p>

<h3>The formula</h3>
<div class="card bg-light p-3 mb-4">
    <p class="mb-1"><strong>BMR (men) = 10 &times; weight (kg) + 6.25 &times; height (cm) &minus; 5 &times; age + 5</strong></p>
    <p class="mb-1"><strong>BMR (women) = 10 &times; weight (kg) + 6.25 &times; height (cm) &minus; 5 &times; age &minus; 161</strong></p>
    <p class="mb-0"><strong>TDEE = BMR &times; activity multiplier</strong> (1.2 sedentary to 1.9 athlete)</p>
</div>
<p>This is the Mifflin-St Jeor equation, which research has found to be among the most accurate for most adults. The calculator converts pounds and feet/inches for you.</p>

<h3>Example</h3>
<p>A 30-year-old man who is 5'10" (177.8 cm) and weighs 180 lb (81.6 kg) has a BMR of about 1,783 calories. If he exercises 3&ndash;5 days a week, his TDEE is 1,783 &times; 1.55 = <strong>2,763 calories a day</strong>. To lose about a pound a week he'd eat around 2,263; to gain about half a pound a week, around 3,013.</p>

<h3>Activity levels</h3>
<ul>
    <li><strong>1.2 Sedentary:</strong> desk job and little or no exercise.</li>
    <li><strong>1.375 Light:</strong> light exercise 1&ndash;3 days a week.</li>
    <li><strong>1.55 Moderate:</strong> exercise 3&ndash;5 days a week.</li>
    <li><strong>1.725 Very active:</strong> hard exercise 6&ndash;7 days a week.</li>
    <li><strong>1.9 Athlete:</strong> twice-a-day training or a physically demanding job.</li>
</ul>

<div class="calculator-faq mt-4">
    <h3>Frequently Asked Questions</h3>

    <h4>Why a 500-calorie deficit?</h4>
    <p>A pound of body fat holds roughly 3,500 calories, so 500 a day works out to about a pound a week. Real results vary, and weight loss usually slows over time as your TDEE drops.</p>

    <h4>How accurate is a TDEE calculator?</h4>
    <p>It's a starting estimate, often within about 10% for most people. Track your weight for two or three weeks at the suggested intake and adjust up or down.</p>

    <h4>Most people overestimate their activity level. Should I pick lower?</h4>
    <p>If you're unsure, choose the lower level. It's easier to add calories later than to wonder why the scale isn't moving.</p>
</div>

<div class="pro-tips mt-4">
    <h3>Tips</h3>
    <ul>
        <li>Recalculate after every 10&ndash;15 lb of weight change, since your TDEE changes with it.</li>
        <li>Talk to a doctor or dietitian before a big change in diet, especially if you have a health condition.</li>
        <li>Not sure of your exact age in years? The <a href="/age">age calculator</a> works it out.</li>
    </ul>
</div>
@endsection
