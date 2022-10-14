<?php snippet("header"); ?>
<?php snippet("nav"); ?>

<main class="main container">
        <?php foreach ($page->text()->toLayouts() as $layout): ?>
        <section class="grid">
          <?php foreach ($layout->columns() as $column): ?>
              <div class="column spans--<?= $column->span() ?>">
                  <?php foreach ($column->blocks() as $block): ?>
                    <?php snippet("blocks/" . $block->type(), ["block" => $block, "layout" => $layout]); ?>
                  <?php endforeach; ?>
              </div>
          <?php endforeach; ?>
        </section>
        <?php endforeach; ?>
</main>

<?php snippet("footer"); ?>
<?php snippet("end"); ?>
