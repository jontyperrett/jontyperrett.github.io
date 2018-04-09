var winW = 0, winH = 0;

window.onload = function() 
{
	refreshScreen();
}

window.onresize = function()
{
	refreshScreen();
}

function refreshScreen()
{
	getWindowSize();
	configHeader();
}

function getWindowSize()
{
	if (document.body && document.body.offsetWidth) 
	{
		winW = document.body.offsetWidth;
		winH = document.body.offsetHeight;
	}
	if (document.compatMode=='CSS1Compat' &&
	document.documentElement &&
	document.documentElement.offsetWidth ) 
	{
		winW = document.documentElement.offsetWidth;
		winH = document.documentElement.offsetHeight;
	}
	if (window.innerWidth && window.innerHeight) 
	{
		winW = window.innerWidth;
		winH = window.innerHeight;
	}
}

function configHeader()
{

	// Paths utilise <base> definition <base href="<?php echo $bpath ?>/images/icons/" target="_parent">
	//var absURL = window.location.pathname;
	//$RESULTS = document.getElementById('results_title');
	//$ENQUIRIES = document.getElementById('enquiry_title');
	//$SOCIAL = document.getElementById('social_title');
	//$PARTNERS = document.getElementById('partners_title');
/*	if (winW <= 480) 
	{
		$ENQUIRIES.src="360x50_enquiries.png";
		$RESULTS.src="360x50_results.png";
		$SOCIAL.src="360x50_social.png";
		$PARTNERS.src="360x50_strategicpartners.png";
	}
	else if(winW <= 800)
	{
		$ENQUIRIES.src="755x50_enquiries.png";
		$RESULTS.src="755x50_results.png";
		$SOCIAL.src="755x50_social.png";
		$PARTNERS.src="755x50_strategicpartners.png";
	}
	else
	{*/
		//$ENQUIRIES.src="360x50_enquiries.png";
		//$RESULTS.src="360x50_results.png";
		//$SOCIAL.src="360x50_social.png";
		//$PARTNERS.src="360x50_strategicpartners.png";
	//}

}

