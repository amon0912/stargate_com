<div class="container-fluid" style="border-left:8px solid #FF8103">
    <div class="row">

        <!-- offre du jour  -->
        <div class="col-md-3 mt-3">
            <h3 class="">Formation</h3>
            <?php include('inc/formation-slide.php'); ?>
        </div>

        <!-- slide -->
        <div class="col-md-9 mt-3" id="new-marketing-digital">
            <div class="kArriere-plan kArrondir p-2" style="height:100%">
                <h2 class="text-center mt-3 text-white">Marketing Digital
                </h2>
                <div class="row m-2 my-5 flex-row align-items-center justify-content-center">
                    <?php
                    $tab = ['Référencement_naturel_-_SEO','Référencement_Payant_Publicité_au_paiement_par_clic_-_PPC','Création_de_sites_internet_et_Application_mobile','Community_management_-_création_gestion_communauté_via_les_réseaux_sociaux_','Marketing_de_contenu', 'Marketing_des_médias_sociaux','Publicité_par_e-mail',
         ];
                    
         foreach($tab as $i => $item ){ 
            // var_export($item);
                        ?>
                    <div class="col-md-4 mb-3">
                        <div class=" card w-100 h-100 kArrondir p-4">
                            <div data-toggle="modal" data-target="#<?= $item ?>" class="text-primary">
                                <div class=" card-body text-center kHover kArrondir">
                                    <h5 class="card-title">Marketing Digital </h5>

                                    <?php
                                        // echo '<p><img class="img-fluid" src="assets/images/icon-for-formation/'.$item.'.png"></p>';
                                    ?>

                                    <p class="card-text text-capitaliz font-weight-bold h-100 ">
                                        <?= str_replace('_',' ', $item ); ?>
                                    </p>
                                    <!-- <i class="fas fa-desktop fa-fw fa-3x "></i> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }
                    ?>

                </div>
            </div>

        </div>
    </div>
</div>


<!-- Modal Référencement_naturel_(SEO) -->
<div class="modal fade" id="Référencement_naturel_-_SEO" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content kArriere-plan-gris kArrondir">
            <div class="modal-header ">
                <h5 class="modal-title " id="exampleModalLabel">
                    <div class="text-center">
                        Référencement naturel (SEO)
                        <div class="btn kArriere-plan kArrondir text-white">Demander un devis</div>
                    </div>
                </h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-white" style="text-align:justify ">
                <div>
                    L’optimisation des moteurs de recherche (SEO) est le fondement d’un marketing digital en ligne.
                    Pourquoi voulez-vous atteindre les meilleurs classements ?
                    Quelque 75% des personnes ne regardent pas au-delà de la première page des résultats de recherche.
                    Vous pouvez avoir le site internet le mieux conçu au monde, mais s’il ne figure pas sur la première
                    page de Google, la plupart des gens ne le trouveront jamais. Lorsque votre site internet figure en
                    haut des pages de résultats des moteurs de recherche, des prospects plus qualifiés vous trouveront
                    et vous contacteront lors de la recherche de produits ou de services liés à votre entreprise. En
                    d’autres termes, des classements de recherche plus élevés se traduisent par davantage de leads,
                    d’appels téléphoniques et de revenus pour votre entreprise.
                    Comment vous classer dans les résultats de recherche ? Vous pouvez utiliser de nombreuses stratégies
                    SEO, notamment:<br>
                    • Créer un contenu de qualité qui réponde aux questions des utilisateurs<br>
                    • Nettoyer le code de votre site et augmenter la vitesse de chargement de page<br>
                    • Rationalisez la conception et la navigation de votre site pour améliorer l’expérience
                    utilisateur
                    (UX)<br>
                    • Gagner des backlinks de sites réputés<br><br>
                    Et plus<br><br>
                    Il est important de rappeler que le SEO est une stratégie à long terme. Ne vous attendez donc
                    pas à
                    des résultats immédiats. Bien que le SEO nécessite un entretien régulier pour maintenir les
                    meilleurs classements, les résultats valent bien l’investissement pour votre entreprise.

                </div>

            </div>
        </div>
    </div>
</div>


<!-- Modal Référencement_Payant_Publicité_au_paiement_par_clic_-_PPC -->
<div class="modal fade" id="Référencement_Payant_Publicité_au_paiement_par_clic_-_PPC" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content kArriere-plan-gris kArrondir">
            <div class="modal-header ">
                <h5 class="modal-title " id="exampleModalLabel">
                    <div class="text-center">
                        Référencement Payant Publicité au paiement par clic (PPC)
                        <br>
                        <div class="btn kArriere-plan kArrondir text-white">Demander un devis</div>
                    </div>
                </h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-white" style="text-align:justify ">
                <div>
                    La publicité PPC (Pay-per-Click) est une excellente stratégie pour maintenir une présence dans les
                    résultats de recherche tout en établissant un classement naturel avec le SEO. <br>
                    Si vous souhaitez améliorer rapidement votre classement, le référencement payant peut commencer à
                    générer des leads qualifiés sur votre site dès la mise en ligne de vos annonces. Il s’agit d’une
                    option abordable pour les entreprises de la plupart des secteurs d’activité. <br>
                    Une des meilleures parties de la publicité du référencement payant ? Vous ne payez que lorsque les
                    internautes cliquent sur vos annonces.<br>
                    Cela signifie que vous éviterez de gaspiller de l’argent en essayant de joindre des personnes qui ne
                    sont pas intéressées par vos produits ou services.<br>
                    En outre, le référencement payant offre des options de ciblage avancées qui vous permettent de
                    cibler vos clients cibles.<br>
                    Avec le référencement payant, vous pouvez cibler des personnes en fonction de leurs caractéristiques
                    démographiques, de leur localisation et même du type d’appareil qu’elles utilisent. Ces options de
                    ciblage, associées à la convivialité du référencement payant, font du référencement payant un
                    élément précieux du marketing digital.

                </div>

            </div>
        </div>
    </div>
</div>


<!-- Modal Création_de_sites_internet_et_Application_mobile-->
<div class="modal fade" id="Création_de_sites_internet_et_Application_mobile" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content kArriere-plan-gris kArrondir">
            <div class="modal-header ">
                <h5 class="modal-title " id="exampleModalLabel">
                    <div class="text-center">
                        Création de sites internet et Applicationss mobile
                        <br>
                        <div class="btn kArriere-plan kArrondir text-white">Demander un devis</div>
                    </div>
                </h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-white" style="text-align:justify ">
                <div>
                    En fin de compte, les composants de marketing digital que vous utilisez conduisent à votre site
                    internet – et vous voulez que votre site laisse une impression positive sur les clients
                    potentiels.
                    <br>
                    Près de 95% de la première impression d’une personne concerne la conception Web. Il s’agit donc
                    d’un
                    facteur crucial dans votre plan de marketing en ligne.
                    Si votre site semble être tout à fait sorti des années 90 ou s’il faut une plombe pour le que la
                    page se charge, les visiteurs cliqueront probablement sur le bouton retour en arrière.
                    Pour que les internautes restent intéressés et engagés sur votre site, vous devez mettre en
                    place
                    une conception personnalisée qui reflète votre marque et facilite la recherche des informations
                    dont
                    ils ont besoin.<br>
                    En plus de vous assurer que votre site se charge à pleine vitesse, vous souhaitez également
                    rationaliser votre navigation pour améliorer l’expérience utilisateur et permettre aux prospects
                    de
                    vous contacter plus facilement.
                    Vous n’êtes pas satisfait de votre site internet actuel ? Metadosi peut vous aider.
                    Nos équipes de conception et de développement Web se spécialisent dans la création de sites
                    internet
                    qui produisent des résultats pour nos clients. Toutes nos conceptions sont également compatibles
                    avec les appareils mobiles, de sorte que votre site aura fière allure et qu’il fonctionnera
                    bien,
                    quel que soit l’appareil utilisé par quelqu’un pour y accéder.

                </div>

            </div>
        </div>
    </div>
</div>


<!-- Modal Community_management_-_création_gestion_communauté_via_les_réseaux_sociaux_ -->
<div class="modal fade" id="Community_management_-_création_gestion_communauté_via_les_réseaux_sociaux_" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content kArriere-plan-gris kArrondir">
            <div class="modal-header ">
                <h5 class="modal-title " id="exampleModalLabel">
                    <div class="text-center">
                        Community management ( création et gestion communauté via les réseaux sociaux )
                        <br>
                        <div class="btn kArriere-plan kArrondir text-white">Demander un devis</div>
                    </div>
                </h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-white" style="text-align:justify ">
                <div>
                    Avec l’utilisation de nouveaux moyens de consommation par les internautes dans leur acte d’achat
                    (forums, réseaux sociaux, sites d’avis) leurs permettant de récolter les avis et les commentaires
                    des communautés sur le produit ou la marque, et avec l’essor de nouveaux enjeux liés au web
                    marketing, la gestion de communautés en ligne est devenue de plus en plus importante et
                    indispensable pour toute entreprise désirant améliorer et bien gérer son image et sa notoriété web.
                    <br>
                    Le community manager est un métier qui consiste à animer et à fédérer des communautés web pour le
                    compte d’une entreprise ou d’une marque. Les personnes exerçant ce métier sont appelées «community
                    manager». Découvrez avec nous sur stargate communication ce que sont les rôles, les missions d’un
                    community manager au sein de l’entreprise. Déjà pour qu’il existe une communauté il en premier lieu
                    une plateforme c’est le lieux de rappeler qu’une entreprise digne de ce nom doit avoir : un site
                    internet , une page , facebook , un compte instagram pour créer sa propre communauté.<br>
                    Le community manager, en raison de son métier de porte-parole est souvent rattaché au service de
                    communication afin de répondre à des objectifs de communication externe (promotion de la marque,
                    notoriété, image, etc.). On peut aussi le retrouver comme collaborateur des directions marketing ou
                    des directions générales. Difficile en effet de lui donner une place précise tant son rôle et le
                    contenu de ses missions sont stratégiques sur de nombreux plans pour l’entreprise.<br>
                    Un community manager peut travailler indépendamment en tant que consultant, travailler pour une
                    agence de communication ou au sein d’une entreprise spécialisée en community management, ce qui lui
                    permet d’être le plus souvent plus à l’écoute, plus formé, plus proche des communautés car non
                    rattaché à un poste fonctionnel et opérationnel de l’entreprise. Le community manager externalisé
                    est disponible à 100% pour exister avec ses communautés.

                </div>

            </div>
        </div>
    </div>
</div>



<!-- Modal 	Marketing de contenu -->
<div class="modal fade" id="Marketing_de_contenu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content kArriere-plan-gris kArrondir">
            <div class="modal-header ">
                <h5 class="modal-title " id="exampleModalLabel">
                    <div class="text-center">
                        Marketing de contenu
                        <div class="btn kArriere-plan kArrondir text-white">Demander un devis</div>
                    </div>
                </h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-white" style="text-align:justify ">
                <div>
                    Afin d’améliorer votre classement dans les résultats de recherche et d’aider les clients potentiels
                    à mieux connaître votre entreprise, vous devez incorporer du contenu dans votre stratégie de
                    marketing digital. Si vous souhaitez générer plus de prospects et de revenus, le marketing de
                    contenu est une excellente stratégie, car il génère 3 fois plus de prospects que le marketing
                    traditionnel. Un contenu de qualité est un élément clé du marketing de contenu. Un contenu de
                    qualité vous permet de cibler des mots-clés liés à votre entreprise et de répondre aux questions
                    des
                    internautes, ce qui vous aide à atteindre un meilleur classement.<br>
                    Lors de la création de contenu, il est important de penser à la qualité et à la profondeur. Votre
                    contenu répond-il efficacement aux questions des internautes, ou leur laisse-t-il des questions sans
                    réponses? Incluez-vous des appels à l’action qui incitent clairement les lecteurs à passer à l’étape
                    suivante ?<br>
                    Le fait de réfléchir à ces questions vous aidera à créer un contenu qui ne se classe pas uniquement
                    en tête des résultats de recherche, mais fournit également aux visiteurs du site les informations
                    dont ils ont besoin pour passer à la prochaine étape pour votre entreprise.

                </div>

            </div>
        </div>
    </div>
</div>



<!-- Modal 	Marketing sur les réseaux sociaux -->
<div class="modal fade" id="Marketing_des_médias_sociaux" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content kArriere-plan-gris kArrondir">
            <div class="modal-header ">
                <h5 class="modal-title " id="exampleModalLabel">
                    <div class="text-center">
                        Marketing sur les réseaux sociaux
                        <div class="btn kArriere-plan kArrondir text-white">Demander un devis</div>
                    </div>
                </h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-white" style="text-align:justify ">
                <div>
                    2,3 milliards de personnes utilisent les médias sociaux, ce qui en fait un composant de marketing
                    digital précieux.<br>
                    Les réseaux sociaux vous permettent de vous connecter avec des clients actuels et potentiels et de
                    développer des relations avec eux. S’ils ont des questions sur vos produits et services, ils peuvent
                    vous connecter et vous demander directement sur les réseaux sociaux.<br>
                    De plus, l’écoute sur les réseaux sociaux vous permet de dégager les principales tendances et points
                    de vue sur les opinions et les avis des consommateurs concernant votre marque, votre secteur, vos
                    produits, services et même vos concurrents.<br>
                    Vous pouvez utiliser cette information pour informer d’autres stratégies. Par exemple, si vous
                    recevez beaucoup de questions ou si vous remarquez des conversations fréquentes sur le
                    fonctionnement d’un produit spécifique, vous pouvez créer du contenu sur votre site internet
                    (peut-être même une vidéo explicative) pour résoudre ce problème.<br>
                    La plupart des plateformes sociales vous permettent également de diffuser des annonces payées pour
                    cibler et atteindre vos clients idéaux.
                    Les médias sociaux sont également un outil de service client précieux.
                    Aujourd’hui, 70% des personnes utilisent les médias sociaux pour le service à la clientèle, que ce
                    soit pour poser une question ou exprimer leurs préoccupations au sujet d’un produit ou d’un
                    service.
                    <br>
                    Maximisez l’efficacité de vos médias sociaux en répondant aux commentaires des réseaux sociaux de
                    manière opportune et de manière à ce que vos abonnés se sentent perçus et valorisés. En fin de
                    compte, cela vous aidera à établir un climat de confiance avec votre public et à l’encourager à
                    devenir un client fidèle.


                </div>

            </div>
        </div>
    </div>
</div>



<!-- Modal Publicité_par_e-mail -->
<div class="modal fade" id="Publicité_par_e-mail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content kArriere-plan-gris kArrondir">
            <div class="modal-header ">
                <h5 class="modal-title " id="exampleModalLabel">
                    <div class="text-center">
                        E mail Marketing
                        <div class="btn kArriere-plan kArrondir text-white">Demander un devis</div>
                    </div>
                </h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-white" style="text-align:justify ">
                <div>
                    Le marketing par courrier électronique est une autre composante du marketing digital réussi: l’email
                    marketing peut vous rapporter 44 € pour chaque euro investi – un retour sur investissement de 4400%.
                    <br>
                    Comme les gens acceptent de recevoir vos emails, vous savez qu’ils sont intéressés par les produits
                    et services que vous proposez. Le marketing par email vous permet de suivre vos clients potentiels
                    et d’envoyer des informations personnalisées sur des produits ou des services qui les
                    intéressent.<br>
                    À l’aide de la segmentation, vous pouvez personnaliser vos e-mails en fonction des besoins et des
                    intérêts de vos abonnés et leur proposer un contenu qui leur convient.
                    Vous êtes préoccupé par la création, l’envoi et la surveillance de courriers électroniques
                    attrayants ? Metadosi offre aux clients un service email marketing, qui vous permet de concevoir des
                    emails accrocheurs et de suivre les résultats en temps réel.<br>
                    Une des meilleures composantes ?<br>
                    Vous pouvez automatiser votre stratégie de messagerie pour envoyer des courriers électroniques
                    aux
                    clients lorsqu’ils s’abonnent, après leur achat ou lorsqu’ils effectuent une action spécifique
                    sur
                    votre site. C’est un excellent moyen de rendre votre travail de marketing plus intelligent et de
                    vous permettre de vous concentrer sur la gestion de votre entreprise.



                </div>

            </div>
        </div>
    </div>
</div>