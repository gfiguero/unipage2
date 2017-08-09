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
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $categories;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $subcategories;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $products;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $socialmediaenabled;


    /**
     * Add category
     *
     * @param \Uni\AdminBundle\Entity\ProductCategory $category
     *
     * @return User
     */
    public function addCategory(\Uni\AdminBundle\Entity\ProductCategory $category)
    {
        $this->categories[] = $category;

        return $this;
    }

    /**
     * Remove category
     *
     * @param \Uni\AdminBundle\Entity\ProductCategory $category
     */
    public function removeCategory(\Uni\AdminBundle\Entity\ProductCategory $category)
    {
        $this->categories->removeElement($category);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Add subcategory
     *
     * @param \Uni\AdminBundle\Entity\ProductSubcategory $subcategory
     *
     * @return User
     */
    public function addSubcategory(\Uni\AdminBundle\Entity\ProductSubcategory $subcategory)
    {
        $this->subcategories[] = $subcategory;

        return $this;
    }

    /**
     * Remove subcategory
     *
     * @param \Uni\AdminBundle\Entity\ProductSubcategory $subcategory
     */
    public function removeSubcategory(\Uni\AdminBundle\Entity\ProductSubcategory $subcategory)
    {
        $this->subcategories->removeElement($subcategory);
    }

    /**
     * Get subcategories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSubcategories()
    {
        return $this->subcategories;
    }

    /**
     * Add product
     *
     * @param \Uni\AdminBundle\Entity\Product $product
     *
     * @return User
     */
    public function addProduct(\Uni\AdminBundle\Entity\Product $product)
    {
        $this->products[] = $product;

        return $this;
    }

    /**
     * Remove product
     *
     * @param \Uni\AdminBundle\Entity\Product $product
     */
    public function removeProduct(\Uni\AdminBundle\Entity\Product $product)
    {
        $this->products->removeElement($product);
    }

    /**
     * Get products
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Add socialmediaenabled
     *
     * @param \Uni\AdminBundle\Entity\SocialMediaEnabled $socialmediaenabled
     *
     * @return User
     */
    public function addSocialmediaenabled(\Uni\AdminBundle\Entity\SocialMediaEnabled $socialmediaenabled)
    {
        $this->socialmediaenabled[] = $socialmediaenabled;

        return $this;
    }

    /**
     * Remove socialmediaenabled
     *
     * @param \Uni\AdminBundle\Entity\SocialMediaEnabled $socialmediaenabled
     */
    public function removeSocialmediaenabled(\Uni\AdminBundle\Entity\SocialMediaEnabled $socialmediaenabled)
    {
        $this->socialmediaenabled->removeElement($socialmediaenabled);
    }

    /**
     * Get socialmediaenabled
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSocialmediaenabled()
    {
        return $this->socialmediaenabled;
    }
    /**
     * @var array
     */
    private $modules;


    /**
     * Set modules
     *
     * @param array $modules
     *
     * @return User
     */
    public function setModules($modules)
    {
        $this->modules = $modules;

        return $this;
    }

    /**
     * Get modules
     *
     * @return array
     */
    public function getModules()
    {
        return $this->modules;
    }
}
