<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Area[]|\Cake\Collection\CollectionInterface $areas
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Area'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="areas index large-9 medium-8 columns content">
    <h3><?= __('Areas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lft') ?></th>
                <th scope="col"><?= $this->Paginator->sort('parent') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rght') ?></th>
                <th scope="col"><?= $this->Paginator->sort('latitude') ?></th>
                <th scope="col"><?= $this->Paginator->sort('longitude') ?></th>
                <th scope="col"><?= $this->Paginator->sort('country_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($areas as $area): ?>
            <tr>
                <td><?= $this->Number->format($area->id) ?></td>
                <td><?= h($area->name) ?></td>
                <td><?= h($area->type) ?></td>
                <td><?= $this->Number->format($area->lft) ?></td>
                <td><?= $this->Number->format($area->parent) ?></td>
                <td><?= $this->Number->format($area->rght) ?></td>
                <td><?= $this->Number->format($area->latitude) ?></td>
                <td><?= $this->Number->format($area->longitude) ?></td>
                <td><?= $area->has('country') ? $this->Html->link($area->country->name, ['controller' => 'Countries', 'action' => 'view', $area->country->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $area->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $area->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $area->id], ['confirm' => __('Are you sure you want to delete # {0}?', $area->id)]) ?>
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
