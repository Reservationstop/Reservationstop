<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\CompaniesAreasOverridesSchedule $companiesAreasOverridesSchedule
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Companies Areas Overrides Schedule'), ['action' => 'edit', $companiesAreasOverridesSchedule->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Companies Areas Overrides Schedule'), ['action' => 'delete', $companiesAreasOverridesSchedule->id], ['confirm' => __('Are you sure you want to delete # {0}?', $companiesAreasOverridesSchedule->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Companies Areas Overrides Schedule'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Companies Areas Overrides Schedule'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies Areas'), ['controller' => 'CompaniesAreas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Companies Area'), ['controller' => 'CompaniesAreas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies Areas Masterplans'), ['controller' => 'CompaniesAreasMasterplans', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Companies Areas Masterplan'), ['controller' => 'CompaniesAreasMasterplans', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="companiesAreasOverridesSchedule view large-9 medium-8 columns content">
    <h3><?= h($companiesAreasOverridesSchedule->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Companies Area') ?></th>
            <td><?= $companiesAreasOverridesSchedule->has('companies_area') ? $this->Html->link($companiesAreasOverridesSchedule->companies_area->name, ['controller' => 'CompaniesAreas', 'action' => 'view', $companiesAreasOverridesSchedule->companies_area->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company') ?></th>
            <td><?= $companiesAreasOverridesSchedule->has('company') ? $this->Html->link($companiesAreasOverridesSchedule->company->name, ['controller' => 'Companies', 'action' => 'view', $companiesAreasOverridesSchedule->company->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Companies Areas Masterplan') ?></th>
            <td><?= $companiesAreasOverridesSchedule->has('companies_areas_masterplan') ? $this->Html->link($companiesAreasOverridesSchedule->companies_areas_masterplan->id, ['controller' => 'CompaniesAreasMasterplans', 'action' => 'view', $companiesAreasOverridesSchedule->companies_areas_masterplan->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resource Type') ?></th>
            <td><?= h($companiesAreasOverridesSchedule->resource_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Group Days') ?></th>
            <td><?= h($companiesAreasOverridesSchedule->group_days) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Group') ?></th>
            <td><?= $companiesAreasOverridesSchedule->has('group') ? $this->Html->link($companiesAreasOverridesSchedule->group->name, ['controller' => 'Groups', 'action' => 'view', $companiesAreasOverridesSchedule->group->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($companiesAreasOverridesSchedule->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Max Bookings Total') ?></th>
            <td><?= $this->Number->format($companiesAreasOverridesSchedule->max_bookings_total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Max Pax Total') ?></th>
            <td><?= $this->Number->format($companiesAreasOverridesSchedule->max_pax_total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Opening Hour Index') ?></th>
            <td><?= $this->Number->format($companiesAreasOverridesSchedule->opening_hour_index) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Closing Hour Index') ?></th>
            <td><?= $this->Number->format($companiesAreasOverridesSchedule->closing_hour_index) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Def Book Len') ?></th>
            <td><?= $this->Number->format($companiesAreasOverridesSchedule->def_book_len) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start Date') ?></th>
            <td><?= h($companiesAreasOverridesSchedule->start_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Opening Hour') ?></th>
            <td><?= h($companiesAreasOverridesSchedule->opening_hour) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Closing Hour') ?></th>
            <td><?= h($companiesAreasOverridesSchedule->closing_hour) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ts') ?></th>
            <td><?= h($companiesAreasOverridesSchedule->ts) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Stop Date') ?></th>
            <td><?= h($companiesAreasOverridesSchedule->stop_date) ?></td>
        </tr>
    </table>
</div>
