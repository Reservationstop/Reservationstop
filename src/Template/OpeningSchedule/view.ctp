<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\OpeningSchedule $openingSchedule
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Opening Schedule'), ['action' => 'edit', $openingSchedule->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Opening Schedule'), ['action' => 'delete', $openingSchedule->id], ['confirm' => __('Are you sure you want to delete # {0}?', $openingSchedule->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Opening Schedule'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Opening Schedule'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies Areas'), ['controller' => 'CompaniesAreas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Companies Area'), ['controller' => 'CompaniesAreas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="openingSchedule view large-9 medium-8 columns content">
    <h3><?= h($openingSchedule->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Company') ?></th>
            <td><?= $openingSchedule->has('company') ? $this->Html->link($openingSchedule->company->name, ['controller' => 'Companies', 'action' => 'view', $openingSchedule->company->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Companies Area') ?></th>
            <td><?= $openingSchedule->has('companies_area') ? $this->Html->link($openingSchedule->companies_area->area_id, ['controller' => 'CompaniesAreas', 'action' => 'view', $openingSchedule->companies_area->area_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($openingSchedule->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pt Day Of Week') ?></th>
            <td><?= $this->Number->format($openingSchedule->pt_day_of_week) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pt Max Bookings Total') ?></th>
            <td><?= $this->Number->format($openingSchedule->pt_max_bookings_total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pt Max Pax Total') ?></th>
            <td><?= $this->Number->format($openingSchedule->pt_max_pax_total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pt Opening Hour Index') ?></th>
            <td><?= $this->Number->format($openingSchedule->pt_opening_hour_index) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pt Closing Hour Index') ?></th>
            <td><?= $this->Number->format($openingSchedule->pt_closing_hour_index) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pt Def Book Len') ?></th>
            <td><?= $this->Number->format($openingSchedule->pt_def_book_len) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subspaces Masterplan Id') ?></th>
            <td><?= $this->Number->format($openingSchedule->subspaces_masterplan_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pt Start Date') ?></th>
            <td><?= h($openingSchedule->pt_start_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pt Opening Hour') ?></th>
            <td><?= h($openingSchedule->pt_opening_hour) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pt Closing Hour') ?></th>
            <td><?= h($openingSchedule->pt_closing_hour) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pt Ts') ?></th>
            <td><?= h($openingSchedule->pt_ts) ?></td>
        </tr>
    </table>
</div>
