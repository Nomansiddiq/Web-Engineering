/*var inputs=document.getElementsByTagName("input");
var res=document.getElementById("result");

inputs[1].onclick = function(){	
	res.value=res.value+"0";
}
inputs[2].onclick = function(){
	res.value=res.value+"1";
}
inputs[3].onclick = function(){
	res.value=res.value+"+";
}
inputs[4].onclick = function(){
	ress=res.value.split("+");
	if(ress.length==2){
		sum=add(ress[0],ress[1]);
		res.value=sum;
	}
}
function add(x,y){
	for(var i=0;i<x.length-y.length;i++){
		y="0"+y;
	}
	for(var i=0;i<y.length-x.length;i++){
		x="0"+x;
	}
	var z="";
	var c=0;
	for (var i = x.length-1; i >= 0 ; i--) {
		a=parseInt(x.charAt(i));
		b=parseInt(y.charAt(i));
		if((a+b+c)==0){
			z="0"+z;
		}
		else  if((a+b+c)==1){
			z="1"+z;
			c=0;
		}
		else if((a+b+c)==2){
			z="0"+z;
			c=1;
		}
		else if((a+b+c)==3){
			z="1"+z;
		}
	}
	return c+z;
}



*/

let display = document.getElementById('display');
let buttons = Array.from(document.getElementsByClassName('button'));
buttons.map( button => {
    button.addEventListener('click', (e) => {
        switch(e.target.innerText){
            case 'C':
                display.innerText = '';
                break;
            case '=':
                try{
                    display.innerText = eval(display.innerText);
                } catch {
                    display.innerText = "Error"
                }
                break;
            case '←':
                if (display.innerText){
                   display.innerText = display.innerText.slice(0, -1);
                }
                break;
            default:
                display.innerText += e.target.innerText;
        }
    });
});
