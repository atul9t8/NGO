let clicked, clicked1, clicked2, clicked3, clicked4=false;

let para1=document.getElementById('para1');
let para2=document.getElementById('para2');
let para3=document.getElementById('para3');
let para4=document.getElementById('para4');
let para5=document.getElementById('para5');

let amountInput = document.getElementById('amount-input');
let paraBtn=document.getElementById('para-btn');

let total= document.getElementById('return');
let amount = document.getElementById('amount');
amount.value=0;



paraBtn.onclick=function () {
    if (isNaN(amountInput.value)){
        alert('Please enter number')
    }else{
        if (amountInput.value <= 0){
            alert("Your amount have to more than $0");
        }else {
            total.innerText=amountInput.value;

            amount.value = total.innerText;

        }
    }
}

function color1() {
    if(!clicked){
        if(clicked1|| clicked2|| clicked3|| clicked4){
            alert('You Can not select multiple amount');
        }else{
            para1.style.backgroundColor='#00FF4E';
            total.innerText=para1.innerText;

            amount.value = total.innerText;
            // console.log(amount.value);


            clicked=true;
        }
    }else{
        para1.style.backgroundColor='';
        total.innerText='0';

        amount.value = total.innerText;
        // console.log(amount.value);


        clicked=false;
    }
}

function color2() {
    if(!clicked1){
        if(clicked|| clicked2|| clicked3|| clicked4){
            alert('You Can not select multiple amount');

        }else{
            para2.style.backgroundColor='#00FF4E';
            total.innerText=para2.innerText;

            amount.value = total.innerText;

            clicked1=true;
        }
    }else{
        para2.style.backgroundColor='';
        total.innerText='0';

        amount.value = total.innerText;

        clicked1=false;
    }
}

function color3() {
    if(!clicked2){
        if(clicked|| clicked1|| clicked3|| clicked4){
            alert('You Can not select multiple amount');

        }else{
            para3.style.backgroundColor='#00FF4E';
            total.innerText=para3.innerText;

            amount.value = total.innerText;

            clicked2=true;
        }
    }else{
        para3.style.backgroundColor='';
        total.innerText='0';

        amount.value = total.innerText;

        clicked2=false;
    }
}

function color4() {
    if(!clicked3){
        if(clicked|| clicked2|| clicked1|| clicked4){
            alert('You Can not select multiple amount');

        }else{
            para4.style.backgroundColor='#00FF4E';
            total.innerText=para4.innerText;

            amount.value = total.innerText;

            clicked3=true;
        }
    }else{
        para4.style.backgroundColor='';
        total.innerText='0';

        amount.value = total.innerText;

        clicked3=false;
    }
}

function color5() {
    if(!clicked4){
        if(clicked|| clicked2|| clicked1|| clicked3){
            alert('You Can not select multiple amount');
        }else{
            para5.style.backgroundColor='#00FF4E';
            clicked4=true;
            amountInput.classList.toggle('active');
            paraBtn.classList.toggle('active');
            para1.classList.toggle('inactive');
            para2.classList.toggle('inactive');
            para3.classList.toggle('inactive');
            para4.classList.toggle('inactive');


            // total.innerText=amountInput.value;
        }
    }else{
        para5.style.backgroundColor='';
        total.innerText='0';

        amount.value = total.innerText;

        clicked4=false;
        amountInput.classList.toggle('active');
        paraBtn.classList.toggle('active');
        para1.classList.toggle('inactive');
        para2.classList.toggle('inactive');
        para3.classList.toggle('inactive');
        para4.classList.toggle('inactive');
    }
}

// if(total.innerText === 0){
//     alert ('Please enter a ')
// }
console.log(amount.value);




