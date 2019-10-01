<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Listedos $listedos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Listedoss'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="listedoss form large-9 medium-8 columns content">
    <?= $this->Form->create($listedos) ?>
    <fieldset>
        <legend><?= __('Add Listedos') ?></legend>
        <?php
            echo $this->Form->control('client');
            echo $this->Form->control('type');
            echo $this->Form->control('datedarrivée');
            echo $this->Form->control('deadline');
            echo $this->Form->control('credit');
            echo $this->Form->control('garanties');
            echo $this->Form->control('fichier');
            echo $this->Form->control('direction');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
