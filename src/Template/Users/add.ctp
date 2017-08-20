<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List User Permissions'), ['controller' => 'UserPermissions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Permission'), ['controller' => 'UserPermissions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content container">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('country_id', ['labelOptions' => false, 'class' => 'novisible']);
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            echo $this->Form->control('first_name');
            echo $this->Form->control('last_name');
            echo $this->Form->control('address');
            echo $this->Form->control('zip_code');
            echo $this->Form->control('city');
            echo $this->Form->control('company');
            echo $this->Form->control('phone');
            echo $this->Form->control('birthday', ['empty' => true]);
            echo $this->Form->control('initials');
            echo $this->Form->control('deleted_at');
            echo $this->Form->control('facebook_id');
            echo $this->Form->control('gender');
            echo $this->Form->control('changed_password', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
