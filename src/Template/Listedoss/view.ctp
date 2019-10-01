<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Listedos $listedos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Listedos'), ['action' => 'edit', $listedos->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Listedos'), ['action' => 'delete', $listedos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $listedos->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Listedoss'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Listedos'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="listedoss view large-9 medium-8 columns content">
    <h3><?= h($listedos->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?= h($listedos->client) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= h($listedos->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Garanties') ?></th>
            <td><?= h($listedos->garanties) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fichier') ?></th>
            <td><?= h($listedos->fichier) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Direction') ?></th>
            <td><?= h($listedos->direction) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($listedos->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Credit') ?></th>
            <td><?= $this->Number->format($listedos->credit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datedarrivée') ?></th>
            <td><?= h($listedos->datedarrivée) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deadline') ?></th>
            <td><?= h($listedos->deadline) ?></td>
        </tr>
    </table>
</div>
