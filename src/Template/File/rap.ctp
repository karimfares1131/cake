<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\File[]|\Cake\Collection\CollectionInterface $file
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New File'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="file form large-9 medium-8 columns content">
    <?= $this->Form->edit($file) ?>
    <fieldset>
        <legend><?= __('Remplir le formulaire dévaluation') ?></legend>
        <?=
            echo $this->Form->select(
    'name',
    foreach ($file as $file):
    <?= $this->Number->format($file->id) ?>
        <?=
    [h($file->name)]
     endforeach,
    [
        'multiple' => true
    ]
);
        echo $this->Form->textarea('rapport');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>

        

