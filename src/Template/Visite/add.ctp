<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Visite $visite
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Visite'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="visite form large-9 medium-8 columns content">
    <?= $this->Form->create($visite) ?>
    <fieldset>
        <legend><?= __('Add Visite') ?></legend>
        <?php
            echo $this->Form->control('numerodossier');
            echo $this->Form->control('garantie');
            echo $this->Form->control('dateetheurevisiter');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
