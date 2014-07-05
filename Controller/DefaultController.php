<?php

namespace BBIT\AuditLogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $this->get('bbit_audit_log.service')->log("success", "example", "the sample was run");

        return $this->render('BBITAuditLogBundle:Default:index.html.twig');
    }
}
