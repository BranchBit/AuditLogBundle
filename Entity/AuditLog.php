<?php
namespace BBIT\AuditLogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BBIT\AuditLogBundle\Entity\AuditLog
 * @ORM\Entity()
 * @ORM\Table(name="bbit_auditlog")
 */
class AuditLog {
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\Column(name="timestamp",type="datetime")
	 */
	protected $timestamp;

    /**
     * @ORM\Column(name="channel",type="string", nullable=true)
     */ 
    protected $channel;

    /**
     * @ORM\Column(name="type",type="string", nullable=true)
     */ 
    protected $type;

    /**
     * @ORM\Column(name="message",type="string", nullable=true)
     */ 
    protected $message;
	
	

	public function __construct() {
		$this->setTimestamp(new \DateTime());
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
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return Export
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return \DateTime 
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    


    /**
     * Set channel
     *
     * @param string $channel
     * @return AuditLog
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;

        return $this;
    }

    /**
     * Get channel
     *
     * @return string 
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return AuditLog
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return AuditLog
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }
}
