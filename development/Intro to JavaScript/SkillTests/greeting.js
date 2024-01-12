// JavaScript Document

function greeting(inLocation)
{
	let greetingBlock = document.querySelector("#" + inLocation);	
	greetingBlock.style.color = "#483D8B";
	greetingBlock.style.fontSize = "150%";							
	greetingBlock.style.textAlign = "center";			

	let today = new Date();						//Create a date object called today with todays date and time in it.
	currentTime = today.getHours();				//Pull the hour of the day from the date object.  
	
	if(currentTime >= 6 && currentTime < 12)
	{
		greetingBlock.innerHTML = "Good Morning!";
	}
	else
	{
		if(currentTime >= 12 && currentTime <17)
		{
			greetingBlock.innerHTML = "Good Afternoon!";
		}
		else
		{
			greetingBlock.innerHTML = "Good Evening";
		}
	}
	
}//end greeting()