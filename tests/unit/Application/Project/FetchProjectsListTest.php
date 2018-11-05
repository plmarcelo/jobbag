<?php

namespace Tests\JobBag\Application\Project;

use Doctrine\Common\Collections\ArrayCollection;
use JobBag\Application\Project\FetchProjectsList;
use JobBag\Domain\Entity\Project;
use JobBag\Domain\Repository\ProjectRepository;
use PHPUnit\Framework\MockObject\MockObject;

/**
 * @group FetchProjectsList
 * @group JobBag\Application\Project\FetchProjectsList
 */
class FetchProjectsListTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Project
     */
    private $projectMock;

    /**
     * @var ProjectRepository|MockObject
     */
    private $projectRepositoryMock;

    /**
     * @var FetchProjectsList
     */
    private $fetcher;

    protected function setUp()
    {
        $this->projectMock = $this->getMockBuilder(Project::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->projectRepositoryMock = $this->getMockBuilder(ProjectRepository::class)
            ->getMock();

        $this->fetcher = new FetchProjectsList($this->projectRepositoryMock);
    }

    /**
     * @covers  \JobBag\Application\Project\FetchProjectsList::fetchLatest
     */
    public function testFetchLatest(): void
    {
        $expectedCollection = new ArrayCollection([
            $this->projectMock,
            $this->projectMock,
            $this->projectMock
        ]);

        $this->projectRepositoryMock->expects($this->once())
            ->method('findLatest')
            ->willReturn($expectedCollection);

        $foundProjects = $this->fetcher->fetchLatest('2018-01-01');

        $this->assertEquals($expectedCollection, $foundProjects);
    }
}
