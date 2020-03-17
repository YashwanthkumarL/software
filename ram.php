<html> 
   <head> 
   </head> 
   
   <body> 
      <form>
	  Num1<input type="text" id="num1" value="">
	  <br>
	  Num2<input type="text" id="num2" value="">
	  <br>
	  <input type="button" value="add" onclick="add()">
	  <input type="button" value="sub" onclick="add1()">
	  <input type="button" value="mul" onclick="add2()">
	  <input type="button" value="div" onclick="add3()">
	  <input type="button" value="clr" onclick="clr()">
		 
	  result<input type="text" id="result" value="">
	  
	  
	  
	  
	  
	  
	  </form>
<script>
function add(){
	var n1 = document.getElementById("num1").value;
	//alert(n1);
	var n2 = document.getElementById("num2").value;
	//alert(n2);
	var result = parseInt(n1) + parseInt(n2);
    document.getElementById("result").value = result;
	//alert(result);
	
}
function add1(){
	var n1 = document.getElementById("num1").value;
	//alert(n1);
	var n2 = document.getElementById("num2").value;
	//alert(n2);
	var result = parseInt(n1) - parseInt(n2);
    document.getElementById("result").value = result;
	//alert(result);
	
}
function add2(){
	var n1 = document.getElementById("num1").value;
	//alert(n1);
	var n2 = document.getElementById("num2").value;
	//alert(n2);
	var result = parseInt(n1) * parseInt(n2);
    document.getElementById("result").value = result;
	//alert(result);
	
}
function add3(){
	var n1 = document.getElementById("num1").value;
	//alert(n1);
	var n2 = document.getElementById("num2").value;
	//alert(n2);
	var result = parseInt(n1) / parseInt(n2);
    document.getElementById("result").value = result;
	//alert(result);
	
}
function clr(){
	document.getElementById("num1").value;
	document.getElementById("num2").value;
    document.getElementById("result").value = '';
}




</script>	  
</body> 
</html> 