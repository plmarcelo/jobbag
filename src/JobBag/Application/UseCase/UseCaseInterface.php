<?php

namespace JobBag\Application\UseCase;

interface UseCaseInterface
{
    /**
     * @param RequestInterface|null $request
     * @return ResponseInterface
     */
    public function execute(?RequestInterface $request): ResponseInterface;
}
