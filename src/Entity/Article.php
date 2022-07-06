<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

// Déclaration de création d'entitée

/**
 * @ORM\Entity()
 */
class Article
{

    //id et title sera dans un Champ de table

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    public $id;

    /**
     * @ORM\Column(type="string")
     */
    public $title;

    /**
     * @ORM\Column(type="string")
     */
    public $image;

    /**
     * @ORM\Column(type="boolean")
     */
    public $isPublished;

    /**
     * @ORM\Column(type="string")
     */
    public $author;
}