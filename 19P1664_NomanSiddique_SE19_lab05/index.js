

function multiple(num1,num2) {
	var results1=1 ;
	var results2=1 ;
    for (var a = 1; a < 21; a++) {
        results1 += a + 'x' + num1 + '= ' + (a * num1) + '<br />';      
	    results2 += a + 'x' + num2 + '= ' + (a * num2) + '<br />';   
	}
	var store=[results1,results2];
    return store;
}

var number1=multiple(5,10)[0];
var number2=multiple(5,10)[1];
document.getElementById('first').innerHTML=number1;
document.getElementById('second').innerHTML=number2;

var operation=function(num1,num2)
{
	  var results = [];
	  results[0]='Addition of ' + num1 + ' and ' + num2 + '=' + (num1+num2) + '<br />';
	  results[1]='multiplication of ' + num1 + ' and ' + num2 + '=' + (num1*num2) + '<br />';
	  results[2]='Division of ' + num1 + ' and ' + num2 + '		 =' + (num1/num2) + '<br />';
	  results[3]='Subtration of ' + num1 + ' and ' + num2 + '	 =' + (num1-num2) + '<br />';
	  var store=results[0,1,2,3]
      return results;	  
}

var number3=operation(5,10);
document.getElementById('third').innerHTML=number3;


console.log("Hello world!");



