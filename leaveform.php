<?php
session_start();
if(!((isset($_SESSION['staff']))||(isset($_SESSION['admin'])))) header("location:index.php");
?>
<html>
<body>
<link href="jquery/jquery-ui.css" rel="stylesheet" type="text/css"/>
<script src="jquery/jquery.min.js"></script>
<script src="jquery/jquery-ui.min.js"></script>

<?php
if(isset($_SESSION['admin'])) include 'adminmenu.php';
elseif(isset($_SESSION['staff'])) include 'staffmenu.php';
else include 'menu.php';
?>

  <script>
  $(document).ready(function() {
    $("#date").datepicker();
  });
  </script>

        
        <style type="text/css">
    #content-box1
            {
                background-color: white;
                height: 200px;

}
#adddatedis
{
    
               margin: auto auto auto auto;
               background-color: #b1eeff;
               padding: 50px 50px ;
               width: 400px;
}
#addblack
{
                background-color: black;
                margin: 30px auto auto auto;
                height: 30px;
                width: 480px;
                padding-left: 10px;
                padding-right: 10px;
                padding-top: 10px;
                padding-bottom: 10px;
                text-align: center;
    color:white;
    font-family: "Times New Roman", Times, serif;

    font-weight: bold;
	font-size:20px
}

#stat
{
    background-color: #B1EEFF;
    margin: 40px auto 40px auto;
    width: 395px;
    padding: 0px 6px;

}

        </style>


            
        <script type="text/javascript">
	function validate()
	{
	if(document.getElementById('rollno').value=="")
	{
	alert("Enter Roll Number");
	return false;
	}
	else if(document.getElementById('date').value=="")
	{
	alert("Enter Date");
	return false;
	}
	else $("#stat").load("leaveupdate.php",{roll:$("#rollno").val(),sem:$("#sem").val(),date:$("#date").val()});
	}
        </script>



<?php
//echo '<div id="content-box1">';
echo"<div id='addblack'> LEAVE FROM UPDATION </div>";
echo"<div id='adddatedis'><table>"; 
//echo '<form name="commit">';
       echo "<tr><td>Roll No.</td><td>:<input type='text' name='rollno' id='rollno'></td></tr>
<tr><td>Semester</td><td>:<input type='text' name='sem' id='sem'></td></tr>
<tr><td>Date</td><td>:<input type='text' name='date' id='date'></td></tr>
<tr><td height=\"60\" colspan=\"2\" align=\"center\"><input type='button' value='UPDATE' id='submit' onclick=\"javascript:validate()\"></td></tr>";
        echo "</table></div>";
//        echo "</form>";

?>

<div id="stat"></div>
</body>
</html>
