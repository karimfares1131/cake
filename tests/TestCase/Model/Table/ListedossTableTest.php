<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ListedossTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ListedossTable Test Case
 */
class ListedossTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ListedossTable
     */
    public $Listedoss;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Listedoss'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Listedoss') ? [] : ['className' => ListedossTable::class];
        $this->Listedoss = TableRegistry::getTableLocator()->get('Listedoss', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Listedoss);

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
