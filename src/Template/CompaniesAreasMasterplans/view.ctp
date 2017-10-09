<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\CompaniesAreasMasterplan $companiesAreasMasterplan
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Companies Areas Masterplan'), ['action' => 'edit', $companiesAreasMasterplan->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Companies Areas Masterplan'), ['action' => 'delete', $companiesAreasMasterplan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $companiesAreasMasterplan->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Companies Areas Masterplans'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Companies Areas Masterplan'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="companiesAreasMasterplans view large-9 medium-8 columns content">
    <h3><?= h($companiesAreasMasterplan->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Group Nr') ?></th>
            <td><?= h($companiesAreasMasterplan->group_nr) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Table Nr') ?></th>
            <td><?= h($companiesAreasMasterplan->table_nr) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company') ?></th>
            <td><?= $companiesAreasMasterplan->has('company') ? $this->Html->link($companiesAreasMasterplan->company->name, ['controller' => 'Companies', 'action' => 'view', $companiesAreasMasterplan->company->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($companiesAreasMasterplan->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Top') ?></th>
            <td><?= $this->Number->format($companiesAreasMasterplan->top) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Left ') ?></th>
            <td><?= $this->Number->format($companiesAreasMasterplan->left_) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Priority') ?></th>
            <td><?= $this->Number->format($companiesAreasMasterplan->priority) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= $this->Number->format($companiesAreasMasterplan->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Min Be Allow') ?></th>
            <td><?= $this->Number->format($companiesAreasMasterplan->min_be_allow) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Angle') ?></th>
            <td><?= $this->Number->format($companiesAreasMasterplan->angle) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Capacity') ?></th>
            <td><?= $this->Number->format($companiesAreasMasterplan->capacity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Index ') ?></th>
            <td><?= $this->Number->format($companiesAreasMasterplan->index_) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Availableint') ?></th>
            <td><?= $this->Number->format($companiesAreasMasterplan->availableint) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Availableex') ?></th>
            <td><?= $this->Number->format($companiesAreasMasterplan->availableex) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Table Book Length') ?></th>
            <td><?= $this->Number->format($companiesAreasMasterplan->table_book_length) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Group Priority') ?></th>
            <td><?= $this->Number->format($companiesAreasMasterplan->group_priority) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Timestamp') ?></th>
            <td><?= h($companiesAreasMasterplan->timestamp) ?></td>
        </tr>
    </table>
</div>
