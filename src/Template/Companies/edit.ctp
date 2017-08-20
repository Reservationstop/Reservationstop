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
                ['action' => 'delete', $company->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $company->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Languages'), ['controller' => 'Languages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Language'), ['controller' => 'Languages', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="companies form large-9 medium-8 columns content">
    <?= $this->Form->create($company) ?>
    <fieldset>
        <legend><?= __('Edit Company') ?></legend>
        <?php
            echo $this->Form->control('type_id');
            echo $this->Form->control('country_id', ['options' => $countries]);
            echo $this->Form->control('status_id');
            echo $this->Form->control('timezone_id');
            echo $this->Form->control('currency_id');
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
            echo $this->Form->control('area_id');
            echo $this->Form->control('areas');
            echo $this->Form->control('price');
            echo $this->Form->control('kitchen');
            echo $this->Form->control('tags');
            echo $this->Form->control('accountid');
            echo $this->Form->control('app_type');
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
