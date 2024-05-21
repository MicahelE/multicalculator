
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

    let test = Array.from(input).every(item => {
        return item.value != ""
      })
      // checks if all inputs values are not null 

if (test) { // adds a new input when true
    let arrtest= Array.from(input);
 let newInput=document.createElement("input");
 newInput.setAttribute("class", "form-control");
 let arrno= arrtest.length + 1;
 let newId= "exampleInputnumber" + arrno
 newInput.setAttribute("id", newId);
 newInput.setAttribute("placeholder", "#"+arrno);
 console.log(newInput);
 console.log(arrtest);
 let lastEl=arrtest[arrtest.length - 1];
 lastEl.parentNode.insertBefore( newInput, lastEl.nextSibling);
 input = document.querySelectorAll("input");
}

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
    

    
    let raise1 = document.getElementById("raisenumber");
    let raise2 = document.getElementById("raisenumber2");
    let raise3 = document.getElementById("raisenumber3");
    let raise4 = document.getElementById("raisenumber4");
    let raise5 = document.getElementById("raisenumber5");

    let afterraise1 = document.getElementById("afterraisenumber");
    let afterraise2 = document.getElementById("afterraisenumber2");
    let afterraise3 = document.getElementById("afterraisenumber3");
    let afterraise4 = document.getElementById("afterraisenumber4");
    // input variables
    let elements = document.querySelectorAll('[id^="payInput"]');

    let secondelements = document.querySelectorAll('[id^="raisenumber"]');

    let thirdelements = document.querySelectorAll('[id^="afterraisenumber"]');

elements.forEach((item) => {
    item.addEventListener('input', raiseValue)
});

secondelements.forEach((item) => {
    item.addEventListener('input', percentValue)
});

thirdelements.forEach((item) => {
    item.addEventListener('input', changeAfterRaise)
});

let convalue
let raisevalue
let hpw
let afterraisevalue

function raiseValue(e) {

    
    let hpw= Number(input1.value)
    // let dpw= Number(input6.value)
    
       if (e.target.value  !=0 || "" ) {
        
        switch (e.target.id) {
            case 'payInputnumber':

                if (input2.value!='') {
                
                input2.value=convalue
                input3.value=convalue * hpw
                input4.value=convalue * hpw * 52/12
                input5.value=convalue * hpw * 52
                reevaluate()
                }
                // results.value= Math.round(convalue * hpw * 52/12)
                break;
            case 'payInputnumber3':
                convalue= Number(e.target.value)/hpw
                input2.value=convalue
                input4.value=convalue * hpw * 52/12
                input5.value=convalue * hpw * 52
                reevaluate()
                // results.value= Math.round(convalue * hpw * 52/12)
                break;
            case 'payInputnumber4':
                convalue= Number(e.target.value)/ (hpw * 52/12)
                input2.value=convalue
                input3.value=convalue * hpw
                
                input5.value=convalue * hpw * 52
                reevaluate()
                // results.value= Math.round(convalue * hpw * 52/12)
                break;
            case 'payInputnumber5':
                convalue= Number(e.target.value)/(52*hpw)
                input2.value=convalue
                input3.value=convalue * hpw
                input4.value=convalue * hpw * 52/12
                reevaluate()
                // results.value= Math.round(convalue * hpw * 52/12)
                 break;
        
            default:
                convalue= Number(e.target.value)
                input3.value=convalue * hpw
                input4.value=convalue * hpw * 52/12
                input5.value=convalue * hpw * 52
                reevaluate()
                // results.value= Math.round(convalue * hpw * 52/12)
                break;
            }
            console.log(convalue)  
        }
        

    }
function reevaluate() {

    if (raise2.value!="") {
        
    
                    raisevalue=raise2.value
                    raise1.value=raisevalue / (0.01*convalue)
                    // raise2.value=raisevalue
                    raise3.value=raisevalue * hpw
                    console.log(hpw)
                    raise4.value=raisevalue * hpw * 52/12
                    raise5.value=raisevalue * hpw * 52
                    afterRaise()
                }
}
    function percentValue(e) {

    
        hpw= Number(input1.value)
        // let dpw= Number(raise6.value)
        
           if (e.target.value  !=0 || "" ) {
            
            switch (e.target.id) {
                case 'raisenumber':
                    raisevalue= Number(e.target.value)* convalue *0.01
                    raise2.value=raisevalue
                    raise3.value=raisevalue * hpw
                    console.log(hpw)
                    raise4.value=raisevalue * hpw * 52/12
                    raise5.value=raisevalue * hpw * 52
                   // changes other input values when changed
                    break;
                case 'raisenumber3':
                    raisevalue= Number(e.target.value)/hpw
                    raise1.value=raisevalue / (0.01*convalue)
                    raise2.value=raisevalue
                    raise4.value=raisevalue * hpw * 52/12
                    raise5.value=raisevalue * hpw * 52
                   // changes other input values when changed
                    break;
                case 'raisenumber4':
                    raisevalue= Number(e.target.value)/ (hpw * 52/12)
                    raise1.value=raisevalue / (0.01*convalue)
                    raise2.value=raisevalue
                    raise3.value=raisevalue * hpw
                    raise5.value=raisevalue * hpw * 52
                   // changes other input values when changed
                    break;
                case 'raisenumber5':
                    raisevalue= Number(e.target.value)/(52*hpw)
                    raise1.value=raisevalue / (0.01*convalue)
                    raise2.value=raisevalue
                    raise3.value=raisevalue * hpw
                    raise4.value=raisevalue * hpw * 52/12
                    
                   // changes other input values when changed
                     break;
            
                default:
                    raisevalue= Number(e.target.value)
                    raise1.value=raisevalue / (0.01*convalue)
                    raise3.value=raisevalue * hpw
                    raise4.value=raisevalue * hpw * 52/12
                    raise5.value=raisevalue * hpw * 52
                   // changes other input values when changed
                    break;
                }
                console.log(raisevalue)  
                afterRaise()
            }
            
    
        }
    
        function afterRaise() {
            
            afterraise1.value=Number(input2.value)+Number(raise2.value)
            afterraise2.value=Number(input3.value)+Number(raise3.value)
            afterraise3.value=Number(input4.value)+Number(raise4.value)
            afterraise4.value=Number(input5.value)+Number(raise5.value)
        }


        function newRaise() {
            
           raise1.value=((Number( afterraise1.value)- Number(input2.value))/Number(input2.value)) * 100
           raise2.value=Number( afterraise1.value)- Number(input2.value)
           raise3.value=Number( afterraise2.value)- Number(input3.value)
           raise4.value=Number( afterraise3.value)- Number(input4.value)
           raise5.value=Number( afterraise4.value)- Number(input5.value)
        }

        function changeAfterRaise(e) {
            hpw= Number(input1.value)
        // let dpw= Number(raise6.value)
        
           if (e.target.value  !=0 || "" ) {
            
            switch (e.target.id) {
                case 'afterraisenumber2':
                    afterraisevalue= Number(e.target.value)/ hpw
                    afterraise1.value=afterraisevalue 
                    afterraise3.value=afterraisevalue * hpw * 52/12
                    afterraise4.value=afterraisevalue * hpw * 52
                   // changes other input values when changed
                    break;
                case 'afterraisenumber3':
                    afterraisevalue= Number(e.target.value)/ (hpw * 52/12)
                    afterraise1.value=afterraisevalue
                    afterraise2.value=afterraisevalue * hpw 
                    afterraise4.value=afterraisevalue * hpw * 52
                   // changes other input values when changed
                    break;
                case 'afterraisenumber4':
                    afterraisevalue= Number(e.target.value)/(52*hpw)
                    afterraise1.value=afterraisevalue
                    afterraise2.value=afterraisevalue * hpw 
                    afterraise3.value=afterraisevalue * hpw * 52/12
                    
                   // changes other input values when changed
                    break;
                
            
                default:
                    afterraisevalue= Number(e.target.value)
                    afterraise2.value=afterraisevalue * hpw
                    afterraise3.value=afterraisevalue * hpw * 52/12
                    afterraise4.value=afterraisevalue * hpw * 52
                   // changes other input values when changed
                    break;
                }
               
                newRaise()
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
        
           let cost
           let percent

           let markup
           console.log(markup)
           let revenue
            // input3.value=revenue
            // input4.value=markup

            switch (e.target.id) {
                case 'markupInputnumber1':
                    if (input1.value && input2.value != '') {
                    cost=Number(input1.value)
                    percent=Number(input2.value)

                    markup= cost * 0.01 * percent
                    console.log(markup)
                    revenue = cost+markup
                    input3.value=revenue
                    input4.value=markup
                   // changes other input values when changed
                    }
                   break;
                case 'markupInputnumber2':
                    if (input1.value && input2.value != '') {
                    cost=Number(input1.value)
                    percent=Number(input2.value)

                    markup= cost * 0.01 * percent
                    console.log(markup)
                    revenue = cost+markup
                    input3.value=revenue
                    input4.value=markup
                    }
                    // changes other input values when changed
                    break;    
               
                case 'markupInputnumber3':
                    if ( input3.value && input4.value != '') {
                    // cost=Number(input1.value)
                    // percent=Number(input2.value)
                    revenue=Number(input3.value)
                    markup= Number(input4.value)
                    cost= revenue-markup
                    percent= markup / (cost * 0.01)  
                    
                    
                    input1.value=cost
                    input2.value=percent
                    // changes other input values when changed
                    break; 
                    }
                case 'markupInputnumber4':
                    if (input3.value  && input4.value != '') {
                    // cost=Number(input1.value)
                    // percent=Number(input2.value)
                    revenue=Number(input3.value)
                    markup= Number(input4.value)
                    cost= revenue-markup
                    percent= markup / (cost * 0.01)
                    input1.value=cost
                    input2.value=percent
                    // changes other input values when changed
                    break; 
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


if(document.querySelector("#monthly-incomepage")){

    let input1 = document.getElementById("monthlyInputnumber1");
    let input2 = document.getElementById("monthlyInputnumber2")
    let input3 = document.getElementById("monthlyInputnumber3")
    let input4 = document.getElementById("monthlyInputnumber4")
    let input5 = document.getElementById("monthlyInputnumber5")
    let input6 = document.getElementById("monthlyInputnumber6")
    let label5 = document.getElementById("label5")
    let label6 = document.getElementById("label6")
    let results = document.getElementById("results")
    let adjust = document.getElementById("adjust");
    let elements = document.querySelectorAll('[id^="monthlyInput"]');

    elements.forEach((item) => {
        item.addEventListener('input', monthlyValue )
    });


    adjust.addEventListener('change', function (e) {
        if(adjust.checked){
            input5.setAttribute("type", "hidden");
            input6.setAttribute("type", "hidden");
            label5.setAttribute("hidden", "");
            label6.setAttribute("hidden", "");
        }
        else{
            input5.setAttribute("type", "number");
            input6.setAttribute("type", "number");
            label5.removeAttribute("hidden");
            label6.removeAttribute("hidden");
        }
    })

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

                case 'monthlyInputnumber5':
                    hpw= Number(e.target.value)
                    // input1.value=convalue
                    console.log(hpw)
                    console.log(convalue)
                    console.log(input1.value)
                    convalue= Number(input1.value)
                    input2.value=convalue * hpw/dpw
                    input3.value=convalue * hpw
                    input4.value=convalue * hpw * 52
                    results.value= Math.round(convalue * hpw * 52/12)
                     break;

                case 'monthlyInputnumber6':
                        dpw= Number(e.target.value)
                        // input1.value=convalue
                        convalue= Number(input1.value)
                        input2.value=convalue * hpw/dpw
                        input3.value=convalue * hpw
                        input4.value=convalue * hpw * 52
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


if(document.querySelector("#overtimepage")){

    let input1 = document.getElementById("overtimeInputnumber1");
    let input2 = document.getElementById("overtimeInputnumber2")
    let input3 = document.getElementById("overtimeInputnumber3")
    let input4 = document.getElementById("overtimeInputnumber4")
    let input5 = document.getElementById("overtimeInputnumber5")
    let input6 = document.getElementById("overtimeInputnumber6")
    let input7 = document.getElementById("overtimeInputnumber7")
    let input8 = document.getElementById("overtimeInputnumber8")
    let input9 = document.getElementById("overtimeInputnumber9")
    let input10 = document.getElementById("overtimeInputnumber10")
    let input11 = document.getElementById("overtimeInputnumber11")
    let convalue
    let time = document.getElementById("time");
    let results = document.getElementById("results")

    time.addEventListener('input', overtimeValue )
    let elements = document.querySelectorAll('[id^="overtimeInput"]');

    elements.forEach((item) => {
        item.addEventListener('input', overtimeValue )
    });

function timeChange(e) {
    
    switch (e.target.value) {
        case "2":
            input1.value=input2.value
            break;
        case "3":
            input1.value=input3.value
            break;
        case "4":
            input1.value=input4.value
            break;
        default:
            input1.value=convalue
            break;
    }

    console.log(input2.value)
}

    function overtimeValue(e) {

        
        let hpw= Number(input5.value)
        let dpw= Number(input6.value)
        let opm
           if (e.target.value && input5.value && input6.value !=0 || '') {
            
            switch (e.target.id) {
                case 'overtimeInputnumber2':
                    convalue= Number(e.target.value)* dpw/hpw
                    input1.value=convalue
                    input3.value=convalue * hpw
                    input4.value=convalue * hpw * 52
                    results.value= Math.round(convalue * hpw * 52/12)
                    break;
                case 'overtimeInputnumber3':
                    convalue= Number(e.target.value)/hpw
                    input1.value=convalue
                    input2.value=convalue * hpw/dpw
                    
                    input4.value=convalue * hpw * 52
                    results.value= Math.round(convalue * hpw * 52/12)
                    break;
                case 'overtimeInputnumber4':
                    convalue= Number(e.target.value)/(52*hpw)
                    input1.value=convalue
                    input2.value=convalue * hpw/dpw
                    input3.value=convalue * hpw
                    
                    results.value= Math.round(convalue * hpw * 52/12)
                     break;
            
                case 'overtimeInputnumber1':
                    if (time.value=="1") {
                        convalue= Number(e.target.value)
                    }
                     else if (time.value=="2") {
                        convalue= Number(e.target.value)* dpw/hpw
                    }
                    else if (time.value=="3") {
                        convalue= Number(e.target.value)/hpw
                    }
                    else if (time.value=="4") {
                        convalue= Number(e.target.value)/(52*hpw)
                    }
                    input2.value=convalue * hpw/dpw
                    input3.value=convalue * hpw
                    input4.value=convalue * hpw * 52
                    results.value= Math.round(convalue * hpw * 52/12)
                    
                    break;    
                case 'time':
                    timeChange(e)
                    
                    break;
                default:
                    
                    break;
                }

                if (input9.value !=0 || '') {
                    
                
                opm= Number(input7.value)
                input8.value=opm
               input10.value= Number(input9.value)*opm
               input11.value= Number(input10.value) + Number(results.value)
            }
            }
            

        }
       
   
}