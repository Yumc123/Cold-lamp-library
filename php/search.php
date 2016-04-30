<?php
session_start();
 ?>
<!DOCTYPE html>
 <html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Welcome to Cold Lamp Library</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/animate.min.css" type="text/css">
    <link rel="stylesheet" href="../css/creative.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
					<img src="../img/logo.png">
				</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
				    <li>
                        <a class="page-scroll" href="../index.html">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="../search.html">Search</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#news">News</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#category">Category</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


	<header>
		<div class='header-content'>
			<div class='header-content-inner'>
				<h1>Welcome to Cold Lamp Library</h1>
			</div>
		</div>
	</header>
	
	<section id="news">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Search result: </h2>
                    <hr class="primary">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">				
				<?php 
				$k = trim($GET["keyword"]);
				$conn = new PDO ("mysql:host=localhost;dbname=yzhang;", 
                 "yzhang", "nothinah");
				 
				$results = $conn->query("select * from cll_books where keyword LIKE '%$k%'");

				while($row=$results->fetch())
				{
					echo "<div class='service-box'>";
					echo " <span class='fixed-text'>Title:</span> $row[title] <br/> ";
					echo " <span class='fixed-text'>Author:</span> $row[author] <br/> ";
					echo " <span class='fixed-text'>Category:</span> $row[category] <br/> ";
					echo " <span class='fixed-text'>ISBN:</span> $row[ISBN] <br/> ";
					echo "<a class='pull-mid btn_all' href='more.php?ID=$row[ID]'>Read More...</a>";
					echo "</div>";
				}

				?>	
                </div>
				</div>
				</div>

		</section>
				
    <section class="bg-primary" id="search">
        <div class="container">
            <div class="row">				
				<div class="col-lg-8 col-lg-offset-2 text-center">
					<?php
						if (!isset($_SESSION["gatekeeper"])){
							header("location: ../signin.html");	
						}
						else {
							echo '<div id="box">';
								echo '<form method="get" action="search.php">';
									echo '<p class="text-faded"> Find books, journal article, and database: </p>';
									echo '<input type="text" id="search" name="search" placeholder="Title, keyword, or ISBN"><br>';
									echo '<input  class="btn btn-default btn-xl" type="submit" value="Search" />';
								echo '</form>';
							echo '</div>';
							echo '<a href="logout.php"><input class="btn btn-default btn-xl" type="submit" value="Logout" /></a>';
						}
					?>
				</div>
            </div>
        </div>
    </section>

    <section class="no-padding" id="category">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Using the Library</h2>
                    <hr class="primary">
				</div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="category-box">
                        <img src="../img/category/1.jpg" class="img-responsive" alt="">
                        <div class="category-box-caption">
                            <div class="category-box-caption-content">
							    <!--<div class="project-category text-faded">
                                    Category
                                </div> -->
                                <div class="project-name">
                                    Library guides
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="category-box">
                        <img src="../img/category/2.jpg" class="img-responsive" alt="">
                        <div class="category-box-caption">
                            <div class="category-box-caption-content">
                                <div class="project-name">
                                    WIFI
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="category-box">
                        <img src="../img/category/3.jpg" class="img-responsive" alt="">
                        <div class="category-box-caption">
                            <div class="category-box-caption-content">
                                <div class="project-name">
                                    Self services
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="category-box">
                        <img src="../img/category/4.jpg" class="img-responsive" alt="">
                        <div class="category-box-caption">
                            <div class="category-box-caption-content">
                                <div class="project-name">
                                    Borrowing 
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="category-box">
                        <img src="../img/category/5.jpg" class="img-responsive" alt="">
                        <div class="category-box-caption">
                            <div class="category-box-caption-content">
                                <div class="project-name">
                                    Help
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="category-box">
                        <img src="../img/category/6.jpg" class="img-responsive" alt="">
                        <div class="category-box-caption">
                            <div class="category-box-caption-content">
                                <div class="project-name">
                                    Opening time
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <aside id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Yu Zhang</h2>
                    <hr class="primary">
                    <p>Final year project - web design.</p>
					</div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <p>123-456-6789</p>
                </div>
                <div class="col-lg-4 text-center">
                    <p><a href="mailto:your-email@your-domain.com">Mark19950521@gmail.com</a></p>
                </div>
            </div>
        </div>
    </aside>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Main JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom JavaScript -->
    <script src="js/creative.js"></script>

</body>

</html>
