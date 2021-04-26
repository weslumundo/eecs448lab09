
function errorCheck(){
	//all of my attempts to do things like this \/ failed so excue the lack of for loops or shorthand
	//let name = document.getElementById("name");
	//let pass = document.getElementById("pass");
	console.log("started bug test");
	let test=1;
	let test1=0;
	let test2=0;
	let test3=0;
		//number1
		if(test==1)
		{
			if(document.getElementById("s1").value==""){
				test=0;
				alert("Bad Input In Shopping Card");
			}
		}
		if(test==1){
			if((Number((document.getElementById("s1")).value).toString())!=(document.getElementById("s1").value)){//test its a number
				test=0;
				alert("Shopping Cart Input must be numbers");
			}
		}
		if(test==1){
			if(Number(document.getElementById("s1").value)<0){//non negative
				test=0;
				alert("Shopping Cart Input must not be negative");
			}
		}
		if(test==1){
			if(document.getElementById("s1").value!="0")
			{
				test1=1;
			}
		}
		//number2
		if(test==1)
		{
			if(document.getElementById("s2").value==""){
				test=0;
				alert("Bad Input In Shopping Card");
			}
		}
		if(test==1){
			if((Number((document.getElementById("s2")).value).toString())!=(document.getElementById("s2").value)){//test its a number
				test=0;
				alert("Shopping Cart Input must be numbers");
			}
		}
		if(test==1){
			if(Number(document.getElementById("s2").value)<0){//non negative
				test=0;
				alert("Shopping Cart Input must not be negative");
			}
		}
		if(test==1){
			if(document.getElementById("s2").value!="0")
			{
				test=1;
			}
		}
		//number 3
		if(test==1)
		{
			if(document.getElementById("s3").value==""){
				test=0;
				alert("Bad Input In Shopping Card");
			}
		}
		if(test==1){
			if((Number((document.getElementById("s3")).value).toString())!=(document.getElementById("s3").value)){//test its a number
				test=0;
				alert("Shopping Cart Input must be numbers");
			}
		}
		if(test==1){
			if(Number(document.getElementById("s3").value)<0){//non negative
				test=0;
				alert("Shopping Cart Input must not be negative");
			}
		}
		if(test==1){
			if(document.getElementById("s3").value!="0")
			{
				test1=1;
			}
		}
		//number 4
		if(test==1){
			if(document.getElementById("s4").value==""){
				test=0;
				alert("Bad Input In Shopping Card");
			}
		}
		if(test==1){
			if((Number((document.getElementById("s4")).value).toString())!=(document.getElementById("s4").value)){//test its a number
				test=0;
				alert("Shopping Cart Input must be numbers");
			}
		}
		if(test==1){
			if(Number(document.getElementById("s4").value)<0){//non negative
				test=0;
				alert("Shopping Cart Input must not be negative");
			}
		}
		if(test==1){
			if(document.getElementById("s4").value!="0")
			{
				test1=1;
			}
		}
	if(test1==0&&test==1){
		test=0;
		alert("Shopping Cart Empty");
	}
	if(test==1){//non empty username
		if(name.value==""){
			test=0;
			alert("User Name Empty");
		}
	}
	if(test==1){//form something @ something .com
		if(document.getElementById("name").value.split("@").length==2){
			if(document.getElementById("name").value.split(".com").length==2){
				if(document.getElementById("name").value.split(".com")[1]==""){
					if(document.getElementById("name").value.split("@")[0]!=""){
						if(document.getElementById("name").value.split("@")[1].split(".com")[0]!=""){
							//pass
							test2=1;
						}
					}
				}
			}
		}
	}
	if(test2!=1&&test==1){
		test=0;
		alert("Username must be of type \"name@domain.com\"")
	}
	if(test==1){
		if(document.getElementById("pass").value==""){
			test=0;
			alert("Password Empty");
		}
	}
    if(document.getElementById("seven").checked){
		test3=1
	}
	if(document.getElementById("overNight").checked){
		test3=1
	}
	if(document.getElementById("threeDay").checked){
		test3=1
	}
	if(test3==0 && test==1){
		test=0;
		alert("No shipping option selected");
	}
	if(test==1){
		console.log("passed");
		return true;
	}
	else{
		console.log("failed");
		return false;
	}
}