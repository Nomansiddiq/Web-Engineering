var result='';

function calgrade( marks)
{
	if (marks <= 60){
          return "F";    
 		 
          } 
        else if (marks <= 70) {
                return "D";
                  } 
        else if (marks <= 80) 
             {
                return "C"; 
        } else if (marks <= 90) {
                return "B"; 
        } else if (marks <= 100) {
                return "A"; 
		}
		else
		{
			return "Wrong Input";
		}
			
		
}

var std = [];
 std[0]=document.getElementById("first").value;
var value=calgrade(std[0]);
document.getElementById('firstprint').innerHTML=value;


std[1]=document.getElementById("second").value;
var value=calgrade(std[1]);
document.getElementById('secondprint').innerHTML=value;

std[2]=document.getElementById("third").value;
var value=calgrade(std[2]);
document.getElementById('thirdprint').innerHTML=value;

std[3]=document.getElementById("fourth").value;
var value=calgrade(std[3]);
document.getElementById('fourthprint').innerHTML=value;

std[4]=document.getElementById("fifth").value;
var value=calgrade(std[4]);
document.getElementById('fifthprint').innerHTML=value;



function classAvg()
{
	var size=std.length;
	let count=0;
	
	for(a=0; a<size; a++)
	{
		count+=std[a];
		
	}
	
	count=(count/size);
	
	return count;
}

var value=classAvg();
document.getElementById('classavg').innerHTML=value;
