<html> 
     <head> 
  <title>chess board</title>
  <link rel="stylesheet" type="text/css" href="index.css">
  </head>
  <body> 
  
  <div class="header">
	<center><h1>CHESS BOARD</h1></center>
</div>

   <table width="250px" cellspacing="0px" cellpadding="0px" border="3px">
 
      <?php
      for($row=1;$row<=6;$row++)
      {
          echo "<tr>";
          for($col=1;$col<=6;$col++)
          {
          $total=$row+$col;
          if($total%2==0)
          {
             echo "<td id=first></td>"; 
            
          }
          else
          {
          echo "<td id=second></td>";
          }
          }
          echo "</tr>";
    }
          ?>
  </table>
  
  <div class="footer">
	<center><h1></h1></center>
</div>




</body>
  </html>