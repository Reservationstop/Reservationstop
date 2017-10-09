<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\CompaniesAreasOpeningSchedule[]|\Cake\Collection\CollectionInterface $companiesAreasOpeningSchedule
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Companies Areas Opening Schedule'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies Areas'), ['controller' => 'CompaniesAreas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Companies Area'), ['controller' => 'CompaniesAreas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies Areas Masterplans'), ['controller' => 'CompaniesAreasMasterplans', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Companies Areas Masterplan'), ['controller' => 'CompaniesAreasMasterplans', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="companiesAreasOpeningSchedule index large-9 medium-8 columns content">
    <h3><?= __('Companies Areas Opening Schedule') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('companies_areas_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('start_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('day_of_week') ?></th>
                <th scope="col"><?= $this->Paginator->sort('opening_hour') ?></th>
                <th scope="col"><?= $this->Paginator->sort('closing_hour') ?></th>
                <th scope="col"><?= $this->Paginator->sort('max_bookings_total') ?></th>
                <th scope="col"><?= $this->Paginator->sort('max_pax_total') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ts') ?></th>
                <th scope="col"><?= $this->Paginator->sort('opening_hour_index') ?></th>
                <th scope="col"><?= $this->Paginator->sort('closing_hour_index') ?></th>
                <th scope="col"><?= $this->Paginator->sort('def_book_len') ?></th>
                <th scope="col"><?= $this->Paginator->sort('companies_areas_masterplans_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($companiesAreasOpeningSchedule as $companiesAreasOpeningSchedule): ?>
            <tr>
                <td><?= $this->Number->format($companiesAreasOpeningSchedule->id) ?></td>
                <td><?= $companiesAreasOpeningSchedule->has('company') ? $this->Html->link($companiesAreasOpeningSchedule->company->name, ['controller' => 'Companies', 'action' => 'view', $companiesAreasOpeningSchedule->company->id]) : '' ?></td>
                <td><?= $companiesAreasOpeningSchedule->has('companies_area') ? $this->Html->link($companiesAreasOpeningSchedule->companies_area->name, ['controller' => 'CompaniesAreas', 'action' => 'view', $companiesAreasOpeningSchedule->companies_area->id]) : '' ?></td>
                <td><?= h($companiesAreasOpeningSchedule->start_date) ?></td>
                <td><?= $this->Number->format($companiesAreasOpeningSchedule->day_of_week) ?></td>
                <td><?= h($companiesAreasOpeningSchedule->opening_hour) ?></td>
                <td><?= h($companiesAreasOpeningSchedule->closing_hour) ?></td>
                <td><?= $this->Number->format($companiesAreasOpeningSchedule->max_bookings_total) ?></td>
                <td><?= $this->Number->format($companiesAreasOpeningSchedule->max_pax_total) ?></td>
                <td><?= h($companiesAreasOpeningSchedule->ts) ?></td>
                <td><?= $this->Number->format($companiesAreasOpeningSchedule->opening_hour_index) ?></td>
                <td><?= $this->Number->format($companiesAreasOpeningSchedule->closing_hour_index) ?></td>
                <td><?= $this->Number->format($companiesAreasOpeningSchedule->def_book_len) ?></td>
                <td><?= $companiesAreasOpeningSchedule->has('companies_areas_masterplan') ? $this->Html->link($companiesAreasOpeningSchedule->companies_areas_masterplan->id, ['controller' => 'CompaniesAreasMasterplans', 'action' => 'view', $companiesAreasOpeningSchedule->companies_areas_masterplan->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $companiesAreasOpeningSchedule->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $companiesAreasOpeningSchedule->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $companiesAreasOpeningSchedule->id], ['confirm' => __('Are you sure you want to delete # {0}?', $companiesAreasOpeningSchedule->id)]) ?>
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
