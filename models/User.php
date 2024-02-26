<?php

class User
{

    private int $result_co2;


    public function __construct(private string $name, private string $presentiel_distanciel, private string $vehicule, private int $distance, private string $type_moteur, private string $materiel, private string $type_chauffage, private int $conso_chauffage, private bool $recyclage)
    {
        $this->name = $name;
        $this->presentiel_distanciel = $presentiel_distanciel;
        $this->vehicule = $vehicule;
        $this->distance = $distance;
        $this->type_moteur = $type_moteur;
        $this->materiel = $materiel;
        $this->type_chauffage = $type_chauffage;
        $this->conso_chauffage = $conso_chauffage;
        $this->recyclage = $recyclage;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of presentiel_distanciel
     */
    public function getPresentiel_distanciel()
    {
        return $this->presentiel_distanciel;
    }

    /**
     * Set the value of presentiel_distanciel
     *
     * @return  self
     */
    public function setPresentiel_distanciel($presentiel_distanciel)
    {
        $this->presentiel_distanciel = $presentiel_distanciel;

        return $this;
    }

    /**
     * Get the value of vehicule
     */
    public function getVehicule()
    {
        return $this->vehicule;
    }

    /**
     * Set the value of vehicule
     *
     * @return  self
     */
    public function setVehicule($vehicule)
    {
        $this->vehicule = $vehicule;

        return $this;
    }

    /**
     * Get the value of distance
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * Set the value of distance
     *
     * @return  self
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;

        return $this;
    }

    /**
     * Get the value of type_moteur
     */
    public function getType_moteur()
    {
        return $this->type_moteur;
    }

    /**
     * Set the value of type_moteur
     *
     * @return  self
     */
    public function setType_moteur($type_moteur)
    {
        $this->type_moteur = $type_moteur;

        return $this;
    }

    /**
     * Get the value of materiel
     */
    public function getMateriel()
    {
        return $this->materiel;
    }

    /**
     * Set the value of materiel
     *
     * @return  self
     */
    public function setMateriel($materiel)
    {
        $this->materiel = $materiel;

        return $this;
    }

    /**
     * Get the value of type_chauffage
     */
    public function getType_chauffage()
    {
        return $this->type_chauffage;
    }

    /**
     * Set the value of type_chauffage
     *
     * @return  self
     */
    public function setType_chauffage($type_chauffage)
    {
        $this->type_chauffage = $type_chauffage;

        return $this;
    }

    /**
     * Get the value of conso_chauffage
     */
    public function getConso_chauffage()
    {
        return $this->conso_chauffage;
    }

    /**
     * Set the value of conso_chauffage
     *
     * @return  self
     */
    public function setConso_chauffage($conso_chauffage)
    {
        $this->conso_chauffage = $conso_chauffage;

        return $this;
    }

    /**
     * Get the value of recyclage
     */
    public function getRecyclage()
    {
        return $this->recyclage;
    }

    /**
     * Set the value of recyclage
     *
     * @return  self
     */
    public function setRecyclage($recyclage)
    {
        $this->recyclage = $recyclage;

        return $this;
    }
}
