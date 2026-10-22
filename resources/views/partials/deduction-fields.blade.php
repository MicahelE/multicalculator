{{-- Shared inputs/results for the no-tax-on-overtime and no-tax-on-tips calculators (resources/js/deduction.js) --}}
<label for="filingStatus">Filing status</label>
<select class="form-control" id="filingStatus">
    <option value="single">Single / Head of household</option>
    <option value="joint">Married filing jointly</option>
</select>

<label for="magi">Modified adjusted gross income (MAGI)</label>
<input type="number" class="form-control" id="magi" min="0" step="1000" inputmode="decimal" placeholder="e.g. 70000">

<label for="bracket">Federal tax bracket</label>
<select class="form-control" id="bracket">
    @foreach([10, 12, 22, 24, 32, 35, 37] as $rate)
    <option value="{{ $rate }}" @selected($rate === 22)>{{ $rate }}%</option>
    @endforeach
</select>

<div class="results-section" aria-live="polite">
    <h5>Results</h5>
    <dl class="result-list">
        <dt>{{ $qualifiedLabel }}</dt><dd id="qualifiedOut">$0</dd>
        <dt>Your deduction</dt><dd id="deductionOut" class="result-main">$0</dd>
        <dt>Estimated federal tax saved</dt><dd id="savingsOut" class="result-main">$0</dd>
    </dl>
    <p id="deductionNote" class="small text-muted mb-0"></p>
</div>
<p class="small text-muted mt-3 mb-0">Estimate only, not tax advice. Social Security and Medicare taxes still apply. Married filing separately is not eligible.</p>
