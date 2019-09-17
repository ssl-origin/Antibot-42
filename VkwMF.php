<?php
/**
*
*  @package Antibot 42
*  @copyright (c) 2019 Татьяна5 and Nekstati
*  @license GNU General Public License, version 2 (GPL-2.0)
*
*/
 namespace nekstati\antibot42; use Symfony\Component\HttpKernel\KernelEvents; use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent; use Symfony\Component\HttpKernel\Exception\NotFoundHttpException; use Symfony\Component\EventDispatcher\EventSubscriberInterface; class VkwMF implements EventSubscriberInterface { protected $wuNdw, $FTkBS; public function __construct(\nekstati\antibot42\RZnJl $LidXz, \nekstati\antibot42\HIFRp $wDlqi) { $this->wuNdw = $LidXz; $this->FTkBS = $wDlqi; } public function ZDvACW(GetResponseForExceptionEvent $Tqeb0) { goto fGZQz; upnHC: x7Oef: goto RXwuJ; fGZQz: if ($this->FTkBS->b7a6s["\155\145\x74\x68\x6f\x64\63"]) { goto x7Oef; } goto lVlju; yQikm: $v87lw = $this->FTkBS->GAAsc; goto kj1ej; kj1ej: if (!($yRomt instanceof NotFoundHttpException && $yRomt->getStatusCode() == "\x34\60\x34" && $KvFOA->getPathInfo() == "\57" . $v87lw)) { goto oAVl6; } goto z32m0; csvEG: oAVl6: goto bjU6u; RXwuJ: $yRomt = $Tqeb0->getException(); goto xMztQ; Ti1r0: $Tqeb0->setResponse($c9gdT); goto csvEG; z32m0: $c9gdT = $this->wuNdw->nmqnC($v87lw); goto Ti1r0; lVlju: return; goto upnHC; xMztQ: $KvFOA = $Tqeb0->getRequest(); goto yQikm; bjU6u: } public static function getSubscribedEvents() { goto wxyCG; CQNBk: return []; goto WYvJN; WYvJN: wO3Jh: goto BzZw2; wxyCG: if (!defined("\101\x44\115\x49\116\x5f\123\x54\x41\122\124")) { goto wO3Jh; } goto CQNBk; BzZw2: return [KernelEvents::EXCEPTION => ["\132\104\x76\x41\x43\x57", 2001]]; goto KL_EE; KL_EE: } }
