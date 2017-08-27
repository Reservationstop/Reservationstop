<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\CompaniesArea[]|\Cake\Collection\CollectionInterface $companiesAreas
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Companies Area'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="companiesAreas index large-9 medium-8 columns content">
    <h3><?= __('Companies Areas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('online_avail') ?></th>
                <th scope="col"><?= $this->Paginator->sort('priority') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($companiesAreas as $companiesArea): ?>
            <tr>
                <td><?= $this->Number->format($companiesArea->id) ?></td>
                <td><?= $companiesArea->has('company') ? $this->Html->link($companiesArea->company->name, ['controller' => 'Companies', 'action' => 'view', $companiesArea->company->id]) : '' ?></td>
                <td><?= h($companiesArea->online_avail) ?></td>
                <td><?= $this->Number->format($companiesArea->priority) ?></td>
                <td><?= $this->Number->format($companiesArea->status) ?></td>
                <td><?= h($companiesArea->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $companiesArea->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $companiesArea->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $companiesArea->id], ['confirm' => __('Are you sure you want to delete # {0}?', $companiesArea->id)]) ?>
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
