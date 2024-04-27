
// document.addEventListener('DOMContentLoaded', function() {
    // console.log("Hello World");
    if(document.querySelector("#averagepage")){
     
    let input1 = document.getElementById("exampleInputnumber1");
    let input2 = document.getElementById("exampleInputnumber2");
    let input3 = document.getElementById("exampleInputnumber3");
    let answer= document.querySelector("textarea")
    console.log(input1.value);

    let input = document.querySelectorAll("input");
let log = document.getElementById("values");

document.addEventListener("input", updateValue);

function updateValue(e) {
    let outputArray=[]
    if (e.target.value != '') {
        for (let i = 0; i < input.length; i++) {
            if (input[i].value !='') {
                outputArray.push(input[i].value);
            }
            
          }
    
    // outputArray.push(e.target.value);
    
console.log(e.target.value)

let sum = 0;
console.log(outputArray)
// calculate sum using forEach() method
outputArray.forEach( num => {
  sum += Number(num);
})
// var isStrict = (function() { return !this; })(); console.log(isStrict);
console.log(sum)
let denom= outputArray.length
let mean= sum/denom
answer.value=mean
}
}

}