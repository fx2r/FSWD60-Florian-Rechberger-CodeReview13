<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * events
 *
 * @ORM\Table(name="events")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\eventsRepository")
 */
class events
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=40)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;

    /**
     * @var int
     *
     * @ORM\Column(name="capacity", type="integer")
     */
    private $capacity;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

   /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=20)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", length=60)
     */
    private $street;

    /**
     * @var string
     *
     * @ORM\Column(name="postal_code", type="string", length=10)
     */
    private $postal_code;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=40)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="integer")
     */
    private $link;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=40)
     */
    private $type;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return events
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set date.
     *
     * @param \DateTime $date
     *
     * @return events
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date.
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set description.
     *
     * @param string $description
     *
     * @return events
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set image.
     *
     * @param string $image
     *
     * @return events
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image.
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set capacity.
     *
     * @param int $capacity
     *
     * @return events
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * Get capacity.
     *
     * @return int
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Set email.
     *
     * @param string $email
     *
     * @return events
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phone.
     *
     * @param string $phone
     *
     * @return events
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone.
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set street.
     *
     * @param string $street
     *
     * @return events
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street.
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set postal_code.
     *
     * @param string $postal_code
     *
     * @return events
     */
    public function setPostalCode($postal_code)
    {
        $this->postal_code = $postal_code;

        return $this;
    }

    /**
     * Get postal_code.
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postal_code;
    }

    /**
     * Set city.
     *
     * @param string $city
     *
     * @return events
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city.
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set type.
     *
     * @param string $type
     *
     * @return events
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}
