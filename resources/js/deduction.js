// "No tax on overtime / tips" federal deduction (One Big Beautiful Bill Act, tax years 2025-2028).
// Cap first, then reduce by $100 for each full $1,000 of MAGI over the threshold.
// ponytail: floors to whole $1,000 steps per the statute text; IRS forms may round differently.
export function deduction(qualified, magi, cap, threshold) {
    const reduction = Math.floor(Math.max(0, magi - threshold) / 1000) * 100;
    return Math.max(0, Math.min(qualified, cap) - reduction);
}

const form = typeof document !== 'undefined' && document.getElementById('deductionCalc');

if (form) {
    const num = id => Math.max(0, parseFloat(document.getElementById(id)?.value) || 0);
    const money = n => n.toLocaleString('en-US', { style: 'currency', currency: 'USD', maximumFractionDigits: 0 });
    const out = (id, text) => { document.getElementById(id).textContent = text; };

    const update = () => {
        const joint = document.getElementById('filingStatus').value === 'joint';
        const cap = Number(joint ? form.dataset.capJoint : form.dataset.capSingle);
        const threshold = joint ? 300000 : 150000;
        const magi = num('magi');

        // Overtime: only the FLSA premium (half the regular rate) qualifies, unless the W-2 amount is known.
        const qualified = form.dataset.type === 'overtime'
            ? (num('w2Amount') || num('otRate') * 0.5 * num('otHours') * num('otWeeks'))
            : num('tips');

        const deducted = deduction(qualified, magi, cap, threshold);
        out('qualifiedOut', money(qualified));
        out('deductionOut', money(deducted));
        out('savingsOut', money(deducted * num('bracket') / 100));

        let note = '';
        if (qualified > cap) note = `Capped at ${money(cap)} for your filing status.`;
        if (magi > threshold) note += ` Reduced because your MAGI is over ${money(threshold)}.`;
        out('deductionNote', note.trim());
    };

    form.addEventListener('input', update);
    update();
}
