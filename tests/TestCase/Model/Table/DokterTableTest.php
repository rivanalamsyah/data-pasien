<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DokterTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DokterTable Test Case
 */
class DokterTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DokterTable
     */
    protected $Dokter;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Dokter',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Dokter') ? [] : ['className' => DokterTable::class];
        $this->Dokter = $this->getTableLocator()->get('Dokter', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Dokter);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DokterTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
