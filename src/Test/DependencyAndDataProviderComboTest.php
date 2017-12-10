<?php
use PHPUnit\Framework\TestCase;

class DependencyAndDataProviderComboTest extends TestCase
{
    protected function setUp()
    {
        echo 'set up';
    }

    protected function tearDown()
    {
        echo 'tear down';
    }

    public function provider()
    {
        return [
            ['provider1'],
            ['provider1'],
            ['provider1'],
            ['provider1']
        ];
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionCode 401
     */
    public function testException()
    {
        throw new \Exception('adfs', 401);
    }

    public function testProducerFirst()
    {
        $this->assertTrue(true);
        return 'first';
    }

    public function testProducerSecond()
    {
        $this->assertTrue(true);
        return 'second';
    }

    /**
     * @depends testProducerFirst
     * @depends testProducerSecond
     * @dataProvider provider
     */
    public function testConsumer()
    {
        $this->assertEquals(
            ['provider1', 'first', 'second'],
            func_get_args()
        );
    }

//    public function testExpectFooActualFoo()
//    {
//        $this->expectOutputString('foo');
//        print 'foo';
//    }

//    public function testExpectBarActualBaz()
//    {
//        $this->expectOutputString('bar');
//        print 'baz';
//    }
}