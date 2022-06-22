<html>
<head>
    <title>Questionfour</title>
	<link href = "QuestionFour.css" type ="text/css" rel = "stylesheet"/> 

</head>
<body>
       
       
          <?php
                
                

                echo "<table>";
				 $count=0;
				 for ($a=0; $a <10 ; $a++) 
				      
				 { 
					 for ($b=0; $b <10 ; $b++) { 
						 echo  "<td>", $count=$count+1 ,"</td>";
					 }
				    	 echo "</tr>";
				

					    
				 }
				 echo "</table>"
				

 

          ?>



    
</body>



</html>  



