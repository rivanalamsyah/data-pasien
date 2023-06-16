<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DokterFixture
 */
class DokterFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'dokter';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'NIK' => 1,
                'Nama' => 'Lorem ipsum dolor sit amet',
                'SIP' => 'Lorem ipsum dolor sit amet',
                'STR' => 'Lorem ipsum dolor sit amet',
                'Spesialis' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
