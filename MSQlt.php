<?php
/**
*
*  @package Antibot 42
*  @copyright (c) 2019 Татьяна5 and Nekstati
*  @license GNU General Public License, version 2 (GPL-2.0)
*
*/
 namespace nekstati\antibot42; use Symfony\Component\HttpKernel\KernelEvents; use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent; use Symfony\Component\HttpKernel\Exception\NotFoundHttpException; use Symfony\Component\EventDispatcher\EventSubscriberInterface; class MSQlt implements EventSubscriberInterface { protected $DgzcE, $MlPi3; public function __construct(\nekstati\antibot42\K3qvN $xfVw3, \nekstati\antibot42\hXiG2 $deb3w) { $this->DgzcE = $xfVw3; $this->MlPi3 = $deb3w; } public function lOnMht(GetResponseForExceptionEvent $cyBjJ) { goto e6qR6; l0sKX: $cyBjJ->setResponse($vZXqr); goto ASCsN; Sj62K: $NOPjB = $this->MlPi3->sOQac; goto W2i74; UyBb9: $OsVmJ = $cyBjJ->getRequest(); goto Sj62K; zKDIV: return; goto cu50a; e6qR6: if ($this->MlPi3->cucmf["\x6d\x65\164\x68\157\x64\x33"]) { goto VjM5e; } goto zKDIV; W2i74: if (!($CgMqb instanceof NotFoundHttpException && $CgMqb->getStatusCode() == "\x34\60\x34" && $OsVmJ->getPathInfo() == "\x2f" . $NOPjB)) { goto l6mV8; } goto JPQ3d; ASCsN: l6mV8: goto FUGF2; gaPEF: $CgMqb = $cyBjJ->getException(); goto UyBb9; JPQ3d: $vZXqr = $this->DgzcE->EwcyU($NOPjB); goto l0sKX; cu50a: VjM5e: goto gaPEF; FUGF2: } public static function getSubscribedEvents() { goto UYB_3; OynxE: apWrC: goto ERrE0; CcQRf: return []; goto OynxE; ERrE0: return [KernelEvents::EXCEPTION => ["\x6c\x4f\156\x4d\x68\x74", 2001]]; goto vd6nA; UYB_3: if (!defined("\x41\104\x4d\x49\116\137\x53\x54\x41\122\124")) { goto apWrC; } goto CcQRf; vd6nA: } }
