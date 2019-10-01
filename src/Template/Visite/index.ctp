<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Visite[]|\Cake\Collection\CollectionInterface $visite
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Visite'), ['action' => 'add']) ?></li>
        <li role="separator" class="divider"></li>
    </ul>
</nav>
<div class="visite index large-9 medium-8 columns content">
    <h3><?= __('Visite') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numerodossier') ?></th>
                <th scope="col"><?= $this->Paginator->sort('garantie') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dateetheurevisiter') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($visite as $visite): ?>
            <tr>
                <td><?= $this->Number->format($visite->id) ?></td>
                <td><?= $this->Number->format($visite->numerodossier) ?></td>
                <td><?= h($visite->garantie) ?></td>
                <td><?= h($visite->dateetheurevisiter) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $visite->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $visite->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $visite->id], ['confirm' => __('Are you sure you want to delete # {0}?', $visite->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
