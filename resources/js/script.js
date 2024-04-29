
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

if(document.querySelector("#payraise")){

    let input1 = document.getElementById("payInputnumber1");
    let input2 = document.getElementById("payInputnumber2");
    let input3 = document.getElementById("payInputnumber3");


    let elements = document.querySelectorAll('[id^="payInput"]');

let clickEvent = () => {
    console.log('some event content here...')
}
elements.forEach((item) => {
    item.addEventListener('click', 
    function (e) {
        console.log('I have been clicked!')
    }
)
});

function calculate(e) {
    if (e.target.value != '') {
        
     if (e.target.id=="payInputnumber2")
     {

     }  
}
}
}


if(document.querySelector("#discountpage")){

    let input1 = document.getElementById("discountInputnumber1");
    let input2 = document.getElementById("discountInputnumber2")
    let input3 = document.getElementById("discountInputnumber3")
    let input4 = document.getElementById("discountInputnumber4")

    let elements = document.querySelectorAll('[id^="discountInput"]');

    elements.forEach((item) => {
        item.addEventListener('input', discountValue )
    });

    function discountValue(e) {
        if (input1.value && input2.value != '') {
           let oprice=Number(input1.value)
           let percent=Number(input2.value)

           let discount= oprice * 0.01 * percent
           console.log(discount)
           let saved = oprice-discount
            input3.value=saved
            input4.value=discount
        }
    }
}