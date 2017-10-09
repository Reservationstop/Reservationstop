<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Companies Areas Overrides Schedule'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Companies Areas'), ['controller' => 'CompaniesAreas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Companies Area'), ['controller' => 'CompaniesAreas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies Areas Masterplans'), ['controller' => 'CompaniesAreasMasterplans', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Companies Areas Masterplan'), ['controller' => 'CompaniesAreasMasterplans', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="companiesAreasOverridesSchedule form large-9 medium-8 columns content">
    <?= $this->Form->create($companiesAreasOverridesSchedule) ?>
    <fieldset>
        <legend><?= __('Add Companies Areas Overrides Schedule') ?></legend>
        <?php
            echo $this->Form->control('companies_areas_id', ['options' => $companiesAreas]);
            echo $this->Form->control('company_id', ['options' => $companies]);
            echo $this->Form->control('start_date');
            echo $this->Form->control('opening_hour');
            echo $this->Form->control('closing_hour');
            echo $this->Form->control('max_bookings_total');
            echo $this->Form->control('max_pax_total');
            echo $this->Form->control('ts');
            echo $this->Form->control('opening_hour_index');
            echo $this->Form->control('closing_hour_index');
            echo $this->Form->control('def_book_len');
            echo $this->Form->control('companies_areas_masterplans_id', ['options' => $companiesAreasMasterplans]);
            echo $this->Form->control('stop_date');
            echo $this->Form->control('resource_type');
            echo $this->Form->control('group_days');
            echo $this->Form->control('group_id', ['options' => $groups, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
