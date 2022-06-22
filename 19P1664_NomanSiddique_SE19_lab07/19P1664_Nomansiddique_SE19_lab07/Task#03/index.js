//Function for adding values 
function add() { 
 var one = document.getElementById('num1').value; 
 var two = document.getElementById('num2').value; 
 var numOne = parseInt(one); 
 var numTwo = parseInt(two); 
 var result = numOne + numTwo; 
 document.getElementById("result").innerHTML=result;
// alert('Result is: ' + result); 
} 
 
//Function for subtracting values 
function sub() { 
 var one = document.getElementById('num1').value; 
 var two = document.getElementById('num2').value; 
 var numOne = parseInt(one); 
 var numTwo = parseInt(two); 
 var result = numOne - numTwo; 
 document.getElementById("result").innerHTML=result;
// alert('Result is: ' + result); 
} 
 
//Function for multiplying values  
function mul() { 
 var one = document.getElementById('num1').value; 
 var two = document.getElementById('num2').value; 
 var numOne = parseInt(one); 
 var numTwo = parseInt(two); 
 var result = numOne * numTwo; 
 document.getElementById("result").innerHTML=result;
 //alert('Result is: ' + result); 
} 
 
//Function for dividing values 
function div() { 
 var one = document.getElementById('num1').value; 
 var two = document.getElementById('num2').value; 
 var numOne = parseInt(one); 
 var numTwo = parseInt(two); 
 var result = numOne / numTwo; 
 document.getElementById('result').innerHTML=result;
 
 //alert('Result is: ' + result); 
}

function clear() { 

    var result= ' ';
  document.getElementById('result').innerHTML=result;
  document.getElementById('num2').innerHTML=result;
  document.getElementById('num1').innerHTML=result;
  
} 
 

 