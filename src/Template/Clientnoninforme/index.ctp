<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Clientnoninforme[]|\Cake\Collection\CollectionInterface $clientnoninforme
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Clientnoninforme'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="clientnoninforme index large-9 medium-8 columns content">
    <h3><?= __('Clientnoninforme') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numerodossier') ?></th>
                <th scope="col"><?= $this->Paginator->sort('typedossier') ?></th>
                <th scope="col"><?= $this->Paginator->sort('decision') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Prevenu') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientnoninforme as $clientnoninforme): ?>
            <tr>
                <td><?= $this->Number->format($clientnoninforme->id) ?></td>
                <td><?= h($clientnoninforme->client) ?></td>
                <td><?= h($clientnoninforme->email) ?></td>
                <td><?= h($clientnoninforme->numerodossier) ?></td>
                <td><?= h($clientnoninforme->typedossier) ?></td>
                <td><?= h($clientnoninforme->decision) ?></td>
                <td><?= h($clientnoninforme->Prevenu) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $clientnoninforme->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $clientnoninforme->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $clientnoninforme->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientnoninforme->id)]) ?>
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

<div class="users form large-9 medium-8 columns content">
     <iframe src="/testt" style="height:1000px; width:1000px; border:none; "></iframe> 
   
</div>
