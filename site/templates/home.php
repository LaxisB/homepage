<?php snippet("header"); ?>

<main>
  <div class="card">
    <svg class="card__logo" viewBox="0 0 700 800">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M277.203 0L216 29.0592V126.848L61.2686 0.0537109L0 29.0592V383.059V737.059H75V383.059V108.271L216 223.812V383.059V737.059L277.203 766.118L494.203 589.118V531L312.829 383.059L494.203 235.118V177L277.203 0ZM411.171 206.059L291 304.079V108.039L411.171 206.059ZM411.171 560.059L291 462.039V658.079L411.171 560.059Z" transform="translate(190 14)" title="LaxisB Logo" />
    </svg>
    <div class="card__links list">
      <?php foreach ($page->links()->toStructure() as $link) : ?>
        <p class="list__row">
          <span class="list__key">
            <?= $link->label() ?>
          </span>
          <?php if ($link->href()->isNotEmpty()) : ?>
            <a target="_BLANK" rel="noopener" href="<?= $link->href() ?>" class="list__value"><?= $link->name() ?></a>
          <?php else : ?>
            <span class="list__value"><?= $link->name() ?></span>
          <?php endif ?>
        </p>
      <?php endforeach ?>
    </div>
</main>

<?php snippet("footer"); ?>
<?php snippet("end"); ?>
