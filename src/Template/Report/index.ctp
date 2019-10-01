<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Report[]|\Cake\Collection\CollectionInterface $report
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Expert') ?></li>

<li><?= $this->Html->link(__('Remplir le formulaire des evaluations'), ['controller' => 'report', 'action' => 'add']) ?></li>

<li><?= $this->Html->link(__('Consulter les Visites'), ['controller' => 'visite', 'action' => 'index']) ?></li>


<li class="heading"><?= __('Chargé des experts') ?></li>


<li><?= $this->Html->link(__('Consulter les dossiers de credit'), ['controller' => 'listedoss', 'action' => 'index']) ?></li>


<li><?= $this->Html->link(__('Planifier une visite'), ['controller' => 'visite', 'action' => 'add']) ?></li>


<li><?= $this->Html->link(__('Consulter les rapports des evaluations'), ['controller' => 'report', 'action' => 'index']) ?></li>


<li><?= $this->Html->link(__('List des clients non informés/decision'), ['controller' => 'clientnoninforme', 'action' => 'index']) ?></li>


<li class="heading"><?= __('Users') ?></li>


<li><?= $this->Html->link(__('ajouter fiche clients'), ['controller' => 'client', 'action' => 'add']) ?></li>


<li><?= $this->Html->link(__('Ajouter les dossiers de credit'), ['controller' => 'listedoss', 'action' => 'add']) ?></li>


<li><?= $this->Html->link(__('List des clients'), ['controller' => 'client', 'action' => 'index']) ?></li>


<li><?= $this->Html->link(__('Consulter les dossiers'), ['controller' => 'listedoss', 'action' => 'index']) ?></li>

        
    </ul>
</nav>
<div class="report index large-9 medium-8 columns content">
    <h3><?= __('Report') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Dossier') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Rapport') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($report as $report): ?>
            <tr>
                <td><?= $this->Number->format($report->id) ?></td>
                <td><?= $this->Number->format($report->Dossier) ?></td>
                <td><?= h($report->Rapport) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $report->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $report->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $report->id], ['confirm' => __('Are you sure you want to delete # {0}?', $report->id)]) ?>
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
