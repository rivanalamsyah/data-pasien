<h2>Agenda</h2>
<?php if(empty($items)): ?>
    Tidak ada agenda dalam daftar
    <?php else: ?>
        <table>
            <tr>
                <th>Nama</th>
                <th>Tanggal</th>
                <th>Prioritas</th>
                <th>Diselesaikan</th>
                <th>Aksi</th>
            </tr>
            <?php foreach ($items as $item): ?>
                <tr>
                    <td>
                        <?php echo $item['Item']['nama'] ?>
                    </td>
                    <td>
                    <?php echo $time->niceShort($item['Item']['tanggal']) ?>
                    </td>
                    <td>
                        <?php echo $item['Item']['prioritas'] ?>
                    </td>
                    <td>
                        <?php echo $item['Item']['diselesaikan'] ?>
                    </td>
                    <td>
                  
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
            <?php echo $html->link('Tambah Agenda', array('action'=>'add')); ?>