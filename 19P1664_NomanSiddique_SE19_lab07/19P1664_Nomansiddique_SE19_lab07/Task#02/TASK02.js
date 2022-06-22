function namevalid()
{
   var name = document.getElementById('Name').value;
   if(name.length<5)
   {
	   document.getElementById('error1').innerHTML="Name Must contain atleat 5 letters";
	 
   }
   
}

function addressvalid()
{
	var name = document.getElementById('Address').value;
	var special= ['!','@'];
	
	for(a=0; a<special.length; a++)
	{
		if(name = special[a])
		{
			
		    document.getElementById('error2').innerHTML="Address should not have special Character";
			break;
		}
	}
	
}


function phonevalid()
{
	var number = document.getElementById('Phone Number').value;
	console.log(number);
	const first = String(number)[0];
	const sec = String(number)[1];
	const third = String(number)[2];
	if(first != '+' || sec!=9 || third != 2 )
	{
		document.getElementById('error3').innerHTML= "The Number Must start with +92";
	}
	
}

function checkvalid()
{
	phonevalid();
	addressvalid();
    namevalid();
	
}