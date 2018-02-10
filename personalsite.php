<form method="post">  

Enter first number: <input type="number" name="first"/><br><br>  
Enter second number: <input type="number" name="second"/><br><br>  
<input type="submit" name="add" value="ADDITION"/>  
<input type="submit" name="sub" value="SUBTRACTION"/>  
<input type="submit" name="mul" value="MULTIPLICATIO"/>  
<input type="submit" name="div" value="DIVISON"/>  

</form>     


<?php
//add() function with two parameter  
function add($x,$y)    
{  
$sum=$x+$y;  
echo "sum of given no. is = $sum <br><br>";  
}  
//sub() function with two parameter  
function sub($x,$y)    
{  
$sub=$x-$y;  
echo "Diff of given no. is = $sub <br><br>";  
} 
//MULTIPLY 
function mul($x,$y)    
{  
$mul=$x * $y;  
echo "Product of given no. is = $mul <br><br>";  
} 
#DIVISION
function div($x,$y)    
{  
$div=$x/$y;  
echo "Division of given no. is = $div <br><br>";  
} 
//call function, get  two argument through input box and click on add or sub button  
if(isset($_POST['add']))  
{  
//call add() function  
 add($_POST['first'],$_POST['second']);  
}     
if(isset($_POST['sub']))  
{  
//call add() function  
sub($_POST['first'],$_POST['second']);  
} 
 if(isset($_POST['mul']))  
{  
//call mul() function  
 mul($_POST['first'],$_POST['second']);  
} 
if(isset($_POST['div']))  
{  
//call div() function  
 div($_POST['first'],$_POST['second']);  
} 
?> 
 