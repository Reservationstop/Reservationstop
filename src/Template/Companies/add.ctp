<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statuses'), ['controller' => 'Statuses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Status'), ['controller' => 'Statuses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Parent Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Parent Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
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
<div class="companies form large-9 medium-8 columns content">
    <?= $this->Form->create($company) ?>
    <fieldset>
        <legend><?= __('Add Company') ?></legend>
        <?php
            echo $this->Form->control('type_id', ['options' => $types]);
            echo $this->Form->control('country_id', ['options' => $countries]);
            echo $this->Form->control('status_id', ['options' => $statuses]);
            echo $this->Form->control('group_id', ['options' => $groups, 'empty' => true]);
            echo $this->Form->control('parent_id', ['options' => $parentCompanies, 'empty' => true]);
            echo $this->Form->control('timezone_id', ['options' => $timezones]);
            echo $this->Form->control('currency_id', ['options' => $currencies]);
            echo $this->Form->control('language_id', ['options' => $languages]);
            echo $this->Form->control('name');
            echo $this->Form->control('address');
            echo $this->Form->control('zip_code');
            echo $this->Form->control('city');
            echo $this->Form->control('email');
            echo $this->Form->control('phone');
            echo $this->Form->control('latitude');
            echo $this->Form->control('longitude');
            echo $this->Form->control('homepage');
            echo $this->Form->control('no_portal_show');
            echo $this->Form->control('concurrent_users');
            echo $this->Form->control('sms_sender_name');
            echo $this->Form->control('shared_customers');
            echo $this->Form->control('cvr');
            echo $this->Form->control('cvrp');
            echo $this->Form->control('geographical_area_id', ['options' => $geographicalAreas, 'empty' => true]);
            echo $this->Form->control('price');
            echo $this->Form->control('kitchen');
            echo $this->Form->control('tags');
            echo $this->Form->control('accountid');
            echo $this->Form->control('insideview');
            echo $this->Form->control('politikenid');
            echo $this->Form->control('invoice_startdate', ['empty' => true]);
            echo $this->Form->control('facebookid');
            echo $this->Form->control('menulink');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
