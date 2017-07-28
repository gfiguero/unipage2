<?php

namespace Uni\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Photography
 * @ORM\Entity
 * @Vich\Uploadable
 */
class Photography
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $image;

    /**
     * @Vich\UploadableField(mapping="main_photography", fileNameProperty="image")
     * @var File
     */
    private $imagefile;

    /**
     * @var \Uni\AdminBundle\Entity\User
     */
    private $user;


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
     * Set image
     *
     * @param string $image
     *
     * @return Photography
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @return Photography
     */
    public function setImagefile(File $image = null)
    {
        $this->imagefile = $image;

        if ($image) {
            $this->createdAt = new \DateTime();
        }
        
        return $this;
    }

    /**
     * @return File|null
     */
    public function getImagefile()
    {
        return $this->imagefile;
    }

    /**
     * Set user
     *
     * @param \Uni\AdminBundle\Entity\User $user
     *
     * @return Photography
     */
    public function setUser(\Uni\AdminBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Uni\AdminBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * @var \DateTime
     */
    private $created_at;


    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Photography
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }
}
