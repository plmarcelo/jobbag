<?php

namespace Tests\JobBag\Application\UseCase\Project;

use JobBag\Application\UseCase\Project\SearchNewProjectRequest;

/**
 * @group SearchNewProjectRequest
 * @group JobBag\Application\UseCase\Project\SearchNewProjectRequest
 */
class SearchNewProjectRequestTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var int
     */
    private $expectedLocationId;

    /**
     * @var int
     */
    private $expectedProfessionId;

    /**
     * @var string|\DateTimeInterface
     */
    private $expectedSince;

    /**
     * @var int
     */
    private $expectedLimit;

    /**
     * @var SearchNewProjectRequest
     */
    private $request;

    protected function setUp()
    {
        $this->expectedLocationId = 1;
        $this->expectedProfessionId = 2;
        $this->expectedSince = new \DateTime();
        $this->expectedLimit = 10;
        $this->request = new SearchNewProjectRequest($this->expectedLocationId, $this->expectedProfessionId, $this->expectedSince, $this->expectedLimit);
    }

    public function testNewProjectRequestIsCreated(): void
    {
        $this->assertEquals($this->expectedLocationId, $this->request->getLocationId());
        $this->assertEquals($this->expectedProfessionId, $this->request->getProfessionId());
        $this->assertEquals($this->expectedSince, $this->request->getSince());
        $this->assertEquals($this->expectedLimit, $this->request->getLimit());
    }

    /**
     * @dataProvider wrongSinceValueProvider
     * @expectedException \JobBag\Domain\Exception\InvalidArgumentException
     * @param mixed $wrongValue
     */
    public function testSinceValueOnlyAcceptDateTimeAndString($wrongValue): void
    {
        $this->request->setSince($wrongValue);
    }

    /**
     * @throws \JobBag\Domain\Exception\InvalidArgumentException
     */
    public function testSinceAcceptNullValue(): void
    {
        $request = $this->request->setSince(null);

        $this->assertNull($request->getSince());
    }

    /**
     * @dataProvider validSinceValueProvider
     * @param string $validValue
     * @throws \JobBag\Domain\Exception\InvalidArgumentException
     */
    public function testSinceAcceptValidStringValues($validValue): void
    {
        $request = $this->request->setSince($validValue);

        $this->assertEquals(new \DateTime($validValue), $request->getSince());
    }

    /**
     * @return array
     */
    public function wrongSinceValueProvider(): array
    {
        return [
            [1],
            [[]],
            [new \stdClass()],
            ['wrongDateValue']
        ];
    }

    /**
     * @return array
     */
    public function validSinceValueProvider(): array
    {
        return [
            ['2018-12-10'],
            ['2018-12-10 10:00:59']
        ];
    }
}
