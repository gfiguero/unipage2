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
    private $fontawesomeicon;

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
     * Set fontawesomeicon
     *
     * @param string $fontawesomeicon
     *
     * @return SocialMediaAvailable
     */
    public function setFontawesomeicon($fontawesomeicon)
    {
        $this->fontawesomeicon = $fontawesomeicon;

        return $this;
    }

    /**
     * Get fontawesomeicon
     *
     * @return string
     */
    public function getFontawesomeicon()
    {
        return $this->fontawesomeicon;
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

