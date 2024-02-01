<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $title ?> </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header -->
    <!-- https://getbootstrap.com/docs/5.0/examples/headers -->
	<!-- you have comments for everything here (courtesy of me) so you can take it as inspiration -->
	<div class="header" id="home">
		<header style="background: #9E3E33;">
			<div class="container-fluid">
				<div class="row">
					<!-- col for img/banner -->
					<div class="col-md-4">
						<a href="#home" class="d-flex align-items-center text-black text-decoration-none">
							<img class="img-fluid" src="images/logo.jpg" alt="Festival logo" width="80%" height="80%">
						</a>
					</div>
					<div class="col-md-3">

					</div>
					<!-- col for content rows -->
					<div class="col-md-5">
						<!-- row for space -->
						<div class="row" style="min-height: 17%;"></div>
						<!-- row for social media -->
						<div class="row justify-content-end">	
							<span style="text-align: end; padding-right: 150px;">
                                <a href=""><img src="images/twitter-x.svg" class="img-fluid" width="24px" height="24px"></a>
                                <a href=""><img src="images/instagram.svg" class="img-fluid" width="24px" height="24px" style="margin-left: 5px;"></a>
                                <a href=""><img src="images/facebook.svg" class="img-fluid" width="24px" height="24px" style="margin-left: 5px;"></a>
                                <a href=""><img src="images/youtube.svg" class="img-fluid" width="24px" height="24px" style="margin-left: 5px;"></a>
                            </span>
						</div>
						<!-- row for navs -->
                        <div class="row position-relative d-flex align-items-end flex-column mb-4 nav-div">
                            <nav class="mb-auto p-2">
                                <ul class="nav">
                                    <li class="nav-item"><a href="ex1.php" class="nav-link text-black">Exercise 1</a></li>
                                    <li class="nav-item"><a href="ex2.php" class="nav-link text-black">Exercise 2</a></li>
                                    <li class="nav-item"><a href="ex3.php" class="nav-link text-black">Exercise 3</a></li>
                                    <li class="nav-item"><a href="ex4.php" class="nav-link text-black">Exercise 4</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link text-black">About</a></li>
                                </ul>
                            </nav>
                        </div>
					</div>
				<!-- main row, whole header -->
				</div>
			<!-- big container, whole header -->
			</div>
		</header>
	</div>
    <div class="row filler-row-100">
        <!-- row for space -->
    </div>