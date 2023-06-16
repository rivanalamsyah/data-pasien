<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dokter $dokter
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Dokter'), ['action' => 'edit', $dokter->NIK], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Dokter'), ['action' => 'delete', $dokter->NIK], ['confirm' => __('Are you sure you want to delete # {0}?', $dokter->NIK), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Dokter'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Dokter'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="dokter view content">
            <h3><?= h($dokter->NIK) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nama') ?></th>
                    <td><?= h($dokter->Nama) ?></td>
                </tr>
                <tr>
                    <th><?= __('SIP') ?></th>
                    <td><?= h($dokter->SIP) ?></td>
                </tr>
                <tr>
                    <th><?= __('STR') ?></th>
                    <td><?= h($dokter->STR) ?></td>
                </tr>
                <tr>
                    <th><?= __('Spesialis') ?></th>
                    <td><?= h($dokter->Spesialis) ?></td>
                </tr>
                <tr>
                    <th><?= __('NIK') ?></th>
                    <td><?= $this->Number->format($dokter->NIK) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
