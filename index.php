<html>
	<head>
		<title>Student Form and Calculator using JS</title>
	</head>
	<body>
		<script>  
			function add(){
				var a = +document.getElementById("a").value;
				var b = +document.getElementById("b").value;
				document.write(a + " + " + b + " = " + (a+b));
			}
			
			function sub(){
				var a = +document.getElementById("a").value;
				var b = +document.getElementById("b").value;
				document.write(a + " - " + b + " = " + (a-b));
			}
			
			function mul(){
				var a = +document.getElementById("a").value;
				var b = +document.getElementById("b").value;
				document.write(a + " * " + b + " = " + (a*b));
			}
			
			function div(){
				var a = +document.getElementById("a").value;
				var b = +document.getElementById("b").value;
				document.write(a + " / " + b + " = " + (a/b));
			}
			
			function mod(){
				var a = +document.getElementById("a").value;
				var b = +document.getElementById("b").value;
				document.write(a + " % " + b + " = " + (a%b));
			}
			
			function txt(){
				var xname = document.getElementById("name").value;
				var xprog = document.getElementById("prog").value;
				var xage = document.getElementById("age").value;
				var xgender = document.getElementById("gender").value;
				var xstate = document.getElementById("state").value;
				document.write("NAME: " + xname);
				document.write("<br>PROGRAM: " + xprog);
				document.write("<br>AGE: " + xage);
				document.write("<br>GENDER: " + xgender);
				document.write("<br>STATE: " + xstate);
			}
		</script>  
		
		
		<p>STUDENT FORM:</p>
		Name: <input id="name" type="text" name="txtname" ><br><br>
		Program: <input id="prog" type="text" name="txtprog" ><br><br>
		Age: <input id="age" type="text" name="txtage" ><br><br>
		Gender: 
		<select name="txtgender" id="gender">
			<option value="Male">Male</option>
			<option value="Female">Female</option>
		</select><br><br>
		
		State: <select name="txtstate" id="state">
			<option value="Terengganu">Terengganu</option>
			<option value="Pahang">Pahang</option>
			<option value="Selangor">Selangor</option>
			<option value="Kedah">Kedah</option>
			<option value="Perlis">Perlis</option>
			<option value="Kelantan">Kelantan</option>
			<option value="Johor">Johor</option>
			<option value="Pulau Pinang">Pulau Pinang</option>
			<option value="Negeri Sembilan">Negeri Sembilan</option>
			<option value="Melaka">Melaka</option>
			<option value="Perak">Perak</option>
			<option value="Sabah">Sabah</option>
			<option value="Sarawak">Sarawak</option>
			<option value="Labuan">Labuan</option>
			<option value="Kuala Lumpur">Kuala Lumpur</option>
		</select><br><br>
		
		
		<button type="button" onclick="txt()">Submit</button><br><br>
		
		<p>ONLINE CALCULATOR:</p>
		Enter A: <input id="a" type="text" name="txt1" ><br>
		Enter B: <input id="b" type="text" name="txt2" ><br><br>
		<button type="button" onclick="add()">+</button>
		<button type="button" onclick="sub()">-</button>
		<button type="button" onclick="mul()">*</button>
		<button type="button" onclick="div()">/</button>
		<button type="button" onclick="mod()">%</button>
		
		
	</body>
</html>