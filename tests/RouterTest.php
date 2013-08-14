<?php

use Mockery as m;

class RouterTest extends PHPUnit_Framework_TestCase {
	
	public function tearDown()
	{
		m::close();
	}

	public function testMock()
	{
		$stdclass = m::mock('stdclass');
		var_dump($stdclass);
	}
}