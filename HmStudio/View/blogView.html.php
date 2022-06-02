<?php include(__DIR__.'/header.html.php')
?>

<div class="card mb-3 " style="width: 50rem;">
  <img class="card-img-left" src="./img/<?= end($variables)->getImg()?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?= end($variables)->getTitle()?></h5>
    <p class="card-text"><?= substr(end($variables)->getContent(),0,100)?></p>
    <p class="card-text"><small class="text-muted">Le <?= end($variables)->getCreatedAt()?></small></p>
    <a href="/article?id=<?= end($variables)->getId();?>" class="btn btn-link">Lire l'article</a>
  </div>
</div>

<div class="d-flex jsutify-content-around">
<?php foreach($variables as $article){?>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/<?= $article->getImg()?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?= $article->getTitle()?></h5>
    <p class="card-text"><?= substr($article->getContent(),0,60)?></p>
    <a href="/article?id=<?= $article->getId();?>" class="btn btn-link">Lire l'article</a>
  </div>
</div>
<?php }?>
</div>

<?php include(__DIR__.'/footer.html.php'); ?>