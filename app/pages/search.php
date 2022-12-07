<?php include "../app/pages/includes/header.php"; ?>

<main class="container">
  <!-- ************************MAIN section starts****************** -->
  <main>
    <h3 class="mt-3">Search</h3>
    <diV class="row mb-2">

      <?php

        $limit = 10;
        $offset = ($PAGE['page_number'] -1) * $limit;

        // search 
        $find = $_GET['find'] ?? null;

        if($find)
        {

          $find = "%$find%";

          $query = "select posts.*,categories.category from posts join categories on posts.category_id = categories.id where posts.title like :find order by id desc limit $limit offset $offset";
          $rows = query($query, ['find'=>$find]);
        }


        if(!empty($rows))
        {
          foreach($rows as $row)
          {
            include "../app/pages/includes/post-card.php";
          }

        }else{
          echo "No items found";
        }
      
      ?>

    </diV>

  </main>
  <!-- ************************MAIN section ends****************** -->
  <div class="col-md-12 mb-4">
    <a href="<?=$PAGE['first_link']?>">
      <button class="btn btn-primary">First Page</button>
    </a>
    <a href="<?=$PAGE['prev_link']?>">
      <button class="btn btn-primary">Previous</button>
    </a>
    <a href="<?=$PAGE['next_link']?>">
      <button class="btn btn-primary float-end">Next</button>
    </a>
  </div>
</main>


<?php include "../app/pages/includes/footer.php";?>