<?php

namespace JobBag\Controller;

use JobBag\Domain\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends Controller
{
    /**
     * @Route("/login/{email}/{pass}", name="login")
     */
    public function loginAction($email, $pass)
    {
        $user = $this->getDoctrine()->getRepository(User::class)
            ->findOneBy(['username' => $email]);

        if(!$user) {
            throw $this->createNotFoundException();
        }

        // Check Password
        if(!$this->get('security.password_encoder')->isPasswordValid($user, $pass)) {
            throw $this->createAccessDeniedException();
        }

        // Create JWT token
        $token = $this->get('lexik_jwt_authentication.encoder')
            ->encode(['username' => $user->getUsername()]);

        // Return tocken
        return new JsonResponse(['token' => $token]);
    }
}
