<?php

namespace Tests\JobBag\Infrastructure\Service\Serializer\Normalizer;

use Doctrine\Common\Collections\ArrayCollection;
use JobBag\Domain\Entity\Language;
use JobBag\Domain\Entity\Person;
use JobBag\Domain\Entity\User;
use JobBag\Domain\Repository\LanguageRepository;
use JobBag\Infrastructure\Service\Serializer\Normalizer\PersonNormalizer;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

/**
 * @group PersonNormalizer
 * @group JobBag\Infrastructure\Service\Serializer\Normalizer\PersonNormalizer
 */
class PersonNormalizerTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|LanguageRepository
     */
    private $languageRepositoryMock;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|DenormalizerInterface
     */
    private $userNormalizerMock;

    /**
     * @var array
     */
    private $personData = [
        'name' => 'Person name',
        'avatar' => 'Person avatar',
        'languages' => [
            ['id' => 'es', 'motherTongue' => true],
            ['id' => 'en', 'motherTongue' => false],
        ]
    ];

    /**
     * @var PersonNormalizer
     */
    private $personNormalizer;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|Language
     */
    private $languageMock;

    protected function setUp()
    {
        $this->languageMock = $this->mockLanguageEntity();
        $this->languageRepositoryMock = $this->mockLanguageRepository();
        $this->userNormalizerMock = $this->mockUserNormalizer();

        $this->personNormalizer = new PersonNormalizer(
            $this->languageRepositoryMock,
            $this->userNormalizerMock
        );
    }

    public function testDenormalize(): void
    {
        $languagesData = array_column($this->personData['languages'], 'motherTongue', 'id');
        $languages = new ArrayCollection();

        foreach ($languagesData as $id => $motherTongue) {
            $language = $this->mockLanguageEntity();
            $language->method('getId')->willReturn($id);
            $languages->add($language);
        }

        $this->languageRepositoryMock
            ->method('findIn')
            ->willReturn($languages);

        $this->userNormalizerMock->expects($this->once())
            ->method('denormalize')
            ->willReturn($this->mockUserEntity());

        $person = $this->personNormalizer->denormalize($this->personData, Person::class);

        $this->assertInstanceOf(Person::class, $person);
        $this->assertSame($this->personData['name'], $person->getName());
        $this->assertSame($this->personData['avatar'], $person->getAvatar());
        $this->assertInstanceOf(User::class, $person->getUser());

        $this->assertCount(\count($languages), $person->getLanguages());
        foreach ($person->getLanguages() as $language) {
            $this->assertTrue(array_key_exists($language->getId(), $languagesData));
            $this->assertEquals($languagesData[$language->getId()], $language->isMotherTongue());
        }
    }

    public function testDefaultValueIsSetToAvatarProperty(): void
    {
        unset($this->personData['avatar']);
        $languagesData = array_column($this->personData['languages'], 'motherTongue', 'id');
        $languages = new ArrayCollection();

        foreach ($languagesData as $id => $motherTongue) {
            $language = $this->mockLanguageEntity();
            $language->method('getId')->willReturn($id);
            $languages->add($language);
        }

        $this->languageRepositoryMock
            ->method('findIn')
            ->willReturn($languages);

        $this->userNormalizerMock->expects($this->once())
            ->method('denormalize')
            ->willReturn($this->mockUserEntity());

        $person = $this->personNormalizer->denormalize($this->personData, Person::class);

        $this->assertInstanceOf(Person::class, $person);
        $this->assertSame('', $person->getAvatar());
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testPersonNameIsRequired(): void
    {
        unset($this->personData['name']);

        $this->personNormalizer->denormalize($this->personData, Person::class);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testLanguageAttributeIsRequired(): void
    {
        unset($this->personData['languages']);

        $this->personNormalizer->denormalize($this->personData, Person::class);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testAtLeastALanguageValueIsPassed(): void
    {
        $this->personData['languages'] = [];

        $this->personNormalizer->denormalize($this->personData, Person::class);
    }

    public function testLanguagesAreAdded(): void
    {
        $languagesData = array_column($this->personData['languages'], 'motherTongue', 'id');
        $languages = new ArrayCollection();

        foreach ($languagesData as $id => $motherTongue) {
            $language = $this->mockLanguageEntity();
            $language->method('getId')->willReturn($id);
            $languages->add($language);
        }

        $this->languageRepositoryMock
            ->method('findIn')
            ->willReturn($languages);

        $person = $this->personNormalizer->denormalize($this->personData, Person::class);

        $this->assertCount(\count($languages), $person->getLanguages());
        foreach ($person->getLanguages() as $language) {
            $this->assertTrue(array_key_exists($language->getId(), $languagesData));
            $this->assertEquals($languagesData[$language->getId()], $language->isMotherTongue());
        }
    }

    /**
     * @return \PHPUnit\Framework\MockObject\MockObject|LanguageRepository
     */
    private function mockLanguageRepository()
    {
        return $this->getMockBuilder(LanguageRepository::class)
            ->disableOriginalConstructor()
            ->getMock();
    }

    /**
     * @return \PHPUnit\Framework\MockObject\MockObject|DenormalizerInterface
     */
    private function mockUserNormalizer()
    {
        return $this->getMockBuilder(DenormalizerInterface::class)
            ->disableOriginalConstructor()
            ->getMock();
    }

    /**
     * @return \PHPUnit\Framework\MockObject\MockObject|User
     */
    private function mockUserEntity()
    {
        return $this->getMockBuilder(User::class)
            ->disableOriginalConstructor()
            ->getMock();
    }

    /**
     * @return \PHPUnit\Framework\MockObject\MockObject|Language
     */
    private function mockLanguageEntity()
    {
        return $this->getMockBuilder(Language::class)
            ->disableOriginalConstructor()
            ->getMock();
    }
}
