<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Client'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List File'), ['controller' => 'File', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New File'), ['controller' => 'File', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="client form large-9 medium-8 columns content">
    <?= $this->Form->create($client) ?>
    <fieldset>
        <legend><?= __('Add Client') ?></legend>
        <?php
            echo $this->Form->control('Nomprenom');
            echo $this->Form->control('CIN');
            echo $this->Form->control('Adresse');
            echo $this->Form->control('Phone');
            echo $this->Form->control('email');
            echo $this->Form->control('dossiers');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
