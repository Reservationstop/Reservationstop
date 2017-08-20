<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Role $role
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Role'), ['action' => 'edit', $role->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Role'), ['action' => 'delete', $role->id], ['confirm' => __('Are you sure you want to delete # {0}?', $role->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Roles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Permissions'), ['controller' => 'UserPermissions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Permission'), ['controller' => 'UserPermissions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="roles view large-9 medium-8 columns content">
    <h3><?= h($role->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($role->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($role->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Priority') ?></th>
            <td><?= $this->Number->format($role->priority) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Restaurant Role') ?></th>
            <td><?= $role->restaurant_role ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related User Permissions') ?></h4>
        <?php if (!empty($role->user_permissions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Role Id') ?></th>
                <th scope="col"><?= __('Restaurant Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($role->user_permissions as $userPermissions): ?>
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
