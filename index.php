<?php
session_start();

?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>My Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <script src="js/respond.js"></script>
    <style>
  
body{
  background: #ffcc66;
}

    #top{
    background-color:transparent;
        height: 100px;
        width: 1160px;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
        margin-bottom: 2px;
    }

    .nav-pills > li.active > a,
.nav-pills > li.active > a:hover,
.nav-pills > li.active > a:focus {
  color: #fff;
  background-color: #ff3300;
  font-weight: bold;
  
}

.nav-stacked > li {
  float: none;
width: 200px;
}
.nav-stacked > li + li {
  margin-top: 2px;
  margin-left: 0;
  width: 200px;
}

#collapse{
    float: right;
    margin-right: 100px;
}

.nav-justified {
  width: 100%;
}
.nav-justified > li {
  float: none;
}
.nav-justified > li > a {
  margin-bottom: 5px;
  text-align: center;
}
.nav-justified > .dropdown .dropdown-menu {
  top: auto;
  left: auto;
}
@media (min-width: 768px) {
  .nav-justified > li {
    display: table-cell;
    width: 1%;
  }
  .nav-justified > li > a {
    margin-bottom: 0;
  }
}
.nav-tabs-justified {
  border-bottom: 0;
}
.nav-tabs-justified > li > a {
  margin-right: 0;
  border-radius: 4px;
}
.nav-tabs-justified > .active > a,
.nav-tabs-justified > .active > a:hover,
.nav-tabs-justified > .active > a:focus {
  border: 1px solid #ddd;
}
@media (min-width: 768px) {
  .nav-tabs-justified > li > a {
    border-bottom: 1px;
    border-radius: 4px 4px 0 0;
  }
  .nav-tabs-justified > .active > a,
  .nav-tabs-justified > .active > a:hover,
  .nav-tabs-justified > .active > a:focus {
    border-bottom-color: #fff;
  }
}

.carousel-inner{
    margin-top: 10px;
    height: 450px;
  

}

.uacc{
  float: right;
  
}

#hd{
  float: left;
  font-size: 68px;
}

    </style>

</head>

<body>

 <div class="container">
          row 1: navigation 
    <div class="row">
        <nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
           <div class="collapse navbar-collapse" id="collapse">
              <ul class="nav navbar-nav">
                  
                  <li><?php
                      if(isset($_SESSION['username']))
                      {
                          //echo "welcome " .$_SESSION['username']."..!"; 
                          
                          echo "<a href='logout.php'>logout</a></li>"; 
                      }
                      else
                      {
                          echo "<a href='signinform.php'>Login</a>"; 
                                                 
                      }
                      ?>
                  </li>
                  <li><a href='signupform.php'>Signup</a></li>
                                
              </ul>
            </div>  
        </nav>
    </div>


    <br>
    <br>
    <br>
    
    <div id="hd">Crime Managment System</div>

    <?php
if(isset($_SESSION['username']) && $_SESSION['username']!='police')
{
              echo "<div class='uacc'>";
              echo "welcome " .$_SESSION['username']."..!";
              echo "<br><a href='account.php'>user account</a>";
              echo "</div>";
}
if(isset($_SESSION['username']) && $_SESSION['username'] == 'police')
{
              echo "<div class='uacc'>";
              echo "welcome " .$_SESSION['username']."..!";
              echo "<br><a href='police.php'>user account</a>";
              echo "</div>";             
}
if(isset($_SESSION['username']) && $_SESSION['username'] == 'ngo')
{
              echo "<div class='uacc'>";
              echo "welcome " .$_SESSION['username']."..!";
              echo "<br><a href='ngo.php'>user account</a>";
              echo "</div>";
}
?>

    <div id="top">


    </div>
            
            <ul class="nav nav-pills nav-justified">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="complainform.php">Complains</a></li>
                <li><a href="forum.php">Forum</a></li>
                <li><a href="about.php">About Us</a></li>
            </ul> 
         
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images\1.jpg" >
      <div class="carousel-caption">
        
      </div>
    </div>
    <div class="item">
      <img src="images\2.jpg">
      <div class="carousel-caption">
        
      </div>
    </div>
    <div class="item active">
      <img src="images\3a.jpg">
      <div class="carousel-caption">
        
      </div>
    </div>
    <div class="item active">
      <img src="images\4.jpg">
      <div class="carousel-caption">
        
      </div>
    </div>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>        
  <br>
  <br>
  <br>


<table class="table-striped">
<tr>
<td>SrNO</td>
<td>Story</td>
</tr>
<tr>
<td>1. 'Abusive' Celebrities</td>
<td>Allegations against celebrities including rape charges against Shiney Ahuja, child abuse charges against actress Suchitra Krishnamoorthy and TV actress Urvashi Dholakia, domestic violence charges against singer Adnan Sami and assault charges against Vinod Kambli's wife Anderea came out on the top of the crimes list. These stories appeal to the public as they reveal the muck of a celebrity's private life and introduce a 'poor' and 'helpless' victim who seeks justice and support from the society. However, Shiney Ahuja's story tops of the list of celebrities crime. Shiney's case started in Jun 2009, when he was arrested under rape charges after his 18-year-old domestic help alleged that the actor had raped her at his residence. Soon followed the testimonies of the film fraternity and the fight of the unyielding wife who maintained that her husband was innocent.

Read more at: http://www.oneindia.com/2009/12/28/2009-top-10-crime-stories.html
</td>
</tr>
<tr>
<td>2. Acts of discipline, corporal punishment, subversive experiments claim young lives</td>
<td>Apparent acts of disciplining by the teachers claimed many young and innocent lives in the country. Aakriti Bhatia, a Class XII student studying at Delhi's Modern School, passed away due to a Asthama attack. The teachers allegedly ignored her calls for help thinking that she was trying to bunk classes. In another sensational case of corporal punishment, 11-year-old Shannoo Khan slipped into a coma and passed away after she was brutally punished for not doing her homework and for failing to recite the English alphabets. The teacher allegedly beat the girl's head on the bench and made her stand out in the sun for hours. Are teachers turning into reapers? It should be noted that these incidents were not the only ones but were the ones that made headlines.</td></tr>
<tr>
<td>
3. Monster teachers prey on students
</td>
<td>
 Throughout the year, scores of incidents of child abuse were reported in the media. A big part of these cases involved sexual abuse of minors by teachers and school authorities. Incidents such as a 14-year-old girl raped by the school owner and a Class V student molested by pervert principal, who liked peeping into girls' loos were shamefully common.
</td>
</table>
 
  <br>
  <br>
  <br>

  
<!-- javascript -->
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
