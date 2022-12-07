<style>
@media screen and (max-width: 600px) {
  
}
* a {
  text-decoration: none;
}

</style>

<div class="col-lg-6">
  <div class="row g-0 rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 border">
    <div class="col-lg-5 col-12 d-lg-block">
      <img class="bd-placeholder-img w-100" height="100%"style="object-fit: cover;" src="<?=get_image($row['image'])?>" alt="image">
    </div>
    <div class="col p-4 d-flex flex-column position-static">
      <strong class="d-inline-block mb-2 text-success"><?=esc($row['category'] ?? 'Unknown')?></strong>

      <a href="<?=ROOT?>/details/<?=$row['slug']?>">
        <h4 class="mb-0"><?=esc($row['title'])?></h4>
      </a>

      <div class="mb-1 text-muted"><?=date("jS M, Y",strtotime($row['date']))?></div>
      <!-- <p class="mb-auto"><?=esc(substr($row['content'], 0, 150))?></p> -->
      <a href="<?=ROOT?>/details/<?=$row['slug']?>" class="stretched-link" style="text-decoration: none;">Read more</a>
    </div>
   
  </div>  
</div>
