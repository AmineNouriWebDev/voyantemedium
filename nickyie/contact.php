<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nickye: Contact</title>
<script type="text/javascript" src="javascript/rollover.js">
</script>
<link href="css/css.css" rel="stylesheet" type="text/css" media="all" />
<meta name="Description" content="" />
<meta name="Keywords" content="" />
</head>

<body onload="MM_preloadImages('images/home_on.jpg','images/biographie_on.jpg','images/produits_on.jpg','images/contact_on.jpg')">

<?php

if (isset($_POST['sender'])) {
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$adresse=$_POST['adresse'];
$postal=$_POST['postal'];
$ville=$_POST['ville'];
$tel=$_POST['tel'];
$gsm=$_POST['gsm'];
$mail=$_POST['mail'];
$questions=$_POST['questions'];

$headers = "Content-Type: text/html; charset=iso-8859-1\n";
$headers .= "MIME-version: 1.0\n";
$headers .= "X-Mailer: PHP\n";
$headers .= "X-Priority: 1\n";

$sujet= 'Demande de '.$nom; 
$destinataire='info@nickyie.be';
//$destinataire='fb799591@skynet.be';
//$destinataire='nicolaspirotte@npirotte.be';
$email_expediteur='Site Nickye';
$message  ='<head><title></title></head>';
	 $message .='<html><body><table width="500" border="0" cellspacing="0" cellpadding="0"><tr><td width="136">nom</td><td width="364">';
	 $message .=$nom;
	 $message .='</td></tr><tr><td>prenom</td><td>';	  
	 $message .=$prenom;
	  $message .='</td></tr><tr><td>adresse</td><td>';
	 $message .=$adresse;
	 $message .='</td></tr><tr><td>code postal</td><td>';
	 $message .=$postal;	  
	 $message .='</td></tr><tr><td>ville</td><td>';	
	  $message .=$ville;
	 $message .='</td></tr><tr><td>tel</td><td>';
	 $message .=$tel;
	 $message .='</td></tr><tr><td>gsm</td><td>';	  
	 $message .=$gsm;	
	  $message .='</td></tr><tr><td>email</td><td>';
	 $message .=$mail;
	 $message .='</td></tr><tr><td>questions</td><td>';
	 $message .=$questions;	  
	 $message .='</td></tr></table></body></html>';

$test = mail($destinataire,$sujet,$message,$headers);
if ($test) {
echo "Envoyer";
}else{
echo "Probleme d envoi";
}
}

?>

<table width="800" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="520" valign="top" background="images/h.jpg"><table width="800" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="200" valign="top"><br />
            <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
            <br />
            <br />
            <br />
            <br /><br />
        <table width="200" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><a href="index.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Home','','images/home_on.jpg',1)"><img src="images/home.jpg" alt="Home" name="Home" width="200" height="19" border="0" id="Home" /></a></td>
          </tr>
          <tr>
            <td><a href="biographie.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Biographie','','images/biographie_on.jpg',1)"><img src="images/biographie.jpg" alt="Biographie" name="Biographie" width="200" height="19" border="0" id="Biographie" /></a></td>
          </tr>
          <td><a href="photos.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Produits','','images/produits_on.jpg',1)"><img src="images/produits.jpg" alt="Produits" name="photos" width="200" height="19" border="0" id="Produits" /></a></td>
          <tr>
            <td><a href="contact.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Contact','','images/contact_on.jpg',1)"><img src="images/contact.jpg" alt="Contact" name="Contact" width="200" height="19" border="0" id="Contact" /></a></td>
          </tr>
        </table></td>
        <td valign="top">
          
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
          <p class="style2">CONTACT</p>

          
          <p class="style1"> 
E-mail <a href="mailto:fb799591@skynet.be" class="style1"><strong>fb799591@skynet.be</strong></a><br />
          <p class="style1"><br />
            <strong>Remplissez le formulaire ci-dessous afin que nous puissions prendre contact avec vous si vous désirez toute info concernant les vêtements, séminaire, émission tv, radio, stretching, yoga, philosophie antispéciste.</strong></p>
          <form action="contact.php" method="POST">
          <table width="500" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="150" class="style1"><strong>NOM</strong></td>
              <td width="350"><label>
              <input type="text" name="nom" id="nom" />
              </label></td>
            </tr>
            <tr>
              <td class="style1"><strong>PRENOM</strong></td>
              <td><label>
                <input type="text" name="prenom" id="prenom" />
              </label></td>
            </tr>
            <tr>
              <td class="style1"><strong>ADRESSE</strong></td>
              <td><label>
                <input type="text" name="adresse" id="adresse" />
              </label></td>
            </tr>
            <tr>
              <td class="style1"><strong>CODE POSTAL</strong></td>
              <td><input type="text" name="postal" id="postal" /></td>
            </tr>
            <tr>
              <td class="style1"><strong>VILLE</strong></td>
              <td><label>
                <input type="text" name="ville" id="ville" />
              </label></td>
            </tr>
            <tr>
              <td class="style1"><strong>TELEPHONE</strong></td>
              <td><label>
                <input type="text" name="tel" id="tel" />
              </label></td>
            </tr>
            <tr>
              <td class="style1"><p><strong>GSM</strong></p>                </td>
              <td><label>
                <input type="text" name="gsm" id="gsm" />
              </label></td>
            </tr>
            <tr>
              <td class="style1"><strong>EMAIL</strong></td>
              <td><label>
                <input type="text" name="mail" id="mail" />
              </label></td>
            </tr>
            <tr>
              <td class="style1">&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td class="style1"><strong>QUESTIONS</strong></td>
              <td><label>
                <textarea name="questions" id="questions" cols="45" rows="5"></textarea>
              </label></td>
            </tr>
            <tr>
              <td class="style1">&nbsp;</td>
              <td><label>
                <input type="submit" name="sender" id="sender" value="Envoyer" />
              </label></td>
            </tr>
          </table>    
          </form>  
          <br />    
<h1 class="style1">Si vous souhaitez plus d'informations sur les notions REIKI/HYPNO RELAXATION/MEDITATION/PLEINE CONSCIENCE/SOPHRO RELAXATION/STRETCH YOGA/VEGAN CONSULT/TAROT/PENDULE , je vous conseil mon autre site disponible <a href="http://www.medium-yoga-reiki-magnetiseuse-energeticienne.be/" target="_blank">ici</a></h1>
<h1 class="style1"> Vous pouvez également me contacter via le site <a href="https://www.spiriteo.fr/" target="_blank">spiriteo</a>. Mon code expert est le 8521. Vous pouvez également téléphoner directement au 0907/55.456 ou au  03/555.34.56 </h1>
<h1 class="style1">Je suis également disponible sur ces sites <a href="https://www.paravoyants.com/" target="_blank">paravoyants.com</a>, <a href="https://www.paravoyance.com/" target="_blank">paravoyance.com</a>,<a href="https://www.paraminutes.com/" target="_blank">paraminutes.com</a>, <a href="https://www.astrovoyance.tv/" target="_blank">astrovoyance.tv</a> avec le code 1113</h1>
<a href="http://www.nosvoyants.be">Trouvez les meilleurs voyants avec les avis clients sur NosVoyants.be</a></br>
</br><center><a href="http://www.nosvoyants.be"><img alt="Trouvez les meilleurs voyants avec les avis clients sur NosVoyants.be" src="http://www.nosvoyants.be/fichiers/img/pub/pub_002.jpg" /></a></center></br>
<h1 class="style1">Ne comptez pas sur moi pur vous élaborer un plan alimentaire traditionnel…
Seule une alimentation à base de végétaux est équilibrée
Végétarisme & végétalisme</h1>
<h2>Quelques d&eacute;finitions&hellip;</h2>
<p class="style1">Un <strong>v&eacute;g&eacute;taRien</strong> refuse de manger ce qui a n&eacute;cessit&eacute; la mort d&rsquo;un animal : il ne mange donc ni viande, ni poisson, ni crustac&eacute;, ni mollusque, ni g&eacute;latine, ni pr&eacute;sure.<br /> Il peut manger des oeufs, des produits laitiers, du miel.</p>
<p class="style1">Un <strong>v&eacute;g&eacute;taLien</strong> refuse de manger tout ce qui provient de l&rsquo;exploitation des animaux : il ne mange donc ni viande, ni poisson, ni crustac&eacute;, ni mollusque, ni oeuf, ni produit laitier, ni miel.</p>
<p class="style1">&nbsp;</p>
<h2>Comprendre et pratique végétalisme</h2>
<p class="style1">Cela peut &ecirc;tre bien s&ucirc;r parce qu&rsquo;on n&rsquo;aime pas le go&ucirc;t de la viande, ni du poisson&hellip; mais tr&egrave;s peu de v&eacute;g&eacute;tariens le sont pour cette raison.</p>
<p class="style1">Les raisons les plus fr&eacute;quentes sont :<br /> <strong>1. Pour r&eacute;partir plus &eacute;quitablement les richesses et aider la population mondiale &agrave; manger &agrave; sa faim</strong></p>
<p class="style1">40% de la production mondiale de c&eacute;r&eacute;ales sert &agrave; nourrir les animaux d&rsquo;&eacute;levage.<br /> Si ces c&eacute;r&eacute;ales &eacute;taient utilis&eacute;es pour nourrir directement des &ecirc;tres humains, cela suffirait amplement &agrave; nourrir l&rsquo;ensemble des personnes sous-aliment&eacute;es de la plan&egrave;te !<br /> La consommation d&rsquo;aliments d&rsquo;origine animale est responsable du gaspillage, pour la production de ces aliments, de ressources consid&eacute;rables en &eacute;nergie et en eau, du surp&acirc;turage et de la surp&ecirc;che.<br /> D&rsquo;apr&egrave;s un calcul &eacute;tabli en 1990 par le Programme mondial sur la faim, &agrave; l&rsquo;Universit&eacute; Brown (&Eacute;tats-Unis), les r&eacute;coltes r&eacute;centes suffiraient &agrave; nourrir 6 milliards de v&eacute;g&eacute;tariens, alors que, pour nourrir autant de personnes ayant une alimentation riche en viande, nous serions d&eacute;j&agrave; en d&eacute;ficit de terres.</p>
<h2>Comprendre et pratique v&eacute;g&eacute;talisme</h2>
<p class="style1">Les r&eacute;gimes minceur sont de plus en plus nombreux. Pour trouver un &eacute;quilibre entre sant&eacute; et minceur, les personnes se tournent de plus en plus vers le v&eacute;g&eacute;talisme. Comme toute chose, il comporte des avantages et des inconvenants.</p>
<h3 style="color: white">G&eacute;n&eacute;ralit&eacute; sur le v&eacute;g&eacute;talisme</h3>
<p class="style1">Le v&eacute;g&eacute;talisme est la forme la plus s&eacute;v&egrave;re du v&eacute;g&eacute;tarisme. En effet, le r&eacute;gime v&eacute;g&eacute;talien proscrit tout ce qui touche de pr&egrave;s ou de loin &agrave; la chair animale. Le v&eacute;g&eacute;talien privil&eacute;gie donc les produits alimentaires issus de la flore, mais aussi les bact&eacute;ries. L&rsquo;acceptation de ce r&eacute;gime et sa pratique &agrave; ce degr&eacute; sont motiv&eacute;es par des convictions religieuses, par des gestes en faveur des animaux, par des choix politiques, par rapport &agrave; la sant&eacute; et par une prise de position en faveur de l&rsquo;&eacute;cologie. Par ailleurs, les v&eacute;g&eacute;taliens forment des communaut&eacute;s qui sont plus ou moins &agrave; contre-courant des habitudes alimentaires de la soci&eacute;t&eacute;. Ils sont ainsi mal compris dans leur d&eacute;marche.</p>
<h3 style="color: white">Les avantages du v&eacute;g&eacute;talisme</h3>
<p class="style1">Faisant fi de tout ce qui est viande et de ses d&eacute;riv&eacute;s, le r&eacute;gime v&eacute;g&eacute;talien est, dans une certaine proportion non n&eacute;gligeable, en avance sur les recommandations des di&eacute;t&eacute;ticiens et des nutritionnistes pour mincir. C&rsquo;est le cas en ce qui concerne la quantit&eacute; requise en une journ&eacute;e de fruits et l&eacute;gumes. Mais encore, le v&eacute;g&eacute;talien est moins sujet &agrave; l&rsquo;apparition de nombreuse maladie comme l&rsquo;hypertension et le diab&egrave;te de type 2. Pour ce dernier, une &eacute;tude men&eacute;e en 2006 par des scientifiques canadiens et am&eacute;ricains a permis de conclure que les personnes atteintes de cette maladie se devaient de suivre ce r&eacute;gime alimentaire afin de mieux vivre et de d&eacute;pendre moins des m&eacute;dicaments. De plus, il est &agrave; noter que le v&eacute;g&eacute;talisme, pr&eacute;cis&eacute;ment le v&eacute;g&eacute;tarisme occasionnel n&rsquo;est pas incompatible avec la pratique du sport. Au contraire, c&rsquo;est un bon moyen de perdre du poids et de la masse graisseuse.</p>
<h3 style="color: white">Les pr&eacute;cautions &agrave; prendre</h3>
<p class="style1">Ce r&eacute;gime alimentaire n&rsquo;usant que des produits issus du r&egrave;gne v&eacute;g&eacute;tal n&rsquo;est pas totalement complet. Dans sa pratique, le v&eacute;g&eacute;talien doit &ecirc;tre plus attentif &agrave; ce qu&rsquo;il mange que ses homologues omnivores. En effet, le r&eacute;gime v&eacute;g&eacute;talien lacto-ovo-v&eacute;g&eacute;tarien conduit &agrave; des carences. Sous certaines conditions, il se pr&ecirc;te aussi bien aux adultes, qu&rsquo;aux enfants, aux adolescents et aux femmes enceintes ou qui allaitent. Souvent, les v&eacute;g&eacute;taliens doivent quand m&ecirc;me prendre des compl&eacute;ments externes en min&eacute;raux et en <a href="http://www.doctipharma.fr/vitamines.html">vitamines</a>. Les 3 millions de fran&ccedil;ais qui le pratiquent doivent donc faire tr&egrave;s attention et trouver un r&eacute;gime constitu&eacute; d&rsquo;aliments pouvant leur procurer tout ce dont le corps a besoin tout en maigrissant en toute s&eacute;curit&eacute;.Le mieux est de demander conseil aupr&egrave;s de son m&eacute;decin.</p>
          <p class="style1"></p>
          <p class="style1"><strong>N’étant ni médecin, ni diététicienne, ni vétérinaire mais communicatrice en télépathie animale Le mieux est de demander conseil auprès de son médecin.</strong></p>

          <p class="style1">Issue de la tradition indienne, l’ayurveda – "science de la vie" en sanscrit – est sans doute la plus vieille médecine du monde. En Inde, cette discipline a ses universités, ses cliniques, ses pharmacies. Longtemps restée confidentielle, elle s’installe peu à peu en France.</p>
          <p class="style1">L’ayurveda est avant tout un code de bonne santé qui part du principe qu’il existe en chacun trois forces appelées “doshas” : vata (air), pitta (feu) et kapha (terre et eau). L’une d’elles domine chaque personne et détermine sa constitution et son caractère. Si le dosha dominant est perturbé, l’organisme souffre de dysfonctionnements, insomnies ou troubles gastriques par exemple. </p>
          <p class="style1">Lors d’une consultation ayurvédique, le médecin établit le dosha du patient grâce à l’analyse de votre pouls et à un questionnaire. Sa prescription prendra toujours en compte le corps et l’esprit. </p>
          <p class="style1">Le traitement est fondé sur la diététique, la phytothérapie, les compléments alimentaires, les massages… Ensuite sur la méditation, le yoga, la respiration, le chant, l’éveil des sensations à travers les cinq sens, la gestion des émotions toxiques, les techniques psycho-spirituelles d’éveil de la conscience. L’ayurveda mêle le physique, le mental, l’émotionnel et le spirituel.
L’ayurveda est reconnue par l’Organisation mondiale de la santé comme une médecine à part entière. En France, elle n’est pratiquée que dans son approche bien-être 
</p>

<br>
<p class="style1"><strong>ASBL  HOLISTIC PET ANTISPECIESIST FOLLOW</strong></p>
<p class="style1">Tarot/pendule=50 à 100 €</p>
<p class="style1">Therapy consultation: 25 € / 50/75</p>
<p class="style1">Vegan consultation 25 € / 50/75</p>
<p class="style1">Mak up vegan à Lasnes, Chatelineau ou chez vous 75 €</p>
<p class="style1">Only ladies massotherapy, Holistic ayurvedic treatments 50/75/100 €</p>
<p class="style1">Dogs, horses</p>
<p class="style1">REIKI/HYPNO RELAXATION/MEDITATION/PLEINE CONSCIENCE/SOPHRO RELAXATION/STRETCH YOGA/VEGAN CONSULT/TAROT/PENDULE</p>
<p class="style1">50/75/100 €</p>
<p class="style1">BRABANT WALLON-CHATELINEAU-BRUXELLES</p>
<p class="style1">Vous pouvez payer par la monnaie www.res.be la totalité du montant.</p>
<p class="style1">NICKYIE POMMIER<br/>Manager ASBL<br/>Holistic pet ethology & anti speciesist abolistic follow</p>
<p class="style1">Versement d’un montant convenu avec l'ASBL HOLISTIC PET sur le compte de celle-ci : BE 17 0004 3872 3421</p>
<p class="style1">Ou sur le compte www.res.be : 6272 8020 0023 9134</p>
<p class="style1">Aucun remboursement n'est prévu quelque soit la séance ou les séances réservées (tarot yoga relaxation ...) étant donnée que chaque somme perçue est versée à l'Asbl Holistic pet pour nos petits protégés ...</p>
<p class="style1">Néanmoins un bon à faire valoir peut être échangé si vous le désirez en cas de changement d'avis.</p>
<br>

          <table>
            <tr>
              <td width="145" align="center" class="style1"><img src="images/produits/contact-1.jpg"  width="290" /></td>
              <td width="145" align="center" class="style1"><img src="images/produits/contact-2.jpg"  width="290" /></td>
            </tr>
            </table>
            <table>
            <tr>
              <td width="290" ><img src="images/produits/contact-3.jpg"  width="290" /></td>
              <td width="290" ><img src="images/produits/contact-4.jpg"  width="290" /></td>
            </tr>
          </table>

          <table>
            <tr>
              <td width="145" align="center" class="style1"><img src="images/produits/11-20-1.jpg"  width="145" /></td>
              <td width="145" align="center" class="style1"><img src="images/produits/11-20-2.jpg"  width="145" /></td>
              <td width="290" align="center" class="style1"><img src="images/produits/11-20-3.jpg"  width="290" /></td>
            </tr>
            </table>
            <table>
            <tr>
              <td width="145" ></td>
              <td width="290" ><img src="images/produits/11-20-4.jpg"  width="290" /></td>
              <td width="145"></td>
            </tr>
          </table>
          </td>
      </tr>
    
    </table>
    </td>
  </tr>
</table>


</body>
</html>
