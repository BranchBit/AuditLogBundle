<?php
namespace BBIT\AuditLogBundle\Services;


use Doctrine\ORM\EntityManager;
use BBIT\AuditLogBundle\Entity\AuditLog;

class AuditLogService {
	
	private $em;

	public function __construct(EntityManager $em)
	{
		$this->em = $em;
	}	

	public function log($type, $channel, $message) {
		$log = new AuditLog();

		$log->setType($type);
		$log->setChannel($channel);
		$log->setMessage($message);

		$this->em->persist($log);
		$this->em->flush();
	}
	


}