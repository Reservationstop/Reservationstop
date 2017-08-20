<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\SubspacesMasterplan[]|\Cake\Collection\CollectionInterface $subspacesMasterplan
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Subspaces Masterplan'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Opening Schedule'), ['controller' => 'OpeningSchedule', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Opening Schedule'), ['controller' => 'OpeningSchedule', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="subspacesMasterplan index large-9 medium-8 columns content">
    <h3><?= __('Subspaces Masterplan') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('top') ?></th>
                <th scope="col"><?= $this->Paginator->sort('left_') ?></th>
                <th scope="col"><?= $this->Paginator->sort('priority') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('group_nr') ?></th>
                <th scope="col"><?= $this->Paginator->sort('table_nr') ?></th>
                <th scope="col"><?= $this->Paginator->sort('min_be_allow') ?></th>
                <th scope="col"><?= $this->Paginator->sort('angle') ?></th>
                <th scope="col"><?= $this->Paginator->sort('capacity') ?></th>
                <th scope="col"><?= $this->Paginator->sort('index_') ?></th>
                <th scope="col"><?= $this->Paginator->sort('timestamp') ?></th>
                <th scope="col"><?= $this->Paginator->sort('companies_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('availableint') ?></th>
                <th scope="col"><?= $this->Paginator->sort('availableex') ?></th>
                <th scope="col"><?= $this->Paginator->sort('table_book_length') ?></th>
                <th scope="col"><?= $this->Paginator->sort('group_priority') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($subspacesMasterplan as $subspacesMasterplan): ?>
            <tr>
                <td><?= $this->Number->format($subspacesMasterplan->id) ?></td>
                <td><?= $this->Number->format($subspacesMasterplan->top) ?></td>
                <td><?= $this->Number->format($subspacesMasterplan->left_) ?></td>
                <td><?= $this->Number->format($subspacesMasterplan->priority) ?></td>
                <td><?= $this->Number->format($subspacesMasterplan->type) ?></td>
                <td><?= h($subspacesMasterplan->group_nr) ?></td>
                <td><?= h($subspacesMasterplan->table_nr) ?></td>
                <td><?= $this->Number->format($subspacesMasterplan->min_be_allow) ?></td>
                <td><?= $this->Number->format($subspacesMasterplan->angle) ?></td>
                <td><?= $this->Number->format($subspacesMasterplan->capacity) ?></td>
                <td><?= $this->Number->format($subspacesMasterplan->index_) ?></td>
                <td><?= h($subspacesMasterplan->timestamp) ?></td>
                <td><?= $subspacesMasterplan->has('company') ? $this->Html->link($subspacesMasterplan->company->name, ['controller' => 'Companies', 'action' => 'view', $subspacesMasterplan->company->id]) : '' ?></td>
                <td><?= $this->Number->format($subspacesMasterplan->availableint) ?></td>
                <td><?= $this->Number->format($subspacesMasterplan->availableex) ?></td>
                <td><?= $this->Number->format($subspacesMasterplan->table_book_length) ?></td>
                <td><?= $this->Number->format($subspacesMasterplan->group_priority) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $subspacesMasterplan->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $subspacesMasterplan->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $subspacesMasterplan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subspacesMasterplan->id)]) ?>
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
