<html>
<style>
@font-face
{
    font-family:OurFont;
    src:url(our.otf);
}
@font-face
{
    font-family:OurFont2;
    src:url(b.ttf);
}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    font-size:20px;
    color: white;
    font-family:OurFont;
    padding: 16px 32px;
    width:300px;
    text-align: center;
    text-decoration: none;


    margin: 4px 2px;
    -webkit-transition-duration: 0.6s; /* Safari */
    transition-duration: 0.6s;
    cursor: pointer;
    border-radius:60px 60px 60px 60px;
}

.button1 {
    background-color: white;
    color: black;
    width:350px;
    border: 4px solid #4CAF50;
}

.button1:hover {
    background-color: #4CAF50;
    width:350px;
    color: white;
}

.button2 {
    background-color: white;
    color: black;
    width:350px;
    border: 4px solid #008CBA;
}

.button2:hover {
    background-color: #008CBA;
    color: white;
    width:350px;
}

.button3 {
    background-color: white;
    color: black;
width:350px;
    border: 4px solid #f44336;
}

.button3:hover {
    background-color: #f44336;
    color: white;
    width:350px;
}

.button4 {
    background-color: white;
    width:350px;
    color: black;
    border: 4px solid yellow;
}

.button4:hover {background-color: yellow;width:400px;}
.button5 {
    background-color: white;
    color: black;
    width:350px;
    border: 4px solid grey;
}

.button5:hover {
    background-color: grey;
    color: white;
    width:350px;
}

            .dropbtn
            {
                background-color:black;
                color:white;
                font-size:25px;
                border:none;
                cursor:pointer;
                font-family:OurFont2;
            }
            body {
  font-family: 'Nunito', sans-serif;
  color: #384047;
}

form {
  max-width: 300px;
  margin: 10px auto;
  padding: 10px 20px;
  background: #f4f7f8;
  border-radius: 8px;
}

h1 {
  margin: 0 0 30px 0;
}

input[type="text"],
input[type="password"],
input[type="date"],
input[type="datetime"],
input[type="email"],
input[type="number"],
input[type="search"],
input[type="tel"],
input[type="time"],
input[type="url"],
textarea,
select {
  background: rgba(255,255,255,0.1);
  border: none;
  font-size: 16px;
  height: auto;
  margin: 0;
  outline: 0;
  padding: 15px;
  width: 100%;
  background-color: #e8eeef;
  color: #8a97a0;
  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  margin-bottom: 30px;
}

input[type="radio"],
input[type="checkbox"] {
  margin: 0 4px 8px 0;
}

select {
  padding: 6px;
  height: 32px;
  border-radius: 2px;
}

button {
  padding: 19px 39px 18px 39px;
  color: #FFF;
  background-color: #4bc970;
  font-size: 18px;
  text-align: center;
  font-style: normal;
  border-radius: 5px;
  width: 100%;
  border: 1px solid #3ac162;
  border-width: 1px 1px 3px;
  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
  margin-bottom: 10px;
}

fieldset {
  margin-bottom: 30px;
  border: none;
}

legend {
  font-size: 1.4em;
  margin-bottom: 10px;
}

label {
  display: block;
  margin-bottom: 8px;
}

label.light {
  font-weight: 300;
  display: inline;
}

.number {
  background-color: #5fcf80;
  color: #fff;
  height: 30px;
  width: 30px;
  display: inline-block;
  font-size: 0.8em;
  margin-right: 4px;
  line-height: 30px;
  text-align: center;
  text-shadow: 0 1px 0 rgba(255,255,255,0.2);
  border-radius: 100%;
}

@media screen and (min-width: 480px) {

  form {
    max-width: 480px;
  }
            body{
                text-align:center;
               
            }
            h1{
                color:yellow;
                font-size:60px;
                text-align:center;
                font-style:Bold;

            }
        </style>
<body background="2.jpg">
<center>
	<br><br><br><br><br><br>
<?php
$conn= mysqli_connect("localhost","root","","expense");
$cat=$_POST['category'];
$mon=$_GET['m'];
$result=mysqli_query($conn,"SELECT * FROM category WHERE category.Types='$cat' and month(category.Date)='$mon'") or die(mysqli_error());
if(mysqli_query($conn,"SELECT * FROM category WHERE category.Types='$cat' and month(category.Date)='$mon'")){
echo "<b>".$cat."</b>"."&nbsp&nbsp<b>Expenses</b>";
echo "<br><br>";
echo "<b>Price</b>"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"."<b>Date</b>";
$sum=0;
while($row = mysqli_fetch_array($result))
{
  echo "<br><br>".$row["Price"]."&nbsp&nbsp&nbsp&nbsp".$row["Date"];
  $sum+=$row["Price"];
}
echo "<br><br>";
echo "<b>Total Cost</b>&nbsp&nbsp&nbsp&nbsp";
echo $sum;
}
?>
<form action="main.php">
<button class='button button1'><em>Home</em></button>
</form>
</center>
</body>
</html>