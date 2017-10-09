<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $companiesAreasOpeningSchedule->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $companiesAreasOpeningSchedule->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Companies Areas Opening Schedule'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies Areas'), ['controller' => 'CompaniesAreas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Companies Area'), ['controller' => 'CompaniesAreas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies Areas Masterplans'), ['controller' => 'CompaniesAreasMasterplans', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Companies Areas Masterplan'), ['controller' => 'CompaniesAreasMasterplans', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="companiesAreasOpeningSchedule form large-9 medium-8 columns content">
    <?= $this->Form->create($companiesAreasOpeningSchedule) ?>
    <fieldset>
        <legend><?= __('Edit Companies Areas Opening Schedule') ?></legend>
        <?php
            echo $this->Form->control('company_id', ['options' => $companies]);
            echo $this->Form->control('companies_areas_id', ['options' => $companiesAreas]);
            echo $this->Form->control('start_date');
            echo $this->Form->control('day_of_week');
            echo $this->Form->control('opening_hour');
            echo $this->Form->control('closing_hour');
            echo $this->Form->control('max_bookings_total');
            echo $this->Form->control('max_pax_total');
            echo $this->Form->control('ts');
            echo $this->Form->control('opening_hour_index');
            echo $this->Form->control('closing_hour_index');
            echo $this->Form->control('def_book_len');
            echo $this->Form->control('companies_areas_masterplans_id', ['options' => $companiesAreasMasterplans]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>