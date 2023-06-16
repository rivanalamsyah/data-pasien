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
            <?= $this->Html->link(__('List Dokter'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="dokter form content">
            <?= $this->Form->create($dokter) ?>
            <fieldset>
                <legend><?= __('Add Dokter') ?></legend>
                <?php
                    echo $this->Form->control('Nama');
                    echo $this->Form->control('SIP');
                    echo $this->Form->control('STR');
                    echo $this->Form->control('Spesialis');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
