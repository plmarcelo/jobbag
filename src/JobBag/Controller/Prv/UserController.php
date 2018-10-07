<?php

namespace JobBag\Controller\Prv;

use JobBag\Domain\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user_list")
     * @return Response
     */
    public function list(): Response
    {
        /**
         * @var User $user
         */
        $users = $this->getDoctrine()
            ->getRepository(User::class)
            ->findAll();

        if (!$users) {
            throw $this->createNotFoundException(
                'No user found'
            );
        }

        $usernames = '';

        foreach ($users as $user) {
            $usernames .= (empty($usernames) ? '' : ', ') . $user->getUsername();
        }

        return new Response('Check out this great users: ' . $usernames);
    }

    /**
     * @Route("/user/{id<\d+>}", name="user_show")
     * @param int $id
     * @return Response
     */
    public function show($id): Response
    {
        /**
         * @var User $user
         */
        $user = $this->getDoctrine()
            ->getRepository(User::class)
            ->find($id);

        if (!$user) {
            throw $this->createNotFoundException(
                'No user found for id '.$id
            );
        }

        return new Response('Check out this great user: '.$user->getUsername());
    }

    /**
     * @Route("/user/{username}", name="user_create", methods={"GET","POST"})
     * @param string $username
     * @return Response
     */
    public function create($username): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        $user = new User();
        $user->setUsername($username)
            ->setPassword('myPassword');

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($user);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new user with id '.$user->getId());
    }
}
