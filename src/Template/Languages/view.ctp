<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Language $language
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Language'), ['action' => 'edit', $language->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Language'), ['action' => 'delete', $language->id], ['confirm' => __('Are you sure you want to delete # {0}?', $language->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Languages'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Language'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="languages view large-9 medium-8 columns content">
    <h3><?= h($language->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($language->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ccode') ?></th>
            <td><?= h($language->ccode) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Iso') ?></th>
            <td><?= h($language->iso) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Locale Win') ?></th>
            <td><?= h($language->locale_win) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($language->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alternative Language Id') ?></th>
            <td><?= $this->Number->format($language->alternative_language_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Default Active') ?></th>
            <td><?= $language->default_active ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $language->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($language->users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Country Id') ?></th>
                <th scope="col"><?= __('Language Id') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('First Name') ?></th>
                <th scope="col"><?= __('Last Name') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('Zip Code') ?></th>
                <th scope="col"><?= __('City') ?></th>
                <th scope="col"><?= __('Company') ?></th>
                <th scope="col"><?= __('Phone') ?></th>
                <th scope="col"><?= __('Birthday') ?></th>
                <th scope="col"><?= __('Initials') ?></th>
                <th scope="col"><?= __('Deleted At') ?></th>
                <th scope="col"><?= __('Facebook Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Gender') ?></th>
                <th scope="col"><?= __('Changed Password') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($language->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->country_id) ?></td>
                <td><?= h($users->language_id) ?></td>
                <td><?= h($users->email) ?></td>
                <td><?= h($users->password) ?></td>
                <td><?= h($users->first_name) ?></td>
                <td><?= h($users->last_name) ?></td>
                <td><?= h($users->address) ?></td>
                <td><?= h($users->zip_code) ?></td>
                <td><?= h($users->city) ?></td>
                <td><?= h($users->company) ?></td>
                <td><?= h($users->phone) ?></td>
                <td><?= h($users->birthday) ?></td>
                <td><?= h($users->initials) ?></td>
                <td><?= h($users->deleted_at) ?></td>
                <td><?= h($users->facebook_id) ?></td>
                <td><?= h($users->created) ?></td>
                <td><?= h($users->modified) ?></td>
                <td><?= h($users->gender) ?></td>
                <td><?= h($users->changed_password) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
