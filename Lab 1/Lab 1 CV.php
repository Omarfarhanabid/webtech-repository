<!DOCTYPE HTML>  
<html>
<head>
<title>Curriculum Vitae</title>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";


?>
<h1 style="text-align: center; color: black; font-family:sans-serif ; ">
CURRICULUM VITAE</h1>
 
<p style="text-align: right; ">
	Passport size photo<p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
 <h3> Name: <input type="text" name="name">
  <br><br>

  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
 

Enter Nid:* <input type="text" name="Enter Nid"><br>
<br><br>

Enter Nationality:* <input type="text" name="Enter Nationality"><br>
<br><br>

<label for="Religion">Religion :*</label>
<input type="radio" id="none" name="n" value="none">
  <label for="none">Islam</label>
  <input type="radio" id="f" name="n" value="f">
  <label for="f">Hindu</label>
  <input type="radio" id="o" name="n" value="o">
  <label for="o">Christian</label>


<input type="radio" id="o1" name="n" value="o1">
  <label for="o1">Others</label><br><br>

</h4>
<h4>DOB:  <input type="date" id="birthday" name="birthday">
<h4 style="text-align: left;"> Present Address<input type="text" id="name" name="name" value="" placeholder=" "></h4>

</h4>

  <h3>Fathers name:* <input type="text" name="Fathers name"><br>
<br><br>
Mothers name:* <input type="text" name="Mothers name"><br>
<br><br>
Current Address: <input type="text" name="Current Address"><br>
<br><br>
Premanent Address:* <input type="text" name="Premanent Address"><br>
<br><br>
E-mail: <input type="text" name="email"><br>
<br><br>
 Phone: <input type="text" name="phone"><br>
<br><br>
  <h3>Aboust Yourself:<h3> <textarea name="message" style="width:1321px; height:100px;"></textarea>
  <br><br>
 <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}</style> 
<h3>Educational Background :</h3>



<table style="width:100%">
  <tr>
    <th>Course </th>
    <th>Paasing year</th> 
    <th>Institution</th>
    <th>Result</th> 
    <th>Divition</th>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    ><td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    ><td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    ><td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
<br>

<h3 >

Experience & Skills & Hobby:	

</h3>
<textarea name="message" style="width:1321px; height:100px;">

</textarea>

<br>
<h3 >

Refference:	

</h3>
<textarea name="message" style="width:1321px; height:100px;">

</textarea>

</form>
</h4></p>
    <input type="submit" name="submit" value="Submit">  
</form>
</form>



</body>
</html>