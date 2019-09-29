function myfun()
		{
			var a=document.getElementById('').value;
			var b=document.getElementById('pass2').value;
			if(a==b && a!="")
			{
				alert("Registration successful");
				window.location.href="index.php";
			}
			if(a=="")
			{
				alert("password is empty");
				location.reload();
			}
			else
			{
				alert("Password does not match!!");
				location.reload();
			}
		}