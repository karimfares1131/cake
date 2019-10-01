<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VisiteTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VisiteTable Test Case
 */
class VisiteTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\VisiteTable
     */
    public $Visite;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Visite'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Visite') ? [] : ['className' => VisiteTable::class];
        $this->Visite = TableRegistry::getTableLocator()->get('Visite', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Visite);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
