<html>
    <head>
        <title>Registration</title>
</head>
<body>
    <h1>Registration Form</h1>
     <form action="../control/process.php" method="POST">

       <table>
       <tr><td>First Name:</td> 
       <td> <input type="text"  name="fname"></td></tr>
       <tr><td>Last Name:</td> 
       <td> <input type="text"  name="fname2"></td></tr>
       <tr><td>Age:</td> 
       <td> <input type="text"  name="age"></td></tr>
       

       <tr><td>Designation:</td>
       <td><input type="radio" name="prog" value="junior programmer">Junior Programmer 
       <input type="radio" name="prog" value="senior programmer">Senior Programmer 
       <input type="radio" name="prog" value="Project lead">Project Lead</td></tr>
        

        <tr><td>Preferred Language:</td>
       <td><input type="checkbox" name="lang1" value="JAVA">Java 
       <input type="checkbox" name="lang2" value="PHP">PHP 
       <input type="checkbox" name="lang3" value="C++">C++</td></tr>

       <tr><td>Email:</td> 
       <td> <input type="text"  name="male"></td></tr>
       <tr><td>Password:</td> 
       <td> <input type="password"  name="password"></td></tr>
       <tr><td>Please choose file </td>
        <td><input type="file"  name="id"></td></tr>
       
       <tr><td><input type="submit" value="Submit">
        <input type="submit" value="Reset"></td></tr>

</table>

</form>

</body>
</html>