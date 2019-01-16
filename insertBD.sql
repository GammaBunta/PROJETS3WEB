
--
-- Contenu de la table `Utilisateur`
--

INSERT INTO `Utilisateur` (`idUser`, `pseudo`, `password`, `email`, `img`) VALUES
(1, 'SamDev', 'CRnLhhfbfxpbs', 'sam@hotmail.fr', NULL);

--
-- Contenu de la table `Ingredient`
--

INSERT INTO `Ingredient` (`idingr`, `nomingr`, `protide`, `lipide`, `glucide`, `calorie`, `congele`, `famille`) VALUES
(1, 'Abricot (Boîte, sucre)', 0.6, 0.1, 22, 91.3, 0, 'Fruit'),
(2, 'Abricot (frais)',  0.9, 0.2, 12.8, 56.6, 0, 'Fruits'),
(3, 'Abricot (sec)', 5, 0.5, 66.5, 290.5, 0, 'Fruits'),
(4, 'Agrumes',  0.7, 0.2, 10, 44.6, 0, 'Fruits'),
(5, 'Akènes',  16.5, 57, 16, 643, 0, 'Legumes'),
(6, 'Ananas (Boîte, sucre)',  0.3, 0.1, 19.4, 79.7, 0, 'Fruits'),
(7, 'Ananas (frais)',  0.4, 0.2, 12.2, 52.2, 0, 'Fruits'),
(8, 'Artichaut',  2.7, 0.2, 10.6, 55, 0, 'Legumes'),
(9, 'Aubergine',  1.2, 0.2, 5.6, 29, 0, 'Legumes'),
(10, 'Avocat',  2.2, 17, 6, 185.8, 0, 'Legumes'),
(11, 'Avoine (flocons)',  14, 7, 66, 383, 0, 'Feculents'),
(12, 'Banane',  1.4, 0.2, 23, 99.4, 0, 'Fruit'),
(13, 'Betterave rouge',  1.6, 0.1, 9.9, 46.9, 0, 'Legumes'),
(14, 'Beurre', 0.8, 84, 0.5, 761.2, 0, 'Produits Laitiers'),
(15, 'Biscotte',  11, 7, 75, 407, 0, 'Epicerie'),
(16, 'Boeuf cervelle',  10.4, 8, 0.8, 116.8, 0, 'Viandes'),
(17, 'Boeuf coeur', 17, 6, 0.6, 124.4, 0, 'Viandes'),
(18, 'Boeuf langue',  19, 16, 0.4, 221.6, 0, 'Viandes'),
(19, 'Boeuf maigre',  20, 9, NULL, 161, 0, 'Viandes'),
(20, 'Boeuf rognon', 15.4, 6.7, 0.9, 125.5, 0, 'Viandes'),
(21, 'Boeuf tripes',  19, 2, NULL, 94, 0, 'Viandes'),
(22, 'Cacahuète grillée',  26.2, 48.7, 20.6, 625.5, 0, 'Epicierie'),
(23, 'Cacao',  19, 24, 38, 444, 0, 'Epicierie'),
(24, 'Cake',  4.94, 14.72, 29.37, 269.72, 0, 'Epicierie'),
(25, 'Canard', 16, 28.6, NULL, 321.4, 0, 'Viandes'),
(26, 'Carotte (Boîte)',  0.8, 0.3, 6.7, 32.7, 0, 'Epicierie'),
(27, 'Carotte (fraîche)',  1.2, 0.2, 8.5, 40.6, 0, 'Legumes'),
(28, 'Céleri',  1.3, 0.2, 3.7, 21.8, 0, 'Legumes'),
(29, 'Cerise',  1.2, 0.4, 14.6, 66.8, 0, 'Fruits'),
(30, 'Champignon Paris',  2.8, 0.24, 0.9, 16.96, 0, 'Legumes'),
(31, 'Châtaigne, Marron',  4, 2.6, 40, 199.4, 0, 'Fruits'),
(32, 'Cheval', 22, 2.7, 0.5, 114.3, 0, 'Viandes'),
(33, 'Chips', 5.3, 39.8, 50, 579.4, 0, 'Epicerie'),
(34, 'Chocolat au lait',  7.7, 32.3, 56.9, 549.1, 0, 'Epicerie'),
(35, 'Chocolat noir',  4, 28, 64, 524, 0, 'Epicerie'),
(36, 'Chou blanc',  1.4, 0.2, 5.7, 30.2, 0, 'Legumes'),
(37, 'Chou brocoli',  3.6, 0.3, 5.9, 40.7, 0, 'Legumes'),
(38, 'Chou Bruxelle', 4.7, 0.4, 8.7, 57.2, 0, 'Legumes'),
(39, 'Chou fleur',  2.7, 0.2, 5.2, 33.4, 0, 'Legumes'),
(40, 'Chou rouge', 1.5, 0.2, 5.9, 31.4, 0, 'Legumes'),
(41, 'Coca',  NULL, NULL, 10, 40, 0, 'Autre'),
(42, 'Compote de pommes', 0.5, 4, 74, 334, 0, 'Epicerie'),
(43, 'Concombre', 0.8, 0.1, 3, 16.5, 0, 'Legumes'),
(44, 'Confiture',  0.5, 0.1, 70, 282.9, 0, 'Epicerie'),
(45, 'Corn flakes', 7.9, 0.04, 85.3, 373.16, 0, 'Epicerie'),
(46, 'Cornichon', 0.8, 0.1, 3, 16.1, 0, 'Condiments'),
(47, 'Courge',  0.8, 0.1, 3.5, 18.1, 0, 'Legumes'),
(48, 'Courgette', 1.2, 0.1, 3.6, 20.1, 0, 'Legumes'),
(49, 'Crabe',  17.4, 2.5, 1.1, 96.5, 0, 'Poisson'),
(50, 'Crème fraîche', 3, 30, 3.5, 296, 0, 'Produits Laitiers'),
(51, 'Cresson', 1.7, 0.3, 3.3, 22.7, 0, 'Legumes'),
(52, 'Crevette grise', 18.7, 2.2, NULL, 94.6, 0, 'Poisson'),
(53, 'Datte',  2.2, 0.6, 73, 306.2, 0, 'Fruits'),
(54, 'Dinde',  20.1, 14.7, 0.4, 214.3, 0, 'Viandes'),
(55, 'Epinard',  2.3, 0.3, 3.5, 25.9, 0, 'Legumes'),
(56, 'Escargot',  15, 0.8, 2, 75.2, 0, 'Viandes'),
(57, 'Farine',  10.5, 1, 76.1, 355.4, 0, 'Epicerie'),
(58, 'Figue sèche',  3.6, 1.2, 62, 273.2, 0, 'Fruits'),
(59, 'Figue fraîche',  1, 0.4, 17, 75.6, 0, 'Fruits'),
(60, 'Fraise', 0.7, 0.5, 8.4, 40.9, 0, 'Fruits'),
(61, 'Framboise',  0.9, 0.7, 11, 53.9, 0, 'Fruits'),
(62, 'Camembert',  18, 22, 4, 286, 0, 'Produits Laitiers'),
(63, 'Brie',  18, 22, 4, 286, 0, 'Produits Laitiers'),
(64, 'Pont-L''Evêque', 26, 23, 7, 339, 0, 'Produits Laitiers'),
(65, 'Livarot',  26, 23, 7, 339, 0, 'Produits Laitiers'),
(66, 'Munster',  26, 23, 7, 339, 0, 'Produits Laitiers'),
(67, 'Hollande', 27, 28, 3, 372, 0, 'Produits Laitiers'),
(68, 'Cantal',  27, 28, 3, 372, 0, 'Produits Laitiers'),
(69, 'St Paulin',  27, 28, 3, 372, 0, 'Produits Laitiers'),
(70, 'Comté',  29, 30, 3, 398, 0, 'Produits Laitiers'),
(71, 'Gruyère',  29, 30, 3, 398, 0, 'Produits Laitiers'),
(72, 'Fromage blanc',  9, 10, 4, 142, 0, 'Produits Laitiers'),
(73, 'Fruit au sirop',  NULL, NULL, 31, 124, 0, 'Epicerie'),
(74, 'Gelatine sèche',  85.6, 0.1, NULL, 343.3, 0, 'Epicerie'),
(75, 'Haricot sec',  21, 1.8, 59.6, 338.6, 0, 'Legumes'),
(76, 'Huile',  NULL, 99, NULL, 891, 0, 'Condiments'),
(77, 'Oeuf', 6.4, 13.24, NULL, 144.76, 0, 'Viandes'),
(78, 'Lamproie',  19, 15, NULL, 211, 0, 'Poisson'),
(79, 'Pain blanc',  7, 0.8, 55, 255.2, 0, 'Epicerie'),
(80, 'Pâtes', 12, 0.9, 74.1, 352.5, 0, 'Feculents'),
(81, 'Petit pois (boîte)',  0.034, 0.004, 0.127, 0.68, 0, 'Epicerie'),
(82, 'Poire',  0.3, 0.4, 14, 60.8, 0, 'Fruits'),
(83, 'Saumon',  19, 15, NULL, 211, 0, 'Poisson'),
(84, 'Maquereau',  19, 15, NULL, 211, 0, 'Poisson'),
(85, 'Thon',  19, 15, NULL, 211, 0, 'Poisson'),
(86, 'Truite',  16, 9, NULL, 145, 0, 'Poisson'),
(87, 'Pomme',  0.3, 0.4, 14, 60.8, 0, 'Fruits'),
(88, 'Pomme de terre',  2, 0.1, 20, 88.9, 0, 'Legumes'),
(89, 'Porc cervelle',  10.6, 9, NULL, 123.4, 0, 'Viandes'),
(90, 'Porc coeur',  16.9, 4.8, 0.4, 112.4, 0, 'Viandes'),
(91, 'Porc cotelette',  15.2, 30.6, NULL, 336.2, 0, 'Viandes'),
(92, 'Porc filet',  18.6, 9.9, NULL, 163.5, 0, 'Viandes'),
(93, 'Porc foie',  20.6, 4.8, 2.6, 136, 0, 'Viandes'),
(94, 'Porc langue',  16.8, 15.6, 0.5, 209.6, 0, 'Viandes'),
(95, 'Porc rognon',  16.4, 5.2, 0.8, 115.6, 0, 'Viandes'),
(96, 'Poulet',  21, 4.5, NULL, 124.5, 0, 'Viandes'),
(97, 'Pruneau',  2.4, 0.5, 70, 294.1, 0, 'Fruits'),
(98, 'Raisin',  1, 0.4, 17, 75.6, 0, 'Fruits'),
(99, 'Riz blanc', 7.6, 0.5, 79, 350.9, 0, 'Feculents'),
(100, 'Salade', 1.5, 0.5, 5, 30.5, 0, 'Legumes'),
(101, 'Saucisse de Francfort',  12.5, 27.6, 1.8, 305.6, 0, 'Viandes'),
(102, 'Semoule',  10.3, 0.8, 76, 352.4, 0, 'Feculents'),
(103, 'Semoule Maïs', 7.5, 0.8, 78, NULL, 0, 'Feculents'),
(104, 'Sardine',  19, 15, NULL, 211, 0, 'Poisson'),
(105, 'Sucre',  NULL, NULL, 50, 200, 0, 'Epicerie'),
(106, 'Tomate',  0.9, 0.3, 4, 22.3, 0, 'Legumes'),
(107, 'Veau cervelle',  10.2, 8.3, 0.8, 118.7, 0, 'Viandes'),
(108, 'Veau coeur',  12.2, 7.6, 0.8, 120.4, 0, 'Viandes'),
(109, 'Veau escalope panée',  21.6, 15, 5, 241.4, 0, 'Viandes'),
(110, 'Veau foie',  19, 4.5, 4, 132.5, 0, 'Viandes'),
(111, 'Veau langue',  18.5, 5.3, 0.9, 125.3, 0, 'Viandes'),
(112, 'Veau maigre',  19, 5, NULL, 121, 0, 'Viandes'),
(113, 'Veau ris', 19.6, 3, NULL, 105.4, 0, 'Viandes'),
(114, 'Veau rognon', 16.7, 6.4, 0.8, 127.6, 0, 'Viandes'),
(115, 'Yaourt',  4.2, 1, 5, 45.8, 0, 'Produit Laitiers'),
(116, 'Carrelet',  16, 9, NULL, 145, 0, 'Poisson'),
(117, 'Colin',  16, 9, NULL, 145, 0, 'Poisson'),
(118, 'Merlan',  16, 9, NULL, 145, 0, 'Poisson'),
(119, 'Merlu', 16, 9, NULL, 145, 0, 'Poisson'),
(120, 'Sole', 16, 9, NULL, 145, 0, 'Poisson'),
(121, 'Limande', 16, 9, NULL, 145, 0, 'Poisson'),
(122, 'Lieu',  16, 9, NULL, 145, 0, 'Poisson'),
(123, 'Raie',  16, 9, NULL, 145, 0, 'Poisson'),
(124, 'Dorade', 16, 9, NULL, 145, 0, 'Poisson'),
(125, 'Roussette',  16, 9, NULL, 145, 0, 'Poisson'),
(126, 'Levure chimique',  16, 9, NULL, 145, 0, 'Epicerie'),
(127, 'Maïzena',  16, 9, NULL, 145, 0, 'Epicerie'),
(128, 'Oignon',  16, 9, NULL, 145, 0, 'Legumes'),
(129, 'Levure',  0, 0, 0, 0, 0, 'Autres'),
(130, 'Pate feuillete', 0,0,0,0,0,'Epicerie'),
(131, 'Poudre amande',0,0,0,0,0,'Epicerie'),
(132, 'Riz',0,0,0,0,0,'Condiments'),
(133, 'Huile d\'olive',0,0,0,0,0,'Epicerie'),
(134, 'Vin Blanc',0,0,0,0,0,'Epicerie'),
(135, 'Parmesan',0,0,0,0,0,'Produits Laitiers'),
(136, 'Ail',0,0,0,0,0,'Legumes'),
(137, 'Echalote',0,0,0,0,0,'Legumes'),
(138, 'Persil plat',0,0,0,0,0,'Legumes'),
(139,'Pâtes à lasagne',0,0,0,0,0,'Condiments'),
(140,'Viande hachée boeuf',0,0,0,0,0,'Viandes'),
(141, 'Saucisse',0,0,0,0,0,'Viandes'),
(142,'Purée de tomates',0,0,0,0,0,'Legumes'),
(143,'Mozzarela',0,0,0,0,0,'Produits Laitiers'),
(144,'Pain de mie',0,0,0,0,0,'Epicerie'),
(145,'Fromage spécial croque-monsieur',0,0,0,0,0,'Produit Laitiers'),
(146,'Jambon',0,0,0,0,0,'Viandes'),
(147,'Lait',0,0,0,0,0,'Produits Laitiers'),
(148,'Tagliatelle',0,0,0,0,0,'Condiments'),
(149, 'Lardons fumés',0,0,0,0,0,'Viandes'),
(150, 'Biscuits à la cuillère',0,0,0,0,0,'Epicerie'),
(151,'Sucre glace',0,0,0,0,0,'Epicerie'),
(152,'Rhum',0,0,0,0,0,'Autres');

-- --------------------------------------------------------

--
-- Contenu de la table `Recette`
--

INSERT INTO Recette (idrec,idUser,titre, nbpers, categorie, vegetarien, gluteenFree, avisPositif,avisNegatif, niveau, tpsprepa, tpscuisson, tpsrepose, textrec, img, nombreAvis) values
(1, 1, 'Risotto aux champignons','2','Plat',1,0,0,0,'Intermédiaire', 45,30,0,'Séparer les champignons en deux (préférer des cèpes) : une partie servira à élaborer le bouillon et cuira avec le riz.
L\'autre partie sera poêlé au dernier moment pour la présentation et mettre en avant le champignon tout en conservant une texture ferme.
Faire blondir dans une casserole un demi-oignon émincé dans un mélange de beurre et d\'huile d\'olive.
Ajouter et poêler les champignons.
Ajouter du bouillon de légume ou de poule (assez pour nourrir le risotto).
Laisser mijoter le bouillon pour qu\'il s\'imprègne bien du goût et des saveurs des champignons.
Pendant ce temps, émincer un petit peu d\'ail, d\'échalote et de persil séparément et réserver.
Chauffer une nouvelle casserole (qui accueillera le risotto), ajouter un peu d\'huile d\'olive et de beurre que vous ferez blondir.
Ajouter le riz carnaroli et remuer jusqu\'à le rendre translucide (attention à la température, le riz ne doit pas coller).
Déglacer avec un verre de vin blanc sec.
Continuer à remuer pour que le riz n\'adhère pas et laisser réduire l\'alcool.
Verser une louche de bouillon que vous avez laissé mijoter et continuer à remuer constamment jusqu\'à l\'absorption totale du riz.
Réitérer l\'étape 10 jusqu\'au point de cuisson (préférer al dente).
Juste avant la fin, faire fondre du beurre et un peu d\'huile d\'olive dans une poêle tout en remuant le risotto.
Faire blondir l\'échalote émincée dans la poêle puis ajouter l\'ail (attention à ne pas le brûler).
Faire poêler les champignons tout en remuant le risotto, assaisonner et ajouter le persil émincé en fin de cuisson avec un tour de moulin à poivre puis réserver.
Assaisonner le risotto juste avant la fin.
Dresser le riz dans des assiettes creuses. Placer soigneusement sur le haut les champignons poêlés.
Ciseler du persil et parsèment le plat pour la présentation.
Servir avec un tour de moulin à poivre et du parmesan.
Le gras du beurre va s\'opposer au salé du parmesan et à l\'amertume du cèpe en arrière plan.
','./Images/imagesRecettes/risoto.jpg',0);

INSERT INTO Recette (idrec,idUser,titre, nbpers, categorie, vegetarien, gluteenFree, avisPositif,avisNegatif, niveau, tpsprepa, tpscuisson, tpsrepose, textrec, img, nombreAvis) values
(2,1,'Lasagnes','4','Plat',0,0,0,0,'Intermédiaire',90,35,0,'Laver et hacher finement l\'oignon, la carotte et la branche de céleri (en ayant pris soin d\'en retirer les feuilles que l\'on réserve pour plus tard).
Dans une marmite ou une cocotte, verser un fond d\'huile d\'olive et y ajouter la moitié du mélange préalablement préparé, puis y ajouter toute la tomate.
Ajouter ensuite un bouquet constitué des feuilles de céleri et de deux branches de basilic entières, bouquet que l\'on retirera en fin de cuisson de la sauce
Préparer une béchamel classique et la réserver.
Prendre ensuite un autre récipient et y ajouter un fond d\'huile d\'olive, le reste de hachis (oignon + carotte + céleri), puis ajouter la chair à saucisse, laisser cuire environ 5 minutes et ajouter le boeuf.
Lorsque le mélange a pris sa couleur, le retirer du feu et le mélanger avec la béchamel.
Si vous avez le temps, laissez cuire la sauce tomate environ 1 heure à feux doux en rajoutant un peu d\'eau si nécessaire.
Procéder ensuite de la manière habituelle en faisant une couche de pâtes, une couche de tomate, une couche de béchamel + viande, en rajoutant quelques feuilles de basilic entre chaque couche.','./Images/imagesRecettes/lasagnes.jpg',0);

INSERT INTO Recette (idrec,idUser,titre, nbpers, categorie, vegetarien, gluteenFree, avisPositif,avisNegatif, niveau, tpsprepa, tpscuisson, tpsrepose, textrec, img, nombreAvis) values
(3,1,'Croque-monsieur','4','Plat',0,0,0,0,'Facile',10,5,0,'Beurrez les 8 tranches de pain de mie sur une seule face. Posez 1 tranche de fromage sur chaque tranche de pain de mie. Posez 1 tranche de jambon plié en deux sur 4 tranches de pain de mie. Recouvrez avec les autres tartines (face non beurrée au dessus).
Dans un bol mélanger le fromage râpé avec le lait, le sel, le poivre et la muscade.
Répartissez le mélange sur les croque-monsieur.
Placez sur une plaque au four sous le grill pendant 10 mn. ','Images/imagesRecettes/croque.jpg',0);

INSERT INTO Recette (idrec,idUser,titre, nbpers, categorie, vegetarien, gluteenFree, avisPositif,avisNegatif, niveau, tpsprepa, tpscuisson, tpsrepose, textrec, img, nombreAvis) values
(4,1,'Tagliatelle carbonara','4','Plat',0,0,0,0,'Facile',10,20,0,'
    Faites revenir l\'oignon et l\'ail émincés dans un peu d\'huile d\'olive. Ajoutez ensuite les lardons. Faites les dégraisser à feu moyen quelques minutes. Versez le vin blanc et laisser réduire.
Faite bouillir un large volume d\'eau, ajoutez du sel et une coulée d\'huile d\'olive, puis plongez-y les pâtes pour une cuisson al-dente.
Une fois le vin blanc presque entièrement réduit, versez la crème fraîche, portez la à ébullition puis retirez le tout du feu. Gardez au chaud le temps que les pates soient prêtes.
Sortez les pâtes, égouttez-les et servez-les dans les assiettes.
Séparez les jaunes des oeufs et délayez-les très rapidement à la sauce, hors du feu. Verser une pincée de muscade, de poivre et servez la sauce sur les pâtes. Parsemez les assiettes de basilic fraîchement coupé.','./Images/imagesRecettes/carbo.jpeg',0);

INSERT INTO Recette (idrec,idUser,titre, nbpers, categorie, vegetarien, gluteenFree, avisPositif,avisNegatif, niveau, tpsprepa, tpscuisson, tpsrepose, textrec, img, nombreAvis) values
(5,1,'Charlotte au chocolat','6','Dessert',1,0,0,0,'Facile',45,0,0,'
    Beurrer légèrement un moule à charlotte et disposer dans le fond un rond de papier sulfurisé.
Verser 10 cl d\'eau et le rhum dans le fond d\'une assiette creuse.
Tremper rapidement les biscuits et tapisser entièrement le fond et les bords du moule (côté bombé vers l\'extérieur).
Séparer les jaunes d\'oeufs des blancs.
Mettre à fondre le chocolat avec le lait dans un saladier à bain-marie doux. Le laisser fondre entièrement et le lisser avec une spatule en bois. En maintenant la préparation au bain-marie ajouter peu à peu le beurre en petits morceaux tout en remuant, puis les jaunes d\'oeuf l\'un après l\'autre. Travailler la crème quelques instants jusqu\'à ce qu\'elle soit bien lisse et brillante puis retirer la casserole du feu et laisser refroidir.
Monter les blancs d\'oeuf en neige en ajoutant à la fin le sucre glace en pluie.
Battre la crème liquide (très froide) en chantilly un peu molle.
Incorporer les deux préparations à la crème afin d\'obtenir un mélange lisse et parfaitement homogène.
Remplir le moule avec la mousse au chocolat en la tassant légèrement, terminer par une couche de biscuits imbibés. Couvrir d\'une assiette, un poids dessus et mettre au frigo jusqu\'au lendemain.
Pour servir retourner le moule sur le plat de service, retirer le fond de papier sulfurisé. Décorer de copeaux de chocolat ou la saupoudrer simplement d\'un peu de cacao. ',NULL,0);

--
-- Contenu de la table `utiliser`
--

INSERT INTO `utiliser` (`idrec`,`idingr`,`quantite`) values
(1,14,'1 noix'),
(1,30,'250 g'),
(1,132,'200 g'),
(1,133,'1 filet'),
(1,134,'20 cl'),
(1,135,'1 cuillère à soupe'),
(1,136,'1 gousse'),
(1,137,'1'),
(1,138,'2 brins'),
(2,139,'1/2 paquet'),
(2,140,'250 g'),
(2,141,'150 g'),
(2,106,'100 g de dés'),
(2,142,'1 bouteille'),
(2,128,'1'),
(2,27,'1'),
(2,133,''),
(2,143,'1'),
(2,28,'1 branche'),
(3,144,'8 tranches'),
(3,14,'50g'),
(3,146,'4 tranches'),
(3,145,'8 tranches'),
(3,71,'100 g'),
(3,147,'4 cuillères à soupe'),
(4,148,'250 g'),
(4,149,'200 g'),
(4,50,'20 cl'),
(4,128,'1'),
(4,136,'1 gousse'),
(4,134,'20 cl'),
(4,77,'2'),
(5,150,'24'),
(5,35,'250 g'),
(5,50,'20 cl'),
(5,147,'100 g'),
(5,77,'4'),
(5,151,'30 g'),
(5,152,'10 cl');




--
-- Contenu de la table `possede`
--

INSERT INTO `possede` (`idingr`, `idUser`, `quantite`, `datePeremption`) VALUES
(1, 1, 3,'2019/01/02'),
(50, 1, 4,'2019/01/02');
