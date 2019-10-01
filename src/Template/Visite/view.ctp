<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Visite $visite
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Visite'), ['action' => 'edit', $visite->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Visite'), ['action' => 'delete', $visite->id], ['confirm' => __('Are you sure you want to delete # {0}?', $visite->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Visite'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Visite'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="visite view large-9 medium-8 columns content">
    <h3><?= h($visite->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Garantie') ?></th>
            <td><?= h($visite->garantie) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($visite->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numerodossier') ?></th>
            <td><?= $this->Number->format($visite->numerodossier) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dateetheurevisiter') ?></th>
            <td><?= h($visite->dateetheurevisiter) ?></td>
        </tr>
    </table>
</div>
