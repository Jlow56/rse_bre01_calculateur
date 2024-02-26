<?php

class CalculController extends AbstractController
{
    public function calcul(array $post) {
        // dump($post);
        $userManager = new UserManager();
        if(!empty($post['presence'])) {    
            $totalCo2 =0;     
            if($post['Recyclage'] === "yes") {
                $recyclage = 100;
            } else {
                $recyclage = 0;
            }
            if($post['presence'] === "Distanciel") {
                $consoAnnuelle = $post['kwh'];
                $consoChauffage = $consoAnnuelle / 8766;
                $heureForma = 8;
                $ConsoDistanciel=(($consoChauffage*heureForma) *218) - $recyclage;

                $totalCo2 =  $ConsoDistanciel*(0.06*24+0.077*45+0.137*490+0.049*820+0.666*12+0.011*11)*0.1;
            } else {
                $consoPc = 0.24;
                $km = $post['distance'];
                if($post['engine'] === "Thermique") {
                    $consoTypeMoteur = 175;
                } else {
                    $consoTypeMoteur = 100;
                }
                if($post['vehicle'] === "voiture") {
                    $consoTransport = $consoTypeMoteur * $km;
                } else if ($post['vehicle'] === "Bus") {
                    $consoTransport = 74.4;
                } else if ($post['vehicle'] === "train") {
                    $consoTransport = 7.5;
                } else if ($post['vehicle'] === "avion") {
                    $consoTransport = 128;
                } else if ($post['vehicle'] === "convoit") {
                    $consoTransport = 155.5 / 2;
                } else {
                    $consoTransport = 0;
                }

                $totalCo2 = $consoTransport + ($consoPc*0.1);
            }
            $totalCo2 = 552.35;
            $user = new User($post['name'], $post['presence'], $post['vehicle'], $km, $post['engine'], $post['material'], $post['heating'], $post['heating-kwh'], $post['Recyclage'], $totalCo2);
            $userManager->CreateUser($user);
        }
        $users = $userManager->getAllUsers();
        // dump($users);
        $this->render("results.html.twig", [
            'users' => $users,
        ]);
    }
}