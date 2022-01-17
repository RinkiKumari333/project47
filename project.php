   <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

      <style type="text/css">
        #footer{
          min-height: 30px;
        }
      </style>

    <title>iDiscuss!</title>
  </head>
  <body>
    <?php  include 'header.php';?>
    <?php  include 'dbconnect.php';?>  

      <!-- <div class="container my-3 py-3"> 
            <h2 class="text-center">iDiscuss - Browse Categories.</h2> 
      </div> -->

        <!-- slider start here-->

<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>

  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
      <img src="images/img6.jpg" class="d-block w-100" alt="..." height="800px">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="images/img7.jpg" class="d-block w-100" alt="..." height="800px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="images/img0.jpg" class="d-block w-100" alt="..." height="800px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
  </div>
  <div class="carousel-item">
      <img src="images/img1.jpg" class="d-block w-100" alt="..." height="800px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="https://source.unsplash.com/collection/762855" class="w-100" alt="..." height="700px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
  </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>

<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
<!--categories container start here-->
 <div class="container-fluid text-white bg-secondary my-1 py-3"> 
            <h2 class="text-center">Some useful information for everyone.</h2> 
      </div>


        <div class="row md-2 m-5 my-1">
          <!-- fetch all categories -->
          <?php
            $sql="SELECT * FROM `categories`";
            $result = mysqli_query($conn,$sql);
            while ($row=mysqli_fetch_assoc($result)) {
                  //echo ['categories_id'];
                  //echo ['categories_name'];
              $catid = $row['categories_id'];
              $catname = $row['categories_name'];
              $catdesc = $row['categories_description'];
              echo '<div class="col-sm-2">
              <div class="card" style="width: 14rem; height: 25rem;">
              <img src="https://source.unsplash.com/300x250/?/featured?technology",'.$catid.' class="card-img-top" alt="...">
              <div class="card-body">
              <h5 class="card-title"><a href="threadlist.php?catid='.$catid.'">'.$catname.'</a></h5>
              <p class="card-text">'.substr($catdesc,0,80).'.....</p>
              <a href="#" class="btn btn-primary">View Thread</a>
              </div>
              </div>
              </div>';
            }

          ?>
</div>
          


    <?php  include 'footer.php';?>
    <?php  include 'signup_modal.php';?>
    <?php  include 'login_modal.php';?>
    
    <!-- Optional JavaScript; choose one of the two! -->

 
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->


  </body>
</html>