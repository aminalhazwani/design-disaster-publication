<h2>Latest Articles</h2>

<ul class="teaser cf">
  <?php foreach(page('articles')->children()->visible()->limit(3) as $article): ?>
  <li>
    <h3><a href="<?php echo $article->url() ?>"><?php echo $article->title()->html() ?></a></h3>
    <p><?php echo $article->text()->excerpt(80) ?> <a href="<?php echo $article->url() ?>">read&nbsp;more&nbsp;→</a></p>
    <?php if($image = $article->images()->sortBy('sort', 'asc')->first()): ?>
    <a href="<?php echo $article->url() ?>">
      <img src="<?php echo $image->url() ?>" alt="<?php echo $article->title()->html() ?>" >
    </a>
    <?php endif ?>
  </li>
  <?php endforeach ?>
</ul>
