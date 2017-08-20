<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Countries'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="countries form large-9 medium-8 columns content">
    <?= $this->Form->create($country) ?>
    <fieldset>
        <legend><?= __('Add Country') ?></legend>
        <?php
            echo $this->Form->control('currency_id');
            echo $this->Form->control('name');
            echo $this->Form->control('code');
            echo $this->Form->control('phone');
            echo $this->Form->control('main');
            echo $this->Form->control('phone_length');
            echo $this->Form->control('phone_length_max');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
