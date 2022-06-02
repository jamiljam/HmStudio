<?php include(__DIR__.'/header.html.php') ?>

<div class="container m-auto mt-3">
    <h3>Création d'un article</h3>
    <form action="/blog" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="title" class="form-label">Titre</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Titre de l'article" >
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Contenu</label>
            <textarea class="form-control" name="content" id="content" placeholder="Contenu de l'article" ></textarea>
        </div>
        <div class="mb-3">
            <label for="img" class="form-label">Image</label>
            <input type="file" name="img" class="form-control" id="img" placeholder="Image de l'article" >
        </div>

        <button type="submit" name="submit" value="submit" class="btn btn-primary">Créer l'article</button>
    </form>
</div>

<?php include __DIR__.'/footer.html.php' ?>