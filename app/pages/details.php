<?php include "../app/pages/includes/header.php"; ?>

<main class="container">
  <!-- ************************MAIN section starts****************** -->
  <main>
    <h3 class="my-2">Blog details</h3>
    <diV class="row mb-2">

      <?php

        $slug = $url[1] ?? null;
        if($slug)
        {
          $query = "select posts.*,categories.category from posts join categories on posts.category_id = categories.id where posts.slug = :slug limit 1";
          $row = query_row ($query, ['slug'=>$slug]);
        }

        
        if(!empty($row))
        {?>
            <div class="col-md-10">
              <div class="g-0 rounded border overflow-hidden flex-md-row mb-4 shadow-sm position-relative">
                <div class="col-12 d-lg-block">
                  <img class="bd-placeholder-img w-100" width="100%" style="object-fit: cover;" src="<?=get_image($row['image'])?>" alt="image">
                </div>
                <div class="col p-4 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-2 text-success"><?=esc($row['category'] ?? 'Unknown')?></strong>
                  <h4 class="mb-0"><?=esc($row['title'])?></h4>
                  <div class="mb-1 text-muted"><?=date("jS M, Y",strtotime($row['date']))?></div>
                  <p class="mb-auto"><?=nl2br(add_root_to_images($row['content']))?></p>
              
                </div>
            
              </div>
            </div>

        <?php  
        }else{
          echo "No items found";
        }
      
      ?>

    </diV>

  </main>
  <!-- ************************MAIN section ends****************** -->
</main>


<?php include "../app/pages/includes/footer.php";?>