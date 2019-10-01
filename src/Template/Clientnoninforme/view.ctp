<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Clientnoninforme $clientnoninforme
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Clientnoninforme'), ['action' => 'edit', $clientnoninforme->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Clientnoninforme'), ['action' => 'delete', $clientnoninforme->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientnoninforme->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Clientnoninforme'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Clientnoninforme'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="clientnoninforme view large-9 medium-8 columns content">
    <h3><?= h($clientnoninforme->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?= h($clientnoninforme->client) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($clientnoninforme->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numerodossier') ?></th>
            <td><?= h($clientnoninforme->numerodossier) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Typedossier') ?></th>
            <td><?= h($clientnoninforme->typedossier) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Decision') ?></th>
            <td><?= h($clientnoninforme->decision) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($clientnoninforme->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prevenu') ?></th>
            <td><?= $clientnoninforme->Prevenu ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
