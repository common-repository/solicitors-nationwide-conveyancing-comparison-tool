function open_win(partnerId)
{
	window.open("?partnerId="+partnerId, "FeedbackWindow", "toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=450,height=650");
}

function getXMLHTTP()
{
	var xmlhttp=false;	
	try
	{
		xmlhttp=new XMLHttpRequest();
	}
	catch(e)
	{		
		try
		{			
			xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
		}
		catch(e)
		{
			try
			{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
			}
			catch(e1)
			{
				xmlhttp=false;
			}
		}
	}
	return xmlhttp;
}
	
function getInput(pluginUrl, comparisonId)
{		
	var strURL=pluginUrl+'/solicitors-nationwide-conveyancing-comparison-tool/getInput.php?function=quoteInput&comparison='+comparisonId;
	var req = getXMLHTTP();
		
	if (req)
	{
		req.onreadystatechange = function()
		{
			if (req.readyState == 0)
			{
				document.getElementById('output').innerHTML="";
			}
			else
			{
				document.getElementById('output').innerHTML=req.responseText;
			}
		}			
		req.open("GET", strURL, true);
		req.send(null);
	}		
}