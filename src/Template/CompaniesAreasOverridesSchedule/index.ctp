<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\CompaniesAreasOverridesSchedule[]|\Cake\Collection\CollectionInterface $companiesAreasOverridesSchedule
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Companies Areas Overrides Schedule'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies Areas'), ['controller' => 'CompaniesAreas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Companies Area'), ['controller' => 'CompaniesAreas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies Areas Masterplans'), ['controller' => 'CompaniesAreasMasterplans', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Companies Areas Masterplan'), ['controller' => 'CompaniesAreasMasterplans', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="companiesAreasOverridesSchedule index large-9 medium-8 columns content">
    <h3><?= __('Companies Areas Overrides Schedule') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('companies_areas_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('start_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('opening_hour') ?></th>
                <th scope="col"><?= $this->Paginator->sort('closing_hour') ?></th>
                <th scope="col"><?= $this->Paginator->sort('max_bookings_total') ?></th>
                <th scope="col"><?= $this->Paginator->sort('max_pax_total') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ts') ?></th>
                <th scope="col"><?= $this->Paginator->sort('opening_hour_index') ?></th>
                <th scope="col"><?= $this->Paginator->sort('closing_hour_index') ?></th>
                <th scope="col"><?= $this->Paginator->sort('def_book_len') ?></th>
                <th scope="col"><?= $this->Paginator->sort('companies_areas_masterplans_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('stop_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('resource_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('group_days') ?></th>
                <th scope="col"><?= $this->Paginator->sort('group_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($companiesAreasOverridesSchedule as $companiesAreasOverridesSchedule): ?>
            <tr>
                <td><?= $this->Number->format($companiesAreasOverridesSchedule->id) ?></td>
                <td><?= $companiesAreasOverridesSchedule->has('companies_area') ? $this->Html->link($companiesAreasOverridesSchedule->companies_area->name, ['controller' => 'CompaniesAreas', 'action' => 'view', $companiesAreasOverridesSchedule->companies_area->id]) : '' ?></td>
                <td><?= $companiesAreasOverridesSchedule->has('company') ? $this->Html->link($companiesAreasOverridesSchedule->company->name, ['controller' => 'Companies', 'action' => 'view', $companiesAreasOverridesSchedule->company->id]) : '' ?></td>
                <td><?= h($companiesAreasOverridesSchedule->start_date) ?></td>
                <td><?= h($companiesAreasOverridesSchedule->opening_hour) ?></td>
                <td><?= h($companiesAreasOverridesSchedule->closing_hour) ?></td>
                <td><?= $this->Number->format($companiesAreasOverridesSchedule->max_bookings_total) ?></td>
                <td><?= $this->Number->format($companiesAreasOverridesSchedule->max_pax_total) ?></td>
                <td><?= h($companiesAreasOverridesSchedule->ts) ?></td>
                <td><?= $this->Number->format($companiesAreasOverridesSchedule->opening_hour_index) ?></td>
                <td><?= $this->Number->format($companiesAreasOverridesSchedule->closing_hour_index) ?></td>
                <td><?= $this->Number->format($companiesAreasOverridesSchedule->def_book_len) ?></td>
                <td><?= $companiesAreasOverridesSchedule->has('companies_areas_masterplan') ? $this->Html->link($companiesAreasOverridesSchedule->companies_areas_masterplan->id, ['controller' => 'CompaniesAreasMasterplans', 'action' => 'view', $companiesAreasOverridesSchedule->companies_areas_masterplan->id]) : '' ?></td>
                <td><?= h($companiesAreasOverridesSchedule->stop_date) ?></td>
                <td><?= h($companiesAreasOverridesSchedule->resource_type) ?></td>
                <td><?= h($companiesAreasOverridesSchedule->group_days) ?></td>
                <td><?= $companiesAreasOverridesSchedule->has('group') ? $this->Html->link($companiesAreasOverridesSchedule->group->name, ['controller' => 'Groups', 'action' => 'view', $companiesAreasOverridesSchedule->group->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $companiesAreasOverridesSchedule->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $companiesAreasOverridesSchedule->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $companiesAreasOverridesSchedule->id], ['confirm' => __('Are you sure you want to delete # {0}?', $companiesAreasOverridesSchedule->id)]) ?>
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
