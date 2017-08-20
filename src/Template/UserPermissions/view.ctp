<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\UserPermission $userPermission
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User Permission'), ['action' => 'edit', $userPermission->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Permission'), ['action' => 'delete', $userPermission->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userPermission->id)]) ?> </li>
        <li><?= $this->Html->link(__('List User Permissions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Permission'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="userPermissions view large-9 medium-8 columns content">
    <h3><?= h($userPermission->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $userPermission->has('user') ? $this->Html->link($userPermission->user->id, ['controller' => 'Users', 'action' => 'view', $userPermission->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($userPermission->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role Id') ?></th>
            <td><?= $this->Number->format($userPermission->role_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Restaurant Id') ?></th>
            <td><?= $this->Number->format($userPermission->restaurant_id) ?></td>
        </tr>
    </table>
</div>
