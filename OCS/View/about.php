<?php 
    $title = "View Request";
    $active = "viewRequest";
    $approved = false;
    $rejected = false;
    include_once('./template/header.php');
    include_once('../Controller/RequestController.php');
    include_once('../Model/Request.php');
    $requestController = new RequestController();
    ?>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Online Student Clearance System</title>
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"> -->
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
</head>
<style>
.h1{
    text-align: center;
}
</style>
    <body>
        <!-- <div>TODO write content</div>-->

<div class="h1">
<h1>Online Student Clearance System</h1>
</div>
<!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-1z" data-slide-to="1"></li>
    <li data-target="#carousel-example-1z" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <!--First slide-->
    <div class="carousel-item active">
      <img class="d-block w-100" src="stu1.jpg" alt="online clerance system">
    </div>
    <!--/First slide-->
    <!--Second slide-->
    <div class="carousel-item">
        <img class="d-block w-100" src="stud2.jpg" alt="online clerance system">
    </div>
    <!--/Second slide-->
    <!--Third slide-->
    <div class="carousel-item">
      <img class="d-block w-100" src="stud4.jpg" alt="online clerance system">
    </div>
    <!--/Third slide-->
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->

<!--<h1>Online Student Clearance System</h1>-->
<!--<p>Online student clearance system is a process a student needs to complete before they leave university. They need clearance of all borrowed items from different offices. The system allows the users to check their clearance status as to whether they are in any way obligated to the university, fill and submit their clearance form, and obtain their clearance letter. Students has two status when they sick clearance: when they graduate or when they withdraw from the university. 
Users in the Existing System

	


<div class="row">

  <!-- Grid column -->
  <div class="col-xl-4 col-md-4 mb-3">

      <img src="download (4).jpg" class="img-fluid z-depth-1"
      alt="Responsive image">
      <p>Online student clearance system is a process a student needs to complete before they leave university. They need clearance of all borrowed items from different offices. The system allows the users to check their clearance status as to whether they are in any way obligated to the university, fill and submit their clearance form, and obtain their clearance letter. Students has two status when they sick clearance: when they graduate or when they withdraw from the university. 
Users in the Existing System</p>

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-xl-5 col-md-4 mb-3 text-center">

      <img src="download (3).jpg" class="img-fluid z-depth-1 rounded-circle"
      alt="Responsive image">
        <p>Online student clearance system is a process a student needs to complete before they leave university. They need clearance of all borrowed items from different offices. The system allows the users to check their clearance status as to whether they are in any way obligated to the university, fill and submit their clearance form, and obtain their clearance letter. Students has two status when they sick clearance: when they graduate or when they withdraw from the university. 
Users in the Existing System</p>

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-xl-3 col-md-4 mb-3 text-right">

      <img src="download (4).jpg" class="img-fluid z-depth-1" alt="Responsive image">
  <p>Online student clearance system is a process a student needs to complete before they leave university. They need clearance of all borrowed items from different offices. The system allows the users to check their clearance status as to whether they are in any way obligated to the university, fill and submit their clearance form, and obtain their clearance letter. Students has two status when they sick clearance: when they graduate or when they withdraw from the university. 
Users in the Existing System</p>
  </div>
  <!-- Grid column -->

</div>
<!-- Grid row -->

<?php include_once('./template/footer.php'); ?>
    </body>
</html>
