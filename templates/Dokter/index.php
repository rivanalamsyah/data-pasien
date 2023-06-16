<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Dokter> $dokter
 */
?>
<div class="dokter index content">
    <?= $this->Html->link(__('New Dokter'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Dokter') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('NIK') ?></th>
                    <th><?= $this->Paginator->sort('Nama') ?></th>
                    <th><?= $this->Paginator->sort('SIP') ?></th>
                    <th><?= $this->Paginator->sort('STR') ?></th>
                    <th><?= $this->Paginator->sort('Spesialis') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dokter as $dokter): ?>
                <tr>
                    <td><?= $this->Number->format($dokter->NIK) ?></td>
                    <td><?= h($dokter->Nama) ?></td>
                    <td><?= h($dokter->SIP) ?></td>
                    <td><?= h($dokter->STR) ?></td>
                    <td><?= h($dokter->Spesialis) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $dokter->NIK]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dokter->NIK]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dokter->NIK], ['confirm' => __('Are you sure you want to delete # {0}?', $dokter->NIK)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
