<?php


class PageController extends AbstractController
{

    public function home(): void
    {
        $um = new UserManager();
        $user = new User('Mari', 'distanciel', 'voiture', 10, 'moteur de fou', 'or_pur', 'chauffage de fou', 10000, -1, 2);
        $createUser = $um->CreateUser($user);
        $allUsers = $um->getAllUsers();
        $this->render("home.html.twig", []);
    }
}
