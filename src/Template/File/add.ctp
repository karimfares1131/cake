<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\File $file
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List File'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="file form large-9 medium-8 columns content">
    <?= $this->Form->create($file) ?>
    <fieldset>
        <legend><?= __('Add File') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('description');
            echo $this->Form->control('date');
            echo $this->Form->control('Rapport');
            echo $this->Form->control('client_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
