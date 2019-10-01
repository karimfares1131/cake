<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\File[]|\Cake\Collection\CollectionInterface $file
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
<li class="heading"><?= __('Expert') ?></li>

<li><?= $this->Html->link(__('Remplir le formulaire des evaluation'), ['controller' => 'report', 'action' => 'add']) ?></li>

<li><?= $this->Html->link(__('Consulter les Visites'), ['controller' => 'visite', 'action' => 'index']) ?></li>


<li class="heading"><?= __('Chargé des experts') ?></li>


<li><?= $this->Html->link(__('Consulter les dossiers de credit'), ['controller' => 'listedoss', 'action' => 'index']) ?></li>


<li><?= $this->Html->link(__('Planifier une visite'), ['controller' => 'visite', 'action' => 'add']) ?></li>


<li><?= $this->Html->link(__('Consulter les rapports des evaluation'), ['controller' => 'report', 'action' => 'index']) ?></li>


<li><?= $this->Html->link(__('List des clients non informés/decision'), ['controller' => 'clientnoninforme', 'action' => 'index']) ?></li>


<li class="heading"><?= __('Users') ?></li>


<li><?= $this->Html->link(__('ajouter fiche clients'), ['controller' => 'client', 'action' => 'add']) ?></li>


<li><?= $this->Html->link(__('Ajouter les dossiers de credit'), ['controller' => 'listedoss', 'action' => 'add']) ?></li>


<li><?= $this->Html->link(__('List des clients'), ['controller' => 'client', 'action' => 'index']) ?></li>


<li><?= $this->Html->link(__('Consulter les dossiers'), ['controller' => 'listedoss', 'action' => 'index']) ?></li>

       
    </ul>
</nav>
<div class="file index large-9 medium-8 columns content">
    <h3><?= __('File') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Rapport') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($file as $file): ?>
            <tr>
                <td><?= $this->Number->format($file->id) ?></td>
                <td><?= h($file->name) ?></td>
                <td><?= h($file->description) ?></td>
                <td><?= h($file->date) ?></td>
                <td><?= h($file->Rapport) ?></td>
                <td><?= $this->Number->format($file->client_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $file->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $file->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $file->id], ['confirm' => __('Are you sure you want to delete # {0}?', $file->id)]) ?>
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
