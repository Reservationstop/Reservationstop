<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\SubspacesMasterplan $subspacesMasterplan
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Subspaces Masterplan'), ['action' => 'edit', $subspacesMasterplan->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Subspaces Masterplan'), ['action' => 'delete', $subspacesMasterplan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subspacesMasterplan->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Subspaces Masterplan'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subspaces Masterplan'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Opening Schedule'), ['controller' => 'OpeningSchedule', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Opening Schedule'), ['controller' => 'OpeningSchedule', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="subspacesMasterplan view large-9 medium-8 columns content">
    <h3><?= h($subspacesMasterplan->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Group Nr') ?></th>
            <td><?= h($subspacesMasterplan->group_nr) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Table Nr') ?></th>
            <td><?= h($subspacesMasterplan->table_nr) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company') ?></th>
            <td><?= $subspacesMasterplan->has('company') ? $this->Html->link($subspacesMasterplan->company->name, ['controller' => 'Companies', 'action' => 'view', $subspacesMasterplan->company->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($subspacesMasterplan->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Top') ?></th>
            <td><?= $this->Number->format($subspacesMasterplan->top) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Left ') ?></th>
            <td><?= $this->Number->format($subspacesMasterplan->left_) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Priority') ?></th>
            <td><?= $this->Number->format($subspacesMasterplan->priority) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= $this->Number->format($subspacesMasterplan->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Min Be Allow') ?></th>
            <td><?= $this->Number->format($subspacesMasterplan->min_be_allow) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Angle') ?></th>
            <td><?= $this->Number->format($subspacesMasterplan->angle) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Capacity') ?></th>
            <td><?= $this->Number->format($subspacesMasterplan->capacity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Index ') ?></th>
            <td><?= $this->Number->format($subspacesMasterplan->index_) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Availableint') ?></th>
            <td><?= $this->Number->format($subspacesMasterplan->availableint) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Availableex') ?></th>
            <td><?= $this->Number->format($subspacesMasterplan->availableex) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Table Book Length') ?></th>
            <td><?= $this->Number->format($subspacesMasterplan->table_book_length) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Group Priority') ?></th>
            <td><?= $this->Number->format($subspacesMasterplan->group_priority) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Timestamp') ?></th>
            <td><?= h($subspacesMasterplan->timestamp) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Opening Schedule') ?></h4>
        <?php if (!empty($subspacesMasterplan->opening_schedule)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Company Id') ?></th>
                <th scope="col"><?= __('Companies Areas Id') ?></th>
                <th scope="col"><?= __('Pt Start Date') ?></th>
                <th scope="col"><?= __('Pt Day Of Week') ?></th>
                <th scope="col"><?= __('Pt Opening Hour') ?></th>
                <th scope="col"><?= __('Pt Closing Hour') ?></th>
                <th scope="col"><?= __('Pt Max Bookings Total') ?></th>
                <th scope="col"><?= __('Pt Max Pax Total') ?></th>
                <th scope="col"><?= __('Pt Ts') ?></th>
                <th scope="col"><?= __('Pt Opening Hour Index') ?></th>
                <th scope="col"><?= __('Pt Closing Hour Index') ?></th>
                <th scope="col"><?= __('Pt Def Book Len') ?></th>
                <th scope="col"><?= __('Subspaces Masterplan Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($subspacesMasterplan->opening_schedule as $openingSchedule): ?>
            <tr>
                <td><?= h($openingSchedule->id) ?></td>
                <td><?= h($openingSchedule->company_id) ?></td>
                <td><?= h($openingSchedule->companies_areas_id) ?></td>
                <td><?= h($openingSchedule->pt_start_date) ?></td>
                <td><?= h($openingSchedule->pt_day_of_week) ?></td>
                <td><?= h($openingSchedule->pt_opening_hour) ?></td>
                <td><?= h($openingSchedule->pt_closing_hour) ?></td>
                <td><?= h($openingSchedule->pt_max_bookings_total) ?></td>
                <td><?= h($openingSchedule->pt_max_pax_total) ?></td>
                <td><?= h($openingSchedule->pt_ts) ?></td>
                <td><?= h($openingSchedule->pt_opening_hour_index) ?></td>
                <td><?= h($openingSchedule->pt_closing_hour_index) ?></td>
                <td><?= h($openingSchedule->pt_def_book_len) ?></td>
                <td><?= h($openingSchedule->subspaces_masterplan_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'OpeningSchedule', 'action' => 'view', $openingSchedule->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'OpeningSchedule', 'action' => 'edit', $openingSchedule->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'OpeningSchedule', 'action' => 'delete', $openingSchedule->id], ['confirm' => __('Are you sure you want to delete # {0}?', $openingSchedule->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
