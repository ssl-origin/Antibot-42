<?php
/**
*
*  @package Antibot 42
*  @copyright (c) 2019 Татьяна5 and Nekstati
*  @license GNU General Public License, version 2 (GPL-2.0)
*
*/
 namespace nekstati\antibot42; use Symfony\Component\HttpKernel\KernelEvents; use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent; use Symfony\Component\HttpKernel\Exception\NotFoundHttpException; use Symfony\Component\EventDispatcher\EventSubscriberInterface; class jzDAu implements EventSubscriberInterface { protected $JG0gu, $UauYY; public function __construct(\nekstati\antibot42\bkfp0 $aAFMP, \nekstati\antibot42\on5nc $FT1Fb) { $this->JG0gu = $aAFMP; $this->UauYY = $FT1Fb; } public function LeEqfp(GetResponseForExceptionEvent $uqFYY) { goto zb_iM; IsZy6: $jlLPj = $this->JG0gu->Qyngt($xkPRr); goto G7pCd; f9nCH: if (!($TzEyH instanceof NotFoundHttpException && $TzEyH->getStatusCode() == "\64\x30\64" && $ASGfQ->getPathInfo() == "\x2f" . $xkPRr)) { goto U5qFJ; } goto IsZy6; G7pCd: $uqFYY->setResponse($jlLPj); goto ZZxG5; q1Vm8: $TzEyH = $uqFYY->getException(); goto smIO3; smIO3: $ASGfQ = $uqFYY->getRequest(); goto IXH1z; zb_iM: if ($this->UauYY->Kxt3o["\155\x65\x74\x68\157\144\x33"]) { goto LtGPb; } goto FWhmi; IXH1z: $xkPRr = $this->UauYY->VRs07; goto f9nCH; aOaUn: LtGPb: goto q1Vm8; FWhmi: return; goto aOaUn; ZZxG5: U5qFJ: goto inps9; inps9: } public static function getSubscribedEvents() { goto kIcLL; FKp8n: cSdnV: goto qQgK9; x0ry6: return []; goto FKp8n; qQgK9: return [KernelEvents::EXCEPTION => ["\x4c\x65\105\161\146\x70", 2001]]; goto Mu9N0; kIcLL: if (!defined("\101\104\x4d\x49\x4e\x5f\x53\x54\101\122\124")) { goto cSdnV; } goto x0ry6; Mu9N0: } }
