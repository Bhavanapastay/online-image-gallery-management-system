<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
  padding: 20px;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 8px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}
.content a{
  text-decoration: none;
}

/* Responsive layout - makes a two column-layout instead of four columns */
/*@media screen and (max-width: 900px) {
  .column {
    width: 50%;
  }
}
*/
/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
/*@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}*/
</style>
</head>
<body>

<!-- MAIN (Center website) -->
<div class="main">
<hr>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column">
    <div class="content">
      <a href="fas_photo.html"><img src="daboo ratnani/daboo ratnani.jpg" style="width:100%">
      <h3><pre>Fashion photographer

    Daboo ratnani</pre></h3>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <a href="nat_photo.html"><img src="jayanth sharma/jayanth sharma.jpg" style="width:100%">
      <h3><pre>Wild-life photographer
    
    Jayanth sharma</pre></h3>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <a href="baby_photo.html"><img src="ramit bata/ramit bata.jpg" style="width:100%">
      <h3><pre>  Kids photographer
    
      Ramit bata</pre></h3>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <a href="wed.html"><img src="pratesh jayaswal/pratesh jayaswal.png" style="width:100%">
      <h3><pre>Wedding photographer
    
  Patesh jayaswal</pre></h3>
      <p></p>
    </div>
  </div>
</div>
</body>
</html>