<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Clientnoninforme $clientnoninforme
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $clientnoninforme->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $clientnoninforme->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Clientnoninforme'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="clientnoninforme form large-9 medium-8 columns content">
    <?= $this->Form->create($clientnoninforme) ?>
    <fieldset>
        <legend><?= __('Edit Clientnoninforme') ?></legend>
        <?php
            echo $this->Form->control('client');
            echo $this->Form->control('email');
            echo $this->Form->control('numerodossier');
            echo $this->Form->control('typedossier');
            echo $this->Form->control('decision');
            echo $this->Form->control('Prevenu');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
