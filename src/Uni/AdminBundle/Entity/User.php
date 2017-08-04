<?php

namespace Uni\AdminBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 */
class User extends BaseUser
{
    /**
     * @var integer
     */
    protected $id;


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
     * @var string
     */
    private $brand;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $domain;

    /**
     * @var string
     */
    private $location;

    /**
     * @var string
     */
    private $clientname;

    /**
     * @var string
     */
    private $clientphone;

    /**
     * @var string
     */
    private $clientemail;

    /**
     * @var string
     */
    private $clientaddress;

    /**
     * @var string
     */
    private $maintitle;

    /**
     * @var string
     */
    private $mainsubtitle;

    /**
     * @var string
     */
    private $maincalltoaction;

    /**
     * @var string
     */
    private $abouttitle;

    /**
     * @var string
     */
    private $aboutcontent;

    /**
     * @var string
     */
    private $featuretitle;

    /**
     * @var string
     */
    private $featurecontent;

    /**
     * @var string
     */
    private $contacttitle;

    /**
     * @var string
     */
    private $contactcontent;

    /**
     * @var string
     */
    private $contactphone;

    /**
     * @var string
     */
    private $contactemail;

    /**
     * @var string
     */
    private $contactaddress;

    /**
     * @var string
     */
    private $contactschedule;

    /**
     * @var string
     */
    private $rrsstitle;

    /**
     * @var string
     */
    private $rrsscontent;

    /**
     * @var string
     */
    private $facebook;

    /**
     * @var string
     */
    private $twitter;

    /**
     * @var string
     */
    private $youtube;

    /**
     * @var string
     */
    private $instagram;

    /**
     * @var string
     */
    private $producttitle;

    /**
     * @var string
     */
    private $productcontent;

    /**
     * @var \DateTime
     */
    private $created_at;

    /**
     * @var \DateTime
     */
    private $updated_at;

    /**
     * @var \DateTime
     */
    private $deleted_at;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $features;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $photographies;


    /**
     * Set brand
     *
     * @param string $brand
     *
     * @return User
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return User
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
     * Set domain
     *
     * @param string $domain
     *
     * @return User
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;

        return $this;
    }

    /**
     * Get domain
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return User
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set clientname
     *
     * @param string $clientname
     *
     * @return User
     */
    public function setClientname($clientname)
    {
        $this->clientname = $clientname;

        return $this;
    }

    /**
     * Get clientname
     *
     * @return string
     */
    public function getClientname()
    {
        return $this->clientname;
    }

    /**
     * Set clientphone
     *
     * @param string $clientphone
     *
     * @return User
     */
    public function setClientphone($clientphone)
    {
        $this->clientphone = $clientphone;

        return $this;
    }

    /**
     * Get clientphone
     *
     * @return string
     */
    public function getClientphone()
    {
        return $this->clientphone;
    }

    /**
     * Set clientemail
     *
     * @param string $clientemail
     *
     * @return User
     */
    public function setClientemail($clientemail)
    {
        $this->clientemail = $clientemail;

        return $this;
    }

    /**
     * Get clientemail
     *
     * @return string
     */
    public function getClientemail()
    {
        return $this->clientemail;
    }

    /**
     * Set clientaddress
     *
     * @param string $clientaddress
     *
     * @return User
     */
    public function setClientaddress($clientaddress)
    {
        $this->clientaddress = $clientaddress;

        return $this;
    }

    /**
     * Get clientaddress
     *
     * @return string
     */
    public function getClientaddress()
    {
        return $this->clientaddress;
    }

    /**
     * Set maintitle
     *
     * @param string $maintitle
     *
     * @return User
     */
    public function setMaintitle($maintitle)
    {
        $this->maintitle = $maintitle;

        return $this;
    }

    /**
     * Get maintitle
     *
     * @return string
     */
    public function getMaintitle()
    {
        return $this->maintitle;
    }

    /**
     * Set mainsubtitle
     *
     * @param string $mainsubtitle
     *
     * @return User
     */
    public function setMainsubtitle($mainsubtitle)
    {
        $this->mainsubtitle = $mainsubtitle;

        return $this;
    }

    /**
     * Get mainsubtitle
     *
     * @return string
     */
    public function getMainsubtitle()
    {
        return $this->mainsubtitle;
    }

    /**
     * Set maincalltoaction
     *
     * @param string $maincalltoaction
     *
     * @return User
     */
    public function setMaincalltoaction($maincalltoaction)
    {
        $this->maincalltoaction = $maincalltoaction;

        return $this;
    }

    /**
     * Get maincalltoaction
     *
     * @return string
     */
    public function getMaincalltoaction()
    {
        return $this->maincalltoaction;
    }

    /**
     * Set abouttitle
     *
     * @param string $abouttitle
     *
     * @return User
     */
    public function setAbouttitle($abouttitle)
    {
        $this->abouttitle = $abouttitle;

        return $this;
    }

    /**
     * Get abouttitle
     *
     * @return string
     */
    public function getAbouttitle()
    {
        return $this->abouttitle;
    }

    /**
     * Set aboutcontent
     *
     * @param string $aboutcontent
     *
     * @return User
     */
    public function setAboutcontent($aboutcontent)
    {
        $this->aboutcontent = $aboutcontent;

        return $this;
    }

    /**
     * Get aboutcontent
     *
     * @return string
     */
    public function getAboutcontent()
    {
        return $this->aboutcontent;
    }

    /**
     * Set featuretitle
     *
     * @param string $featuretitle
     *
     * @return User
     */
    public function setFeaturetitle($featuretitle)
    {
        $this->featuretitle = $featuretitle;

        return $this;
    }

    /**
     * Get featuretitle
     *
     * @return string
     */
    public function getFeaturetitle()
    {
        return $this->featuretitle;
    }

    /**
     * Set featurecontent
     *
     * @param string $featurecontent
     *
     * @return User
     */
    public function setFeaturecontent($featurecontent)
    {
        $this->featurecontent = $featurecontent;

        return $this;
    }

    /**
     * Get featurecontent
     *
     * @return string
     */
    public function getFeaturecontent()
    {
        return $this->featurecontent;
    }

    /**
     * Set contacttitle
     *
     * @param string $contacttitle
     *
     * @return User
     */
    public function setContacttitle($contacttitle)
    {
        $this->contacttitle = $contacttitle;

        return $this;
    }

    /**
     * Get contacttitle
     *
     * @return string
     */
    public function getContacttitle()
    {
        return $this->contacttitle;
    }

    /**
     * Set contactcontent
     *
     * @param string $contactcontent
     *
     * @return User
     */
    public function setContactcontent($contactcontent)
    {
        $this->contactcontent = $contactcontent;

        return $this;
    }

    /**
     * Get contactcontent
     *
     * @return string
     */
    public function getContactcontent()
    {
        return $this->contactcontent;
    }

    /**
     * Set contactphone
     *
     * @param string $contactphone
     *
     * @return User
     */
    public function setContactphone($contactphone)
    {
        $this->contactphone = $contactphone;

        return $this;
    }

    /**
     * Get contactphone
     *
     * @return string
     */
    public function getContactphone()
    {
        return $this->contactphone;
    }

    /**
     * Set contactemail
     *
     * @param string $contactemail
     *
     * @return User
     */
    public function setContactemail($contactemail)
    {
        $this->contactemail = $contactemail;

        return $this;
    }

    /**
     * Get contactemail
     *
     * @return string
     */
    public function getContactemail()
    {
        return $this->contactemail;
    }

    /**
     * Set contactaddress
     *
     * @param string $contactaddress
     *
     * @return User
     */
    public function setContactaddress($contactaddress)
    {
        $this->contactaddress = $contactaddress;

        return $this;
    }

    /**
     * Get contactaddress
     *
     * @return string
     */
    public function getContactaddress()
    {
        return $this->contactaddress;
    }

     /**
     * Set contactschedule
     *
     * @param string $contactschedule
     *
     * @return User
     */
    public function setContactschedule($contactschedule)
    {
        $this->contactschedule = $contactschedule;

        return $this;
    }

    /**
     * Get contactschedule
     *
     * @return string
     */
    public function getContactschedule()
    {
        return $this->contactschedule;
    }

    /**
     * Set rrsstitle
     *
     * @param string $rrsstitle
     *
     * @return User
     */
    public function setRrsstitle($rrsstitle)
    {
        $this->rrsstitle = $rrsstitle;

        return $this;
    }

    /**
     * Get rrsstitle
     *
     * @return string
     */
    public function getRrsstitle()
    {
        return $this->rrsstitle;
    }

    /**
     * Set rrsscontent
     *
     * @param string $rrsscontent
     *
     * @return User
     */
    public function setRrsscontent($rrsscontent)
    {
        $this->rrsscontent = $rrsscontent;

        return $this;
    }

    /**
     * Get rrsscontent
     *
     * @return string
     */
    public function getRrsscontent()
    {
        return $this->rrsscontent;
    }

     /**
     * Set facebook
     *
     * @param string $facebook
     *
     * @return User
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook
     *
     * @return string
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

   /**
     * Set twitter
     *
     * @param string $twitter
     *
     * @return User
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * Get twitter
     *
     * @return string
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Set youtube
     *
     * @param string $youtube
     *
     * @return User
     */
    public function setYoutube($youtube)
    {
        $this->youtube = $youtube;

        return $this;
    }

    /**
     * Get youtube
     *
     * @return string
     */
    public function getYoutube()
    {
        return $this->youtube;
    }

    /**
     * Set instagram
     *
     * @param string $instagram
     *
     * @return User
     */
    public function setInstagram($instagram)
    {
        $this->instagram = $instagram;

        return $this;
    }

    /**
     * Get instagram
     *
     * @return string
     */
    public function getInstagram()
    {
        return $this->instagram;
    }

    /**
     * Set producttitle
     *
     * @param string $producttitle
     *
     * @return User
     */
    public function setProducttitle($producttitle)
    {
        $this->producttitle = $producttitle;

        return $this;
    }

    /**
     * Get producttitle
     *
     * @return string
     */
    public function getProducttitle()
    {
        return $this->producttitle;
    }

    /**
     * Set productcontent
     *
     * @param string $productcontent
     *
     * @return User
     */
    public function setProductcontent($productcontent)
    {
        $this->productcontent = $productcontent;

        return $this;
    }

    /**
     * Get productcontent
     *
     * @return string
     */
    public function getProductcontent()
    {
        return $this->productcontent;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return User
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

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return User
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     *
     * @return User
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deleted_at = $deletedAt;

        return $this;
    }

    /**
     * Get deletedAt
     *
     * @return \DateTime
     */
    public function getDeletedAt()
    {
        return $this->deleted_at;
    }

    /**
     * Add feature
     *
     * @param \Uni\AdminBundle\Entity\Feature $feature
     *
     * @return User
     */
    public function addFeature(\Uni\AdminBundle\Entity\Feature $feature)
    {
        $this->features[] = $feature;

        return $this;
    }

    /**
     * Remove feature
     *
     * @param \Uni\AdminBundle\Entity\Feature $feature
     */
    public function removeFeature(\Uni\AdminBundle\Entity\Feature $feature)
    {
        $this->features->removeElement($feature);
    }

    /**
     * Get features
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * Add photography
     *
     * @param \Uni\AdminBundle\Entity\Photography $photography
     *
     * @return User
     */
    public function addPhotography(\Uni\AdminBundle\Entity\Photography $photography)
    {
        $this->photographies[] = $photography;

        return $this;
    }

    /**
     * Remove photography
     *
     * @param \Uni\AdminBundle\Entity\Photography $photography
     */
    public function removePhotography(\Uni\AdminBundle\Entity\Photography $photography)
    {
        $this->photographies->removeElement($photography);
    }

    /**
     * Get photographies
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPhotographies()
    {
        return $this->photographies;
    }
    /**
     * @var string
     */
    private $brand_primary_color;

    /**
     * @var string
     */
    private $brand_secondary_color;


    /**
     * Set brandPrimaryColor
     *
     * @param string $brandPrimaryColor
     *
     * @return User
     */
    public function setBrandPrimaryColor($brandPrimaryColor)
    {
        $this->brand_primary_color = $brandPrimaryColor;

        return $this;
    }

    /**
     * Get brandPrimaryColor
     *
     * @return string
     */
    public function getBrandPrimaryColor()
    {
        return $this->brand_primary_color;
    }

    /**
     * Set brandSecondaryColor
     *
     * @param string $brandSecondaryColor
     *
     * @return User
     */
    public function setBrandSecondaryColor($brandSecondaryColor)
    {
        $this->brand_secondary_color = $brandSecondaryColor;

        return $this;
    }

    /**
     * Get brandSecondaryColor
     *
     * @return string
     */
    public function getBrandSecondaryColor()
    {
        return $this->brand_secondary_color;
    }
    /**
     * @var string
     */
    private $brand_tertiary_color;


    /**
     * Set brandTertiaryColor
     *
     * @param string $brandTertiaryColor
     *
     * @return User
     */
    public function setBrandTertiaryColor($brandTertiaryColor)
    {
        $this->brand_tertiary_color = $brandTertiaryColor;

        return $this;
    }

    /**
     * Get brandTertiaryColor
     *
     * @return string
     */
    public function getBrandTertiaryColor()
    {
        return $this->brand_tertiary_color;
    }
}
