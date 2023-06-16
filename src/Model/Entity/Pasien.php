<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pasien Entity
 *
 * @property int $No_RM
 * @property string $Nama
 * @property string $Tempat_Lahir
 * @property \Cake\I18n\FrozenDate $Tgl_Lahir
 * @property string $Alamat
 * @property string $Gol_Darah
 */
class Pasien extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'Nama' => true,
        'Tempat_Lahir' => true,
        'Tgl_Lahir' => true,
        'Alamat' => true,
        'Gol_Darah' => true,
    ];
}
