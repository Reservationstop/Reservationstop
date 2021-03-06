<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Company[]|\Cake\Collection\CollectionInterface $companies
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Company'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statuses'), ['controller' => 'Statuses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Status'), ['controller' => 'Statuses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Timezones'), ['controller' => 'Timezones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Timezone'), ['controller' => 'Timezones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Currencies'), ['controller' => 'Currencies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Currency'), ['controller' => 'Currencies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Languages'), ['controller' => 'Languages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Language'), ['controller' => 'Languages', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Geographical Areas'), ['controller' => 'GeographicalAreas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Geographical Area'), ['controller' => 'GeographicalAreas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies Areas'), ['controller' => 'CompaniesAreas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Companies Area'), ['controller' => 'CompaniesAreas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies Areas Opening Schedule'), ['controller' => 'CompaniesAreasOpeningSchedule', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Companies Areas Opening Schedule'), ['controller' => 'CompaniesAreasOpeningSchedule', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies Areas Overrides Schedule'), ['controller' => 'CompaniesAreasOverridesSchedule', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Companies Areas Overrides Schedule'), ['controller' => 'CompaniesAreasOverridesSchedule', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="companies index large-9 medium-8 columns content">
    <h3><?= __('Companies') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('country_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('group_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('parent_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('timezone_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('currency_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('language_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('zip_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('city') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('latitude') ?></th>
                <th scope="col"><?= $this->Paginator->sort('longitude') ?></th>
                <th scope="col"><?= $this->Paginator->sort('homepage') ?></th>
                <th scope="col"><?= $this->Paginator->sort('no_portal_show') ?></th>
                <th scope="col"><?= $this->Paginator->sort('concurrent_users') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sms_sender_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('shared_customers') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cvr') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cvrp') ?></th>
                <th scope="col"><?= $this->Paginator->sort('geographical_area_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('accountid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('insideview') ?></th>
                <th scope="col"><?= $this->Paginator->sort('politikenid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('invoice_startdate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('facebookid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('menulink') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($companies as $company): ?>
            <tr>
                <td><?= $this->Number->format($company->id) ?></td>
                <td><?= $company->has('type') ? $this->Html->link($company->type->name, ['controller' => 'Types', 'action' => 'view', $company->type->id]) : '' ?></td>
                <td><?= $company->has('country') ? $this->Html->link($company->country->name, ['controller' => 'Countries', 'action' => 'view', $company->country->id]) : '' ?></td>
                <td><?= $company->has('status') ? $this->Html->link($company->status->name, ['controller' => 'Statuses', 'action' => 'view', $company->status->id]) : '' ?></td>
                <td><?= $company->has('group') ? $this->Html->link($company->group->name, ['controller' => 'Groups', 'action' => 'view', $company->group->id]) : '' ?></td>
                <td><?= $company->has('parent_company') ? $this->Html->link($company->parent_company->name, ['controller' => 'Companies', 'action' => 'view', $company->parent_company->id]) : '' ?></td>
                <td><?= $company->has('timezone') ? $this->Html->link($company->timezone->name, ['controller' => 'Timezones', 'action' => 'view', $company->timezone->id]) : '' ?></td>
                <td><?= $company->has('currency') ? $this->Html->link($company->currency->name, ['controller' => 'Currencies', 'action' => 'view', $company->currency->id]) : '' ?></td>
                <td><?= $company->has('language') ? $this->Html->link($company->language->name, ['controller' => 'Languages', 'action' => 'view', $company->language->id]) : '' ?></td>
                <td><?= h($company->name) ?></td>
                <td><?= h($company->address) ?></td>
                <td><?= h($company->zip_code) ?></td>
                <td><?= h($company->city) ?></td>
                <td><?= h($company->email) ?></td>
                <td><?= h($company->phone) ?></td>
                <td><?= $this->Number->format($company->latitude) ?></td>
                <td><?= $this->Number->format($company->longitude) ?></td>
                <td><?= h($company->homepage) ?></td>
                <td><?= h($company->no_portal_show) ?></td>
                <td><?= $this->Number->format($company->concurrent_users) ?></td>
                <td><?= h($company->sms_sender_name) ?></td>
                <td><?= h($company->shared_customers) ?></td>
                <td><?= $this->Number->format($company->cvr) ?></td>
                <td><?= $this->Number->format($company->cvrp) ?></td>
                <td><?= $company->has('geographical_area') ? $this->Html->link($company->geographical_area->name, ['controller' => 'GeographicalAreas', 'action' => 'view', $company->geographical_area->id]) : '' ?></td>
                <td><?= $this->Number->format($company->price) ?></td>
                <td><?= h($company->accountid) ?></td>
                <td><?= h($company->insideview) ?></td>
                <td><?= $this->Number->format($company->politikenid) ?></td>
                <td><?= h($company->invoice_startdate) ?></td>
                <td><?= $this->Number->format($company->facebookid) ?></td>
                <td><?= h($company->menulink) ?></td>
                <td><?= h($company->created) ?></td>
                <td><?= h($company->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $company->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $company->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $company->id], ['confirm' => __('Are you sure you want to delete # {0}?', $company->id)]) ?>
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
