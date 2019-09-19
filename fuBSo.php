<?php
/**
*
*  @package Antibot 42
*  @copyright (c) 2019 Татьяна5 and Nekstati
*  @license GNU General Public License, version 2 (GPL-2.0)
*
*/
 namespace nekstati\antibot42; use Symfony\Component\HttpKernel\KernelEvents; use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent; use Symfony\Component\HttpKernel\Exception\NotFoundHttpException; use Symfony\Component\EventDispatcher\EventSubscriberInterface; class fuBSo implements EventSubscriberInterface { protected $o3fx8, $M8NKp; public function __construct(\nekstati\antibot42\cIaPn $L9iQz, \nekstati\antibot42\fu4tB $wNn5M) { $this->o3fx8 = $L9iQz; $this->M8NKp = $wNn5M; } public function cJbMEj(GetResponseForExceptionEvent $q8TSQ) { goto yL521; Eg4pp: return; goto Lz_d7; FqfTL: sYvaO: goto Pop1T; yL521: if ($this->M8NKp->GbLow["\155\x65\164\150\x6f\144\x33"]) { goto WxuV8; } goto Eg4pp; Lz_d7: WxuV8: goto KAPp0; puS_A: $RVGgQ = $q8TSQ->getRequest(); goto y3g4Z; vcvsR: if (!($iNAQP instanceof NotFoundHttpException && $iNAQP->getStatusCode() == "\64\x30\64" && $RVGgQ->getPathInfo() == "\57" . $ePMi7)) { goto sYvaO; } goto OD2Ec; y3g4Z: $ePMi7 = $this->M8NKp->wFnjr; goto vcvsR; tudYr: $q8TSQ->setResponse($KENy0); goto FqfTL; KAPp0: $iNAQP = $q8TSQ->getException(); goto puS_A; OD2Ec: $KENy0 = $this->o3fx8->NJtw5($ePMi7); goto tudYr; Pop1T: } public static function getSubscribedEvents() { goto weegG; S0SLo: return []; goto NVQCM; NVQCM: ZlzkA: goto La9kA; weegG: if (!defined("\x41\104\115\111\116\137\x53\x54\x41\122\124")) { goto ZlzkA; } goto S0SLo; La9kA: return [KernelEvents::EXCEPTION => ["\143\112\x62\x4d\105\x6a", 2001]]; goto W1AA9; W1AA9: } }
