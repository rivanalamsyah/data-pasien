<?php echo $form->create('Pasien');?>
<fieldset>
    <legend>Tambah Agenda</legend>
    <?php
    echo $form->input('nama');
    echo $form->input('tanggal');
    echo $form->input('prioritas');
    echo $form->input('diselesaikan');
    ?>
    </fieldset>
    <?php echo $form->end('Tambah Agenda');?>
    <?php echo $html->link('Daftar semua agenda', array('action'=>'index')); ?>