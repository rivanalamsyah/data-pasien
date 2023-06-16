<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PasienTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PasienTable Test Case
 */
class PasienTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PasienTable
     */
    protected $Pasien;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Pasien',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Pasien') ? [] : ['className' => PasienTable::class];
        $this->Pasien = $this->getTableLocator()->get('Pasien', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Pasien);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PasienTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
