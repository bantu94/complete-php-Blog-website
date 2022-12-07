<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title><?=APP_NAME?> | Home</title>


    <!-- Custom styles for this template -->
    <link href="<?=ROOT?>/assets/css/headers.css" rel="stylesheet">
  </head>
  <body>
    
    <!-- ***********Header start here *************** -->
    <?php

      include "../app/pages/includes/header.php";
    ?>

    <!-- **************header ends here ************************** -->

    <main class="container">

      <!-- ************************MAIN section starts****************** -->
      <main class="">
      <h3 class="mt-4">Featured</h3>

      <div class="row my-2 j">

        <?php  

          $query = "select posts.*,categories.category from posts join categories on posts.category_id = categories.id order by id desc limit 6";
          $rows = query($query);
          if($rows)
          {
            foreach ($rows as $row) {
              include '../app/pages/includes/post-card.php';
            }

          }else{
            echo "No items found!";
          }

        ?>

      </div>

      </main>
      <!-- ************************MAIN section ends****************** -->


    </main>

 

    <!-- ***********************FOOTER******starts ****************** -->
    <?php

      include "../app/pages/includes/footer.php";
    ?>

    <!-- ***********************FOOTER******ends ****************** -->


  </body>
</html>
