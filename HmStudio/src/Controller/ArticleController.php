<?php

namespace HmStudio\Controller;

use PDO;
use DateTime;
use HmStudio\Class\Article;
use HmStudio\Class\SingletonPdo;
use HmStudio\Utils\RenderView;

class ArticleController
{
    protected $pdo;
    protected Article $article;
    protected array $articleContent;
    use RenderView;

    public function __construct()
    {
        $this->pdo = SingletonPdo::getInstancePdo();
    }

    public function createArticle()
    {
        $this->article = new Article();
        $date = new DateTime('now');

        //Recuperer les donnees du formulaire via la methode post et Les ajouter avec les setter
        $imgPost = $_FILES["img"]["name"];
        $imgTmp = $_FILES["img"]["tmp_name"];
        $pathOfImg = __DIR__ . './../../img/' . $imgPost;
        move_uploaded_file($imgTmp, $pathOfImg);
        $this->article->setImg($imgPost);
        $this->article->setTitle(filter_input(INPUT_POST, 'title'));
        $this->article->setContent(filter_input(INPUT_POST, 'content'));
        $this->article->setCreatedAt($date->format('d/m/Y'));
        $this->article->setUpdatedAt($date->format('d/m/Y'));

        //Recuperer les donnees d'un article
        $title = $this->article->getTitle();
        $content = $this->article->getContent();
        $img = $this->article->getImg();
        $createdAt = $this->article->getCreatedAt();

        //acceder à la BDD 
        $sql = "INSERT INTO article(title,content,img,created_at,updated_at) VALUES (:title,:content,:img,:createdAt,:updatedAt)";
        $req = $this->pdo->prepare($sql);
     
        //Les ajouter à la BDD
        $req->bindValue(":title", $title);
        $req->bindValue(":content", $content);
        $req->bindValue("img", $img);
        $req->bindValue("createdAt", $createdAt);
        $req->bindValue("updatedAt", $createdAt);

        $req->execute();
    }

    public function showAllArticle()
    {

        $sql = "SELECT * FROM article";
        $req = $this->pdo->prepare($sql);
        $req->setFetchMode(PDO::FETCH_CLASS, Article::class);
        $req->execute();

        $articles = $req->fetchAll();

        return $this->renderView("blogView.html.php", $articles);
    }

    public function showArticle()
    {
        //On recupere l'id max
        $sqlMaxId = "SELECT id FROM article ORDER BY ID DESC LIMIT 1";
        $req = $this->pdo->prepare($sqlMaxId);
        $req->setFetchMode(PDO::FETCH_ASSOC);
        $req->execute();
        $idArticle = $req->fetchAll();


        //On recupere l'id et on test
        $id = filter_input(INPUT_GET, 'id');

        if ($idArticle[0]['id'] < 0 || $id == 0 || $id > $idArticle[0]['id']) {
            $id = 1;
        }

        $sql = "SELECT * FROM article WHERE id=".$id;
        $req = $this->pdo->prepare($sql);
        $req->setFetchMode(PDO::FETCH_CLASS, Article::class);
        $req->execute();
        $article = $req->fetchAll();

        return $this->renderView("articleView.html.php", $article);
    }

    public function getArticleForm()
    {

        return $this->renderView("creationArticle.html.php", array(null));
    }
}
