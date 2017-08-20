<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\User $user
  */

?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Permissions'), ['controller' => 'UserPermissions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Permission'), ['controller' => 'UserPermissions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($user->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($user->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($user->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zip Code') ?></th>
            <td><?= h($user->zip_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($user->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company') ?></th>
            <td><?= h($user->company) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($user->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Initials') ?></th>
            <td><?= h($user->initials) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gender') ?></th>
            <td><?= h($user->gender) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country Id') ?></th>
            <td><?= $this->Number->format($user->country_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Language Id') ?></th>
            <td><?= $this->Number->format($user->language_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Facebook Id') ?></th>
            <td><?= $this->Number->format($user->facebook_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birthday') ?></th>
            <td><?= h($user->birthday) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Changed Password') ?></th>
            <td><?= h($user->changed_password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted At') ?></th>
            <td><?= $user->deleted_at ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related User Permissions') ?></h4>
        <?php if (!empty($user->user_permissions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Role Id') ?></th>
                <th scope="col"><?= __('Restaurant Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->user_permissions as $userPermissions): ?>
            <tr>
                <td><?= h($userPermissions->id) ?></td>
                <td><?= h($userPermissions->user_id) ?></td>
                <td><?= h($userPermissions->role_id) ?></td>
                <td><?= h($userPermissions->restaurant_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'UserPermissions', 'action' => 'view', $userPermissions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'UserPermissions', 'action' => 'edit', $userPermissions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserPermissions', 'action' => 'delete', $userPermissions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userPermissions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
