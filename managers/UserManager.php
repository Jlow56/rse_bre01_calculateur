<?php

class UserManager extends AbstractManager
{

    public function getAllUsers(): array
    {
        $selectAllUserQuery = $this->db->prepare('SELECT * FROM calculateur_rse ');
        $selectAllUserQuery->execute();
        $users_datas = $selectAllUserQuery->fetchAll(PDO::FETCH_ASSOC);

        $users_array = [];

        foreach ($users_datas as $users_data) {

            $user = new User($users_data['name'], $users_data['presentiel_distanciel'], $users_data['vehicule'], $users_data['distance'], $users_data['type_moteur'], $users_data['materiel'], $users_data['type_chauffage'], $users_data['conso_chauffage'], $users_data['recyclage'], $users_data['result_co2']);
            $user->setId($users_data['id']);
            $users_array[] = $user;
        }

        return $users_array;
    }

    public function CreateUser(User $user)
    {
        $insertUserQuery = $this->db->prepare('INSERT INTO calculateur_rse (name, presentiel_distanciel, vehicule, distance, type_moteur, materiel, type_chauffage, conso_chauffage, recyclage, result_co2) VALUES (:name, :presentiel_distanciel, :vehicule, :distance, :type_moteur, :materiel, :type_chauffage, :conso_chauffage, :recyclage, :result_co2)');

        $parameters = [
            ':name' => $user->getName(),
            ':presentiel_distanciel' => $user->getPresentiel_distanciel(),
            ':vehicule' => $user->getVehicule(),
            ':distance' => $user->getDistance(),
            ':type_moteur' => $user->getType_moteur(),
            ':materiel' => $user->getMateriel(),
            ':type_chauffage' => $user->getType_chauffage(),
            ':conso_chauffage' => $user->getConso_chauffage(),
            ':recyclage' => $user->getRecyclage(),
            ':result_co2' => $user->getResult_co2()
        ];

        $insertUserQuery->execute($parameters);
    }
}
