<!DOCTYPE html>
<html lang="en">
<head>
	<title>Blood Donation</title>
</head>
<body style="background-color:LightGray;">
	
	
	<h2 style="color:Gray; text-align: center;">Donor Require Information</h2>
	<form style ="text-align:center;    style ="text-align:center;"><br>
    <h2 style="color:red; text-align:left;">Donor Information</h2>

    <label for="fname">First name : *</label>
  <input style="color:black;text-align:left;" type="text" id="fname" name="fname" value=""placeholder="Enter  name"></br></br>
  <label  for="lname"> Last name : *</label>
  <input   style=" text-align:center; width:150px; height:15px;type="text" id="lname" name="City*:</label><br>
  <input style="width:0px; height:15px; type="text" id="city" name="city" value="" placeholder="Enter city name"><br><br>

<label for="fname">State :   * </label>
 
  <input style=" text-align:center;"
  list="states" name="state" id="state" value="" placeholder="select or type">
  <datalist id="states">
    <option value="LALMATIA">
    <option value="UTTARA">
    <option value="OLD DHAKA">
    <option value="GULSAN">
    <option value="DHANMONDI">
      <option value="POLTON">
  </datalist><br><br>
  <label for="zip">ZIP Code:*</label> 
  <input style=" text-align:center;"" type="text" id="zip" name="zip" value="" placeholder="Enter zip code"><br><br>

<label for="lname">Country*:</label>
 
<input  style=" text-align:center; "list="countrys" name="country" id="country" value="" placeholder="Select or type">
  <datalist id="countrys">
    <option value="BANGLADESH">
    <option value="INDIA">
    <option value="NEPAL">
    <option value="BRAZIL">
    <option value="GERMAN">
      <option value="JAPAN">
  </datalist><br></br>




  <label for="phone">Phone*:</label>
  <input style=" text-align:center;"" type="text" id="phone" name="phone" value="" placeholder="Enter number"><br><br>
  <label for="fax">Fax:*</label>
  <input style=" text-align:center;"" type="text" id="fax" name="fax" value="" placeholder="Enter  fax"><br><br>
  <label style=" text-align:center;"" for="email">Email:*</label>
  <input  style=" text-align:center;" type="text" id="email" name="email" value="" placeholder="Enter email"><br><br>


<label for="d ammount">Donation ammount*</label>
<input type="radio" id="none" name="n" value="none">
  <label for="none">None</label>
  <input type="radio" id="f" name="n" value="f">
  <label for="f">$75</label>
  <input type="radio" id="o" name="n" value="o">
  <label for="o">$100</label>


<input type="radio" id="o1" name="n" value="o1">
  <label for="o1">$250</label>

<input type="radio" id="other" name="n" value="other">
  <label for="other">Other</label><br><br>

  <label  for="oname">Other Ammount:*</label>
  <input style="color:black;text-align:center;" type="text" id="oname" name="oname" value=""placeholder="Enter  amount"><br><br>

  
  <label for="ve">Recuring Donation</label>
<input type="checkbox" checked="checked"> I am interested in giving on a regular basis<br><br>

<label for="monthly">Monthly Credit Card $:</label>
  <input  style="width:20px; height:10px; type="text" id="monthly" name="monthly" value="" placeholder=" ">
<label for="for">For:</label>
  <input style="width:20px; height:10px; type="text" id="for" name="for" value="" placeholder=" ">
<label for="for">Months</label><br><br>
<h3 style="color:red; text-align: left;">Honorarium and Memorial Donation Information</h3>
  
<label for="zip">Would you like to make this donation:</label>

<input type="radio" id="don" name="don" value="don">
  <label for="male">To honor</label>

  <input type="radio" id="fem" name="gender" value="fem">
  <label for="female">in memory off</label><br><br>
  



 <label  for="lname">Name:</label>
  <input  style ="text-align:center;"type="text" id="lname" name="lname" value="" placeholder="Enter name"><br><br>
  <label for="company">Acknwledge Donation to:</label>
  <input style=" text-align:center;"" type="text" id="company" name="company" value="" placeholder="Please Enter"><br><br>
  <label for="address">Address:</label>
  <input style=" text-align:center;"" type="text" id="address" name="address" value="" placeholder="Enter city name"><br><br>

  <label for="city">City:</label>
  <input style=" text-align:center;"" type="text" id="city" name="city" value="" placeholder="Enter city name"><br><br>

<label for="fname">State :</label>
 
  <input style=" text-align:center;" list="states" name="state" id="state" value="" placeholder="select or type">
  <datalist id="states">
    <option value="LALMATIA">
    <option value="UTTARA">
    <option value="OLD DHAKA">
    <option value="GULSAN">
    <option value="DHANMONDI">
      <option value="POLTON">
  </datalist><br><br>
  <label for="zip">ZIP : </label>
  <input style=" text-align:center;"" type="text" id="zip" name="zip" value="" placeholder="Enter zip code"><br><br>



<h3 style="color:red; text-align: left;">Additional Information</h3>
  <p style="text-align: left;"> Please enter your name,company or organization as you would like it to appear in our pubblications:</p>
<label for="name">Name : </label>
  <input type="text" id="name" name="name" value="" placeholder=" "><br><br>

<h5 style="text-align: left;">



<input  type="checkbox" style=" text-align:center;"checked="checked">               I would like my gift to remain annymous.<br>

<input type="checkbox" checked="checked"> My employer offers a matching gift program. I will mail the matching gift form<br>
<input type="checkbox" checked="checked"> Please save the cost of acknowledge this gift by not mailing a thank you letter<br><br>
</h5>

<label style=" text-align:center;" for="comment">Comments : </label>

<input style="width:400px; height:
60px; type="text" id="for" name="for" value="" placeholder=" "><br>






<label for="d ammount">How many contact you have?*</label><br>
<input type="radio" id="none" name="n1" value="none">
  <label for="none">E-mail</label><br>

  <input type="radio" id="f" name="n" value="f">
  <label for="f">Postal Mail</label><br>
  <input type="radio" id="o" name="n2" value="o">
  <label for="o">Fax</label><br>


<input type="radio" id="o1" name="n3" value="o1">
  <label for="o1">Teliphone</label><br>
<p> I would like to receive newsletters and information about special events by:</p>

<input type="radio" id="other" name="gender" value="other">
  <label for="other">E-mail</label><br>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Postal Mail</label><br><br>





<input type="checkbox" checked="checked"  style=" text-align: middle;">    I would like information about volunteering with you.<br>



  <input type="submit" value="Continue">
  <input type="reset" value="Reset">
  <h5>
<p style="text-align: center;"> Donate  online with confidence. You are on a secure server</p>
<p style="text-align: center;">  If you have any problems or question please contact supervisor</p>
</h5>
</form>

	</body>
</html>