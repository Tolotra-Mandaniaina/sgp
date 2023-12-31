<?php

namespace App\Form;

use App\Entity\SuiviEvaluation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class SuiviEvaluationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder    
            ->add('A1', null, ['label' => 'A1- Titre du projet ',])
            ->add('A5', null, ['label' => 'A5- Region d\intervention',])
            ->add('A10', null, ['label' => 'A10- Projet No.',])
            ->add('A10a', null, ['label' => 'A10a- Projet No. Pour Confirmation.',])
            ->add('A11', null, ['label' => 'A11- Fonds',])
            ->add('A12', null, ['label' => 'A12- Phases',])
            ->add('A13', null, ['label' => 'A13- Paysages',])
            ->add('A19', null, ['label' => 'A19- Domaine d\'intervention ',])
            ->add('A34', null, ['label' => 'A34- Année de remplissage de l\'outils',])
            ->add('A35', null, ['label' => 'A35- Numero trimestre',])
            ->add('B1', null, ['label' => 'B1- Hectares de paysages terrestres ou marins cibles faisant l\'objet d\'une conservation communautaire améliorée et d\'une utilisation durable?',])
            ->add('B2', null, ['label' => 'B2- Hectares de  Aires du Patrimoine Autochtone et Communautaire (APAC) influencés?',])
            ->add('B3', null, ['label' => 'B3- Hectares d\'aires protégées influencés?',])
            ->add('B4', null, ['label' => 'B4- Hectares d\'écosystèmes importants avec le statut de conservation améliorée?',])
            ->add('B5', null, ['label' => 'B5- Hectares de zones de production terrestres appliquant des pratiques d\'utilisation durable? ',])
            ->add('B6', null, ['label' => 'B6- Hectares de zones de production marines appliquant des pratiques d\'utilisation durable ',])
            //->add('B8', null, ['label' => 'B8- test',])


            ->add('B8', ChoiceType::class, [
                'label' => 'B8- Le paysage terrestre et marin est-il composé de divers écosystèmes naturels (terrestres et aquatiques) et d\'utilisations du sol - par exemple des parcelles de forêt, des jardins familiaux, des champs cultivés et des vergers… ?',
                'choices' => [
                    'Oui' =>  '1',
                    'Non' => '2',
                ],
                'placeholder' => 'Sélectionnez une option', 
            ])
            ->add('B9', null, ['label' => 'B9- Combien sont-ils ?',])
            ->add('B10', null, ['label' => 'B10- Leurs Superficies (ha) ?',])
            ->add('B11', ChoiceType::class, [
                'label' => 'B11- Existe-t-il des zones dans le paysage terrestre ou marin où les écosystèmes sont protégés par des formes formelles ou informelles de protection et inclure des formes traditionnelles de protection telles que les lieux sacrés ?',
                'choices' => [
                    'Oui' => '1',
                    'Non' => '2',
                ],
                'multiple' => false, // Utilisez cette option si vous voulez permettre le choix multiple
            ])
            ->add('B12', null, ['label' => 'B12- Leurs Superficies (ha) ?',])
            ->add('B13', ChoiceType::class, [
                'label' => 'B13- Les interactions écologiques entre les différentes composantes du paysage terrestre ou marin sont-elles prises en compte dans la gestion durable des richesses naturelles - par exemple les parcelles d\'écosystème conservées pour les pollinisateurs, la lutte contre les ravageurs, le cycle des nutriments, la recharge des nappes phréatiques et la lutte contre l\'érosion des sols ?',
                'choices' => [
                    'Oui' => '1',
                    'Non' => '2',
                ],
                                'multiple' => false, // Utilisez cette option si vous voulez permettre le choix multiple
            ])
            ->add('B14', null, ['label' => 'B14- Expliquez? (100 mots)',])
            ->add('B15', ChoiceType::class, [
                'label' => 'B15- Le paysage terrestre ou marin a-t-il la capacité de se rétablir et de se régénérer après des chocs environnementaux extrêmes et au changement climatique, par exemple les ravageurs et les maladies, les phénomènes météorologiques extrêmes, les inondations et les sécheresses ?',
                'choices' => [
                    'Oui' => '1',
                    'Non' => '2',
                ],
                                'multiple' => false, // Utilisez cette option si vous voulez permettre le choix multiple
            ])
            ->add('B16', null, ['label' => 'B16- Superficies régénérées naturellement (ha) ?',])
            ->add('B17', null, ['label' => 'B17- La communauté consomme-t-elle une diversité d\'aliments traditionnels et produits localement, par exemple des céréales, des légumes, des fruits, des noix, des plantes sauvages, des champignons, des baies, des poissons et des animaux ? ',])
            ->add('B18', null, ['label' => 'B18- Noms des produits ?',])
            ->add('B19', null, ['label' => 'B19- Les différentes cultures, variétés et races animales locales sont-elles conservées et utilisées dans la communauté ? ',])
            ->add('B20', null, ['label' => 'B20- Nombres des espèces ? ',])
            ->add('B21', null, ['label' => 'B21- Noms des espèces ? ',])
            ->add('B22', null, ['label' => 'B22- Les richesses communes sont-elles gérées de manière durable ? (100mots)',])
            ->add('B23', null, ['label' => 'B23- Expliquez? (100 mots)',])
            ->add('C1', null, ['label' => 'C1- Hectares de forêts et de terres non forestières ayant fait l\'objet d\'une restauration et d\'une amélioration des stocks de carbone?',])
            ->add('C2', null, ['label' => 'C2- Hectares de terres bénéficiant de meilleures pratiques d’utilisation des terres et de techniques améliorées contre les changements climatiques ? ',])
            ->add('C3', null, ['label' => 'C3- Tonnes de CO2 dont l’émission a été évitée en mettant en œuvre des technologies à faibles émissions de carbone : ',])
            ->add('C3a', null, ['label' => 'C3a- Pratiques d\'utilisation des énergies renouvelables (100mots) ; ',])
            ->add('C3b', null, ['label' => 'C3b- Pratiques de transport écologiquement durable (100mots) ; ',])
            ->add('C3c', null, ['label' => 'C3c- Mesures promouvant l’efficacité énergétique (100mots) ; ',])
            ->add('C3d', null, ['label' => 'C3d- Autres (100mots).',])
            ->add('C4', null, ['label' => 'C4- ombre de membres de la communauté démontrant ou déployant des technologies à faible émissions de GES ? ',])
            ->add('C5', null, ['label' => 'C5- Valeur totale des services énergétiques, technologiques et de transport fournis (équivalent en dollars américains) ? ',])
            ->add('C6', null, ['label' => 'C6- Tonnes de CO2 dont l’émission a été évitée grâce à de meilleures pratiques d\'utilisation des terres et aux techniques améliorées contre les changements climatiques? ',])
            ->add('D1', null, ['label' => 'D1- Hectares soumis à des pratiques améliorées de gestion de l\'agriculture? ',])
            ->add('D2', null, ['label' => 'D2- Hectares soumis à des pratiques améliorées de gestion des terres? ',])
            ->add('D3', null, ['label' => 'D3- Hectares soumis à des pratiques améliorées de gestion de l\'eau? ',])
            ->add('D4', null, ['label' => 'D4- Hectares de terres dégradées restaurées et réhabilitées ',])
            ->add('E1', null, ['label' => 'E1- Hectares de terres forestières dont la restauration et l\'amélioration ont été entreprise? ',])
            ->add('E2', null, ['label' => 'E2- Hectares de terres NON forestières dont la restauration et l\'amélioration ont été entreprise? ',])
            ->add('E3', null, ['label' => 'E3- Nombre de communautés démontrant des pratiques de gestion durable des terres et forestière ',])
            ->add('F1', null, ['label' => 'F1- Hectares de zones marines/côtières gérées de manière durable? ',])
            ->add('F2', null, ['label' => 'F2- Hectares de zones de pêche gérées de manière durable? ',])
            ->add('F3', null, ['label' => 'F3- Hectares de bassins fluviaux/lacustres applicant de pratiques de gestion durable? ',])
            ->add('F4', null, ['label' => 'F4- Hectares de paysages marins couverts par des systèmes communautaires améliorés de conservation et gestion de l\'utilisation durable? ',])
            ->add('F5', null, ['label' => 'F5- Tonnes de pollution d\'origine tellurique évitées ',])
            ->add('G1', null, ['label' => 'G1- Kg de pesticides évités, reduits ou prévenus? ',])
            ->add('G2', null, ['label' => 'G2- Kg de déchets solides évités ou reduits? ',]) 
            ->add('G3', null, ['label' => 'G3- Kg de produits chimiques nocifs dont l\'utilisation ou le rejet a été évité? ',])
            ->add('G4', null, ['label' => 'G4- Kg de déchets électroniques collectés ou recyclés? ',])
            ->add('G5', null, ['label' => 'G5- Kg de mercure évité, réduit ou géré de manière durable? ',])
            ->add('G6', null, ['label' => 'G6- Tonnes de déchets solides dont la combustion a été empêchée par des méthodes d\'élimination alternatives  ',])
            ->add('H1', null, ['label' => 'H1- Nombre de mécanismes consultatifs liés à la mise en œuvre des conventions opérationnels? ',])
            ->add('H2', null, ['label' => 'H2- Nombre de systèmes communautaires de surveillance environnementale opérationnels? ',])
            ->add('H3', null, ['label' => 'H3- Donner les spécifications? ',])
            ->add('H4', null, ['label' => 'H4- Nombre d\'innovations ou de nouvelles technologies développées / appliquées ? ',])
            ->add('H5', null, ['label' => 'H5- Nommer l’innovation ou la technologie (50mots)? ',])
            ->add('H6', null, ['label' => 'H6- Nombre de politiques nationales influencées? ',])
            ->add('H7', null, ['label' => 'H7- Donner les spécifications (50mots) ? ',])
            ->add('H8', ChoiceType::class, [
                'label' => 'H8- Niveau d’influence',
                'choices' => [
                    'Note 0 (Nul)' => '1',
                    'Note 1' => '2',
                    'Note 2 (Moyen)' => '3',
                    'Note 3' => '4',
                    'Note 4 (Haut)' => '5',
                ],
                'placeholder' => 'Sélectionnez une option',
            ])
            
            ->add('H9', null, ['label' => 'H9- Nombre de politiques régionales influencées? ',])
            ->add('H10', null, ['label' => 'H10- Donner les spécifications (50mots) ? ',])
           

            ->add('H11', ChoiceType::class, [
                'label' => 'H8- Niveau d’influence',
                'choices' => [
                    'Note 0 (Nul)' => '1',
                    'Note 1' => '2',
                    'Note 2 (Moyen)' => '3',
                    'Note 3' => '4',
                    'Note 4 (Haut)' => '5',
                ],
                'placeholder' => 'Sélectionnez une option',
            ])
            ->add('H12', null, ['label' => 'H12- Nombre de politiques locales influencées? ',])
            ->add('H13', null, ['label' => 'H13- Donner les spécifications (50 mots) ? ',])
            ->add('H14', ChoiceType::class, [
                'label' => 'H8- Niveau d’influence',
                'choices' => [
                    'Note 0 (Nul)' => '1',
                    'Note 1' => '2',
                    'Note 2 (Moyen)' => '3',
                    'Note 3' => '4',
                    'Note 4 (Haut)' => '5',
                ],
                'placeholder' => 'Sélectionnez une option',
            ])
            
            ->add('H15', null, ['label' => 'H15- Nombre d\'ONG / OCB formées ou légalisées ? ',])
            ->add('H16', null, ['label' => 'H16- Nombre de personnes des peuples autochtones directement prises en charge ? ',])
            ->add('H17', null, ['label' => 'H17- Nombre de projets dirigés par les femmes directement pris en charge ? ',])
            ->add('H18', null, ['label' => 'H18- Nombre de normes de qualité / labels obtenus ou des mécanismes financiers innovants mis en place? ',])
            ->add('H19', null, ['label' => 'H19- Evolution de la capacité de gestion de projet (spécifier et détailler)? ',])
            ->add('H20', null, ['label' => 'H20- Evolution de la capacité de gestion organisationnelle, administrative et financière de l’organisation communautaire (spécifier et détailler)? ',])
            ->add('H21', null, ['label' => 'H21- Evolution de la capacité de gouvernance environnementale des organisations communautaires (spécifier et détailler)? ',])
            ->add('H22', null, ['label' => 'H22- Nombre d’emplois créés ou renforcés? ',])
            ->add('H23', ChoiceType::class, [
                'label' => 'H23- Connaissons-nous les aspects que le système SE devrait couvrir, et les informations à fournir qui devraient être collectées ?',
                'choices' => [
                    'Oui' => '1',
                    'Non' => '2',
                ],
                                'multiple' => false, // Utilisez cette option si vous voulez permettre le choix multiple
            ])
            ->add('H24', ChoiceType::class, [
                'label' => 'H24- Sait-on clairement qui collectera, communiquera, utilisera et analysera les informations générées par le système SE ?',
                'choices' => [
                    'Oui' => '1',
                    'Non' => '2',
                ],
                                'multiple' => false,
            ])
            
            ->add('H25', ChoiceType::class, [
                'label' => 'H25- Existe-t-il des hypothèses de cause à effet définies entre les actions, les résultats/extrants, les effets et les impacts?',
                'choices' => [
                    'Oui' => '1',
                    'Non' => '2',
                ],
                                'multiple' => false,
            ])
            
            ->add('H26', ChoiceType::class, [
                'label' => 'H26- La fréquence de la collecte des données est-elle claire ?',
                'choices' => [
                    'Oui' => '1',
                    'Non' => '2',
                ],
                                'multiple' => false,
            ])
            
            ->add('H27', ChoiceType::class, [
                'label' => 'H27- Les outils de collecte de données à utiliser sont-ils disponibles ?',
                'choices' => [
                    'Oui' => '1',
                    'Non' => '2',
                ],
                                'multiple' => false,
            ])
            
            ->add('H28', ChoiceType::class, [
                'label' => 'H28- Savez-vous à quelle fréquence vous réfléchirez aux résultats du SE&KC ?',
                'choices' => [
                    'Oui' => '1',
                    'Non' => '2',
                ],
                                'multiple' => false,
            ])
            ->add('I1', null, ['label' => 'I1- La communauté a-t-elle des droits coutumiers et/ou formellement reconnus sur les terres, les pâturages, l\'eau et les richesses naturelles ?  ',])
            ->add('I2', null, ['label' => 'I2- Superficies des utilisations de sols sous droits coutumiers (ha)? ',])
            ->add('I3', null, ['label' => 'I3- Nombre de reconnaissances ? ',])
            ->add('I4', null, ['label' => 'I4- Existe-t-il une plate-forme ou une institution multipartite pour le paysage ou le paysage marin capable de planifier et de gérer efficacement les richesses du paysage ? ',])
            ->add('I5', null, ['label' => 'I5- Comment ? (100mots) ',])
            ->add('I6', null, ['label' => 'I6- Nombre de plans ? ',])
            ->add('I7', ChoiceType::class, [
                'label' => 'I7- Existe-t-il des liens, une coordination et une coopération au sein des communautés et entre elles pour la gestion des richesses naturelles – par exemple une analyse, un suivi-évaluation, une formation, une capitalisation, une documentation, un partenariat, un réseautage ?',
                'choices' => [
                    'Oui' => '1',
                    'Non' => '2',
                ],
                                'multiple' => false, // Utilisez cette option si vous voulez permettre le choix multiple
            ])
            ->add('I8', null, ['label' => 'I8- L\'accès aux opportunités et aux richesses est-il juste et équitable pour tous les membres de la communauté, y compris les femmes, au niveau des ménages, de la communauté et du paysage ? ',])
            ->add('I9', null, ['label' => 'I9- La terre, l\'eau et les autres richesses sont-elles gérées efficacement par des institutions communautaires ? ',])
            ->add('I10', null, ['label' => 'I10- Comment ? (100mots) ',])
            ->add('I11', null, ['label' => 'I11- La communauté a-t-elle un accès autonome aux terres, territoires, richesses naturelles et sites sacrés et cérémoniels indigènes ? ',]) 
            ->add('I12', null, ['label' => 'I12- Cette autonomie est-elle reconnue par les groupes et institutions extérieurs, par exemple les gouvernements et les agences de développement ? ',])
            ->add('J1', null, ['label' => 'J1- La communauté développe-t-elle, améliore-t-elle et adopte-t-elle de nouvelles pratiques en matière d\'agriculture, de pêche, de sylviculture et de conservation et/ou revitalise-t-elle les pratiques traditionnelles pour s\'adapter à l\'évolution des conditions, y compris au changement climatique ? Nombre et noms des pratiques ? ',])
            ->add('J2', null, ['label' => 'J2- Nombre des pratiques ? ',])
            ->add('J3', null, ['label' => 'J3- Noms des pratiques ? ',])
            ->add('J4', null, ['label' => 'J4- Les connaissances locales et les traditions culturelles liées à la biodiversité, à la connaissance des concepts et pratiques clés concernant la terre, l\'eau, les richesses biologiques et la cosmologie sont-elles transmises par les anciens et les parents aux jeunes de la communauté ? Nombre de transmissions et de jeunes bénéficiaires ? ',])
            ->add('J5', null, ['label' => 'J5- Nombre de transmissions ? ',])
            ->add('J6', null, ['label' => 'J6- Nombre de jeunes bénéficiaires ? ',])
            ->add('J7', null, ['label' => 'J7- La biodiversité agricole et les connaissances associées sont-elles documentées, conservées et échangées - par exemple dans des systèmes de classification, des banques de semences communautaires, des réseaux d\'échange de semences, des marchés locaux et des foires aux animaux et aux semences ?  ',])
            ->add('J8', null, ['label' => 'J8- Comment ? (100mots) ',])
            ->add('J9', null, ['label' => 'J9- Les connaissances, les expériences et les compétences des personnes handicapées, des femmes et des jeunes sont-ils reconnus et respectés au niveau des ménages, des communautés et des paysages ? ',])
            ->add('J10', null, ['label' => 'J10- Nombre des connaissances reconnues ? ',])
            ->add('J11', null, ['label' => 'J11- Noms des connaissances reconnues ? ',])
            ->add('J12', null, ['label' => 'J12- Les personnes handicapées, les femmes et les jeunes ont-ils accès aux richesses, à l\'éducation, à l\'information et aux possibilités d\'innovation ? ',])
            ->add('J13', null, ['label' => 'J13- Les membres de la communauté améliorent-ils, développent-ils et adoptent-ils de nouvelles pratiques de gestion de la biodiversité pour s\'adapter aux conditions changeantes, par exemple le changement climatique, la pression démographique, la dégradation des richesses ? ',])
            ->add('J14', null, ['label' => 'J14- Comment ? (100mots) ',])
            ->add('J15', null, ['label' => 'J15- Les traditions culturelles liées au maintien et à l\'utilisation de la biodiversité sont-elles maintenues par les jeunes, par exemple les festivals, les rituels, les chansons, etc. ? ',])
            ->add('J16', null, ['label' => 'J16- Nombre des traditions maintenues ? ',])
            ->add('J17', null, ['label' => 'J17- Noms des traditions maintenues ? ',])
            ->add('J18', null, ['label' => 'J18- Combien de générations interagissent avec le paysage pour leur subsistance et leurs revenus ? ',])
            ->add('J19', null, ['label' => 'J19- Des institutions et des systèmes communautaires de documentation, d\'échange et d\'acquisition de connaissances d\'origine extérieure sont-ils en place ? ',])
            ->add('J20', null, ['label' => 'J20- Nombre ? ',])
            ->add('J21', null, ['label' => 'J21- Les membres de la communauté utilisent-ils la terminologie locale relative à la terre et à l\'utilisation de la biodiversité et, le cas échéant, parlent-ils le dialecte ou la langue locale ?  ',])
            ->add('J22', null, ['label' => 'J22- Nombre de termes locaux spécifiques ? ',])
            ->add('K1', null, ['label' => 'K1- Nombre de bénéficiaires directs? ',])
            ->add('K2', null, ['label' => 'K2- Nombre de femmes bénéficiaires directs? ',])
            ->add('K2a', null, ['label' => 'K2a- Nombre des hommes bénéficiaires directs? ',])
            ->add('K3', null, ['label' => 'K3- Nombre de jeunes (- de 35 ans) bénéficiaires directs? ',])
            ->add('K4', null, ['label' => 'K4- Nombre de personnes handicapés bénéficiaires directs? ',])
            ->add('K5', null, ['label' => 'K5- Nombre des OSC bénéficiaires du projet? ',])
            ->add('K6', null, ['label' => 'K6- Nombre des organisations communautaire bénéficiaires du projet? ',])
            ->add('K7', ChoiceType::class, [
                'label' => 'K7- Le projet est-il achevé?',
                'choices' => [
                    'Oui' => '1',
                    'Non' => '2',
                ],
                                'multiple' => false, // Utilisez cette option si vous voulez permettre le choix multiple
            ])
            ->add('K8', null, ['label' => 'K8- Nombre total de membres de la communauté participants aux activités du projet ? ',])
            ->add('K8a', null, ['label' => 'K8a- Nombre homme? ',])
            ->add('K8b', null, ['label' => 'K8b- Nombre femme? ',])
            ->add('K9', null, ['label' => 'K9- Nombre de jours de réduction de la période de pénurie alimentaire? ',])
            ->add('K10', null, ['label' => 'K10- L\'infrastructure socio-économique du paysage notamment les routes, les écoles, les télécommunications, les marchés, l\'énergie et l\'électricité est-elle adaptée aux besoins de la communauté ?  ',])
            ->add('K11', null, ['label' => 'K11- Quel est l\'état de santé général de la population locale, compte tenu également des conditions environnementales qui prévalent ? (100mots) ',])
            ->add('K12', null, ['label' => 'K12- Existe-t-il un risque sanitaire lié aux épidémies, à la contamination de l\'eau, à la pollution de l\'air ou à d\'autres menaces, telles que la malnutrition ? ',])
            ->add('K13', null, ['label' => 'K13- Expliquez? (100 mots) ',])
            ->add('K14', null, ['label' => 'K14- Les membres de la communauté ont-ils accès aux soins de santé ?  ',])
            ->add('K15', null, ['label' => 'K15- Les méthodes de guérison traditionnelles et la médecine moderne sont-elles présentes ? ',])
            ->add('K16', ChoiceType::class, [
                'label' => 'K16- Les ménages de la communauté sont-ils impliqués dans une variété de moyens de subsistance et de qualité de vie – par exemple un meilleur accès aux activités durables génératrices de revenus, aux marchés, au financement, à l’éducation, à la sécurité alimentaire?',
                'choices' => [
                    'Oui' => '1',
                    'Non' => '2',
                ],
                                'multiple' => false, // Utilisez cette option si vous voulez permettre le choix multiple
            ])
            ->add('K17', null, ['label' => 'K17- Nombre des moyens de qualité de vie ? ',])
            ->add('K18', null, ['label' => 'K18- Noms des moyens de qualité de vie ? ',])
            ->add('K19', null, ['label' => 'K19- Les ménages et les communautés ont-ils la possibilité de se déplacer entre les différentes activités de production et les différents lieux du paysage ? ',])
            ->add('K20', null, ['label' => 'K20- Comment ? (100mots) ',])
            ->add('K21', ChoiceType::class, [
                'label' => 'K21- Existe-t-il une augmentation des jours de scolarisation pour les élèves allant à l’école?',
                'choices' => [
                    'Oui' => '1',
                    'Non' => '2',
                ],
                                'multiple' => false,
            ])
            
            ->add('K22', null, ['label' => 'K22- Nombre de jours augmenté? ',])
            ->add('K23', null, ['label' => 'K23- Nombre de ménages ayant accédé à l\'eau potable grâce au projet? ',])

            ->add('K24', ChoiceType::class, [
                'label' => 'K24- Existe-t-il une augmentation du pouvoir d\'achat par la réduction des dépenses?',
                'choices' => [
                    'Oui' => '1',
                    'Non' => '2',
                ],
                                'multiple' => false,
            ])
            ->add('K25', null, ['label' => 'K25- Cette augmentation est équivalent à combien? ',])
            ->add('K26', ChoiceType::class, [
                'label' => 'K26- Existe-t-il une augmentation des revenus et / ou d\'autres moyens?',
                'choices' => [
                    'Oui' => '1',
                    'Non' => '2',
                ],
                                'multiple' => false,
            ])
            ->add('K27', null, ['label' => 'K27- Cet augmentation est équivalent à combien? ',])
            ->add('StatutFiche', ChoiceType::class, [
                'label' => 'StatutFiche',
                'choices' => [
                    'A Vérifier' => '1', 
                    'Valider' => '2',
                    
                ],
                'placeholder' => 'Sélectionnez une option', 
                            ]) 
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => SuiviEvaluation::class,
        ]);
    }
}
