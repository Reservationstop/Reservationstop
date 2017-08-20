<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Subspaces Masterplan'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Opening Schedule'), ['controller' => 'OpeningSchedule', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Opening Schedule'), ['controller' => 'OpeningSchedule', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="subspacesMasterplan form large-9 medium-8 columns content">
    <?= $this->Form->create($subspacesMasterplan) ?>
    <fieldset>
        <legend><?= __('Add Subspaces Masterplan') ?></legend>
        <?php
            echo $this->Form->control('top');
            echo $this->Form->control('left_');
            echo $this->Form->control('priority');
            echo $this->Form->control('type');
            echo $this->Form->control('group_nr');
            echo $this->Form->control('table_nr');
            echo $this->Form->control('min_be_allow');
            echo $this->Form->control('angle');
            echo $this->Form->control('capacity');
            echo $this->Form->control('index_');
            echo $this->Form->control('timestamp');
            echo $this->Form->control('companies_id', ['options' => $companies, 'empty' => true]);
            echo $this->Form->control('availableint');
            echo $this->Form->control('availableex');
            echo $this->Form->control('table_book_length');
            echo $this->Form->control('group_priority');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
