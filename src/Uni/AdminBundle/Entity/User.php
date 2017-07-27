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
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $rut;

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
     * Set rut
     *
     * @param string $rut
     *
     * @return User
     */
    public function setRut($rut)
    {
        $this->rut = $rut;

        return $this;
    }

    /**
     * Get rut
     *
     * @return string
     */
    public function getRut()
    {
        return $this->rut;
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
     * @var string
     */
    private $brand;

    /**
     * @var string
     */
    private $contactname;

    /**
     * @var string
     */
    private $contactemail;

    /**
     * @var string
     */
    private $contactphone;

    /**
     * @var string
     */
    private $contactaddress;

    /**
     * @var string
     */
    private $absoluteurl;

    /**
     * @var string
     */
    private $pagetitle;

    /**
     * @var string
     */
    private $pagesubtitle;

    /**
     * @var string
     */
    private $pagecalltoaction;

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
     * Set contactname
     *
     * @param string $contactname
     *
     * @return User
     */
    public function setContactname($contactname)
    {
        $this->contactname = $contactname;

        return $this;
    }

    /**
     * Get contactname
     *
     * @return string
     */
    public function getContactname()
    {
        return $this->contactname;
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
     * Set absoluteurl
     *
     * @param string $absoluteurl
     *
     * @return User
     */
    public function setAbsoluteurl($absoluteurl)
    {
        $this->absoluteurl = $absoluteurl;

        return $this;
    }

    /**
     * Get absoluteurl
     *
     * @return string
     */
    public function getAbsoluteurl()
    {
        return $this->absoluteurl;
    }

    /**
     * Set pagetitle
     *
     * @param string $pagetitle
     *
     * @return User
     */
    public function setPagetitle($pagetitle)
    {
        $this->pagetitle = $pagetitle;

        return $this;
    }

    /**
     * Get pagetitle
     *
     * @return string
     */
    public function getPagetitle()
    {
        return $this->pagetitle;
    }

    /**
     * Set pagesubtitle
     *
     * @param string $pagesubtitle
     *
     * @return User
     */
    public function setPagesubtitle($pagesubtitle)
    {
        $this->pagesubtitle = $pagesubtitle;

        return $this;
    }

    /**
     * Get pagesubtitle
     *
     * @return string
     */
    public function getPagesubtitle()
    {
        return $this->pagesubtitle;
    }

    /**
     * Set pagecalltoaction
     *
     * @param string $pagecalltoaction
     *
     * @return User
     */
    public function setPagecalltoaction($pagecalltoaction)
    {
        $this->pagecalltoaction = $pagecalltoaction;

        return $this;
    }

    /**
     * Get pagecalltoaction
     *
     * @return string
     */
    public function getPagecalltoaction()
    {
        return $this->pagecalltoaction;
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $features;


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
     * @var string
     */
    private $domain;

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
}
