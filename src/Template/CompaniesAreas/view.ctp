<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\CompaniesArea $companiesArea
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Companies Area'), ['action' => 'edit', $companiesArea->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Companies Area'), ['action' => 'delete', $companiesArea->id], ['confirm' => __('Are you sure you want to delete # {0}?', $companiesArea->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Companies Areas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Companies Area'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="companiesAreas view large-9 medium-8 columns content">
    <h3><?= h($companiesArea->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Company') ?></th>
            <td><?= $companiesArea->has('company') ? $this->Html->link($companiesArea->company->name, ['controller' => 'Companies', 'action' => 'view', $companiesArea->company->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($companiesArea->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($companiesArea->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Priority') ?></th>
            <td><?= $this->Number->format($companiesArea->priority) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($companiesArea->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Online Avail') ?></th>
            <td><?= $companiesArea->online_avail ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
