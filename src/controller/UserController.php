<?php

namespace App\Controller;

use App\Service\UserService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/user/create', name: 'create_user')]
    public function createUser(UserService $userService, Request $request): Response
    {
        // Get the user data from the request
        $email = $request->request->get('email@test.com');
        $username = $request->request->get('username');
        $password = $request->request->get('password');

        // Use the UserService to create a new user
        $user = $userService->createUser($email, $username, $password);

        // Return a success response
        return new Response(sprintf('User %s created successfully', $user->getUsername()));
    }
}
