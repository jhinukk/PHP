<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" onsubmit="return myfun()">
	gender<input type="radio" name="gender" value="male">Male
	      <input type="radio" name="gender" value="female">Female
	      <input type="radio" name="gender" value="other">Other
	      <br>
	<span id="err_g" class="err"></span><br>
	Country<select id="country">
		
                   <option> </option>		
	               <option value="ind">India</option>
	               <option value="usa">USA</option>
	               <option value="uk">UK</option>
	        </select> 
	    </br>
	     <span id="err_c" class="err"></span></br>  
	     Hobby
	     <input type="checkbox" value="dan" name="hobb[]">Dance
	     <input type="checkbox" value="sing" name="hobb[]">singging
	     <br>
	     <span id="err_h" class="err"></span></br>
	<input type="submit" value="submit">                   
</form>
<script>
    function myfun()
    {
    	var gender=document.getElementsByName("gender");
    	var country=document.getElementById("country").value;
    	var count=0;
    	if(!gender[0].checked && !gender[1].checked && !gender[1].checked)
    	{
    		document.getElementById("err_g").innerHTML="select any one";
    		count++;
    	}
    	else
    	{
    		document.getElementById("err_g").innerHTML=" ";
    	}
 
    	if(country== "")
    	{
    		document.getElementById("err_c").innerHTML="select your country";
    		count++;
    	}
    	else
    	{
    		document.getElementById("err_c").innerHTML=" ";
    	}
    	var falt=0;
        var hobbyes=document.getElementsByName("hobb[]");
        for(var i=0; i<hobbyes.length; i++)
        {
            if(hobbyes[i].checked)
            {
                falt++;
            }
        }
        if(falt==0)
        {
            document.getElementById("err_h").innerHTML="select the hobby ";
        }
        else
        {
            document.getElementById("err_h").innerHTML=" ";
        }
if(count>0)
{
	return false;
}
else
{
	return true;
}


    }
	</script>
</body>
</html>

<?php
mysql_connect("localhost","jhini","password");
mysql_db_name("mysql_demo");
$a=