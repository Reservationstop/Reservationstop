<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\CompaniesAreasMasterplan[]|\Cake\Collection\CollectionInterface $companiesAreasMasterplans
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Companies Areas Masterplan'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="companiesAreasMasterplans index large-9 medium-8 columns content">
    <h3><?= __('Companies Areas Masterplans') ?></h3>
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
            <?php foreach ($companiesAreasMasterplans as $companiesAreasMasterplan): ?>
            <tr>
                <td><?= $this->Number->format($companiesAreasMasterplan->id) ?></td>
                <td><?= $this->Number->format($companiesAreasMasterplan->top) ?></td>
                <td><?= $this->Number->format($companiesAreasMasterplan->left_) ?></td>
                <td><?= $this->Number->format($companiesAreasMasterplan->priority) ?></td>
                <td><?= $this->Number->format($companiesAreasMasterplan->type) ?></td>
                <td><?= h($companiesAreasMasterplan->group_nr) ?></td>
                <td><?= h($companiesAreasMasterplan->table_nr) ?></td>
                <td><?= $this->Number->format($companiesAreasMasterplan->min_be_allow) ?></td>
                <td><?= $this->Number->format($companiesAreasMasterplan->angle) ?></td>
                <td><?= $this->Number->format($companiesAreasMasterplan->capacity) ?></td>
                <td><?= $this->Number->format($companiesAreasMasterplan->index_) ?></td>
                <td><?= h($companiesAreasMasterplan->timestamp) ?></td>
                <td><?= $companiesAreasMasterplan->has('company') ? $this->Html->link($companiesAreasMasterplan->company->name, ['controller' => 'Companies', 'action' => 'view', $companiesAreasMasterplan->company->id]) : '' ?></td>
                <td><?= $this->Number->format($companiesAreasMasterplan->availableint) ?></td>
                <td><?= $this->Number->format($companiesAreasMasterplan->availableex) ?></td>
                <td><?= $this->Number->format($companiesAreasMasterplan->table_book_length) ?></td>
                <td><?= $this->Number->format($companiesAreasMasterplan->group_priority) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $companiesAreasMasterplan->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $companiesAreasMasterplan->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $companiesAreasMasterplan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $companiesAreasMasterplan->id)]) ?>
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
