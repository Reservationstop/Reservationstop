<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Area $area
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Area'), ['action' => 'edit', $area->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Area'), ['action' => 'delete', $area->id], ['confirm' => __('Are you sure you want to delete # {0}?', $area->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Areas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Area'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="areas view large-9 medium-8 columns content">
    <h3><?= h($area->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($area->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= h($area->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= $area->has('country') ? $this->Html->link($area->country->name, ['controller' => 'Countries', 'action' => 'view', $area->country->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($area->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lft') ?></th>
            <td><?= $this->Number->format($area->lft) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Parent') ?></th>
            <td><?= $this->Number->format($area->parent) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rght') ?></th>
            <td><?= $this->Number->format($area->rght) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Latitude') ?></th>
            <td><?= $this->Number->format($area->latitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Longitude') ?></th>
            <td><?= $this->Number->format($area->longitude) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Keywords') ?></h4>
        <?= $this->Text->autoParagraph(h($area->keywords)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Companies') ?></h4>
        <?php if (!empty($area->companies)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Type Id') ?></th>
                <th scope="col"><?= __('Country Id') ?></th>
                <th scope="col"><?= __('Status Id') ?></th>
                <th scope="col"><?= __('Group Id') ?></th>
                <th scope="col"><?= __('Parent Id') ?></th>
                <th scope="col"><?= __('Timezone Id') ?></th>
                <th scope="col"><?= __('Currency Id') ?></th>
                <th scope="col"><?= __('Language Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('Zip Code') ?></th>
                <th scope="col"><?= __('City') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Phone') ?></th>
                <th scope="col"><?= __('Latitude') ?></th>
                <th scope="col"><?= __('Longitude') ?></th>
                <th scope="col"><?= __('Homepage') ?></th>
                <th scope="col"><?= __('No Portal Show') ?></th>
                <th scope="col"><?= __('Concurrent Users') ?></th>
                <th scope="col"><?= __('Sms Sender Name') ?></th>
                <th scope="col"><?= __('Shared Customers') ?></th>
                <th scope="col"><?= __('Cvr') ?></th>
                <th scope="col"><?= __('Cvrp') ?></th>
                <th scope="col"><?= __('Area Id') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Kitchen') ?></th>
                <th scope="col"><?= __('Tags') ?></th>
                <th scope="col"><?= __('Accountid') ?></th>
                <th scope="col"><?= __('Insideview') ?></th>
                <th scope="col"><?= __('Politikenid') ?></th>
                <th scope="col"><?= __('Invoice Startdate') ?></th>
                <th scope="col"><?= __('Facebookid') ?></th>
                <th scope="col"><?= __('Menulink') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Companies Area Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($area->companies as $companies): ?>
            <tr>
                <td><?= h($companies->id) ?></td>
                <td><?= h($companies->type_id) ?></td>
                <td><?= h($companies->country_id) ?></td>
                <td><?= h($companies->status_id) ?></td>
                <td><?= h($companies->group_id) ?></td>
                <td><?= h($companies->parent_id) ?></td>
                <td><?= h($companies->timezone_id) ?></td>
                <td><?= h($companies->currency_id) ?></td>
                <td><?= h($companies->language_id) ?></td>
                <td><?= h($companies->name) ?></td>
                <td><?= h($companies->address) ?></td>
                <td><?= h($companies->zip_code) ?></td>
                <td><?= h($companies->city) ?></td>
                <td><?= h($companies->email) ?></td>
                <td><?= h($companies->phone) ?></td>
                <td><?= h($companies->latitude) ?></td>
                <td><?= h($companies->longitude) ?></td>
                <td><?= h($companies->homepage) ?></td>
                <td><?= h($companies->no_portal_show) ?></td>
                <td><?= h($companies->concurrent_users) ?></td>
                <td><?= h($companies->sms_sender_name) ?></td>
                <td><?= h($companies->shared_customers) ?></td>
                <td><?= h($companies->cvr) ?></td>
                <td><?= h($companies->cvrp) ?></td>
                <td><?= h($companies->area_id) ?></td>
                <td><?= h($companies->price) ?></td>
                <td><?= h($companies->kitchen) ?></td>
                <td><?= h($companies->tags) ?></td>
                <td><?= h($companies->accountid) ?></td>
                <td><?= h($companies->insideview) ?></td>
                <td><?= h($companies->politikenid) ?></td>
                <td><?= h($companies->invoice_startdate) ?></td>
                <td><?= h($companies->facebookid) ?></td>
                <td><?= h($companies->menulink) ?></td>
                <td><?= h($companies->created) ?></td>
                <td><?= h($companies->modified) ?></td>
                <td><?= h($companies->companies_area_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Companies', 'action' => 'view', $companies->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Companies', 'action' => 'edit', $companies->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Companies', 'action' => 'delete', $companies->id], ['confirm' => __('Are you sure you want to delete # {0}?', $companies->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
