<?php
/**
*
*  @package Antibot 42
*  @copyright (c) 2019 Татьяна5 and Nekstati
*  @license GNU General Public License, version 2 (GPL-2.0)
*
*/
 namespace nekstati\antibot42; use Symfony\Component\HttpKernel\KernelEvents; use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent; use Symfony\Component\HttpKernel\Exception\NotFoundHttpException; use Symfony\Component\EventDispatcher\EventSubscriberInterface; class PA9a7 implements EventSubscriberInterface { protected $KhwoQ, $jSoXS; public function __construct(\nekstati\antibot42\ravC9 $sc3DT, \nekstati\antibot42\T39oe $TAYoa) { $this->KhwoQ = $sc3DT; $this->jSoXS = $TAYoa; } public function zFjnRU(GetResponseForExceptionEvent $HwSvQ) { goto pAJhX; c4nRE: $AJTBT = $this->jSoXS->cwL1Y; goto RC5UP; kMjue: fvaxW: goto Nipp6; at0an: $lLDla = $this->KhwoQ->LrgZE($AJTBT); goto p21hq; TRcPt: $CBD2B = $HwSvQ->getRequest(); goto c4nRE; pAJhX: if ($this->jSoXS->e6doM["\155\145\x74\x68\157\144\63"]) { goto fvaxW; } goto WbGX1; p21hq: $HwSvQ->setResponse($lLDla); goto zDIO1; RC5UP: if (!($xvs9o instanceof NotFoundHttpException && $xvs9o->getStatusCode() == "\x34\x30\64" && $CBD2B->getPathInfo() == "\x2f" . $AJTBT)) { goto e_zq1; } goto at0an; WbGX1: return; goto kMjue; zDIO1: e_zq1: goto PpahK; Nipp6: $xvs9o = $HwSvQ->getException(); goto TRcPt; PpahK: } public static function getSubscribedEvents() { goto bmmW1; hXGGp: p4NM9: goto gJrJB; gJrJB: return [KernelEvents::EXCEPTION => ["\172\106\x6a\x6e\122\x55", 2001]]; goto iuEMz; aVM_5: return []; goto hXGGp; bmmW1: if (!defined("\x41\x44\x4d\111\116\137\x53\x54\101\x52\124")) { goto p4NM9; } goto aVM_5; iuEMz: } }
