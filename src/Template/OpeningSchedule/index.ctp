<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\OpeningSchedule[]|\Cake\Collection\CollectionInterface $openingSchedule
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Opening Schedule'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies Areas'), ['controller' => 'CompaniesAreas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Companies Area'), ['controller' => 'CompaniesAreas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="openingSchedule index large-9 medium-8 columns content">
    <h3><?= __('Opening Schedule') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('companies_areas_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pt_start_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pt_day_of_week') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pt_opening_hour') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pt_closing_hour') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pt_max_bookings_total') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pt_max_pax_total') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pt_ts') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pt_opening_hour_index') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pt_closing_hour_index') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pt_def_book_len') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subspaces_masterplan_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($openingSchedule as $openingSchedule): ?>
            <tr>
                <td><?= $this->Number->format($openingSchedule->id) ?></td>
                <td><?= $openingSchedule->has('company') ? $this->Html->link($openingSchedule->company->name, ['controller' => 'Companies', 'action' => 'view', $openingSchedule->company->id]) : '' ?></td>
                <td><?= $openingSchedule->has('companies_area') ? $this->Html->link($openingSchedule->companies_area->area_id, ['controller' => 'CompaniesAreas', 'action' => 'view', $openingSchedule->companies_area->area_id]) : '' ?></td>
                <td><?= h($openingSchedule->pt_start_date) ?></td>
                <td><?= $this->Number->format($openingSchedule->pt_day_of_week) ?></td>
                <td><?= h($openingSchedule->pt_opening_hour) ?></td>
                <td><?= h($openingSchedule->pt_closing_hour) ?></td>
                <td><?= $this->Number->format($openingSchedule->pt_max_bookings_total) ?></td>
                <td><?= $this->Number->format($openingSchedule->pt_max_pax_total) ?></td>
                <td><?= h($openingSchedule->pt_ts) ?></td>
                <td><?= $this->Number->format($openingSchedule->pt_opening_hour_index) ?></td>
                <td><?= $this->Number->format($openingSchedule->pt_closing_hour_index) ?></td>
                <td><?= $this->Number->format($openingSchedule->pt_def_book_len) ?></td>
                <td><?= $this->Number->format($openingSchedule->subspaces_masterplan_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $openingSchedule->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $openingSchedule->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $openingSchedule->id], ['confirm' => __('Are you sure you want to delete # {0}?', $openingSchedule->id)]) ?>
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
