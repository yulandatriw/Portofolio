<html>
<head>
<title>WWW.MYCAM.COM</title>
<style>
.center {
    position: absolute;
    right: 700px;
    margin: 50px;
    max-width: 800px;
    padding: 30px;
    background-position: 0 0, 100%;
    background: -webkit-linear-gradient(bottom, #c4c4c4, #ebebeb);
    background-repeat:no-repeat;
}

.bg-img {
  /* The image used */
  background-image: url("foto-keren.jpg");

  min-height: 800px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

body{
     
     font-family: sans-serif;
 }
 h2 {
     color: #fff;
 } 
.submit {
    padding: 1em;
    margin: 2em auto;
    width: 17em;
    background: #fff;
    border-radius: 3px;
}
.label {
    font-size: 10pt;
    color: #fff;
    background: #0000FF;

}
input[type="text"],
input[type="id"],
input[type="password"], select, textarea
 {
    padding: 7px;
    width: 70%;
    background: #efefef;
    border: 0;
    font-size: 10pt;
    margin: 5px 0px;
}
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 7px 20px;
  border: none;
  cursor: pointer;
  width: 70%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}

</style>
</head>
<body>
<div class="bg-img">
<div class="center">


<form action="Submit01.php" method="post">
<div class="container">
<center><h2><font face="century gothic" size="7" color="#808080">SILAHKAN LOGIN</font></h2>
<font face="manaco" size="3">
 <label> </label><br>
    <input type="id" name="username" placeholder="username" required/><br>
    <label> </label><br>
<input type="password" name="password" placeholder="password" required/><br>

</font>
<br>
<br>
<input type="submit" value="Login" class="btn"></center>
</form>
</div>
</div>
</body>
</html>
