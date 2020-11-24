<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FamilleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::unprepared("
            INSERT INTO `familles` (`id`, `reference`, `libelle`) VALUES
            (1, 'AA', 'Antalgiques en association'),
            (2, 'AAA', 'Antalgiques antipyréques en association'),
            (3, 'AAC', 'Antidépresseur d action centrale'),
            (4, 'AAH', 'Antivertigineux antihistaminique H1'),
            (5, 'ABA', 'Antibiotique antituberculeux'),
            (6, 'ABC', 'Antibiotique antiacnénique local'),
            (7, 'ABP', 'Antibiotique de la famille des béta-lactamines -pénicilline A-'),
            (8, 'AFC', 'Antibiotique de la famille des cyclines'),
            (9, 'AFM', 'Antibiotique de la famille des macrolides'),
            (10, 'AH', 'Antihistaminique H1 local'),
            (11, 'AIM', 'Antidépresseur imipraminique -tricyclique-'),
            (12, 'AIN', 'Antidépresseur inhibiteur sélectif de la recapture de la sétonine'),
            (13, 'ALO', 'Antibiotique local -ORL-'),
            (14, 'ANS', 'Antidépresseur IMAO non sélectif'),
            (15, 'AO', 'Antibiotique ophtalmique'),
            (16, 'AP', 'Antipsychotique normothymique'),
            (17, 'AUM', 'Antibiotique urinaire minute'),
            (18, 'CRT', 'Corticoide, antibiotique et antifongique à usage local'),
            (19, 'HYP', 'Hypnotique antihistaminique'),
            (20, 'PSA', 'Psychostimulant antiasthésique');
       ");
    }
}
