<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
   * {
  box-sizing: border-box;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  padding: 10px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
  .column  {
    width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column  {
    width: 100%;
  }
}
body, html {
  height: 100%;
  margin: 0;
}

    body {
        font-family: {Arial, Helvetica, sans-serif} ;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

    
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="newhome.html">HOME</a>
    </div>
    <ul class="nav navbar-nav">
       <a class="navbar-brand" href="aboutus.html">ABOUT US</a>
              <a class="navbar-brand" href="contactus.html">CONTACT US</a>
     
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span>SIGN UP <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Child</a></li>
          <li><a href="#">Parent</a></li>
          <li><a href="#">Hospital</a></li>
        </ul>
      </li>
     
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-log-in"></span>LOGIN IN<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="childlogin1.html">Child</a></li>
          <li><a href="parentlogin1.html">Parent</a></li>
          <li><a href="hosptialloginpage1.html">Hospital</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
    
    <body>

<h2>CONTACT US</h2>
<p>
<div class="row">
  <div class="column" style="background-color:#aaa;">
  <h2>Saahil Malge</h2>
  <p>saahilmalge@gmail.com</p>
  </div>
  <div class="column" style="background-color:#bbb;">
  <h2>Divya Gugale</h2>
  <p>divyagugale2000@gmail.com</p>
  </div>
  <div class="column" style="background-color:#ccc;">
  <h2>Siddhi Kapadnis</h2>
  <p>siddhikapadnis@gmaill.com</p>
  </div>
  <div class="column" style="background-color:#ddd;">
  <h2>Dhanshree Godase</h2>
  <p>dsgodase22@gmail.com</p>
  </div>
</div>

    
    
    
    
</body>
</html>