<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::unprepared("
        INSERT INTO `medicaments` (`id`, `nomCommercial`, `idFamille`, `composition`, `effets`, `contreIndications`) VALUES
(1, 'TRIMYCINE', 18, 'Triamcinolone acétonide + Néomycine + Nystatine', 'Ce médicament est un corticoïde à  activité forte ou très forte associé à  un antibiotique et un antidouleur.', 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants  d\'infections de la peau'),
(2, 'ADIMOL', 7, 'Amoxicilline + Acide clavulanique', 'Ce médicament  plus puissant que les pénicillines simples  est utilisé pour traiter des infections bénines.', 'Ce médicament est contre-indiqué en cas d allergie aux pénicillines ou aux céphalosporines.'),
(3, 'AMOPIL', 7, 'Amoxicilline', 'Ce médicament  plus puissant que les pénicillines simples  est utilisé pour traiter des infections bénines', 'Ce médicament est contre-indiqué en cas d allergie aux pénicillines. Il doit être administré avec précaution.'),
(4, 'AMOXAR', 7, 'Amoxicilline', 'Ce médicament  plus puissant que les pénicillines simples  est utilisé pour traiter des infections bénines.', 'La prise de ce médicament peut rendre positifs les tests de dépistage du dopage.'),
(5, 'AMOXI Gé', 7, 'Amoxicilline', 'Ce médicament  plus puissant que les pénicillines simples  est utilisé pour traiter des infections bénines', 'Ce médicament est contre-indiqué en cas d allergie aux pénicillines. Il doit être administré avec précaution.'),
(6, 'APATOUX Vitamine C', 13, 'Tyrothricine + Tétracaïne + Acide ascorbique (Vitamine C)', 'Ce médicament est utilisé pour traiter les affections de la bouche et de la gorge.', 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants  en cas de phénylcétonurol.'),
(7, 'BACTIGEL', 6, 'Erythromycine', 'Ce médicament est utilisé en application locale pour traiter l\'acné et les infections cutanées bactériennes.', 'Ce médicament est contre-indiqué en cas d\'allergie aux antibiotiques de la famille des macrolides ou de la famille des corticoides.'),
(8, 'BACTIVIL', 9, 'Erythromycine', 'Ce médicament est utilisé pour traiter des infections bactériennes spécifiques.', 'Ce médicament est contre-indiqué en cas d allergie aux macrolides (dont le chef de file est l\'érythrol)'),
(9, 'BIVALIC', 2, 'Dextropropoxyphène + Paracétamol', 'Ce médicament est utilisé pour traiter les douleurs d\'intensité modérée ou intense.', 'Ce médicament est contre-indiqué en cas d\'allergie aux médicaments de cette famille  d insuffisance '),
(10, 'CARTION', 2, 'Acide acétylsalicylique (aspirine) + Acide ascorbique (Vitamine C) + Paracétamol', 'Ce médicament est utilisé dans le traitement symptomatique de la douleur ou de la fièvre.', 'Ce médicament est contre-indiqué en cas de troubles de la coagulation (tendances aux hémorragies).'),
(11, 'CLAZER', 9, 'Clarithromycine', 'Ce médicament est utilisé pour traiter des infections bactériennes spécifiques. Il est également utilisé dans le cas d\'une infection cutanée.', 'Ce médicament est contre-indiqué en cas d\'allergie aux macrolides (dont le chef de file est l érythrol)'),
(12, 'DEPRAMIL', 11, 'Clomipramine', 'Ce médicament est utilisé pour traiter les épisodes dépressifs sévères  certaines douleurs rebelles ', 'Ce médicament est contre-indiqué en cas de glaucome ou d\'adénome de la prostate  d\'infarctus récent. '),
(13, 'DIMIRTAM', 3, 'Mirtazapine', 'Ce médicament est utilisé pour traiter les épisodes dépressifs sévères.', 'La prise de ce produit est contre-indiquée en cas de d\'allergie à  l\'un des constituants.'),
(14, 'DOLORIL', 2, 'Acide acétylsalicylique (aspirine) + Acide ascorbique (Vitamine C) + Paracétamol', 'Ce médicament est utilisé dans le traitement symptomatique de la douleur ou de la fièvre.', 'Ce médicament est contre-indiqué en cas d\'allergie au paracétamol ou aux salicylates.'),
(15, 'NORMADOR', 19, 'Doxylamine', 'Ce médicament est utilisé pour traiter l\'insomnie chez l\'adulte.', 'Ce médicament est contre-indiqué en cas de glaucome  de certains troubles urinaires (rétention urinaire).'),
(16, 'EQUILAR', 4, 'Méclozine', 'Ce médicament est utilisé pour traiter les vertiges et pour prévenir le mal des transports.', 'Ce médicament ne doit pas être utilisé en cas d\'allergie au produit  en cas de glaucome ou de rétention d\'eau.'),
(17, 'EVEILLOR', 20, 'Adrafinil', 'Ce médicament est utilisé pour traiter les troubles de la vigilance et certains symptomes neurologiques.', 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants.'),
(18, 'INSECTIL', 10, 'Diphénydramine', 'Ce médicament est utilisé en application locale sur les piqûres d\'insecte et l\'urticaire.', 'Ce médicament est contre-indiqué en cas d\'allergie aux antihistaminiques.'),
(19, 'JOVENIL', 9, 'Josamycine', 'Ce médicament est utilisé pour traiter des infections bactériennes spécifiques.', 'Ce médicament est contre-indiqué en cas d\'allergie aux macrolides (dont le chef de file est l\'érythrol).'),
(20, 'LIDOXYTRACINE', 8, 'Oxytétracycline +Lidocaïne', 'Ce médicament est utilisé en injection intramusculaire pour traiter certaines infections spécifiques', 'Ce médicament est contre-indiqué en cas d allergie à  l\'un des constituants. Il ne doit pas être associé avec des antibiotiques.'),
(21, 'LITHORINE', 16, 'Lithium', 'Ce médicament est indiqué dans la prévention des psychoses maniaco-dépressives ou pour traiter les épisodes de crises.', 'Ce médicament ne doit pas être utilisé si vous êtes allergique au lithium. Avant de prendre ce traitement, assurez vous de ne pas y être sensible.'),
(22, 'PARMOCODEINE', 1, 'Codéine + Paracétamol', 'Ce médicament est utilisé pour le traitement des douleurs lorsque des antalgiques simples ne sont pas efficaces.', 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants  chez l\'enfant de moins de 8 ans.'),
(23, 'PHYSICOR', 20, 'Sulbutiamine', 'Ce médicament est utilisé pour traiter les baisses d activité physique ou psychique  souvent dans un épisode depressif.', 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants.'),
(24, 'PIRIZAN', 5, 'Pyrazinamide', 'Ce médicament est utilisé  en association à  d\'autres antibiotiques  pour traiter la tuberculose.', 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants  d\'insuffisance rénale.'),
(25, 'POMADINE', 15, 'Bacitracine', 'Ce médicament est utilisé pour traiter les infections oculaires de la surface de l\'oeil.', 'Ce médicament est contre-indiqué en cas d\'allergie aux antibiotiques appliqués localement.'),
(26, 'TROXADET', 12, 'Paroxétine', 'Ce médicament est utilisé pour traiter la dépression et les troubles obsessionnels compulsifs. Il peut causer insomnies.', 'Ce médicament est contre-indiqué en cas d\'allergie au produit.'),
(27, 'TOUXISOL', 13, 'Tyrothricine + Acide ascorbique (Vitamine C)', 'Ce médicament est utilisé pour traiter les affections de la bouche et de la gorge.', 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants et chez l\'enfant de moins de 5 ans.'),
(28, 'URIREGUL', 17, 'Fosfomycine trométamol', 'Ce médicament est utilisé pour traiter les infections urinaires simples chez la femme de moins de 65 ans.', 'La prise de ce médicament est contre-indiquée en cas d\'allergie à l\'un des constituants et d\'insuffisances renale.'),
(29, 'TESTX', 5, 'perlinpinpin', 'placebo', 'aucunes');
        ");
    }
}
