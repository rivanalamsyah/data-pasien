<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PasienFixture
 */
class PasienFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'pasien';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'No_RM' => 1,
                'Nama' => 'Lorem ipsum dolor sit amet',
                'Tempat_Lahir' => 'Lorem ipsum dolor sit amet',
                'Tgl_Lahir' => '2023-06-07',
                'Alamat' => 'Lorem ipsum dolor sit amet',
                'Gol_Darah' => 'Lor',
            ],
        ];
        parent::init();
    }
}
