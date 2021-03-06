<?php

use app\components\widgets\Breadcrumbs;
use yii\helpers\Url;

$this->title = "{$article->name}. {$article->country->name} ".date('Y');
$description = $article->getDescription();
$image = $article->getImage();

$this->registerLinkTag(['rel' => 'canonical', 'href' => Url::canonical()]);
$this->registerMetaTag(['name' => 'description', 'content' => $description]);
$this->registerMetaTag(['name' => 'keywords', 'content' => '']);
$this->registerMetaTag(['property' => 'og:locale', 'content' => 'ru_RU']);
$this->registerMetaTag(['property' => 'og:url', 'content' => Url::canonical()]);
$this->registerMetaTag(['property' => 'og:title', 'content' => $this->title]);
$this->registerMetaTag(['property' => 'og:description', 'content' => $description]);
$this->registerMetaTag(['property' => 'og:image', 'content' => $image]);
$this->registerMetaTag(['property' => 'og:type', 'content' => 'article']);
$this->registerMetaTag(['property' => 'og:site_name', 'content' => Yii::$app->name]);
$this->registerMetaTag(['property' => 'og:updated_time', 'content' => date('c', $article->updated_at)]);

$this->registerMetaTag(['name' => 'twitter:card', 'content' => 'summary_large_image']);
$this->registerMetaTag(['name' => 'twitter:title', 'content' => $this->title]);
$this->registerMetaTag(['name' => 'twitter:description', 'content' => $description]);
$this->registerMetaTag(['name' => 'twitter:image', 'content' => $image]);
$this->registerMetaTag(['name' => 'twitter:site', 'content' => Yii::$app->params['social']['twitter']]);
//$this->registerMetaTag(['name' => 'twitter:creator', 'content' => Yii::$app->params['social']['twitter']]);

$this->registerMetaTag(['property' => 'article:publisher', 'content' => 'https://facebook.com/'.Yii::$app->params['social']['facebook']]);
$this->registerMetaTag(['property' => 'article:published_time', 'content' => date('c', $article->created_at)]);
$this->registerMetaTag(['property' => 'article:modified_time', 'content' => date('c', $article->updated_at)]);
$this->registerMetaTag(['property' => 'article:tag', 'content' => 'праздники']);
?>

<?= Breadcrumbs::widget([
    'wrapOptions' => [
        'class' => 'bg-gradient text-white'
    ],
    'links' => [
        ['label' => 'Страны', 'url' => ['/guide']],
        ['label' => $article->country->name, 'url' => ['/guide/'.$article->country->slug]],
        ['label' => 'Национальные праздники', 'url' => ['/guide/'.$article->country->slug.'/holidays']],
    ],
]) ?>

<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11 col-lg-9">
                <span class="lead"><?=$article->date()?></span>
                <h1 class="display-4"><?= $article->name ?></h1>
            </div>
        </div>
    </div>
</section>
<section class="bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11 col-lg-9">
                <?php if ($article->image): ?>
                    <figure class="w-50 float-left">
                        <img src="<?=$article->image?>" alt="" class="img-fluid" data-action="zoom">
                        <figcaption></figcaption>
                    </figure>
                <?php endif ?>

                <?= $article->text ?>
            </div>
        </div>
    </div>
</section>