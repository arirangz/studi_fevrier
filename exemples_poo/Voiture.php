<?php

class Voiture
{
    public const UNITE_VITESSE = "km";
    public static int $compteur = 0;

    private string $couleur;
    private int $annee;
    private float $vitesse_max;

    public function __construct(string $couleur, int $annee, $vitesse_max)
    {
        $this->couleur = $couleur;
        $this->annee = $annee;
        $this->vitesse_max = $vitesse_max;

        self::$compteur++;
    }

    public function setCouleur(string $couleur)
    {
        $this->couleur = $couleur;
    }

    public function getCouleur()
    {
        return $this->couleur;
    }

    public static function afficherUniteVitesse()
    {
        echo self::UNITE_VITESSE;
    }

}