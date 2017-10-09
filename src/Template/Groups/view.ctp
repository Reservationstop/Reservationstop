<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Group $group
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Group'), ['action' => 'edit', $group->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Group'), ['action' => 'delete', $group->id], ['confirm' => __('Are you sure you want to delete # {0}?', $group->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Groups'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies Areas Overrides Schedule'), ['controller' => 'CompaniesAreasOverridesSchedule', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Companies Areas Overrides Schedule'), ['controller' => 'CompaniesAreasOverridesSchedule', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="groups view large-9 medium-8 columns content">
    <h3><?= h($group->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($group->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($group->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Companies') ?></h4>
        <?php if (!empty($group->companies)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Type Id') ?></th>
                <th scope="col"><?= __('Country Id') ?></th>
                <th scope="col"><?= __('Status Id') ?></th>
                <th scope="col"><?= __('Group Id') ?></th>
                <th scope="col"><?= __('Parent Id') ?></th>
                <th scope="col"><?= __('Timezone Id') ?></th>
                <th scope="col"><?= __('Currency Id') ?></th>
                <th scope="col"><?= __('Language Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('Zip Code') ?></th>
                <th scope="col"><?= __('City') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Phone') ?></th>
                <th scope="col"><?= __('Latitude') ?></th>
                <th scope="col"><?= __('Longitude') ?></th>
                <th scope="col"><?= __('Homepage') ?></th>
                <th scope="col"><?= __('No Portal Show') ?></th>
                <th scope="col"><?= __('Concurrent Users') ?></th>
                <th scope="col"><?= __('Sms Sender Name') ?></th>
                <th scope="col"><?= __('Shared Customers') ?></th>
                <th scope="col"><?= __('Cvr') ?></th>
                <th scope="col"><?= __('Cvrp') ?></th>
                <th scope="col"><?= __('Geographical Area Id') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Kitchen') ?></th>
                <th scope="col"><?= __('Tags') ?></th>
                <th scope="col"><?= __('Accountid') ?></th>
                <th scope="col"><?= __('Insideview') ?></th>
                <th scope="col"><?= __('Politikenid') ?></th>
                <th scope="col"><?= __('Invoice Startdate') ?></th>
                <th scope="col"><?= __('Facebookid') ?></th>
                <th scope="col"><?= __('Menulink') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($group->companies as $companies): ?>
            <tr>
                <td><?= h($companies->id) ?></td>
                <td><?= h($companies->type_id) ?></td>
                <td><?= h($companies->country_id) ?></td>
                <td><?= h($companies->status_id) ?></td>
                <td><?= h($companies->group_id) ?></td>
                <td><?= h($companies->parent_id) ?></td>
                <td><?= h($companies->timezone_id) ?></td>
                <td><?= h($companies->currency_id) ?></td>
                <td><?= h($companies->language_id) ?></td>
                <td><?= h($companies->name) ?></td>
                <td><?= h($companies->address) ?></td>
                <td><?= h($companies->zip_code) ?></td>
                <td><?= h($companies->city) ?></td>
                <td><?= h($companies->email) ?></td>
                <td><?= h($companies->phone) ?></td>
                <td><?= h($companies->latitude) ?></td>
                <td><?= h($companies->longitude) ?></td>
                <td><?= h($companies->homepage) ?></td>
                <td><?= h($companies->no_portal_show) ?></td>
                <td><?= h($companies->concurrent_users) ?></td>
                <td><?= h($companies->sms_sender_name) ?></td>
                <td><?= h($companies->shared_customers) ?></td>
                <td><?= h($companies->cvr) ?></td>
                <td><?= h($companies->cvrp) ?></td>
                <td><?= h($companies->geographical_area_id) ?></td>
                <td><?= h($companies->price) ?></td>
                <td><?= h($companies->kitchen) ?></td>
                <td><?= h($companies->tags) ?></td>
                <td><?= h($companies->accountid) ?></td>
                <td><?= h($companies->insideview) ?></td>
                <td><?= h($companies->politikenid) ?></td>
                <td><?= h($companies->invoice_startdate) ?></td>
                <td><?= h($companies->facebookid) ?></td>
                <td><?= h($companies->menulink) ?></td>
                <td><?= h($companies->created) ?></td>
                <td><?= h($companies->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Companies', 'action' => 'view', $companies->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Companies', 'action' => 'edit', $companies->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Companies', 'action' => 'delete', $companies->id], ['confirm' => __('Are you sure you want to delete # {0}?', $companies->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Companies Areas Overrides Schedule') ?></h4>
        <?php if (!empty($group->companies_areas_overrides_schedule)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Companies Areas Id') ?></th>
                <th scope="col"><?= __('Company Id') ?></th>
                <th scope="col"><?= __('Start Date') ?></th>
                <th scope="col"><?= __('Opening Hour') ?></th>
                <th scope="col"><?= __('Closing Hour') ?></th>
                <th scope="col"><?= __('Max Bookings Total') ?></th>
                <th scope="col"><?= __('Max Pax Total') ?></th>
                <th scope="col"><?= __('Ts') ?></th>
                <th scope="col"><?= __('Opening Hour Index') ?></th>
                <th scope="col"><?= __('Closing Hour Index') ?></th>
                <th scope="col"><?= __('Def Book Len') ?></th>
                <th scope="col"><?= __('Companies Areas Masterplans Id') ?></th>
                <th scope="col"><?= __('Stop Date') ?></th>
                <th scope="col"><?= __('Resource Type') ?></th>
                <th scope="col"><?= __('Group Days') ?></th>
                <th scope="col"><?= __('Group Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($group->companies_areas_overrides_schedule as $companiesAreasOverridesSchedule): ?>
            <tr>
                <td><?= h($companiesAreasOverridesSchedule->id) ?></td>
                <td><?= h($companiesAreasOverridesSchedule->companies_areas_id) ?></td>
                <td><?= h($companiesAreasOverridesSchedule->company_id) ?></td>
                <td><?= h($companiesAreasOverridesSchedule->start_date) ?></td>
                <td><?= h($companiesAreasOverridesSchedule->opening_hour) ?></td>
                <td><?= h($companiesAreasOverridesSchedule->closing_hour) ?></td>
                <td><?= h($companiesAreasOverridesSchedule->max_bookings_total) ?></td>
                <td><?= h($companiesAreasOverridesSchedule->max_pax_total) ?></td>
                <td><?= h($companiesAreasOverridesSchedule->ts) ?></td>
                <td><?= h($companiesAreasOverridesSchedule->opening_hour_index) ?></td>
                <td><?= h($companiesAreasOverridesSchedule->closing_hour_index) ?></td>
                <td><?= h($companiesAreasOverridesSchedule->def_book_len) ?></td>
                <td><?= h($companiesAreasOverridesSchedule->companies_areas_masterplans_id) ?></td>
                <td><?= h($companiesAreasOverridesSchedule->stop_date) ?></td>
                <td><?= h($companiesAreasOverridesSchedule->resource_type) ?></td>
                <td><?= h($companiesAreasOverridesSchedule->group_days) ?></td>
                <td><?= h($companiesAreasOverridesSchedule->group_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CompaniesAreasOverridesSchedule', 'action' => 'view', $companiesAreasOverridesSchedule->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CompaniesAreasOverridesSchedule', 'action' => 'edit', $companiesAreasOverridesSchedule->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CompaniesAreasOverridesSchedule', 'action' => 'delete', $companiesAreasOverridesSchedule->id], ['confirm' => __('Are you sure you want to delete # {0}?', $companiesAreasOverridesSchedule->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
