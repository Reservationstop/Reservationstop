<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\CompaniesAreasOpeningSchedule $companiesAreasOpeningSchedule
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Companies Areas Opening Schedule'), ['action' => 'edit', $companiesAreasOpeningSchedule->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Companies Areas Opening Schedule'), ['action' => 'delete', $companiesAreasOpeningSchedule->id], ['confirm' => __('Are you sure you want to delete # {0}?', $companiesAreasOpeningSchedule->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Companies Areas Opening Schedule'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Companies Areas Opening Schedule'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies Areas'), ['controller' => 'CompaniesAreas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Companies Area'), ['controller' => 'CompaniesAreas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies Areas Masterplans'), ['controller' => 'CompaniesAreasMasterplans', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Companies Areas Masterplan'), ['controller' => 'CompaniesAreasMasterplans', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="companiesAreasOpeningSchedule view large-9 medium-8 columns content">
    <h3><?= h($companiesAreasOpeningSchedule->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Company') ?></th>
            <td><?= $companiesAreasOpeningSchedule->has('company') ? $this->Html->link($companiesAreasOpeningSchedule->company->name, ['controller' => 'Companies', 'action' => 'view', $companiesAreasOpeningSchedule->company->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Companies Area') ?></th>
            <td><?= $companiesAreasOpeningSchedule->has('companies_area') ? $this->Html->link($companiesAreasOpeningSchedule->companies_area->name, ['controller' => 'CompaniesAreas', 'action' => 'view', $companiesAreasOpeningSchedule->companies_area->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Companies Areas Masterplan') ?></th>
            <td><?= $companiesAreasOpeningSchedule->has('companies_areas_masterplan') ? $this->Html->link($companiesAreasOpeningSchedule->companies_areas_masterplan->id, ['controller' => 'CompaniesAreasMasterplans', 'action' => 'view', $companiesAreasOpeningSchedule->companies_areas_masterplan->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($companiesAreasOpeningSchedule->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Day Of Week') ?></th>
            <td><?= $this->Number->format($companiesAreasOpeningSchedule->day_of_week) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Max Bookings Total') ?></th>
            <td><?= $this->Number->format($companiesAreasOpeningSchedule->max_bookings_total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Max Pax Total') ?></th>
            <td><?= $this->Number->format($companiesAreasOpeningSchedule->max_pax_total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Opening Hour Index') ?></th>
            <td><?= $this->Number->format($companiesAreasOpeningSchedule->opening_hour_index) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Closing Hour Index') ?></th>
            <td><?= $this->Number->format($companiesAreasOpeningSchedule->closing_hour_index) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Def Book Len') ?></th>
            <td><?= $this->Number->format($companiesAreasOpeningSchedule->def_book_len) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start Date') ?></th>
            <td><?= h($companiesAreasOpeningSchedule->start_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Opening Hour') ?></th>
            <td><?= h($companiesAreasOpeningSchedule->opening_hour) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Closing Hour') ?></th>
            <td><?= h($companiesAreasOpeningSchedule->closing_hour) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ts') ?></th>
            <td><?= h($companiesAreasOpeningSchedule->ts) ?></td>
        </tr>
    </table>
</div>
