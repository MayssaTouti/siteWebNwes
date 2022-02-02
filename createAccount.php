<?php



$hostname="localhost"; 
$username="root"; 
$password=""; 
$db="sitenwes"; 

$conn=new PDO ("mysql:host=$hostname;dbname=$db",$username,$password); 
$sql='SELECT DISTINCT  categorie  FROM  article ';   
try{
$stmt=$conn->prepare($sql); 
$stmt->execute(); 
$resultat=$stmt->fetchAll(); 
}catch(Exception $ex)
{
  echo($ex -> getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Site Metas -->
    <title>News Proximité</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    
    <!-- Design fonts -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,400i,500,700" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet"> 

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome Icons core CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive styles for this template -->
    <link href="css/responsive.css" rel="stylesheet">

    <!-- Colors for this template -->
    <link href="css/colors.css" rel="stylesheet">
    <style>
    .button {
      background-color:green ;
      border: none;
      color: white;
     
      text-align: center;
      text-decoration: none;
      padding: 14px 40px;
      display: inline-block;
      font-size: 15px;
      margin: 5px; 
      margin-top: 0%;
     position: absolute;
      right: 0;
     
      
    }
    .buton {
      background-color: red;
      border: none;
      color: white;
      text-align: center;
      text-decoration: none;
      padding: 14px 40px;
      display: inline-block;
      font-size: 15px;
      margin: 5px; 
      margin-top: 0%;
      position: absolute;
      right: 150px  ; 
    }
    </style>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <!-- LOADER -->
    <div id="preloader">
        <img class="preloader" src="images/loader.gif" alt="">
    </div><!-- end loader -->
    <!-- END LOADER -->

    <div id="wrapper">
        <div class="collapse top-search" id="collapseExample">
            <div class="card card-block">
                <div class="newsletter-widget text-center">
                    <form class="form-inline">
                        <input type="text" class="form-control" placeholder="What you are looking for?">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                    </form>
                </div><!-- end newsletter -->
            </div>
        </div><!-- end top-search -->

        <div class="topbar-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 hidden-xs-down">
                        <div class="topsocial">
                            <a href="https://www.facebook.com/profile.php?id=100013304561813" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Youtube"><i class="fa fa-youtube"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Flickr"><i class="fa fa-flickr"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google+"><i class="fa fa-google-plus"></i></a>
                        </div><!-- end social -->
                    </div><!-- end col -->

                    <div class="col-lg-4 hidden-md-down">
                        <div class="topmenu text-center">
                            <ul class="list-inline">
                                <!-- <li class="list-inline-item"><a href="blog-category-01.html"><i class="fa fa-star"></i> Trends</a></li>
                                <li class="list-inline-item"><a href="blog-category-02.html"><i class="fa fa-bolt"></i> Hot Topics</a></li> -->
                                <li class="list-inline-item"><a href="page-contact.html"><i class="fa fa-user-circle-o"></i>Nous Contacter </a></li>
                                <li class="list-inline-item"><a href="createAccount.php"><i class="fa fa-user-circle-o"></i>s'inscrire </a></li>
                            </ul><!-- end ul -->
                        </div><!-- end topmenu -->
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="topsearch text-right">
                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-search"></i> Rechercher</a>
                        </div><!-- end search -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end header-logo -->
        </div><!-- end topbar -->

        <div class="header-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo">
                            <a href="blog-category-06.php"><img width="500px"  height="200px" src="images/2.png" alt=""></a>
                        </div><!-- end logo -->
                    </div>
                </div><!-- end row -->
            </div><!-- end header-logo -->
        </div><!-- end header -->

        <header class="header">
            <div class="container">
                <nav class="navbar navbar-inverse navbar-toggleable-md">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#cloapediamenu" aria-controls="cloapediamenu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-md-center" id="cloapediamenu">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="blog-category-06.php">Acceuil</a>
                            </li>
                            <li class="nav-item dropdown has-submenu menu-large hidden-md-down hidden-sm-down hidden-xs-down">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
                                <ul class="dropdown-menu megamenu" aria-labelledby="dropdown01">
                                    <li>
                                        <div class="mega-menu-content clearfix">
                                            <div class="tab">
                                                                 
                                 <?php foreach ($resultat as $output)  :?>
           <a  class="nav-link" href="visite.php?categorie=<?php echo $output['categorie'] ?>" name="categorie">   
                                        <button class="tablinks active"> 
                                      <?php echo $output["categorie"] ;?>  
                                    </button>
                                </a>

                  <?php  endforeach; ?>
                                            </div>

                                            <div class="tab-details clearfix">
                                                <div id="cat01" class="tabcontent active">
                                                 
                                                </div>
                                                <div id="cat02" class="tabcontent">
                                              
                                                </div>
                                                <div id="cat03" class="tabcontent">
                                                  
                                                </div>
                                                <div id="cat04" class="tabcontent">
                                                    <div class="row">
                                                
                                                  
                                                    </div><!-- end row -->
                                                </div>
                                            
                                            </div><!-- end tab-details -->
                                        </div><!-- end mega-menu-content -->
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-pink-hover" href="blog-category-01.php">covid-19</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link color-red-hover" href="single.php">Divertissement et arts</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-aqua-hover" href="blog-category-03.php">Politique</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-green-hover" href="blog-category-04.php">Sport</a>
                            </li>  
                        </ul>
                    </div>
                </nav>
            </div><!-- end container -->
        </header><!-- end header -->

        <div class="page-title">
            <div class="container">
                <div class="row-center">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2 ><i class="fa fa-envelope-o"></i> s'inscrire </h2>
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                   
                    </div><!-- end col -->                    
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end page-title -->

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- <h4>Who we are</h4>
                                    <p>Cloapedia is a personal blog for handcrafted, cameramade photography content, fashion styles from independent creatives around the world.</p> -->
                                </div>

                                <div class="col-lg-6">
                                   
                                </div>

                                <div class="col-lg-12">
                                    <!-- <blockquote class="blockquote">Please read <a href="#">Licensing & Terms</a> of Use if you are wondering about the license. </strong></blockquote> -->
                                </div>
                            </div><!-- end row -->


                            <div class="row">
                                <div class="col-lg-12">
                                    <form class="form-wrapper" method="POST" action="register.php">
                                 
                                    <h5>Nom et Prénom </h5>
                                        <input type="text" class="form-control" name="nomPrenom" placeholder="Saisir nom et prenom ">
                                
                                        <h5>Email </h5>
                                        <input type="email" class="form-control" name="email" placeholder="saisir Email">
                                    
                                      <h5>Password </h5>
                                        <input type="password" class="form-control" name="password" placeholder="saisir password">
                                      
                                        <h5>Confirmer Password:</h5>
                                        <input type="password" class="form-control"  placeholder="confirmer password">
                                        <h5>Pays  </h5>
                                        <select  name="pays"  id="pays" class="form-control">
                                            <option value="tunisie">Tunisie </opption>
                                            <option value="France">France </opption>
                                            <option value="Italie">Italie </opption>
                                            <option value="Trukish">Trukish </opption>
                                            <option value="Dubai">Dubai </opption>
                                            </select>
                                        <button type="submit" class="button" name="submit">créér  </button>
                                    </form>
                                </div>
                            </div>
                        </div><!-- end page-wrapper -->
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="sidebar">
                            <!-- <div class="widget">
                                <h2 class="widget-title">Search</h2>
                                <form class="form-inline search-form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search on the site">
                                    </div>
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                </form>
                            </div>end widget -->

                            <div class="widget">
                               
                                <div class="blog-list-widget">
                                    <div class="list-group">
                                        <!-- <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="upload/blog_square_01.jpg" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">5 Beautiful buildings you need to before dying</h5>
                                                <small>12 Jan, 2016</small>
                                            </div>
                                        </a> -->

                                        <!-- <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="upload/blog_square_02.jpg" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">Let's make an introduction for creative life</h5>
                                                <small>11 Jan, 2016</small>
                                            </div>
                                        </a> -->

                                        <!-- <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 last-item justify-content-between">
                                                <img src="upload/blog_square_03.jpg" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">Did you see the most beautiful sea in the world?</h5>
                                                <small>07 Jan, 2016</small>
                                            </div>
                                        </a> -->
                                    </div>
                                </div><!-- end blog-list -->
                            </div><!-- end widget -->

                          

                            <div class="widget">
                                <!-- <h2 class="widget-title">Instagram Feed</h2> -->
                                <!-- <div class="instagram-wrapper clearfix">
                                    <a class="" href="#"><img src="upload/insta_01.jpeg" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="upload/insta_02.jpeg" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="upload/insta_03.jpeg" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="upload/insta_04.jpeg" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="upload/insta_05.jpeg" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="upload/insta_06.jpeg" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="upload/insta_07.jpeg" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="upload/insta_08.jpeg" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="upload/insta_09.jpeg" alt="" class="img-fluid"></a>
                                </div>end Instagram wrapper -->
                            </div><!-- end widget -->

                 

                        </div><!-- end sidebar -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <!-- <h2 class="widget-title">Recent Posts</h2> -->
                            <div class="blog-list-widget">
                                <div class="list-group">
                                    <!-- <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 justify-content-between">
                                            <img src="upload/blog_square_01.jpg" alt="" class="img-fluid float-left">
                                            <h5 class="mb-1">5 Beautiful buildings you need to before dying</h5>
                                            <small>12 Jan, 2016</small>
                                        </div>
                                    </a> -->
    <!-- <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 justify-content-between">
                                            <img src="upload/blog_square_02.jpg" alt="" class="img-fluid float-left">
                                            <h5 class="mb-1">Let's make an introduction for creative life</h5>
                                            <small>11 Jan, 2016</small>
                                        </div>
                                    </a> -->
                                

                                    <!-- <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 last-item justify-content-between">
                                            <img src="upload/blog_square_03.jpg" alt="" class="img-fluid float-left">
                                            <h5 class="mb-1">Did you see the most beautiful sea in the world?</h5>
                                            <small>07 Jan, 2016</small>
                                        </div>
                                    </a> -->
                                </div>
                            </div><!-- end blog-list -->
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            
                            <div class="blog-list-widget">
                                <div class="list-group">
                                    <!-- <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 justify-content-between">
                                            <img src="upload/blog_square_04.jpg" alt="" class="img-fluid float-left">
                                            <h5 class="mb-1">Banana-chip chocolate cake recipe with customs</h5>
                                            <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div>
                                    </a> -->

                                    <!-- <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 justify-content-between">
                                            <img src="upload/blog_square_07.jpg" alt="" class="img-fluid float-left">
                                            <h5 class="mb-1">10 practical ways to choose organic vegetables</h5>
                                            <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div>
                                    </a> -->

                                    <!-- <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 last-item justify-content-between">
                                            <img src="upload/blog_square_06.jpg" alt="" class="img-fluid float-left">
                                            <h5 class="mb-1">We are making homemade ravioli, nice and good</h5>
                                            <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div> -->
                                    </a>
                                </div>
                            </div><!-- end blog-list -->
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="widget">
                           
                            <div class="link-widget">
                                <!-- <ul>
                                    <li><a href="#">Fahsion <span>(21)</span></a></li>
                                    <li><a href="#">Lifestyle <span>(15)</span></a></li>
                                    <li><a href="#">Art & Design <span>(31)</span></a></li>
                                    <li><a href="#">Health Beauty <span>(22)</span></a></li>
                                    <li><a href="#">Clothing <span>(66)</span></a></li>
                                    <li><a href="#">Entertaintment <span>(11)</span></a></li>
                                    <li><a href="#">Food & Drink <span>(87)</span></a></li>
                                </ul> -->
                            </div><!-- end link-widget -->
                        </div><!-- end widget -->
                    </div><!-- end col -->
                </div><!-- end row -->

                <hr class="invis1">

                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                    <div class="widget">
                            <div class="footer-text text-center">
                                <a href="index.html"><img src="images/2.png" width="500px"  height="200px" alt="" class="img-fluid"></a>
                                <h5><br><b>News Proximité est un portail web 
                                communautaire et gnéraliste tunisien focalisé sur l'actualité de la 
                                région de Tunis</b></h5> 
                           <ul class="list-inline">
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"  style="color:black;" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg> Lafyette tunisie </li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"  style="color:black;" fill="currentColor" class="bi bi-telephone-inbound-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0z"/>
                            </svg>  infoLine : 51021632</li>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"  style="color:black;" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                            </svg>  email : NewsProximité@gamil.com</li>
                             </ul>
                            <!-- <br>News Proximité <br> NewsProximité.com </b>  -->
                                <div class="social">
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>              
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google Plus"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                                </div>

                                <hr class="invis">

                         
                            </div><!-- end footer-text -->
                        </div><!-- end widget -->
                    </div><!-- end col -->
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <br>
<!--                         <div class="copyright">&copy; Cloapedia. Design: <a href="http://html.design">HTML Design</a>.</div> -->
                    </div>
                </div>
            </div><!-- end container -->
        </footer><!-- end footer -->

        <div class="dmtop">Scroll to Top</div>
        
    </div><!-- end wrapper -->

    <!-- Core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>

</body>
</html>