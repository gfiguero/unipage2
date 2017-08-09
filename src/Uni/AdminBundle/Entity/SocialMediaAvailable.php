<?php

namespace Uni\AdminBundle\Entity;

/**
 * SocialMediaAvailable
 */
class SocialMediaAvailable
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $icon;

    /**
     * @var string
     */
    private $hexcolor;

    public function __toString()
    {
        return (string) $this->name;
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
     * Set name
     *
     * @param string $name
     *
     * @return SocialMediaAvailable
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set icon
     *
     * @param string $icon
     *
     * @return SocialMediaAvailable
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set hexcolor
     *
     * @param string $hexcolor
     *
     * @return SocialMediaAvailable
     */
    public function setHexcolor($hexcolor)
    {
        $this->hexcolor = $hexcolor;

        return $this;
    }

    /**
     * Get hexcolor
     *
     * @return string
     */
    public function getHexcolor()
    {
        return $this->hexcolor;
    }
}

