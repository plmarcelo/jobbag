<?php

namespace JobBag\Infrastructure\Security;

use JobBag\Domain\Entity\User;
use JobBag\Domain\Exception\AccountDeletedException;
use JobBag\Domain\Exception\AccountNotActiveException;
use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class UserActive implements UserCheckerInterface
{
    /**
     * @param UserInterface $user
     * @throws AccountNotActiveException
     * @throws AccountDeletedException
     */
    public function checkPreAuth(UserInterface $user)
    {
        if (!$user instanceof User) {
            return;
        }

        if (!$user->isActive()) {
            throw new AccountNotActiveException('The account is not active.', 404);
        }

        if ($user->isDeleted()) {
            throw new AccountDeletedException('The account is deleted.', 404);
        }
    }

    public function checkPostAuth(UserInterface $user)
    {
    }
}
