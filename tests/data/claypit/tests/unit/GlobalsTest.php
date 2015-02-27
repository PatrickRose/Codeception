<?php
use Codeception\Util\Stub;

class GlobalsTest extends \Codeception\TestCase\Test
{
   /**
    * @var \CodeGuy
    */
    protected $codeGuy;


	/**
	 * @group error
	 */
    public function testFirstUseOfGlobal()
    {
		global $testItem;
		$testItem = 1;

		$this->assertEquals(1, $testItem);
    }


	/**
	 * @group error
	 */
	public function testSecondUseOfGlobal()
	{
		global $testItem;

		$this->assertEquals(1, $testItem);
	}

}