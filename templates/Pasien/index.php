<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Pasien> $pasien
 */
?>
<div class="pasien index content">
    <?= $this->Html->link(__('New Pasien'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Pasien') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('No_RM') ?></th>
                    <th><?= $this->Paginator->sort('Nama') ?></th>
                    <th><?= $this->Paginator->sort('Tempat_Lahir') ?></th>
                    <th><?= $this->Paginator->sort('Tgl_Lahir') ?></th>
                    <th><?= $this->Paginator->sort('Alamat') ?></th>
                    <th><?= $this->Paginator->sort('Gol_Darah') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pasien as $pasien): ?>
                <tr>
                    <td><?= $this->Number->format($pasien->No_RM) ?></td>
                    <td><?= h($pasien->Nama) ?></td>
                    <td><?= h($pasien->Tempat_Lahir) ?></td>
                    <td><?= h($pasien->Tgl_Lahir) ?></td>
                    <td><?= h($pasien->Alamat) ?></td>
                    <td><?= h($pasien->Gol_Darah) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $pasien->No_RM]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pasien->No_RM]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pasien->No_RM], ['confirm' => __('Are you sure you want to delete # {0}?', $pasien->No_RM)]) ?>
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
