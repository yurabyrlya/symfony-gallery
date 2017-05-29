<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gallery
 *
 * @ORM\Table(name="gallery")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GalleryRepository")
 */
class Gallery
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @ORM\Column(name="name", type="string")
     * @var $name;
     */
    private $name;


    /**
     * @ORM\Column(name="slug", type="string")
     * @var $slug
     */
    private $slug;

    /**
     * @ORM\Column(type="smallint")
     * @var $width
     */
    private $width;

    /**
     * @ORM\Column(type="smallint")
     * @var $height;
     */
    private $height;


    /**
     * @ORM\Column(name="ext", type="string", length=4)
     * @var $ext;
     */
    private $ext;


    public $fullName = null;
    /**
     * Gallery constructor.
     * @param null $name
     */
    public  function __construct($name = null)
    {
        $this->name = $name;
        $this->slug = $name;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
        $this->slug = $name;
    }

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param mixed $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getExt()
    {
        return $this->ext;
    }

    /**
     * @param mixed $ext
     */
    public function setExt($ext)
    {
        $this->ext = $ext;
    }

    /**
     * @return null
     */
    public function getFullName()
    {
        $this->fullName = $this->name . $this->ext;
        return $this->fullName;
    }

    /**
     * @return null
     */
    public function  __toString()
    {
        // TODO: Implement __toString() method.

        return $this->getFullName();
    }

}
