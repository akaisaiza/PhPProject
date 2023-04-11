

<?php include("./incs/menu.php"); ?>
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Welcome to <span>ShopPhP</span></h2>
              <p class="animate__animated animate__fadeInUp">This is challenge  of me with html ,bootstrap and PhP</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->
  <section class="container py-5 text-center">
        <div class="row  pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Categories </h1>
                
            </div>
        </div>
        <?php include("DAL/CategoryDAO.php"); ?>
        
        <div class="row text-center">
        <?php foreach ($categories as $category): ?> 
            <div class="col-12 col-md-3 p-5 mt-3">
                <a href="#"><img src="/assets/img/<?= $category->img ?>" width="50" height="50" class="rounded-circle img-fluid border"></a>
                <h5 class="text-centermt-3 mb-3"><?= $category->name ?></h5>
                
            </div>
            <?php endforeach ?>
        </div>
    </section>
    


    <?php include("./incs/footer.php"); ?>
    