<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6432b1c44fd2b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceGateway; use nusoap_client; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; class Mellat extends Gateway { const uoewmoeookiweeac = "\150\164\x74\160\163\72\x2f\x2f\142\x70\155\x2e\x73\150\141\x70\141\x72\141\153\x2e\x69\x72\57\x70\147\167\x63\x68\x61\x6e\156\145\154\x2f\163\145\x72\166\151\143\x65\x73\57\x70\x67\167\77\x77\163\144\154"; const sweaamyegaowkuiq = "\150\164\164\x70\72\57\x2f\151\156\x74\x65\x72\x66\x61\x63\145\163\x2e\143\x6f\x72\x65\x2e\x73\167\x2e\x62\x70\163\x2e\143\x6f\155\57"; protected ?string $terminal = null; protected ?string $username = null; protected ?string $password = null; public function __construct() { $this->method_title = __("\x4d\145\x6c\154\x61\164\40\102\x61\x6e\153", PR__MDL__WOOCOMMERCE_GATEWAY); parent::__construct(); $this->terminal = $this->get_option(self::gcegwkuowcquosok); $this->username = $this->get_option(self::csiaccacwgeeqwwo); $this->password = $this->get_option(self::akywgoyaseymiyka); } public function amcquiasoqygoyuc() { return $this->username; } public function iuqugigaawguosig() { return $this->password; } public function qkgggseyuwcyqouo() { return $this->terminal; } protected function ikgwqyuyckaewsow() : array { return ["\x61\x63\x63\157\165\x6e\164\x5f\x63\157\x6e\146\x69\147" => [self::squoamkioomemiyi => self::qescuiwgsyuikume, self::qescuiwgsyuikume => __("\x42\x61\x6e\x6b\x20\x4d\145\x6c\154\x61\x74\40\141\143\x63\157\165\156\164\x20\163\x65\x74\x74\151\x6e\x67\163", PR__MDL__WOOCOMMERCE_GATEWAY)], self::gcegwkuowcquosok => [self::squoamkioomemiyi => self::TEXT, self::qescuiwgsyuikume => __("\124\x65\x72\x6d\151\x6e\141\x6c\x20\x49\104", PR__MDL__WOOCOMMERCE_GATEWAY), "\144\145\x73\143\x5f\164\x69\160" => true, self::eqkeooqcsscoggia => __("\x42\x61\156\153\40\x4d\x65\154\154\141\164\40\x70\x6f\x72\x74\x61\154\40\164\145\162\x6d\x69\156\141\x6c\x20\x6e\165\155\x62\145\x72", PR__MDL__WOOCOMMERCE_GATEWAY)], self::csiaccacwgeeqwwo => [self::squoamkioomemiyi => self::TEXT, self::qescuiwgsyuikume => __("\125\x73\145\x72\x6e\141\155\x65", PR__MDL__WOOCOMMERCE_GATEWAY), "\144\145\x73\x63\x5f\x74\151\160" => true, self::eqkeooqcsscoggia => __("\102\x61\x6e\153\x20\115\145\154\x6c\x61\164\x20\160\157\162\164\x61\x6c\x20\x75\x73\145\162\x6e\141\x6d\145", PR__MDL__WOOCOMMERCE_GATEWAY)], self::akywgoyaseymiyka => [self::squoamkioomemiyi => self::TEXT, self::qescuiwgsyuikume => __("\x50\141\163\x73\167\157\162\x64", PR__MDL__WOOCOMMERCE_GATEWAY), "\x64\145\163\x63\137\164\151\x70" => true, self::eqkeooqcsscoggia => __("\102\x61\x6e\153\40\115\x65\x6c\x6c\x61\164\40\x70\x6f\x72\164\141\x6c\40\x70\141\163\163\x77\x6f\162\x64", PR__MDL__WOOCOMMERCE_GATEWAY)]]; } protected function aqmwamyiwgeeymqa($umwqusowiqmyseom) { $smowyuyseuwiaiei = $this->imuokicsysisyuge("\x49\122\122"); $qsmogugokoieokgw = date("\171\x6d\144\x48\151\x73"); $ekiuyucoiagmscgy = $this->aykimauwwuuqeesq(); $gwogaekoayemugqs = $this->ayeawyuummwiieyi("\x6f\x72\x64\145\x72\x5f\156\x75\155\x62\145\x72"); $ukwokcuqauuosmoo = sprintf(__("\x4f\x72\144\145\162\40\116\165\155\x62\x65\x72\40\43\40\45\x73", PR__MDL__WOOCOMMERCE_GATEWAY), $gwogaekoayemugqs); $qcakkkwickkwyuck = new nusoap_client(self::uoewmoeookiweeac); $mgsouageeauuamse = date("\131\155\144"); $gceecicmaecgsiww = date("\110\x69\x73"); $scuawkiakquoyqyw = false; $kyogmqccmyksmeyy = 0; $oauoakmumkwscagw = 0; $ocuammmyasymmyuc = $qcakkkwickkwyuck->euekiyuksecoccus(); if (!$ocuammmyasymmyuc) { goto cecuyayqoioasumi; } $scuawkiakquoyqyw = true; $oauoakmumkwscagw = $ocuammmyasymmyuc; cecuyayqoioasumi: $qookweymeqawmcwo = $this->miywwkceumyiacom(["\x61\x6d\157\x75\156\x74" => $smowyuyseuwiaiei, "\157\x72\x64\145\162\x49\144" => $qsmogugokoieokgw, "\160\x61\x79\145\162\x49\x64" => $kyogmqccmyksmeyy, "\x6c\x6f\x63\141\154\104\x61\164\145" => $mgsouageeauuamse, "\154\x6f\x63\141\154\124\151\155\145" => $gceecicmaecgsiww, "\x63\141\x6c\x6c\x42\x61\143\x6b\x55\162\154" => $ekiuyucoiagmscgy, "\141\x64\x64\151\x74\151\157\x6e\141\x6c\x44\141\164\141" => $ukwokcuqauuosmoo]); $sogksuscggsicmac = $qcakkkwickkwyuck->call("\142\160\x50\x61\x79\122\145\161\x75\x65\x73\x74", $qookweymeqawmcwo, self::sweaamyegaowkuiq); if ($qcakkkwickkwyuck->fault) { goto asmecuqiyyswueqe; } $ocuammmyasymmyuc = $qcakkkwickkwyuck->euekiyuksecoccus(); $wgmmgqouueiyakow = $sogksuscggsicmac; if ($ocuammmyasymmyuc) { goto qwigomakwmyiwkgo; } $wcgmoqucoyqgmicy = explode("\x2c", $wgmmgqouueiyakow); $aycegyeagyyeyaqm = $wcgmoqucoyqgmicy[0]; if ($aycegyeagyyeyaqm == "\x30") { goto qogqewiwmwiwskgm; } $scuawkiakquoyqyw = true; $oauoakmumkwscagw = $aycegyeagyyeyaqm; goto qgoiooayqmqqsiok; qogqewiwmwiwskgm: $ycyucwoysmwkgiui = __("\103\x6f\x6e\x6e\x65\143\x74\151\x6e\x67\40\164\157\x20\164\150\145\40\142\141\156\153\x20\x2e\56\x2e\56\x2e", PR__MDL__WOOCOMMERCE_GATEWAY); $ycyucwoysmwkgiui = $this->sscegwueamckwmcy("\167\157\x6f\x63\x6f\x6d\155\145\x72\x63\x65\137\160\x61\x79\x6d\145\x6e\x74\x5f\x6d\x65\x6c\154\x61\164\137\147\141\x74\145\167\141\171\x5f\156\157\x74\x69\x63\145", $ycyucwoysmwkgiui, $umwqusowiqmyseom->get_id()); if (!$ycyucwoysmwkgiui) { goto qiaqsassksqiuyae; } DecoratorWoocommerce::yiggueaiwiygoiyi($ycyucwoysmwkgiui, self::ckcawaoawwioqecq); qiaqsassksqiuyae: $this->cqscqicucmeamkyq("\167\157\157\x63\157\x6d\155\145\x72\x63\145\137\160\141\x79\155\145\x6e\x74\137\x6d\x65\x6c\x6c\x61\164\x5f\x67\x61\x74\145\167\141\x79\137\142\x65\x66\157\162\145\137\x73\x65\156\x64", $umwqusowiqmyseom->get_id()); echo $this->iuygowkemiiwqmiw(self::yquayuasseumiiii, ["\x72\145\x66\137\151\x64" => $wcgmoqucoyqgmicy[1]]); qgoiooayqmqqsiok: goto myoicgcuugciueis; qwigomakwmyiwkgo: $scuawkiakquoyqyw = true; $oauoakmumkwscagw = $ocuammmyasymmyuc; myoicgcuugciueis: goto csscmcacoikwsecs; asmecuqiyyswueqe: $scuawkiakquoyqyw = true; $oauoakmumkwscagw = $this->sqmuqsscmimwqoki("\122\x65\163\103\x6f\144\x65"); csscmcacoikwsecs: $iswcokucwmiosiaq = ''; if (!$scuawkiakquoyqyw) { goto cuykwgmswkskqkyi; } $iswcokucwmiosiaq = $this->ueeagokqmgisgauy($oauoakmumkwscagw); cuykwgmswkskqkyi: return $iswcokucwmiosiaq; } public function miywwkceumyiacom($eyagkkkqkwcuygso) { return ManipulateFormat::omaawkkwwyesqwcc($eyagkkkqkwcuygso, ["\165\163\x65\162\116\141\x6d\x65" => $this->amcquiasoqygoyuc(), "\x74\145\162\x6d\x69\x6e\x61\154\x49\x64" => $this->qkgggseyuwcyqouo(), "\165\163\145\162\x50\141\163\x73\167\157\162\x64" => $this->iuqugigaawguosig()]); } protected function ussowkigumoaoowo($umwqusowiqmyseom) { $ukoikcoywmwowwum = $this->sqmuqsscmimwqoki("\123\x61\154\x65\122\145\x66\x65\162\145\156\143\145\x49\x64", null); $this->iwoykscaosqmksku($ukoikcoywmwowwum); $qcakkkwickkwyuck = new nusoap_client(self::uoewmoeookiweeac); $ouocmikcoimqskck = 0; $iswcokucwmiosiaq = ''; $iueymcwwscwqkiyq = ''; $uamcoiueqaamsqma = ''; $aycegyeagyyeyaqm = $this->sqmuqsscmimwqoki("\x52\145\163\103\x6f\x64\145", null); if ($aycegyeagyyeyaqm == 0) { goto kooskuwkuayiuose; } if ($aycegyeagyyeyaqm == 17) { goto eyiamcekkgkiawqy; } $qiiwsqukiueccuqw = $aycegyeagyyeyaqm; $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; $ukoikcoywmwowwum = $this->sqmuqsscmimwqoki("\123\x61\x6c\145\x52\x65\146\x65\162\x65\x6e\143\145\111\x64", null); goto twkmiuomimomscew; eyiamcekkgkiawqy: $qiiwsqukiueccuqw = 0; $iueymcwwscwqkiyq = self::moimkuyueiyqwyki; $ukoikcoywmwowwum = $this->sqmuqsscmimwqoki("\x53\141\x6c\x65\x52\x65\146\145\x72\x65\x6e\143\x65\x49\144", null); twkmiuomimomscew: goto qwcegcuowwgiccos; kooskuwkuayiuose: $iiwmeimguameeome = ''; if ($ocuammmyasymmyuc = $qcakkkwickkwyuck->euekiyuksecoccus()) { goto goacqqsgaaigyuaw; } $qsmogugokoieokgw = $this->sqmuqsscmimwqoki("\123\141\x6c\x65\117\162\x64\x65\162\x49\x64"); $eyagkkkqkwcuygso = $this->ysoiykisqcssuuke($qsmogugokoieokgw); $sogksuscggsicmac = $qcakkkwickkwyuck->call("\x62\x70\x56\x65\162\x69\146\x79\x52\145\x71\x75\145\163\164", $eyagkkkqkwcuygso, self::sweaamyegaowkuiq); if ($qcakkkwickkwyuck->fault) { goto ocokwuuquaokmasc; } if ($ocuammmyasymmyuc = $qcakkkwickkwyuck->euekiyuksecoccus()) { goto uukumskkeggaowck; } if ($sogksuscggsicmac == 0) { goto sqiciiuwmykocycc; } $iiwmeimguameeome = 0; $uqwksweqaawueieq = 0; goto eequksumcoogyoem; sqiciiuwmykocycc: if ($ocuammmyasymmyuc = $qcakkkwickkwyuck->euekiyuksecoccus()) { goto kiqogmwcgcamwiig; } $eyagkkkqkwcuygso = $this->ysoiykisqcssuuke($qsmogugokoieokgw); $sogksuscggsicmac = $qcakkkwickkwyuck->call("\x62\x70\111\156\161\x75\x69\x72\171\122\x65\x71\x75\x65\x73\164", $eyagkkkqkwcuygso, self::sweaamyegaowkuiq); if ($sogksuscggsicmac == 0) { goto kwagwqyusyiyoaqs; } $iiwmeimguameeome = 0; $uqwksweqaawueieq = 0; goto yowsmsiyimmimemc; kwagwqyusyiyoaqs: if ($qcakkkwickkwyuck->fault) { goto sciwggaeogcoesiu; } if ($ocuammmyasymmyuc = $qcakkkwickkwyuck->euekiyuksecoccus()) { goto kuicqywysciceggs; } $uqwksweqaawueieq = 1; goto mkwskuycuyguqqok; kuicqywysciceggs: $iiwmeimguameeome = 1; $uqwksweqaawueieq = 0; mkwskuycuyguqqok: goto eqkauqciwewmgeoi; sciwggaeogcoesiu: $iiwmeimguameeome = 1; $uqwksweqaawueieq = 0; eqkauqciwewmgeoi: yowsmsiyimmimemc: goto iomcaiwewsawiamu; kiqogmwcgcamwiig: $iiwmeimguameeome = 1; $uqwksweqaawueieq = 0; iomcaiwewsawiamu: eequksumcoogyoem: goto cggowoquuiwqkyew; uukumskkeggaowck: $iiwmeimguameeome = 1; $uqwksweqaawueieq = 0; cggowoquuiwqkyew: goto yiwiqaqmwiogawym; ocokwuuquaokmasc: $iiwmeimguameeome = 1; $uqwksweqaawueieq = 0; yiwiqaqmwiogawym: goto meawswgwagoqgkye; goacqqsgaaigyuaw: $iiwmeimguameeome = 1; $uqwksweqaawueieq = 0; meawswgwagoqgkye: if (!($uqwksweqaawueieq == 1)) { goto eiawsoasmscmqswa; } if ($ocuammmyasymmyuc = $qcakkkwickkwyuck->euekiyuksecoccus()) { goto qmiwsequckckoaei; } $qsmogugokoieokgw = $this->sqmuqsscmimwqoki("\123\x61\x6c\x65\x4f\162\x64\145\x72\111\x64"); $eyagkkkqkwcuygso = $this->ysoiykisqcssuuke($qsmogugokoieokgw); $sogksuscggsicmac = $qcakkkwickkwyuck->call("\x62\160\123\x65\x74\164\x6c\145\122\x65\161\x75\145\x73\x74", $eyagkkkqkwcuygso, self::sweaamyegaowkuiq); if ($sogksuscggsicmac == 0) { goto kecwuwwcwokuksyq; } $iiwmeimguameeome = 1; $uqwksweqaawueieq = 0; goto qgegkeomwscwwiuw; kecwuwwcwokuksyq: if (!$qcakkkwickkwyuck->fault) { goto mswsoaimesegiiic; } $uqwksweqaawueieq = 0; goto egasokooagakisiy; mswsoaimesegiiic: if ($ocuammmyasymmyuc = $qcakkkwickkwyuck->euekiyuksecoccus()) { goto wcesymwqykqoyuqk; } $qiiwsqukiueccuqw = 0; $iueymcwwscwqkiyq = self::amcogigwsaqssuai; $uqwksweqaawueieq = 1; $ukoikcoywmwowwum = $this->sqmuqsscmimwqoki("\x53\141\154\145\x52\145\146\145\162\145\x6e\x63\x65\x49\144"); goto usqgaogkqgemuima; wcesymwqykqoyuqk: $iiwmeimguameeome = 1; $uqwksweqaawueieq = 0; usqgaogkqgemuima: egasokooagakisiy: qgegkeomwscwwiuw: goto goeoymmqqqeeoime; qmiwsequckckoaei: $uqwksweqaawueieq = 0; goeoymmqqqeeoime: eiawsoasmscmqswa: if (!($iiwmeimguameeome == 1)) { goto cgewcsueoyaeikgm; } $qsmogugokoieokgw = $this->sqmuqsscmimwqoki("\x53\141\154\145\x4f\162\144\145\162\x49\144"); $eyagkkkqkwcuygso = $this->ysoiykisqcssuuke($qsmogugokoieokgw); $sogksuscggsicmac = $qcakkkwickkwyuck->call("\x62\160\122\x65\x76\145\162\x73\x61\x6c\122\145\x71\165\x65\x73\x74", $eyagkkkqkwcuygso, self::sweaamyegaowkuiq); if ($qcakkkwickkwyuck->fault) { goto cuoqqgaygogsmmic; } if ($qcakkkwickkwyuck->euekiyuksecoccus()) { goto ygkcacsyyckescqs; } $qiiwsqukiueccuqw = $sogksuscggsicmac; $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; if ($sogksuscggsicmac == 0) { goto ickcmqoiosquugwe; } $ouocmikcoimqskck = 1; goto qmeoaqmsuseueqiy; ickcmqoiosquugwe: $ouocmikcoimqskck = 2; qmeoaqmsuseueqiy: ygkcacsyyckescqs: cuoqqgaygogsmmic: cgewcsueoyaeikgm: if (in_array($iueymcwwscwqkiyq, [self::amcogigwsaqssuai, self::moimkuyueiyqwyki])) { goto sukskmcwsoysiuqu; } $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; sukskmcwsoysiuqu: $aycegyeagyyeyaqm = $this->sqmuqsscmimwqoki("\122\145\163\x43\157\x64\x65", null); if (!($iueymcwwscwqkiyq == self::uasuowkaguiwoouw)) { goto mqccmesakuemceqi; } $qiiwsqukiueccuqw = $aycegyeagyyeyaqm; if (!($aycegyeagyyeyaqm == 17)) { goto igymseewwyiocoug; } $qiiwsqukiueccuqw = 0; $iueymcwwscwqkiyq = self::moimkuyueiyqwyki; igymseewwyiocoug: mqccmesakuemceqi: qwcegcuowwgiccos: $emcqymoquqcysyui = $this->sqmuqsscmimwqoki("\x53\141\154\x65\x4f\x72\x64\x65\162\x49\144", null); switch ($iueymcwwscwqkiyq) { case self::amcogigwsaqssuai: $uamcoiueqaamsqma = sprintf("\45\x73\72\x20\45\163", __("\124\x72\x61\x6e\x73\x61\143\164\151\157\156\40\162\145\x71\165\x65\163\x74\40\x6e\165\155\142\x65\162", PR__MDL__WOOCOMMERCE_GATEWAY), $emcqymoquqcysyui); goto qcessicwuikwqsis; case self::moimkuyueiyqwyki: if (isset($qiiwsqukiueccuqw)) { goto ieumumsgyguceusy; } $qiiwsqukiueccuqw = $this->sqmuqsscmimwqoki("\x52\145\163\103\157\x64\145", null); ieumumsgyguceusy: $uamcoiueqaamsqma = sprintf(__("\124\x72\141\x6e\163\x61\x63\164\151\x6f\x6e\x20\x63\x61\156\143\145\x6c\145\x64\40\x62\x65\143\141\165\x73\x65\x20\x6f\x66\x3a\x20\45\163\x2c\40\x72\145\x73\x43\157\x64\x65\x3a\40\45\x73", PR__MDL__WOOCOMMERCE_GATEWAY), $this->ueeagokqmgisgauy($qiiwsqukiueccuqw), $aycegyeagyyeyaqm); $iswcokucwmiosiaq = $uamcoiueqaamsqma; switch ($ouocmikcoimqskck) { case 1: $umwqusowiqmyseom->add_order_note(__("\124\150\145\40\160\x61\x79\x6d\145\x6e\164\x20\141\x6d\157\165\x6e\x74\x20\x6d\x75\x73\x74\x20\142\145\40\162\x65\164\x75\162\156\x65\144\40\x74\157\x20\x74\x68\x65\40\x75\163\x65\x72\x27\163\x20\x61\143\x63\x6f\x75\156\x74\40\x62\145\x63\141\x75\x73\145\40\141\x20\163\x79\163\x74\x65\155\40\x65\x72\x72\157\x72\40\x6f\x63\x63\165\x72\162\145\x64\x20\x77\150\x69\x6c\145\x20\x72\145\x74\165\x72\x6e\151\156\x67\40\x74\x68\x65\x20\141\155\157\165\156\x74\56", PR__MDL__WOOCOMMERCE_GATEWAY), 1); goto coywmiyqgsweuiic; case 2: $umwqusowiqmyseom->add_order_note(__("\x54\150\x65\40\x61\x6d\x6f\165\156\164\x20\160\141\x69\144\40\x62\171\x20\164\x68\x65\x20\x75\x73\x65\162\x20\167\x61\163\40\x72\x65\164\x75\x72\x6e\145\144\x20\164\x68\162\157\165\x67\x68\x20\164\x68\145\x20\x62\x61\156\153\x2e", PR__MDL__WOOCOMMERCE_GATEWAY), 1); goto coywmiyqgsweuiic; } siqagquguiemuoku: coywmiyqgsweuiic: goto qcessicwuikwqsis; case self::uasuowkaguiwoouw: if (!isset($qiiwsqukiueccuqw)) { goto ycakugokkqkuqyiu; } $iswcokucwmiosiaq = sprintf(__("\124\x72\x61\156\163\x61\143\164\x69\157\156\40\x66\x61\x69\154\x65\x64\x20\x62\x65\143\x61\x75\x73\145\40\x6f\146\72\40\x25\163\x2c\x20\162\145\163\x43\157\144\145\x3a\40\x25\163", PR__MDL__WOOCOMMERCE_GATEWAY), $this->ueeagokqmgisgauy($qiiwsqukiueccuqw), $aycegyeagyyeyaqm); $uamcoiueqaamsqma = $iswcokucwmiosiaq; ycakugokkqkuqyiu: goto qcessicwuikwqsis; } yssscwioiyygssec: qcessicwuikwqsis: $icwicymcioeyeyek = ["\x73\x61\x6c\145\137\x6f\162\x64\145\x72\x5f\151\144" => $emcqymoquqcysyui, "\x74\162\141\156\163\141\143\x74\x69\x6f\x6e\137\151\x64" => $ukoikcoywmwowwum]; return compact("\x73\x74\x61\164\x75\163", "\164\162\141\x6e\163\x61\x63\164\151\x6f\x6e\x49\144", "\x65\x72\162\x6f\162", "\155\145\163\163\141\x67\x65", "\144\141\x74\x61"); } public function ysoiykisqcssuuke($qsmogugokoieokgw) { $ekiiqoqckggacmos = $this->sqmuqsscmimwqoki("\x53\141\x6c\145\x52\145\146\x65\x72\x65\156\143\x65\x49\x64", null); $emcqymoquqcysyui = $this->sqmuqsscmimwqoki("\x53\x61\x6c\x65\117\x72\144\x65\162\111\144", null); return $this->miywwkceumyiacom(["\157\x72\x64\x65\x72\111\144" => $qsmogugokoieokgw, "\x73\x61\x6c\x65\x4f\x72\144\145\x72\x49\x64" => $emcqymoquqcysyui, "\x73\x61\x6c\x65\x52\145\146\x65\162\x65\156\143\145\x49\x64" => $ekiiqoqckggacmos]); } protected function qayscgqweckkusow() : array { $ywsyoyimyiyekuuk = parent::qayscgqweckkusow(); return array_merge($ywsyoyimyiyekuuk, ["\163\x61\x6c\x65\x5f\157\162\144\145\162\137\151\144" => __("\123\x61\154\145\x20\x4f\162\x64\x65\x72\40\111\x44", PR__MDL__WOOCOMMERCE_GATEWAY)]); } private function ueeagokqmgisgauy($ymacoouqwcqwwagu) { switch ($ymacoouqwcqwwagu) { case "\x73\145\x74\x74\x6c\x65": $uamcoiueqaamsqma = __("\x4d\x61\156\x75\141\154\40\x53\x65\x74\x74\145\154\40\x6f\x70\x65\162\x61\x74\151\157\x6e\x20\x70\x65\162\146\x6f\162\155\145\x64\40\x73\165\143\x63\x65\x73\163\146\x75\x6c\154\x79\56", PR__MDL__WOOCOMMERCE_GATEWAY); goto oouoqimaaqcmccay; case -2: case -1: $uamcoiueqaamsqma = __("\106\141\x69\x6c\x75\x72\145\40\151\156\40\143\157\156\x6e\145\x63\164\151\157\156\x20\x77\151\x74\x68\40\164\x68\145\40\x62\141\156\x6b\x2e", PR__MDL__WOOCOMMERCE_GATEWAY); goto oouoqimaaqcmccay; case 11: $uamcoiueqaamsqma = __("\x43\141\x72\144\40\x6e\165\x6d\142\145\x72\40\x69\163\x20\156\x6f\x74\x20\166\141\154\151\144\x2e", PR__MDL__WOOCOMMERCE_GATEWAY); goto oouoqimaaqcmccay; case 12: $uamcoiueqaamsqma = __("\x49\x6e\x76\145\x6e\164\157\x72\171\x20\x69\x73\x20\156\x6f\164\40\x65\156\x6f\165\147\150\56", PR__MDL__WOOCOMMERCE_GATEWAY); goto oouoqimaaqcmccay; case 13: $uamcoiueqaamsqma = __("\131\157\x75\x72\x20\x73\x65\x63\157\x6e\144\40\x70\141\x73\163\167\x6f\162\x64\40\151\x73\x20\x69\156\143\x6f\x72\162\x65\143\164\x2e", PR__MDL__WOOCOMMERCE_GATEWAY); goto oouoqimaaqcmccay; case 14: $uamcoiueqaamsqma = __("\x54\x68\x65\40\x70\x61\x73\x73\167\x6f\x72\144\x20\145\156\x74\145\162\40\x74\151\155\x65\163\x20\151\x73\40\155\x6f\162\x65\40\x74\150\141\156\40\164\x68\162\x65\x73\150\157\x6c\144\x2e", PR__MDL__WOOCOMMERCE_GATEWAY); goto oouoqimaaqcmccay; case 15: $uamcoiueqaamsqma = __("\x54\x68\145\x20\143\x61\x72\144\40\151\x73\40\156\157\164\40\166\141\154\x69\144\56", PR__MDL__WOOCOMMERCE_GATEWAY); goto oouoqimaaqcmccay; case 16: $uamcoiueqaamsqma = __("\127\x69\x74\150\144\162\x61\x77\40\146\165\x6e\144\163\40\x69\163\40\155\x6f\162\145\x20\x74\150\141\x6e\40\x61\154\x6c\157\167\x65\x64\40\164\x68\162\x65\x73\x68\157\x6c\144\x2e", PR__MDL__WOOCOMMERCE_GATEWAY); goto oouoqimaaqcmccay; case 17: $uamcoiueqaamsqma = __("\x59\157\165\x20\150\141\166\x65\x20\163\164\157\x70\160\x65\x64\40\x74\162\141\x6e\x73\x61\x63\164\x69\156\147\56", PR__MDL__WOOCOMMERCE_GATEWAY); goto oouoqimaaqcmccay; case 18: $uamcoiueqaamsqma = __("\124\150\145\x20\x63\141\x72\144\40\150\141\163\x20\145\x78\x70\151\x72\145\144\x2e", PR__MDL__WOOCOMMERCE_GATEWAY); goto oouoqimaaqcmccay; case 19: $uamcoiueqaamsqma = __("\x41\x6d\x6f\x75\x6e\x74\x20\x69\x73\x20\155\x6f\x72\145\40\164\150\141\x6e\40\141\154\154\157\167\145\144\40\164\150\162\145\163\x68\157\154\144\x2e", PR__MDL__WOOCOMMERCE_GATEWAY); goto oouoqimaaqcmccay; case 111: $uamcoiueqaamsqma = __("\111\x6e\166\x61\x6c\x69\x64\40\x63\141\162\144\x20\x69\163\163\x75\145\162\x2e", PR__MDL__WOOCOMMERCE_GATEWAY); goto oouoqimaaqcmccay; case 112: $uamcoiueqaamsqma = __("\x43\x61\162\144\40\x69\x73\x73\x75\x65\x72\40\163\x77\151\164\x63\x68\x20\x65\162\162\x6f\x72\x20\150\x61\x73\x20\157\x63\143\x75\x72\162\x65\144\x2e", PR__MDL__WOOCOMMERCE_GATEWAY); goto oouoqimaaqcmccay; case 113: $uamcoiueqaamsqma = __("\116\x6f\40\162\x65\x73\x70\x6f\156\163\x65\x20\167\x61\x73\40\x72\x65\x63\145\151\x76\145\x64\x20\x66\162\x6f\155\40\x74\150\x65\x20\x63\141\162\144\x20\151\x73\x73\165\x65\x72\x2e", PR__MDL__WOOCOMMERCE_GATEWAY); goto oouoqimaaqcmccay; case 114: $uamcoiueqaamsqma = __("\124\150\x65\40\143\141\162\144\x68\157\154\144\145\162\x20\x69\163\x20\156\157\164\40\x61\154\154\x6f\167\x65\x64\x20\x74\x6f\40\x70\x65\x72\x66\157\x72\155\40\164\x68\151\163\40\x74\x72\x61\156\x73\x61\x63\164\x69\157\x6e\x2e", PR__MDL__WOOCOMMERCE_GATEWAY); goto oouoqimaaqcmccay; case 21: $uamcoiueqaamsqma = __("\124\150\145\x20\141\143\x63\145\x70\164\x6f\x72\x20\x69\x73\40\156\157\x74\x20\166\x61\x6c\151\144\x2e", PR__MDL__WOOCOMMERCE_GATEWAY); goto oouoqimaaqcmccay; case 23: $uamcoiueqaamsqma = __("\101\40\163\x65\x63\165\x72\x69\164\171\x20\145\162\162\x6f\162\40\150\141\163\40\157\x63\x63\x75\x72\x72\145\144\x2e", PR__MDL__WOOCOMMERCE_GATEWAY); goto oouoqimaaqcmccay; case 24: $uamcoiueqaamsqma = __("\x54\150\x65\x20\x75\x73\x65\x72\x20\x69\x6e\x66\157\162\155\x61\x74\x69\157\x6e\40\x6f\x66\40\x74\x68\145\40\x61\x63\143\x65\160\x74\157\x72\x20\151\x73\x20\156\157\x74\40\x76\141\154\x69\x64\x2e", PR__MDL__WOOCOMMERCE_GATEWAY); goto oouoqimaaqcmccay; case 25: $uamcoiueqaamsqma = __("\124\x68\x65\x20\141\x6d\x6f\165\x6e\x74\x20\x69\163\x20\151\156\166\141\x6c\151\x64\56", PR__MDL__WOOCOMMERCE_GATEWAY); goto oouoqimaaqcmccay; case 31: $uamcoiueqaamsqma = __("\124\150\145\40\141\x6e\163\167\145\x72\40\x69\x73\x20\x69\x6e\166\x61\154\x69\x64\x2e", PR__MDL__WOOCOMMERCE_GATEWAY); goto oouoqimaaqcmccay; case 32: $uamcoiueqaamsqma = __("\124\x68\x65\40\146\157\162\155\x61\x74\40\x6f\146\x20\x74\x68\145\40\145\156\x74\145\162\145\x64\x20\151\x6e\x66\157\x72\155\x61\164\x69\x6f\x6e\40\x69\x73\40\x69\x6e\x63\x6f\x72\x72\145\x63\x74\x2e", PR__MDL__WOOCOMMERCE_GATEWAY); goto oouoqimaaqcmccay; case 33: $uamcoiueqaamsqma = __("\x49\156\166\141\154\151\x64\x20\141\143\x63\157\x75\x6e\164\x2e", PR__MDL__WOOCOMMERCE_GATEWAY); goto oouoqimaaqcmccay; case 34: $uamcoiueqaamsqma = __("\101\40\x73\x79\x73\164\x65\155\40\x65\x72\x72\157\x72\40\x68\141\x73\x20\x6f\143\x63\165\x72\162\x65\144\x2e", PR__MDL__WOOCOMMERCE_GATEWAY); goto oouoqimaaqcmccay; case 35: $uamcoiueqaamsqma = __("\x49\156\x76\141\x6c\x69\144\x20\x64\x61\x74\x65\56", PR__MDL__WOOCOMMERCE_GATEWAY); goto oouoqimaaqcmccay; case 41: $uamcoiueqaamsqma = __("\124\x68\x65\40\162\x65\161\x75\x65\163\164\40\x6e\x75\x6d\x62\145\162\x20\151\163\40\144\165\160\x6c\151\143\141\164\x65\56", PR__MDL__WOOCOMMERCE_GATEWAY); goto oouoqimaaqcmccay; case 42: $uamcoiueqaamsqma = __("\124\150\x65\x72\x65\x20\x69\163\40\156\157\40\x73\165\x63\x68\x20\x74\x72\141\x6e\x73\141\143\164\151\x6f\x6e\56", PR__MDL__WOOCOMMERCE_GATEWAY); goto oouoqimaaqcmccay; case 43: $uamcoiueqaamsqma = __("\x56\145\162\x69\x66\x79\40\150\x61\163\x20\141\154\162\x65\141\144\x79\40\x62\145\x65\x6e\x20\162\145\161\x75\x65\163\164\145\144\x2e", PR__MDL__WOOCOMMERCE_GATEWAY); goto oouoqimaaqcmccay; case 44: $uamcoiueqaamsqma = __("\126\x65\x72\151\146\x79\x20\x72\145\161\165\x65\163\x74\40\x6e\157\x74\40\146\x6f\x75\156\x64\x2e", PR__MDL__WOOCOMMERCE_GATEWAY); goto oouoqimaaqcmccay; case 45: $uamcoiueqaamsqma = __("\x54\x68\145\x20\x74\162\x61\156\x73\x61\x63\x74\151\157\x6e\x20\151\163\40\x61\x6c\162\145\141\144\171\x20\123\145\164\164\154\145\56", PR__MDL__WOOCOMMERCE_GATEWAY); goto oouoqimaaqcmccay; case 46: $uamcoiueqaamsqma = __("\x54\150\x65\x20\x74\162\x61\156\163\141\x63\x74\151\157\156\x20\x69\163\x20\x6e\157\164\x20\x53\x65\x74\x74\x6c\145\x2e", PR__MDL__WOOCOMMERCE_GATEWAY); goto oouoqimaaqcmccay; case 47: $uamcoiueqaamsqma = __("\123\x65\164\x74\154\x65\x20\164\162\x61\156\x73\x61\143\x74\x69\x6f\x6e\40\156\x6f\164\x20\146\x6f\x75\156\x64\56", PR__MDL__WOOCOMMERCE_GATEWAY); goto oouoqimaaqcmccay; case 48: $uamcoiueqaamsqma = __("\124\x68\145\40\164\162\x61\x6e\x73\x61\x63\x74\x69\157\156\x20\150\x61\163\40\141\x6c\162\x65\141\144\171\40\142\x65\x65\x6e\x20\x72\145\x76\145\162\x73\x65\144\56", PR__MDL__WOOCOMMERCE_GATEWAY); goto oouoqimaaqcmccay; case 49: $uamcoiueqaamsqma = __("\122\x65\x66\165\156\x64\40\164\x72\x61\x6e\163\x61\143\164\151\x6f\156\40\156\x6f\164\x20\x66\157\165\156\x64\56", PR__MDL__WOOCOMMERCE_GATEWAY); goto oouoqimaaqcmccay; case 51: $uamcoiueqaamsqma = __("\124\x68\145\40\164\x72\x61\x6e\163\x61\x63\x74\x69\157\156\x20\151\x73\40\x64\165\160\154\x69\143\x61\x74\x65\x2e", PR__MDL__WOOCOMMERCE_GATEWAY); goto oouoqimaaqcmccay; case 54: $uamcoiueqaamsqma = __("\x4e\157\x20\162\145\x66\x65\162\x65\156\143\145\40\x74\x72\x61\x6e\163\x61\x63\x74\x69\x6f\156\40\x61\x76\141\151\154\141\142\x6c\145\x2e", PR__MDL__WOOCOMMERCE_GATEWAY); goto oouoqimaaqcmccay; case 55: $uamcoiueqaamsqma = __("\124\x68\145\40\x74\x72\141\156\x73\x61\x63\x74\x69\157\156\x20\x69\163\40\x69\x6e\x76\x61\154\x69\x64\56", PR__MDL__WOOCOMMERCE_GATEWAY); goto oouoqimaaqcmccay; case 61: $uamcoiueqaamsqma = __("\101\156\40\x65\162\x72\157\x72\40\157\143\x63\x75\162\x72\145\144\x20\x77\150\151\154\145\40\x64\x65\x70\x6f\163\151\x74\x69\156\147\x2e", PR__MDL__WOOCOMMERCE_GATEWAY); goto oouoqimaaqcmccay; case 412: $uamcoiueqaamsqma = __("\x49\x6e\x76\157\x69\x63\x65\40\111\104\40\x69\163\x20\151\156\x63\157\162\x72\145\143\x74\56", PR__MDL__WOOCOMMERCE_GATEWAY); goto oouoqimaaqcmccay; case 413: $uamcoiueqaamsqma = __("\x54\x68\x65\x20\160\141\x79\x6d\x65\156\164\x20\111\x44\40\x69\163\x20\151\156\143\x6f\162\x72\x65\x63\x74\56", PR__MDL__WOOCOMMERCE_GATEWAY); goto oouoqimaaqcmccay; case 414: $uamcoiueqaamsqma = __("\x54\150\145\x20\x69\x73\163\x75\151\x6e\x67\40\x6f\x72\147\141\156\x69\x7a\x61\x74\x69\x6f\x6e\40\151\163\40\x6e\x6f\x74\x20\x76\x61\154\151\144\x2e", PR__MDL__WOOCOMMERCE_GATEWAY); goto oouoqimaaqcmccay; case 415: $uamcoiueqaamsqma = __("\123\145\163\x73\151\x6f\x6e\x20\x74\151\155\145\157\165\164\x2e", PR__MDL__WOOCOMMERCE_GATEWAY); goto oouoqimaaqcmccay; case 416: $uamcoiueqaamsqma = __("\101\x6e\x20\x65\162\x72\x6f\162\x20\x6f\143\143\165\x72\162\x65\x64\40\167\x68\151\x6c\x65\x20\162\145\143\x6f\x72\x64\151\x6e\x67\x20\x74\x68\145\40\x69\156\x66\x6f\162\155\141\x74\151\x6f\156\56", PR__MDL__WOOCOMMERCE_GATEWAY); goto oouoqimaaqcmccay; case 417: $uamcoiueqaamsqma = __("\111\x6e\x76\x61\154\151\144\x20\160\x61\171\145\162\40\111\104\x2e", PR__MDL__WOOCOMMERCE_GATEWAY); goto oouoqimaaqcmccay; case 418: $uamcoiueqaamsqma = __("\124\150\x65\x72\145\x20\167\x61\163\40\x61\40\x70\162\x6f\x62\x6c\145\155\x20\144\145\146\151\156\x69\156\x67\40\x74\x68\x65\40\x63\165\163\x74\x6f\x6d\x65\x72\40\x69\x6e\146\x6f\162\x6d\141\x74\151\157\x6e\56", PR__MDL__WOOCOMMERCE_GATEWAY); goto oouoqimaaqcmccay; case 419: $uamcoiueqaamsqma = __("\x45\170\x63\145\163\x73\x69\166\x65\x20\x64\141\164\141\40\145\156\164\162\x79\x20\151\x73\x20\x61\154\x6c\x6f\x77\x65\144\56", PR__MDL__WOOCOMMERCE_GATEWAY); goto oouoqimaaqcmccay; case 421: $uamcoiueqaamsqma = __("\111\x50\40\151\x73\x20\156\x6f\164\x20\166\141\154\151\x64\56", PR__MDL__WOOCOMMERCE_GATEWAY); goto oouoqimaaqcmccay; default: $uamcoiueqaamsqma = sprintf(__("\101\40\x73\171\163\x74\x65\155\x20\x65\x72\x72\x6f\162\x20\x6f\143\x63\x75\162\162\x65\x64\x20\167\x68\x69\154\145\x20\x70\141\171\x69\x6e\x67\72\40\x25\x73", PR__MDL__WOOCOMMERCE_GATEWAY), $ymacoouqwcqwwagu); } sycygoiaiqqageym: oouoqimaaqcmccay: return $uamcoiueqaamsqma; } }
