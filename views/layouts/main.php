<!DOCTYPE html>
<html lang="en">
<head>
<title>RISK MANAGEMENT</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest CSS -->
<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/bootstrap-theme.css" />
<link rel="stylesheet" href="css/normalize.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/sidebar.css" />
</head>
<body>
<header>
	 <nav role="navigation" class="navbar-default navbar-fixed-top">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="glyphicon glyphicon-user"></span>
            </button>
            <a href="#" class="navbar-brand"><img src="img/logo.png" /></a>
			<a class="navbar-brand" href="#"><i class="glyphicon glyphicon-signal"></i> Risk No: A</a>
			<!--<a class="btn btn-default btn-sm active" type="submit" style="min-width:120px"><i class="glyphicon glyphicon-arrow-left"></i> Previous</a>-->
			<a href="index2.html" class="btn btn-primary btn-sm" type="submit" style="min-width:120px">Next <i class="glyphicon glyphicon-arrow-right"></i></a>
	 </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
        
		<ul class="nav navbar-nav navbar-right" style="margin-left:38px">
          <li>
            <div class="dropdown">
			  <a class="dropdown-toggle btn btn-primary btn-sm" data-toggle="dropdown" href="#">Sign Up</a> 
              <div class="dropdown-menu" style="padding: 10px; background: #222">
                <form action="" role="form">
                  <div class="form-group">
                    <label for="user">User</label>
                    <input type="text" class="form-control" id="user" placeholder="User" />
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" />
                  </div>
                  <button type="submit" class="btn btn-primary btn-sm">Sign in</button>
				  <a class="dropdown-toggle btn btn-primary btn-sm" data-toggle="dropdown" href="#">Register</a> 
                </form>
              </div>
            </div>

          </li>
        </ul>
		
		<ul class="nav navbar-nav navbar-right" style="margin-left:25px">
			  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Howdy , Admin Risk</a>
			  <ul class="dropdown-menu dropdown-bdo">
				<li><a href="#">Visit Bdo.co.id</a></li>
				<li><a href="#">About Program</a></li>
			  </ul>
			 </li>
		</ul>
		  
		
        </div>
    </nav>
</header>

<sidebar>
	<nav class='sidebar sidebar-menu-collapsed'>
      <a href='#' id='justify-icon'><span class='glyphicon glyphicon-align-justify'></span></a>
      <ul>
        <li class='active'>
          <a class='expandable' href='#' title='Dashboard'>
            <span class='glyphicon glyphicon-home collapsed-element'></span>
            <span class='expanded-element'>Dashboard</span>
          </a>
        </li>
        <li>
          <a class='expandable' href='#' title='APIs'>
            <span class='glyphicon glyphicon-wrench collapsed-element'></span>
            <span class='expanded-element'>APIs</span>
          </a>
        </li>
        <li>
          <a class='expandable' href='#' title='Settings'>
            <span class='glyphicon glyphicon-cog collapsed-element'></span>
            <span class='expanded-element'>Settings</span>
          </a>
        </li>
        <li>
          <a class='expandable' href='#' title='Account'>
            <span class='glyphicon glyphicon-user collapsed-element'></span>
            <span class='expanded-element'>Account</span>
          </a>
        </li>
      </ul>
      
    </nav>
</sidebar>

<section>
    <div class="container-fluid" id="wrapper" style="margin-left:30px;margin-top:10px">
        <?= $content ?>
    </div>
</section>

<!-- Latest JavaScript -->
<script src="js/jquery-2.1.1.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/sidebar.js"></script>
</body>
</html>