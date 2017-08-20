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
                ['action' => 'delete', $openingSchedule->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $openingSchedule->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Opening Schedule'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies Areas'), ['controller' => 'CompaniesAreas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Companies Area'), ['controller' => 'CompaniesAreas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="openingSchedule form large-9 medium-8 columns content">
    <?= $this->Form->create($openingSchedule) ?>
    <fieldset>
        <legend><?= __('Edit Opening Schedule') ?></legend>
        <?php
            echo $this->Form->control('company_id', ['options' => $companies]);
            echo $this->Form->control('companies_areas_id', ['options' => $companiesAreas]);
            echo $this->Form->control('pt_start_date');
            echo $this->Form->control('pt_day_of_week');
            echo $this->Form->control('pt_opening_hour');
            echo $this->Form->control('pt_closing_hour');
            echo $this->Form->control('pt_max_bookings_total');
            echo $this->Form->control('pt_max_pax_total');
            echo $this->Form->control('pt_ts');
            echo $this->Form->control('pt_opening_hour_index');
            echo $this->Form->control('pt_closing_hour_index');
            echo $this->Form->control('pt_def_book_len');
            echo $this->Form->control('subspaces_masterplan_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
