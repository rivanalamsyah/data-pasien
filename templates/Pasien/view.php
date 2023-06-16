<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pasien $pasien
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Pasien'), ['action' => 'edit', $pasien->No_RM], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Pasien'), ['action' => 'delete', $pasien->No_RM], ['confirm' => __('Are you sure you want to delete # {0}?', $pasien->No_RM), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pasien'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Pasien'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pasien view content">
            <h3><?= h($pasien->No_RM) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nama') ?></th>
                    <td><?= h($pasien->Nama) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tempat Lahir') ?></th>
                    <td><?= h($pasien->Tempat_Lahir) ?></td>
                </tr>
                <tr>
                    <th><?= __('Alamat') ?></th>
                    <td><?= h($pasien->Alamat) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gol Darah') ?></th>
                    <td><?= h($pasien->Gol_Darah) ?></td>
                </tr>
                <tr>
                    <th><?= __('No RM') ?></th>
                    <td><?= $this->Number->format($pasien->No_RM) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tgl Lahir') ?></th>
                    <td><?= h($pasien->Tgl_Lahir) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
