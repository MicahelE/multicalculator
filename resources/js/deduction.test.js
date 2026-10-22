// Run: node resources/js/deduction.test.js
import assert from 'node:assert';
import { deduction } from './deduction.js';

assert.strictEqual(deduction(3250, 70000, 12500, 150000), 3250);        // under cap, under threshold
assert.strictEqual(deduction(20000, 70000, 12500, 150000), 12500);      // capped (single)
assert.strictEqual(deduction(20000, 70000, 25000, 300000), 20000);      // joint cap is higher
assert.strictEqual(deduction(10000, 160000, 12500, 150000), 9000);      // $10k over -> -$1,000
assert.strictEqual(deduction(10000, 160999, 12500, 150000), 9000);      // partial $1,000 doesn't count
assert.strictEqual(deduction(20000, 200000, 12500, 150000), 7500);      // cap applied before phase-out
assert.strictEqual(deduction(5000, 500000, 12500, 150000), 0);          // never below zero
console.log('deduction: ok');
