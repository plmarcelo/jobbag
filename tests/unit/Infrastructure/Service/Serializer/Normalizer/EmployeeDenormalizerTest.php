<?php

namespace Tests\JobBag\Infrastructure\Service\Serializer\Normalizer;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\ORM\EntityManagerInterface;
use JobBag\Domain\Entity\Employee;
use JobBag\Domain\Entity\Scholarship;
use JobBag\Infrastructure\Service\Serializer\Normalizer\EmployeeDenormalizer;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * @group EmployeeDenormalizer
 * @group JobBag\Infrastructure\Service\Serializer\Normalizer\EmployeeDenormalizer
 */
class EmployeeDenormalizerTest extends \PHPUnit_Framework_TestCase
{
    private static $employeeData = [
        'name'          => 'Name and surname',
        'email'         => 'user39@email.com',
        'password'      => '1234',
        'avatar'        => 'anAvatar',
        'locationId'    => 1,
        'scholarshipId' => 'BA',
        'birthdate'     => '1971-12-09',
        'experience'    => [
            [
                'professionId' => 1,
                'years'        => 3
            ],
            [
                'professionId' => 2,
                'years'        => 5
            ]
        ],
        'languageId'    => 'es',
        'resume'        => 'Employeee resume'
    ];

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|UserPasswordEncoderInterface
     */
    private $passwordEncoderMock;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|EntityManagerInterface
     */
    private $entityManagerMock;

    /**
     * @var EmployeeDenormalizer
     */
    private $denormalizer;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|ObjectRepository
     */
    private $scholarshipRepositoryMock;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|Scholarship
     */
    private $scholarshipMock;

    protected function setUp()
    {
        $this->passwordEncoderMock = $this->mockPasswordEncoder();
        $this->entityManagerMock = $this->mockEntityManager();
        $this->scholarshipRepositoryMock = $this->mockScholarshipRepository();
        $this->scholarshipMock = $this->mockScholarshipEntity();

        $this->denormalizer = new EmployeeDenormalizer(
            $this->passwordEncoderMock,
            $this->entityManagerMock
        );
    }

    public function testSupportsDenormalization(): void
    {
        $this->assertTrue($this->denormalizer->supportsDenormalization([], Employee::class));
    }

    /**
     * @covers       \JobBag\Infrastructure\Service\Serializer\Normalizer\EmployeeDenormalizer::denormalize
     * @dataProvider provideEmployeeData
     * @param array $employeeData
     */
    public function testEmployeeDataIsDenormalized(array $employeeData): void
    {
        $this->entityManagerMock->method('getRepository')
            ->willReturn($this->scholarshipRepositoryMock);

        $this->scholarshipRepositoryMock
            ->method('find')
            ->willReturn($this->scholarshipMock);

        $this->scholarshipMock
            ->method('getId')
            ->willReturn(self::$employeeData['scholarshipId']);

        $employee = $this->denormalizer->denormalize($employeeData, Employee::class);

        $this->assertEquals(self::$employeeData['scholarshipId'], $employee->getScholarship()->getId());
        $this->assertEquals(self::$employeeData['resume'], $employee->getResume);
    }

    /**
     * @return \PHPUnit\Framework\MockObject\MockObject|UserPasswordEncoderInterface
     */
    private function mockPasswordEncoder()
    {
        return $this->getMockBuilder(UserPasswordEncoderInterface::class)
            ->disableOriginalConstructor()
            ->getMock();
    }

    /**
     * @return \PHPUnit\Framework\MockObject\MockObject|EntityManagerInterface
     */
    private function mockEntityManager()
    {
        return $this->getMockBuilder(EntityManagerInterface::class)
            ->disableOriginalConstructor()
            ->getMock();
    }

    /**
     * @return array
     */
    public function provideEmployeeData(): array
    {
        return [
            [self::$employeeData]
        ];
    }

    /**
     * @return \PHPUnit\Framework\MockObject\MockObject|ObjectRepository
     */
    private function mockScholarshipRepository()
    {
        return $this->getMockBuilder(ObjectRepository::class)
            ->disableOriginalConstructor()
            ->getMock();
    }

    /**
     * @return \PHPUnit\Framework\MockObject\MockObject|Scholarship
     */
    private function mockScholarshipEntity()
    {
        return $this->getMockBuilder(Scholarship::class)
            ->disableOriginalConstructor()
            ->getMock();
    }
}
