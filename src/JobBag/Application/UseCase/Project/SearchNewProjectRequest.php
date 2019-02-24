<?php

namespace JobBag\Application\UseCase\Project;

use JobBag\Application\UseCase\RequestInterface;
use JobBag\Domain\Exception\InvalidArgumentException;

class SearchNewProjectRequest implements RequestInterface
{
    /**
     * @var int
     */
    private $locationId;

    /**
     * @var int
     */
    private $professionId;

    /**
     * @var \DateTimeInterface
     */
    private $since;

    /**
     * @var int
     */
    private $limit;

    /**
     * SearchNewProjectRequest constructor.
     * @param int $locationId
     * @param int $professionId
     * @param \DateTimeInterface|string|null $since
     * @param int|null $limit
     * @throws InvalidArgumentException
     */
    public function __construct(int $locationId, int $professionId, $since = null, int $limit = null)
    {
        $this->setLocationId($locationId)
            ->setProfessionId($professionId)
            ->setSince($since)
            ->setLimit($limit);
    }

    /**
     * @return int
     */
    public function getLocationId(): int
    {
        return $this->locationId;
    }

    /**
     * @param int $locationId
     * @return SearchNewProjectRequest
     */
    public function setLocationId(int $locationId): SearchNewProjectRequest
    {
        $this->locationId = $locationId;

        return $this;
    }

    /**
     * @return int
     */
    public function getProfessionId(): int
    {
        return $this->professionId;
    }

    /**
     * @param int $professionId
     * @return SearchNewProjectRequest
     */
    public function setProfessionId(int $professionId): SearchNewProjectRequest
    {
        $this->professionId = $professionId;

        return $this;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getSince(): ?\DateTimeInterface
    {
        return $this->since;
    }

    /**
     * @param \DateTimeInterface|string|null $since
     * @return SearchNewProjectRequest
     * @throws InvalidArgumentException
     */
    public function setSince($since): SearchNewProjectRequest
    {
        if ($since === null || $since instanceof \DateTimeInterface) {
            $this->since = $since;

            return $this;
        }

        if (\is_string($since)) {
            try {
                $this->since = new \DateTime($since);

                return $this;
            } catch (\Exception $e) {
            }
        }

        throw new InvalidArgumentException('Since value should be a valid date', InvalidArgumentException::BAD_REQUEST);
    }

    /**
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     * @return SearchNewProjectRequest
     */
    public function setLimit(int $limit): SearchNewProjectRequest
    {
        $this->limit = $limit;

        return $this;
    }
}
