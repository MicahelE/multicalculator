
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

    let input1 = document.getElementById("payInputnumber");
    let input2 = document.getElementById("payInputnumber2");
    let input3 = document.getElementById("payInputnumber3");
    let input4 = document.getElementById("payInputnumber4");
    let input5 = document.getElementById("payInputnumber5");

    let elements = document.querySelectorAll('[id^="payInput"]');

let clickEvent = () => {
    console.log('some event content here...')
}
elements.forEach((item) => {
    item.addEventListener('input', raiseValue)
});

function calculate(e) {
    if (e.target.value != '') {
        
     if (e.target.id=="payInputnumber2")
     {

     }  
}
}

function raiseValue(e) {

    let convalue
    let hpw= Number(input1.value)
    // let dpw= Number(input6.value)
    
       if (e.target.value  !=0 || "" ) {
        
        switch (e.target.id) {
            case 'payInputnumber3':
                convalue= Number(e.target.value)/hpw
                input2.value=convalue
                input4.value=convalue * hpw * 52/12
                input5.value=convalue * hpw * 52
                // results.value= Math.round(convalue * hpw * 52/12)
                break;
            case 'payInputnumber4':
                convalue= Number(e.target.value)/ (hpw * 52/12)
                input2.value=convalue
                input3.value=convalue * hpw
                
                input5.value=convalue * hpw * 52
                // results.value= Math.round(convalue * hpw * 52/12)
                break;
            case 'payInputnumber5':
                convalue= Number(e.target.value)/(52*hpw)
                input2.value=convalue
                input3.value=convalue * hpw
                input4.value=convalue * hpw * 52/12
                
                // results.value= Math.round(convalue * hpw * 52/12)
                 break;
        
            default:
                convalue= Number(e.target.value)
                input3.value=convalue * hpw
                input4.value=convalue * hpw * 52/12
                input5.value=convalue * hpw * 52
                // results.value= Math.round(convalue * hpw * 52/12)
                break;
            }
            console.log(convalue)  
        }
        

    }


}


if(document.querySelector("#markuppage")){

    let input1 = document.getElementById("markupInputnumber1");
    let input2 = document.getElementById("markupInputnumber2")
    let input3 = document.getElementById("markupInputnumber3")
    let input4 = document.getElementById("markupInputnumber4")

    let elements = document.querySelectorAll('[id^="markupInput"]');

    elements.forEach((item) => {
        item.addEventListener('input', markupValue )
    });

    function markupValue(e) {
        if (input1.value && input2.value != '') {
           let cost=Number(input1.value)
           let percent=Number(input2.value)

           let markup= cost * 0.01 * percent
           console.log(markup)
           let revenue = cost+markup
            input3.value=revenue
            input4.value=markup
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


if(document.querySelector("#monthly-incomepage")){

    let input1 = document.getElementById("monthlyInputnumber1");
    let input2 = document.getElementById("monthlyInputnumber2")
    let input3 = document.getElementById("monthlyInputnumber3")
    let input4 = document.getElementById("monthlyInputnumber4")
    let input5 = document.getElementById("monthlyInputnumber5")
    let input6 = document.getElementById("monthlyInputnumber6")
    let results = document.getElementById("results")
    let elements = document.querySelectorAll('[id^="monthlyInput"]');

    elements.forEach((item) => {
        item.addEventListener('input', monthlyValue )
    });

    function monthlyValue(e) {

        let convalue
        let hpw= Number(input5.value)
        let dpw= Number(input6.value)
        
           if (e.target.value && input5.value && input6.value !=0 || '') {
            
            switch (e.target.id) {
                case 'monthlyInputnumber2':
                    convalue= Number(e.target.value)* dpw/hpw
                    input1.value=convalue
                    input3.value=convalue * hpw
                    input4.value=convalue * hpw * 52
                    results.value= Math.round(convalue * hpw * 52/12)
                    break;
                case 'monthlyInputnumber3':
                    convalue= Number(e.target.value)/hpw
                    input1.value=convalue
                    input2.value=convalue * hpw/dpw
                    
                    input4.value=convalue * hpw * 52
                    results.value= Math.round(convalue * hpw * 52/12)
                    break;
                case 'monthlyInputnumber4':
                    convalue= Number(e.target.value)/(52*hpw)
                    input1.value=convalue
                    input2.value=convalue * hpw/dpw
                    input3.value=convalue * hpw
                    
                    results.value= Math.round(convalue * hpw * 52/12)
                     break;
            
                default:
                    convalue= Number(e.target.value)
                    input2.value=convalue * hpw/dpw
                    input3.value=convalue * hpw
                    input4.value=convalue * hpw * 52
                    results.value= Math.round(convalue * hpw * 52/12)
                    break;
                }
                  
            }
            console.log(convalue) 

        }
       
   
}