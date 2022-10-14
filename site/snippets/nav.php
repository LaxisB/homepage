<nav class="nav <?= isset($fixed) && $fixed ? "nav--fixed" : "" ?> <?= isset($links) && count($links) > 0
                                                                      ? "nav--wide"
                                                                      : "nav--narrow" ?>">
  <div class="content">
    <div class="nav__content">
      <a href="/" class="nav__logo" aria-label="Link to Home">
        <img aria-hidden="true" src="<?= $site
                                        ->logo()
                                        ->toFile()
                                        ->url() ?>" />
      </a>

      <?php if (isset($links)) : ?>
        <div class="nav__biglinks">
          <?php foreach ($links as $link => $url) : ?>
            <a class="nav__link" href="<?= $url ?>"><?= $link ?></a>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <div class="nav__gap"></div>

      <?php if ($site->navigation()->isNotEmpty()) : ?>
        <div class="nav__smallinks">
          <?php foreach ($site->navigation()->toPages() as $page) :
          ?>
            <a class="nav__link" href="<?= $page->url() ?>"><?= $page->title() ?></a>
          <?php endforeach; ?>
        </div>
      <?php endif;
      ?>
    </div>
  </div>
</nav>
