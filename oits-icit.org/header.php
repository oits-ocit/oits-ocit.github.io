<!DOCTYPE html>
<html lang="en">
<?php
header("Expires: Wed, 31 August 2026 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="author" content="Creative Nerds">
    <link rel="shortcut icon" href="public/assets/images/favicon.png" alt="OCIT 2025">
    <meta name="description" content="OITS International Conference on Information Technology (OCIT) is a premier international forum for high qualityresearch in the areas of Information Technology. OCIT 2025, the 23rd edition of OCIT, is being jointly organizedby the Orissa Information Technology Society (OITS) (http://www.oits.org) and KIIT University, Odisha, India (https://kiit.ac.in/). ">
    <meta name="keywords" content="OCIT, OCIT2024, OITS International Conference on Information Technology (OCIT) is a premier international forum for high qualityresearch in the areas of Information Technology. OCIT 2025, the 23rd edition of OCIT, is being jointly organizedby the Orissa Information Technology Society (OITS) (http://www.oits.org) and KIIT University, Odisha, India (https://kiit.ac.in/)">



    <title>OCIT | International Conference on Information Technology</title>

	<!--Bootstrap-->
    <link href="public/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/plugins/font/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- Icons -->	
    
	<!-- Main styles for this application -->
    <link href="public/assets/css/style.css" rel="stylesheet">
<!--<script src="script.js"></script>	-->

<style> 
#rcorners1 {
  border-radius: 15px 50px 30px 5px;
  background: #73AD21;
  padding: 20px; 
  width: 200px;
  height: 150px; 
}

#rcorners2 {
  border-radius: 25px 15px 25px;
  background: #73AD21;
  padding: 5px; 
 
  
}

#rcorners3 {
 border-radius: 25px 15px 25px;
  background: #ffAD21;
  padding: 5px;
} 

#rcorners4 {
  border-radius: 15px;
  background: #73AD21;
  padding: 20px; 
  width: 200px;
  height: 150px; 
} 
</style>
</head>


<body id="root" class="">

<nav class="navbar navbar-default">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php"><img src="public/assets/images/OCIT_Logo.png" alt="icit"/></a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">			
			<ul class="nav navbar-nav navbar-right">
				<li><a href="index.php">Home</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Committees <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Organizing Committee </a></li>
						<li><a href="#">Program Committee</a></li>
						<li><a href="#">TPC</a></li>
						<li><a href="sc.php">Steering Committee</a></li>
						
					</ul>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Papers <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<!-- <li><a href="cp.php">Important Dates</a></li> -->
						<li><a href="#" target="_blank">CFP</a></li>
						<!--<li>
						<a href="#" target="_blank">Call for Papers (ACVCA)
						</a>
						</li>
						<li>
						<a href="#" target="_blank">Call for Papers (BTEA)
						</a>
						</li>
						-->
						<li><a href="https://www.ieee.org/content/dam/ieee-org/ieee/web/org/conferences/conference-template-a4.docx" target="_blank">Word Template</a></li>
						<li><a href="https://www.ieee.org/content/dam/ieee-org/ieee/web/org/conferences/conference-latex-template.zip" target="_blank">Latex Template</a></li>
						<li><a href="https://web.easymeet.ws/cfp/EM20242" target="_blank">Paper Submission</a></li>
						<li><a href="#" target="_blank">Download Presentation Template</a></li>
						<li><a href="regd-details.php">Registration</a></li>
						
					</ul>
				</li>				
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Program <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Keynote/Plenary Talks</a></li>
						<li><a href="#">Industrial Talk</a></li>
						
						<!--<li><a href="public/uploads/pdf/SecIoT_Proposal_ICIT2017.pdf" target="_blank">Call for Papers (Special Session)</a></li> -->
						<li><a href="#" target="_blank">Program Schedule</a></li>
						<li><a href="#" target="_blank">Session Chair Details</a></li>
						<li><a href="#">Conference Proceeding</a></li>
						<li><a href="#">Tutorial</a></li>
						<li><a href="#">Our Sponsors</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Attending Conference<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="https://kiit.ac.in/">Venue</a></li>
						<li><a href="#">Hotel Information </a></li>
					</ul>
				</li>				
				<li><a href="oits-archieve/OITS/">OITS</a></li>
				
				<!-- <li><a href="sponsor.php">Sponsorship</a></li> -->
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Past OCIT <span class="caret"></span></a>
					<ul class="dropdown-menu">
					<li><a href="oits-archieve/OCIT_2024_Website/" target="_blank">OCIT 2024</a></li>
						<li><a href="oits-archieve/OCIT_2023_Website/" target="_blank">OCIT 2023</a></li>
						<li><a href="oits-archieve/OCIT_2022_Website/" target="_blank">OCIT 2022</a></li>
						<li><a href="oits-archieve/OCIT_2021_Website/" target="_blank">OCIT 2021</a></li>
						<li><a href="oits-archieve/ICIT-2019_Website/" target="_blank">ICIT 2019</a></li>
						<li><a href="oits-archieve/ICIT-2018_Website/" target="_blank">ICIT 2018</a></li>
						<li><a href="oits-archieve/ICIT-2017_Website/" target="_blank">ICIT 2017</a></li>
						<li><a href="oits-archieve/ICIT-2016_Website/" target="_blank">ICIT 2016</a></li>
						<li><a href="oits-archieve/ICIT-2015_Website/" target="_blank">ICIT 2015</a></li>
						<li><a href="oits-archieve/ICIT-2014_Website/" target="_blank">ICIT 2014</a></li>
						<li><a href="oits-archieve/ICIT-2009_Website/" target="_blank">ICIT 2009</a></li>
						<li><a href="oits-archieve/ICIT-2007_Website/" target="_blank">ICIT 2007</a></li>
						<li><a href="oits-archieve/ICIT-2006_Website/" target="_blank">ICIT 2006</a></li>
						<li><a href="oits-archieve/ICIT-2003_Website/" target="_blank">ICIT 2003</a></li>
						<li><a href="oits-archieve/ICIT-2002_Website/" target="_blank">ICIT 2002</a></li>
                        
						<li><a href="oits-archieve/ICIT-2000_Website/" target="_blank">ICIT 2000</a></li>
						<li><a href="oits-archieve/ICIT-1999_Website/" target="_blank">ICIT 1999</a></li>
						<li><a href="oits-archieve/ICIT-1998_Website/" target="_blank">ICIT 1998</a></li>
						<li><a href="oits-archieve/ICIT-1997_Website/" target="_blank">ICIT 1997</a></li>

					</ul>
				</li>
				<li><a href="contact.php">Contact</a></li>
				<!-- <li><a href="http://oits.org/">OITS</a></li> -->

			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>
