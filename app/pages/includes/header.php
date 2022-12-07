<!-- import css and js files -->
<link href="<?=ROOT?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?=ROOT?>/assets/css/bootstrap-icons.css" rel="stylesheet">

<script src="<?=ROOT?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>



<!-- header styling start -->
<style>
  body, * {
    /* background: gray; */
  
  }

  header {
    /* background: #6495ED; */
    background: rgb(37, 150, 190);
    position: sticky;
    top: 0;
    z-index: 10;
  }

  .btn svg {
    width: 24px;
    height: 24px;
    fill: gray;

  }


  .bi {
    vertical-align: -.125em;
    fill: red;
    /* fill: currentColor; */
  }

</style>
<!-- header styling ends -->


<header class="p-3 border-bottom">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="<?=ROOT?>" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
        <img class="bi me-2 rounded-circle" src="<?=ROOT?>/assets/images/logo.jpg" alt="Img" width="40" height="40" style="object-fit: cover;">
      </a>

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="<?=ROOT?>/donate" class="nav-link <?=$url[0] == 'donate' ? 'text-info bg-light':'text-white'?>">Donate</a></li>
        <li><a href="<?=ROOT?>" class="nav-link px-2 <?=$url[0] == 'home' ? 'text-info bg-light':'text-white'?>">Home</a></li>
        <li><a href="<?=ROOT?>/blog" class="nav-link <?=$url[0] == 'blog' ? 'text-info bg-light':'text-white'?>">Blog</a></li>
        <li><a href="<?=ROOT?>/contact" class="nav-link <?=$url[0] == 'contact' ? 'text-info bg-light':'text-white'?>">Contact</a></li>
        <li><a href="<?=ROOT?>/about" class="nav-link <?=$url[0] == 'about' ? 'text-info bg-light':'text-white'?>">About us</a></li>

        <li>
          <div class="nav-link px-2 dropdown text-end <?=$url[0] == 'category' ? 'text-info bg-light':'text-white'?>">
            <a href="#"  class="d-block text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              Category
            </a>
            <ul class="dropdown-menu text-small">
              <?php
                $query = "select * from categories order by id desc";
                $categories = query($query);

        
              ?>
              <?php if(!empty($categories)):?>
                <?php foreach($categories as $cat):?>
                  <li><a class="dropdown-item" href="<?=ROOT?>/category/<?=$cat['slug']?>"><?=$cat['category']?></a></li>

                <?php endforeach;?>
              <?php endif;?>
            </ul>
          </div>
        </li>

      </ul>

      <form action="<?=ROOT?>/search" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
      <div class="input-group">
        <input value="<?=$_GET['find'] ?? ''?>" name="find" type="search" class="form-control" placeholder="Search..." aria-label="Search">
        <button class="btn btn-primary">
          <svg viewBox="0 0 24 24">
            <use xlink:href="<?=ROOT?>/assets/images/search.svg#search" x="" y="" />
          </svg>
        </button>
      </div>  
      </form>

      <div class="dropdown text-end">
        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="<?=ROOT?>/assets/images/logo.jpg" alt="image" style="object-fit: cover;" width="40" height="40" class="rounded-circle">
        </a>
        <ul class="dropdown-menu text-small">
          <li><a class="dropdown-item" href="#"> Welcome 👋</a></li>
          <!-- <li><a class="dropdown-item" href="#">Hi <?=user('username')?></a></li> -->
          <!-- <li><a class="dropdown-item" href="#">Profile</a></li> -->
          <li><a class="dropdown-item" href="<?=ROOT?>/admin">Admin</a></li>
          <!-- <li><a class="dropdown-item" href="#">Settings</a></li> -->
          <!-- <li><hr class="dropdown-divider"></li> -->
          <!-- <li><a class="dropdown-item" href="<?=ROOT?>/logout">Sign out</a></li> -->
        </ul>
      </div>
    

    </div>
  </div>
</header>
<!-- ************************Slider starts****************** -->


  <?php
    if($url[0] == 'home')
    include "../app/pages/includes/slider.php";
  
  ?>


<!-- ************************Slider ends****************** -->

