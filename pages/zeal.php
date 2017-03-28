<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
 
<title>MMIL</title>

<!-- CSS  -->
 
<link rel="stylesheet" type="text/css" href="../css/materialize.css">
<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
<!--logo font-->
<link href='https://fonts.googleapis.com/css?family=Lobster+Two' rel='stylesheet' type='text/css'>
<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" type="image/x-icon" href="../icon.ico">
<!--this link is for the social icons-->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">    
<style type="text/css">
    .slider .indicators .indicator-item {
  background-color: #666666;
  border: 3px solid #ffffff;

  -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    
}
        
.slider .indicators .indicator-item.active {
  background-color: #ffffff;
    
}
.slider {
  width: 100%
  margin: 0 auto;
}
.slider .indicators {
  bottom: 60px;
  z-index: 100;
  /* text-align: left; */
}

 
 body{
  font-family: 'Kaushan Script', cursive !important;
}
body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }

  main {
    flex: 1 0 auto;
  }
#proj.parallax-container {
    height: auto !important;
}
.card-reveal
{
  font-size: 20px;
}
 
.bg{
        background-color: rgba(51, 51, 51, 0.64) !important;
  }
    @media screen and ( max-width:1440px) and ( min-width:768px) {
        .gif{display: none}
        .sld{display: block}
    } 
    @media screen and (max-width:425px){
        .gif{display: block}
        .sld{display: none}
    }    
</style>


</head>
<body id="top" class="scrollspy">

<!--Navigation-->
<div class="navbar-fixed">
<nav class="bg">
    <div class="container">
        <div class="nav-wrapper">
        <a href="../index.html" class="brand-logo"><img src="../images/logo1.png"></a>
        
            <ul class="right hide-on-med-and-down">
                <li><a href="aboutus.html">About Us</a></li>
                <li><a href="../pages/team.html">Team</a></li>
                <li><a href="#">Zealicon'17</a></li>
                <li><a href="events.html">Events</a></li>
                <li><a href="../index.html#cont">Contributions</a></li>
                <li><a class="modal-trigger" href="#modal1">Contact Us</a></li>
                 
            </ul>
            <ul class="side-nav" id="nav-mobile">
                <li><a href="aboutus.html">About Us</a></li>
                <li><a href="../pages/team.html">Team</a></li>
                <li><a href="#">Zealicon'17</a></li>s
                <li><a href="events.html">Events</a></li>
                <li><a href="../index.html#cont">Contributions</a></li>
                <li><a href="../index.html#contact">Contact Us</a></li>
                
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </div>
</nav>
</div>

 



<div id="modal1" class="modal bottom-sheet overflow" style="background:#474747">
  <div class="modal-content ">
      <div class="row modal-content">
          <div class="col s12">
              <form class="col s12" action="mailscript/mail.php" method="post">
                  <div class="row">
                      <div class="input-field col s6">
                          <i class="material-icons prefix white-text">person_pin</i>
                          <input id="icon_prefix" name="name" type="text" class="validate white-text">
                          <label for="icon_prefix" class="white-text">First Name</label>
                      </div>
                      <div class="input-field col s6">
                          <i class="material-icons prefix white-text">message</i>
                          <textarea id="icon_prefix2" name="message" class="materialize-textarea white-text"></textarea>
                          <label for="icon_prefix2" class="white-text">Message</label>
                      </div>
                      <div class="input-field col s6">
                          <i class="material-icons prefix white-text">email</i>
                          <input id="icon_email" name="email" type="email" class="validate white-text">
                          <label for="icon_email" class="white-text">Email-id</label>
                      </div>
                        <div class="col s6 center sub">
                          <button class="btn waves-effect waves-light light blue darken-4 z-depth-5" type="submit">Submit
                              <i class="material-icons right white-text">send</i>
                          </button>
                      </div>
            </div>

              </form>
          </div>
  </div>
  </div>
  </div>


      

<!-- events-->

<img class="responsive-img"style="width:100%;" src="../images/zealicon.jpg">

<div class="container">
    <h2 class="header center black-text"><b>ZEALICON'17</b></h2>
    <div class="row">
        <div class="col s12 m12 gif">
                        
        
        
        <img style="width:100%" src="../images/zealicon-xs.gif" alt="default">
         <!-- random image -->
        </div>
        <div class="col s12 m12 l12 sld">
             <div class="slider">
    <ul class="slides">
      <li>
        <picture>
        <source srcset="../images/CA-s.jpg" media="(max-width:768px) and (min-width:426px)">    
        <source srcset="../images/zealicon.gif" media="(max-width:425px)">
        <img src="../images/CA.jpg" alt="default">
        </picture> <!-- random image -->
        <div class="caption center-align">
          <h3></h3>
          <h5 class="light grey-text text-lighten-3"></h5>
        </div>
      </li>
      <li>
        <picture>
        <source srcset="../images/ring-s.jpg" media="(max-width:768px) and (min-width:426px)"> 
        <source srcset="../images/ring-xs.jpg" media="(max-width:425px)">
        <img src="../images/ring.jpg" alt="default">
        </picture><!-- random image -->
        <div class="caption left-align">
          <h3></h3>
          <h5 class="light grey-text text-lighten-3"></h5>
        </div>
      </li>
      <li>
        <picture>
        <source srcset="../images/technovision-s.jpg" media="(max-width:768px) and (min-width:426px)">     
        <source srcset="../images/technovision.jpg" media="(max-width:425px)">
        <img src="../images/technovision.jpg" alt="default">
        </picture><!-- random image --> <!-- random image -->
        <div class="caption right-align">
          <h3></h3>
          <h5 class="light grey-text text-lighten-3"></h5>
        </div>
      </li>
      <li>
        <picture>
        <source srcset="../images/compequzicon-s.jpg" media="(max-width:768px) and (min-width:426px)"> 
        <source srcset="../images/compequzicon-xs.jpg" media="(max-width:425px)">
        <img src="../images/compequzicon.jpg" alt="default">
        </picture><!-- random image --> <!-- random image -->
        <div class="caption center-align">
          <h3></h3>
          <h5 class="light grey-text text-lighten-3"></h5>
        </div>
      </li>
        <li>
        <picture>
        <source srcset="../images/treasuro-s.jpg" media="(max-width:768px) and (min-width:426px)">     
        <source srcset="../images/treasuro-xs" media="(max-width:425px)">
        <img src="../images/treasuro.jpg" alt="default">
        </picture><!-- random image --> <!-- random image -->
        <div class="caption center-align">
          <h3></h3>
          <h5 class="light grey-text text-lighten-3"></h5>
        </div>
        </li>
        
    </ul>
  </div>
        </div>  
        
            
        <div class="col s12 m6 l6"> 
            <div class="card hoverable">
                <div class="card-image waves-effect waves-block waves-light">
                    <picture>
        <source srcset="../images/CA-s.jpg" media="(max-width:768px) and (min-width:426px)">    
        <source srcset="../images/CA-xs.jpg" media="(max-width:425px)">
        <img src="../images/CA.jpg" alt="default">
        </picture> <!-- random image -->
                </div>
                <div class="card-content center">
                    <span class="card-title activator grey-text text-darken-4 ">Code-Ageddon</span>
                </div>
                <div class="card-reveal center" id="rev">
                    <span class="card-title grey-text text-darken-4">Code-Ageddon<i class="mdi-navigation-close right"></i></span>
                    <p>First know the language then solve the problems.</p> 

                </div>
            </div>
        </div>
        

        <div class="col s12 m6 l6">
            <div class="card hoverable">
                <div class="card-image waves-effect waves-block waves-light">
                    <picture>
        <source srcset="../images/technovision-s.jpg" media="(max-width:768px) and (min-width:426px)">     
        <source srcset="../images/technovision-xs.jpg" media="(max-width:425px)">
        <img src="../images/technovision.jpg" alt="default">
        </picture><!-- random image --> <!-- random image -->
                </div>
                <div class="card-content center">
                    <span class="card-title activator grey-text text-darken-4">Technovision'17</span>
                </div>
                <div class="card-reveal center"  id="rev">
                    <span class="card-title grey-text text-darken-4">Technovision'17<i class="mdi-navigation-close right"></i></span>
                    <p> Make the app and win hackathon.</p></div>
            </div>
        </div>

        <div class="col s12 m6 l6">
            <div class="card hoverable">
                <div class="card-image waves-effect waves-block waves-light">
                    <picture>
        <source srcset="../images/compequzicon-s.jpg" media="(max-width:768px) and (min-width:426px)"> 
        <source srcset="../images/compequzicon-xs.jpg" media="(max-width:425px)">
        <img src="../images/compequzicon.jpg" alt="default">
        </picture>
                </div>
                <div class="card-content center">
                    <span class="card-title activator grey-text text-darken-4">Compequizicon</span>
                </div>
                <div class="card-reveal center"  id="rev">
                    <span class="card-title grey-text text-darken-4">Compequizicon<i class="mdi-navigation-close right"></i></span>
                    <p >If you think you are a technofreak..then come here.</p> </div>
            </div>
        </div>

        <div class="col s12 m6 l6">
            <div class="card hoverable">
                <div class="card-image waves-effect waves-block waves-light">
                    <picture>
        <source srcset="../images/ring-s.jpg" media="(max-width:768px) and (min-width:426px)"> 
        <source srcset="../images/ring-xs.jpg" media="(max-width:425px)">
        <img src="../images/ring.jpg" alt="default">
        </picture><!-- random image -->
                </div>
                <div class="card-content center">
                    <span class="card-title activator grey-text text-darken-4 ">Ring Ring</span>
                </div>
                <div class="card-reveal center"  id="rev">
                    <span class="card-title grey-text text-darken-4"> Ring Ring<i class="mdi-navigation-close right"></i> </span>
                    <p>Have guts to answer rapid questions..then pick up the phone. </p>
                </div>
            </div>
            </div>
        <div class="col s12 m6 l6">
            <div class="card hoverable">
                <div class="card-image waves-effect waves-block waves-light">
                    <picture>
        <source srcset="../images/treasuro-s.jpg" media="(max-width:768px) and (min-width:426px)"> 
        <source srcset="../images/treasuro-xs.jpg" media="(max-width:425px)">
        <img src="../images/treasuro.jpg" alt="default">
        </picture><!-- random image -->
                </div>
                <div class="card-content center">
                    <span class="card-title activator grey-text text-darken-4 ">Treasuro</span>
                </div>
                <div class="card-reveal center"  id="rev">
                    <span class="card-title grey-text text-darken-4">Treasuro<i class="mdi-navigation-close right"></i> </span>
                    <p>If you will come here you will find hidden treasure. </p>
                </div>
            </div>
            </div>

        
          
     </div>
</div>
        


<div class="container">
    <h2 class="header center black-text"><b>REGISTER</b></h2>
</div>






  <!-- Floating Share Button -->

 


<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{ // Handle the form.

    
     // Validate the form data:
     $problem = FALSE;
     if (!empty($_POST['name']) && !empty($_POST['mobile_number'])) 
     {
          $name = trim(strip_tags($_POST['name']));
          $mobile_number = trim(strip_tags($_POST['mobile_number']));
          $year = $_POST['year'];
          $branch = $_POST['branch'];
          $zealid = $_POST['zeal-id'];
          foreach ($_POST['events'] as $selectedOption)
            $events[$selectedOption]=$selectedOption;   
           
     } 
     else 
     {
          print '<p style="color: red;">Please enter all required fields.</p>';
          $problem = TRUE;
     }

     if (!$problem)
     {
      $data=$name.'     '.$mobile_number.'     '.$year.'    '.$branch.'    '.$zealid;
      foreach ($events as $selectedOption){
        file_put_contents($selectedOption.' Registration List.txt',$data . PHP_EOL, FILE_APPEND);}

      //echo "<script>alert('THANX FOR REGISTERING!!');</script>";
     }
}

     
?>
     <div class="row container">
          <form class="col s12" method="post" action="">
               <div class="row">
                                                                                <!--name-->
                    <div class="input-field col s6 black-text">
                         <input name="name" id="name" type="text" class="validate" pattern="[a-zA-Z][a-zA-Z ]{1,}" title="Please use letters only" required>
                         <label for="name">Name</label>
                    </div>
                                                                                 <!--mobile number-->
                    <div class="input-field col s6 black-text">
                         <input name="mobile_number" id="mob" type="text" class="validate" pattern="[0-9]{10}" title="please enter your 10 digit mobile number" required>
                         <label for="mob">Mobile No.</label>
                    </div>
               </div>
               <div class="row">
                                                                                 <!--Year-->
                    <div class="input-field col s6">
                         <select name="year">
                              <option value="" disabled selected>Year</option>
                              <option value="1">I</option>
                              <option value="2">II</option>
                              <option value="3">III</option>
                              <option value="4">IV</option>
                         </select>
                    </div>
                    <div class="input-field col s6">
                                                                                 <!--branch-->
                           <select name="branch">
                              <option value="" disabled selected>Branch</option>
                              <option value="CS">CS</option>
                              <option value="IT">IT</option>
                              <option value="ME">ME</option>
                              <option value="EC">EC</option>
                              <option value="EE">EE</option>
                              <option value="EEE">EEE</option>
                              <option value="IC">IC</option>
                              <option value="CE">CE</option>
                              <option value="MT">MT</option>
                              <option value="MCA">MCA</option>
                         </select>
                    </div>
               </div>
               <div class="row">
                   <div class="input-field col s6">
                                                                                 <!--events-->
                         <select multiple name="events[]">
                              <option value="" disabled selected>Choose Your Events</option>
                              <option value="Technovision">Technovision</option>
                              <option value="Compequizicon">Compequizicon</option>
                              <option value="Code-Ageddon">Code-Ageddon</option>
                              <option value="Ring Ring">Ring Ring</option>
                              <option value="Treasuro">Treasuro</option>
                         </select>
                    </div>
                     <div class="input-field col s6 black-text">
                         <input name="zeal-id" id="zeal-id" type="text" placeholder="optional">
                         <label for="name">Zealicon Id</label>
                    </div>
                    </div>
                    <div class="row center">                                                            <!--submit-->
                    <div class="input-field col s3">
                         <center><button class="btn waves-effect waves-light light-blue darken-2" type="submit" name="action">Submit
                         <i class="material-icons right"></i>
                         </button></center>
                    </div>
                    </div>
               
          </form>
    </div>
     


<footer id="contact" class="bg scrollspy" style="font-size:20px">
  <div class="container center">  

     <a class="white-text" href="https://www.facebook.com/groups/JSSNokia/"><i class="fa fa-facebook "></i></a>&nbsp;&nbsp;
     <a class="white-text" href="https://twitter.com/ "><i class="fa fa-twitter "></i></a>&nbsp;&nbsp;
     <a class="white-text" href="https://plus.google.com/"><i class="fa fa-google "></i></a>&nbsp;&nbsp;
     <a class="white-text" href="https://github.com/MMIL"><i class="fa fa-github"></i></a>
       
  <div class="footer-copyright   foot" style="font-size:20px">
      <div class="container center">
          Made by <a class="white-text" href="index.html" style="margin-left:0.5em">Microsoft Mobile Innovation Lab.</a> 
          </div>
  </div>
  
    </div>
    </footer>
    





<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="../js/jquery.min.js" ></script>
<script type="text/javascript" src="../js/materialize.min.js" ></script>
     <script type="text/javascript">
           $(document).ready(function() {
         $('select').material_select();
          $('.modal-trigger').leanModal();
               $('.slider').slider();
  });
         


         
     </script>

  

   
    

 
 
</body>
</html>