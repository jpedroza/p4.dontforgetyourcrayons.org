
//provides the time at the very top of the screen
function myFunction() {
	var d = new Date();
	var x = document.getElementById("top");
	x.innerHTML=d.toDateString();
}

//used to ensure only numbers are passed - gives light protection from sql injection attacks using regular expressions
function numericFilter(txb) {
   txb.value = txb.value.replace(/[^\0-9]/ig, "");
}