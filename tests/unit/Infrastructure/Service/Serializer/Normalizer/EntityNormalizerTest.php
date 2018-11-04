<?php

namespace Tests\JobBag\Infrastructure\Service\Serializer\Normalizer;

use Doctrine\ORM\EntityManagerInterface;
use JobBag\Infrastructure\Service\Serializer\Normalizer\EntityNormalizer;
use Symfony\Component\Serializer\Exception\UnexpectedValueException;

/**
 * @group EntityNormalizer
 * @group JobBag\Infrastructure\Service\Serializer\Normalizer\EntityNormalizer
 */
class EntityNormalizerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers  \JobBag\Infrastructure\Service\Serializer\Normalizer\EntityNormalizer::denormalize
     * 2@expectedException UnexpectedValueException
     */
    public function testAnExceptionIsThrownIfEntityDoesNotExists(): void
    {
        $entityManagerMock = $this->getMockBuilder(EntityManagerInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        $entityManagerMock->expects($this->once())
            ->method('find')
            ->willReturn(null);

        $normalizer = new EntityNormalizer($entityManagerMock);

        $normalizer->denormalize('entityId', 'aClassName');
    }
}
