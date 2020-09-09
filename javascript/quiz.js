function re_set(){
	  arr=document.querySelectorAll("#quiz input");
	  console.log(arr);
	  for(i=0; i<arr.length; i++){
	  arr[i].removeAttribute("disabled");
	  }
document.getElementById("quiz").reset();	
document.getElementById("after").style.display = "none";
document.getElementById("question1").style.color = "black";	
document.getElementById("question2").style.color = "black";	
document.getElementById("question3").style.color = "black";	
document.getElementById("question4").style.color = "black";	
document.getElementById("question5").style.color = "black";	
document.getElementById("question6").style.color = "black";	
document.getElementById("question7").style.color = "black";	
document.getElementById("question8").style.color = "black";
document.getElementById("question9").style.color = "black";
document.getElementById("question10").style.color = "black"; 

}

function check(){
	  arr=document.querySelectorAll("#quiz input");
	  console.log(arr);
	  for(i=0; i<arr.length; i++){
	  arr[i].setAttribute("disabled", true);
	  }
	  
	var question1 = document.quiz.choose1.value;
	var question2 = document.quiz.choose2.value;
	var question3 = document.quiz.choose3.value;
	var question4 = document.quiz.choose4.value;
	var question5 = document.quiz.choose5.value;
	var question6 = document.quiz.choose6.value;
	var question7 = document.quiz.choose7.value;
	var question8 = document.quiz.choose8.value;
	var question9 = document.quiz.choose9.value;
	var question10 = document.quiz.choose10.value;
	
var correct = 0;
	if (question1 == "1") {
     correct++;	
     document.getElementById("question1").style.color = "black";		 
	 }
	else
	 {
	 document.getElementById("question1").style.color = "red";
	 
	 }
	
	if (question2 == "1") {
     correct++;	
     document.getElementById("question2").style.color = "black";		
	 }
	else
	 {
	 document.getElementById("question2").style.color = "red";
	 }
	
	if (question3 == "1") {
     correct++;	
     document.getElementById("question3").style.color = "black";		
	 }
	else
	 {
	 document.getElementById("question3").style.color = "red";
	 }
	
	if (question4 == "1") {
     correct++;	
     document.getElementById("question4").style.color = "black";		
	 }
	else
	{
	 document.getElementById("question4").style.color = "red";
	}
	
	if (question5 == "1") {
     correct++;	
     document.getElementById("question5").style.color = "black";		
	}
	else
	{
	 document.getElementById("question5").style.color = "red";
	}
	
	if (question6 == "1") {
     correct++;	
     document.getElementById("question6").style.color = "black";		
	}
	else
	{
	 document.getElementById("question6").style.color = "red";
	}
	
	if (question7 == "1"){
     correct++;	
     document.getElementById("question7").style.color = "black";		
	}
	else
	{
	 document.getElementById("question7").style.color = "red";
	}
	
	if (question8 == "1"){
     correct++;	
     document.getElementById("question8").style.color = "black";		
	}
	else
	{
	 document.getElementById("question8").style.color = "red";
	}
	
	if (question9 == "1"){
     correct++;	
     document.getElementById("question9").style.color = "black";		
	}
	else
	{
	 document.getElementById("question9").style.color = "red";
	}
	
	if (question10 == "1") {
     correct++;	
     document.getElementById("question10").style.color = "black";		
	}
	else
	{
	 document.getElementById("question10").style.color = "red";
	}
	
	var bgColor = ["#ff1a1a", "yellow", "lightgreen"];
	var messege = ["Try better next time", "That's not good :(","So far so good!", "Great Job!!", "Excellent!!!"];
    var score
	
	if (correct>=0 && correct<=5)
	{
		score=0;
	   if(correct==0)
		{
		   current_messege=0;
		}
	   if (correct>=1 && correct<=5)
		{
		  current_messege=1;
		}
	}
		
    if (correct>=6 && correct<=7)
	{
		score=1;
		current_messege=2;
		
	}
	 if (correct>=8 && correct<=10)
	{
		if (correct>=8 && correct<=9)
		{
		current_messege=3;	
		}
		if (correct==10)
		{
		current_messege=4;	
		}
		score=2;
	}
	 
    document.getElementById("after").style.display = "block";
    document.getElementById("after").style.backgroundColor = bgColor[score];    
	document.getElementById("number_correct").innerHTML = "You got " + correct + " correct.";
	document.getElementById("review_correct").innerHTML = messege[current_messege];
}
	 
	
	

	