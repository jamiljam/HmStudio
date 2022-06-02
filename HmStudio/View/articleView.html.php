<?php include(__DIR__.'/header.html.php') ?>
<?php foreach($variables as $article) {?>
<div class="card mb-3 center" style="width: 50rem;">
  <img class="card-img-left" src="./img/<?= $article->getImg()?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?= $article->getTitle()?></h5>
    <p class="card-text"><?= $article->getContent()?></p>
    <p class="card-text"><small class="text-muted">Le <?= $article->getCreatedAt()?></small></p>
  </div>
</div>

<a href="/blog" type="button" class="btn btn-light">Retour au blog</a>

<div class="d-flex">
<a type="button" class="btn btn-light <?php if($article->getId()<=1){echo "disabled";}?>" href="/article?id=<?= $article->getId()-1?>">article precedent</a></li>

<a type="button" class="btn btn-light" href="/article?id=<?= $article->getId()+1?>">prochain article</a></li>
</div>
<?php }?>
<?php include(__DIR__.'/footer.html.php'); ?>