<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Company $company
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Company'), ['action' => 'edit', $company->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Company'), ['action' => 'delete', $company->id], ['confirm' => __('Are you sure you want to delete # {0}?', $company->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Statuses'), ['controller' => 'Statuses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Status'), ['controller' => 'Statuses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Parent Companies'), ['controller' => 'Companies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parent Company'), ['controller' => 'Companies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Timezones'), ['controller' => 'Timezones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Timezone'), ['controller' => 'Timezones', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Currencies'), ['controller' => 'Currencies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Currency'), ['controller' => 'Currencies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Languages'), ['controller' => 'Languages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Language'), ['controller' => 'Languages', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Geographical Areas'), ['controller' => 'GeographicalAreas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Geographical Area'), ['controller' => 'GeographicalAreas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies Areas'), ['controller' => 'CompaniesAreas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Companies Area'), ['controller' => 'CompaniesAreas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies Areas Opening Schedule'), ['controller' => 'CompaniesAreasOpeningSchedule', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Companies Areas Opening Schedule'), ['controller' => 'CompaniesAreasOpeningSchedule', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies Areas Overrides Schedule'), ['controller' => 'CompaniesAreasOverridesSchedule', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Companies Areas Overrides Schedule'), ['controller' => 'CompaniesAreasOverridesSchedule', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="companies view large-9 medium-8 columns content">
    <h3><?= h($company->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= $company->has('type') ? $this->Html->link($company->type->name, ['controller' => 'Types', 'action' => 'view', $company->type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= $company->has('country') ? $this->Html->link($company->country->name, ['controller' => 'Countries', 'action' => 'view', $company->country->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $company->has('status') ? $this->Html->link($company->status->name, ['controller' => 'Statuses', 'action' => 'view', $company->status->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Group') ?></th>
            <td><?= $company->has('group') ? $this->Html->link($company->group->name, ['controller' => 'Groups', 'action' => 'view', $company->group->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Parent Company') ?></th>
            <td><?= $company->has('parent_company') ? $this->Html->link($company->parent_company->name, ['controller' => 'Companies', 'action' => 'view', $company->parent_company->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Timezone') ?></th>
            <td><?= $company->has('timezone') ? $this->Html->link($company->timezone->name, ['controller' => 'Timezones', 'action' => 'view', $company->timezone->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Currency') ?></th>
            <td><?= $company->has('currency') ? $this->Html->link($company->currency->name, ['controller' => 'Currencies', 'action' => 'view', $company->currency->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Language') ?></th>
            <td><?= $company->has('language') ? $this->Html->link($company->language->name, ['controller' => 'Languages', 'action' => 'view', $company->language->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($company->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($company->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zip Code') ?></th>
            <td><?= h($company->zip_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($company->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($company->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($company->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Homepage') ?></th>
            <td><?= h($company->homepage) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sms Sender Name') ?></th>
            <td><?= h($company->sms_sender_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Geographical Area') ?></th>
            <td><?= $company->has('geographical_area') ? $this->Html->link($company->geographical_area->name, ['controller' => 'GeographicalAreas', 'action' => 'view', $company->geographical_area->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Accountid') ?></th>
            <td><?= h($company->accountid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Insideview') ?></th>
            <td><?= h($company->insideview) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Menulink') ?></th>
            <td><?= h($company->menulink) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($company->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Latitude') ?></th>
            <td><?= $this->Number->format($company->latitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Longitude') ?></th>
            <td><?= $this->Number->format($company->longitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Concurrent Users') ?></th>
            <td><?= $this->Number->format($company->concurrent_users) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cvr') ?></th>
            <td><?= $this->Number->format($company->cvr) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cvrp') ?></th>
            <td><?= $this->Number->format($company->cvrp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($company->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Politikenid') ?></th>
            <td><?= $this->Number->format($company->politikenid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Facebookid') ?></th>
            <td><?= $this->Number->format($company->facebookid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Invoice Startdate') ?></th>
            <td><?= h($company->invoice_startdate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($company->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($company->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('No Portal Show') ?></th>
            <td><?= $company->no_portal_show ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Shared Customers') ?></th>
            <td><?= $company->shared_customers ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Kitchen') ?></h4>
        <?= $this->Text->autoParagraph(h($company->kitchen)); ?>
    </div>
    <div class="row">
        <h4><?= __('Tags') ?></h4>
        <?= $this->Text->autoParagraph(h($company->tags)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Companies') ?></h4>
        <?php if (!empty($company->child_companies)): ?>
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
            <?php foreach ($company->child_companies as $childCompanies): ?>
            <tr>
                <td><?= h($childCompanies->id) ?></td>
                <td><?= h($childCompanies->type_id) ?></td>
                <td><?= h($childCompanies->country_id) ?></td>
                <td><?= h($childCompanies->status_id) ?></td>
                <td><?= h($childCompanies->group_id) ?></td>
                <td><?= h($childCompanies->parent_id) ?></td>
                <td><?= h($childCompanies->timezone_id) ?></td>
                <td><?= h($childCompanies->currency_id) ?></td>
                <td><?= h($childCompanies->language_id) ?></td>
                <td><?= h($childCompanies->name) ?></td>
                <td><?= h($childCompanies->address) ?></td>
                <td><?= h($childCompanies->zip_code) ?></td>
                <td><?= h($childCompanies->city) ?></td>
                <td><?= h($childCompanies->email) ?></td>
                <td><?= h($childCompanies->phone) ?></td>
                <td><?= h($childCompanies->latitude) ?></td>
                <td><?= h($childCompanies->longitude) ?></td>
                <td><?= h($childCompanies->homepage) ?></td>
                <td><?= h($childCompanies->no_portal_show) ?></td>
                <td><?= h($childCompanies->concurrent_users) ?></td>
                <td><?= h($childCompanies->sms_sender_name) ?></td>
                <td><?= h($childCompanies->shared_customers) ?></td>
                <td><?= h($childCompanies->cvr) ?></td>
                <td><?= h($childCompanies->cvrp) ?></td>
                <td><?= h($childCompanies->geographical_area_id) ?></td>
                <td><?= h($childCompanies->price) ?></td>
                <td><?= h($childCompanies->kitchen) ?></td>
                <td><?= h($childCompanies->tags) ?></td>
                <td><?= h($childCompanies->accountid) ?></td>
                <td><?= h($childCompanies->insideview) ?></td>
                <td><?= h($childCompanies->politikenid) ?></td>
                <td><?= h($childCompanies->invoice_startdate) ?></td>
                <td><?= h($childCompanies->facebookid) ?></td>
                <td><?= h($childCompanies->menulink) ?></td>
                <td><?= h($childCompanies->created) ?></td>
                <td><?= h($childCompanies->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Companies', 'action' => 'view', $childCompanies->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Companies', 'action' => 'edit', $childCompanies->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Companies', 'action' => 'delete', $childCompanies->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childCompanies->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Companies Areas') ?></h4>
        <?php if (!empty($company->companies_areas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Company Id') ?></th>
                <th scope="col"><?= __('Online Avail') ?></th>
                <th scope="col"><?= __('Priority') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($company->companies_areas as $companiesAreas): ?>
            <tr>
                <td><?= h($companiesAreas->id) ?></td>
                <td><?= h($companiesAreas->company_id) ?></td>
                <td><?= h($companiesAreas->online_avail) ?></td>
                <td><?= h($companiesAreas->priority) ?></td>
                <td><?= h($companiesAreas->status) ?></td>
                <td><?= h($companiesAreas->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CompaniesAreas', 'action' => 'view', $companiesAreas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CompaniesAreas', 'action' => 'edit', $companiesAreas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CompaniesAreas', 'action' => 'delete', $companiesAreas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $companiesAreas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Companies Areas Opening Schedule') ?></h4>
        <?php if (!empty($company->companies_areas_opening_schedule)): ?>
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
            <?php foreach ($company->companies_areas_opening_schedule as $companiesAreasOpeningSchedule): ?>
            <tr>
                <td><?= h($companiesAreasOpeningSchedule->id) ?></td>
                <td><?= h($companiesAreasOpeningSchedule->company_id) ?></td>
                <td><?= h($companiesAreasOpeningSchedule->companies_areas_id) ?></td>
                <td><?= h($companiesAreasOpeningSchedule->pt_start_date) ?></td>
                <td><?= h($companiesAreasOpeningSchedule->pt_day_of_week) ?></td>
                <td><?= h($companiesAreasOpeningSchedule->pt_opening_hour) ?></td>
                <td><?= h($companiesAreasOpeningSchedule->pt_closing_hour) ?></td>
                <td><?= h($companiesAreasOpeningSchedule->pt_max_bookings_total) ?></td>
                <td><?= h($companiesAreasOpeningSchedule->pt_max_pax_total) ?></td>
                <td><?= h($companiesAreasOpeningSchedule->pt_ts) ?></td>
                <td><?= h($companiesAreasOpeningSchedule->pt_opening_hour_index) ?></td>
                <td><?= h($companiesAreasOpeningSchedule->pt_closing_hour_index) ?></td>
                <td><?= h($companiesAreasOpeningSchedule->pt_def_book_len) ?></td>
                <td><?= h($companiesAreasOpeningSchedule->subspaces_masterplan_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CompaniesAreasOpeningSchedule', 'action' => 'view', $companiesAreasOpeningSchedule->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CompaniesAreasOpeningSchedule', 'action' => 'edit', $companiesAreasOpeningSchedule->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CompaniesAreasOpeningSchedule', 'action' => 'delete', $companiesAreasOpeningSchedule->id], ['confirm' => __('Are you sure you want to delete # {0}?', $companiesAreasOpeningSchedule->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Companies Areas Overrides Schedule') ?></h4>
        <?php if (!empty($company->companies_areas_overrides_schedule)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Area Config Id') ?></th>
                <th scope="col"><?= __('Company Id') ?></th>
                <th scope="col"><?= __('O Start Date') ?></th>
                <th scope="col"><?= __('O Opening Hour') ?></th>
                <th scope="col"><?= __('O Closing Hour') ?></th>
                <th scope="col"><?= __('O Max Bookings Total') ?></th>
                <th scope="col"><?= __('O Max Pax Total') ?></th>
                <th scope="col"><?= __('O Ts') ?></th>
                <th scope="col"><?= __('O Opening Hour Index') ?></th>
                <th scope="col"><?= __('O Closing Hour Index') ?></th>
                <th scope="col"><?= __('O Def Book Len') ?></th>
                <th scope="col"><?= __('O Master Id') ?></th>
                <th scope="col"><?= __('O Stop Date') ?></th>
                <th scope="col"><?= __('Resource Type') ?></th>
                <th scope="col"><?= __('Resource Id') ?></th>
                <th scope="col"><?= __('Group Days') ?></th>
                <th scope="col"><?= __('Group Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($company->companies_areas_overrides_schedule as $companiesAreasOverridesSchedule): ?>
            <tr>
                <td><?= h($companiesAreasOverridesSchedule->id) ?></td>
                <td><?= h($companiesAreasOverridesSchedule->area_config_id) ?></td>
                <td><?= h($companiesAreasOverridesSchedule->company_id) ?></td>
                <td><?= h($companiesAreasOverridesSchedule->o_start_date) ?></td>
                <td><?= h($companiesAreasOverridesSchedule->o_opening_hour) ?></td>
                <td><?= h($companiesAreasOverridesSchedule->o_closing_hour) ?></td>
                <td><?= h($companiesAreasOverridesSchedule->o_max_bookings_total) ?></td>
                <td><?= h($companiesAreasOverridesSchedule->o_max_pax_total) ?></td>
                <td><?= h($companiesAreasOverridesSchedule->o_ts) ?></td>
                <td><?= h($companiesAreasOverridesSchedule->o_opening_hour_index) ?></td>
                <td><?= h($companiesAreasOverridesSchedule->o_closing_hour_index) ?></td>
                <td><?= h($companiesAreasOverridesSchedule->o_def_book_len) ?></td>
                <td><?= h($companiesAreasOverridesSchedule->o_master_id) ?></td>
                <td><?= h($companiesAreasOverridesSchedule->o_stop_date) ?></td>
                <td><?= h($companiesAreasOverridesSchedule->resource_type) ?></td>
                <td><?= h($companiesAreasOverridesSchedule->resource_id) ?></td>
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
