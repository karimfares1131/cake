<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Listedos[]|\Cake\Collection\CollectionInterface $listedoss
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Listedos'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="listedoss index large-9 medium-8 columns content">
    <h3><?= __('Listedoss') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datedarrivée') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deadline') ?></th>
                <th scope="col"><?= $this->Paginator->sort('credit') ?></th>
                <th scope="col"><?= $this->Paginator->sort('garanties') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fichier') ?></th>
                <th scope="col"><?= $this->Paginator->sort('direction') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listedoss as $listedos): ?>
            <tr>
                <td><?= $this->Number->format($listedos->id) ?></td>
                <td><?= h($listedos->client) ?></td>
                <td><?= h($listedos->type) ?></td>
                <td><?= h($listedos->datedarrivée) ?></td>
                <td><?= h($listedos->deadline) ?></td>
                <td><?= $this->Number->format($listedos->credit) ?></td>
                <td><?= h($listedos->garanties) ?></td>
                <td><?= h($listedos->fichier) ?></td>
                <td><?= h($listedos->direction) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $listedos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $listedos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $listedos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $listedos->id)]) ?>
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
