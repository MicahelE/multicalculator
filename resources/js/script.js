
// document.addEventListener('DOMContentLoaded', function() {
    // console.log("Hello World");
    let input1 = document.getElementById("exampleInputnumber1");
    let input2 = document.getElementById("exampleInputnumber2");
    let input3 = document.getElementById("exampleInputnumber3");
    console.log(input1.value);
 let outputArray=[]
    let input = document.querySelectorAll("input");
let log = document.getElementById("values");

document.addEventListener("input", updateValue);

function updateValue(e) {
    outputArray.push(e.target.value);
    
console.log(e.target.value)

let sum = 0;

// calculate sum using forEach() method
outputArray.forEach( num => {
  sum += Number(num);
})

console.log(sum)
}

// })