<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Line;
use App\Models\Stop;

class LinesAndStopsSeeder extends Seeder
{
    public function run()
    {
        // Désactiver temporairement les contraintes FK
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Vider les tables pour repartir à zéro
        DB::table('line_stop')->truncate();
        DB::table('stops')->truncate();
        DB::table('lines')->truncate();

        // Réactiver les contraintes FK
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $linesData = [
            // === DDD 1 ===
            [
                'name' => 'DDD 1',
                'departure' => 'Parcelles Assainies',
                'destination' => 'Place LECLERC',
                'stops' => [
                    'Sapeur Pompiers', 'Unités 09 10 15', 'Ecole Dior', 'Terrain Acapes', 'Unités 22 24',
                    'Marché Grand Médine', 'Rondpoint 26', 'VDN-Foire', 'Cité Keur Gorgui', 'Ecole Normale',
                    'UCAD', 'Rond-point SHAM', 'Marché Tilène', 'Poste Médina', 'Difoncé', 'Sandaga',
                    'Avenue George Pompidou', 'Place de l\'Indépendance', 'Gare TER', 'Embarcadère', 'Terminus Leclerc',
                ],
            ],
            // === DDD 4 ===
            [
                'name' => 'DDD 4',
                'departure' => 'Liberté 5',
                'destination' => 'Place LECLERC',
                'stops' => [
                    'Cité Derklé', 'Rond-point Liberté 6', 'Khar Yalla', 'Cité Marine', 'Cem Ousmane Socé Diop Dieuppeul 3',
                    'Eglise Martyrs de l\'Ouganda', 'SDE', 'Collège Sacré Cœur', 'Sicap Karack', 'Point E',
                    'Université Hampate Ba', 'Canal 4', 'Marché Fass', 'Gueule Tapée', 'Rond-Point SHAM', 'Marché Tilène',
                    'Poste Médina', 'Avenue Blaise Diagne', 'Difoncé', 'Sandaga', 'ASECNA', 'Boulevard de la République',
                    'Avenue Léopold Sédar Senghor', 'Place de l\'Indépendance', 'Gare TER', 'Embarcadère', 'Terminus Leclerc',
                ],
            ],
            // === DDD 5 ===
            [
                'name' => 'DDD 5',
                'departure' => 'Daroukhane',
                'destination' => 'Palais 1',
                'stops' => [
                    'Police Wakhinane', 'Marché Manne Diarra', 'Station Touré', 'Police Guédiawaye', 'Pikine',
                    'Rue 10', 'Cité Lobatt Fall', 'Péage', 'Pompier', 'Avenue Lamine Gueye', 'Rond-point Sandaga',
                    'Avenue Peytavin', 'ASECNA', 'Bid de la République', 'Avenue Léopold Sédar Senghor', 
                    'Hôpital Principale', 'Rond-point Assemblée Nationale', 'Hôpital Le Dantec', 'Institut Pasteur', 'Terminus Palais 1',
                ],
            ],
            // === DDD 6 ===
            [
                'name' => 'DDD 6',
                'departure' => 'Guédiawaye',
                'destination' => 'Palais 1',
                'stops' => [
                    'Terminus Guédiawaye', 'Hôpital Roi Bedoin', 'Marché jeudi', 'Hôpital Dalal Diam', 'Camberene', 
                    'Case Ba', 'Police Parcelles', 'Marché Grand Médine', 'Rond-point 26', 'Foire', 'Sipres', 
                    'Deux voies Liberté 6', 'Rond-point Liberté 6', 'JVC', 'Terminus Liberté 5', 'Allées Khalifa Ababacar Sy', 
                    'Jet d\'Eau', 'Niary Tally', 'Eglise Sainte Thérèse- ENA', 'Lycée Kennedy', 'Boulevard Général De Gaule', 
                    'Centenaire', 'RTS', 'Allées Pape Gueye Fall', 'Petersen', 'Avenue Faidherbe', 'Avenue lamine Gueye', 
                    'Avenue André Peytavin', 'Avenue Jean Jaurès', 'ASECNA', 'Bid de la République', 
                    'Avenue Léopold Sédar Senghor', 'Hôpital Principale', 'Rond-point Assemblée Nationale', 
                    'Hôpital Le Dantec', 'Institut Pasteur', 'Terminus Palais 1',
                ],
            ],
            // === DDD 7 ===
            [
                'name' => 'DDD 7',
                'departure' => 'OUAKAM',
                'destination' => 'Palais 2',
                'stops' => [
                    'Citée Assemblée', 'Cité Comico (Case des Tout Petits) Sortie', 'Ouakam', 'Hôpital IHO', 
                    'Fenêtre Mermoz', 'Mermoz', 'ENEA', 'Ecole Normale', 'Avenue Cheikh Anta Diop', 
                    'École Manguier', 'Police 4eme', 'Rond Point Sham', 'Marché Tilène', 'Rond-point Poste Médina', 
                    'Avenue Blaise Diagne', 'Difoncé', 'Sandaga', 'Avenue George Pompidou', 'Place de l\'Indépendance', 
                    'Avenue LSS', 'Hôpital Principale', 'Rond-point Assemblée Nationale', 'Hôpital Le Dantec', 
                    'Institut Pasteur', 'Terminus Palais 2',
                ],
            ],
            // === DDD 8 ===
            [
                'name' => 'DDD 8',
                'departure' => 'Aéroport LSS',
                'destination' => 'Palais 2',
                'stops' => [
                    'Cité Ascena', 'Yoff Tonghor', 'Hôpital Philippe Maguilène Senghor', 'Pond Foire', 'Stade LSS',
                    'Patte d\'Oie', 'Grand Yoff', 'Hôpital Général Idrissa Pouye (Ex CTO)', 'Fourrière', 'Cité des Eaux',
                    'Station Castor', 'Avenue Bourguiba', 'Jet d\'Eau', 'Stade Demba Diop', 'Dial Diop (Ex-Rue 10)', 'Zone B',
                    'Point E', 'Avenue Cheikh Anta Diop', 'Ecole Manguier', 'Police 4eme', 'Rond Point Sham', 'Marché Tilène',
                    'Rond-point Poste Médina', 'Avenue Blaise Diagne', 'Difoncé', 'Sandaga', 'Ascena', 'Bid de la République',
                    'Avenue LSS', 'Hôpital Principale', 'Rond-point Assemblée Nationale', 'Hôpital Le Dantec', 'Institut Pasteur', 'Terminus Palais 2',
                ],
            ],
            // === DDD 9 ===
            [
                'name' => 'DDD 9',
                'departure' => 'Liberté 6',
                'destination' => 'Palais 1',
                'stops' => [
                    'Terminus Liberté 6', 'Rond-Point JVC', 'Sacré cœur', 'IPG', 'Terminus Dieuppeul', 'Allées Ababacar Sy',
                    'Rond point Jet d\'Eau', 'Niary Tally', 'Allée Cheikh Sidate', 'Eglise Sainte Thérèse', 'Lycée Blaise Diagne',
                    'Lycée Kennedy', 'Obélisque', 'Centenaire', 'Rond-point RTS', 'Rond Point Poste Médina', 'Avenue Blaise Diagne',
                    'Difoncé', 'Sandaga', 'Avenue George Pompidou', 'Place de l\'Indépendance', 'Avenue LSS', 'Hôpital Principale',
                    'Rond-point Assemblée Nationale', 'Hôpital Le Dantec', 'Institut Pasteur', 'Terminus Palais 1',
                ],
            ],
            // === DDD 10 ===
            [
                'name' => 'DDD 10',
                'departure' => 'Liberté 5',
                'destination' => 'Palais 2',
                'stops' => [
                    'Cité Derklé', 'Rond-point Liberté 6', 'Khar Yalla', 'Cité Marine', 'Cem Ousmane Socé Diop',
                    'Eglise Martyrs de l\'Ouganda', 'SDE', 'Dakar Sacré Cœur', 'Stade Demba Diop', 'Avenue Bourguiba',
                    'Ecole Normale', 'Poste Fann', 'Rue Aimé Césaire', 'Ministère de la Santé', 'Corniche Ouest', 'IFAN',
                    'Hôtel Terroubi', 'Tunnel de Soumbédioune', 'Village Artisanal de Soumbédioune', 'Prison Reubeus',
                    'Turbinal de Dakar', 'Boulevard de la République', 'Sorano', 'Avenue LSS', 'Hôpital Principale',
                    'Rond-point Assemblée Nationale', 'Hôpital Le Dantec', 'Institut Pasteur', 'Terminus Palais 2',
                ],
            ],
            // === DDD 16A ===
            [
                'name' => 'DDD 16A',
                'departure' => 'Malika',
                'destination' => 'Palais 1',
                'stops' => [
                    'Terminus Malika', 'Malika Plage', 'Terminus 221(Gadaye)', 'Hamo', 'Terminus Guédiawaye', 'Marché Sahm',
                    'Ecole Canada-Icotaf', 'Cité Lobatt Fall', 'Rond-Point Lobatt Fall', 'Autoroute', 'Colobane',
                    'Rond-point Colobane', 'Place Bakou', 'Cfao Technologies', 'Cymos', 'Arsenal', 'Place de l\'Indépendance', 'Palais 1',
                ],
            ],
            // === DDD 121 ===
            [
                'name' => 'DDD 121',
                'departure' => 'SCAT URBAM',
                'destination' => 'LECLERC',
                'stops' => [
                    'Mairie Grand Yoff', 'Cité CSE', 'Pentola', 'Les deux voies de Sipres', 'Camp Pénal', 
                    'Les deux voies de Liberté 6', 'Rond-Point JVC', 'Boulangerie Jaune', 'Collège Sacré Cœur', 
                    'Scor Liberté', 'Sicap Rue 10', 'Lycée Blaise Diagne', 'Place ONU', 'Canal 4', 'HLM Fass', 
                    'Travaux Communaux', 'Rue 22 prolongée', 'RTS', 'Allées Papa Gueye Fall', 'Petersen', 
                    'Avenue Faidherbe', 'Place de l\'Indépendance', 'Rue Mouhamed 5 ex Albert Sarraut', 'BCEAO', 'Terminus Leclerc',
                ],
            ],
            // ===== (TATA) =====
            [
                'name' => 'TATA 1',
                'departure' => 'HLM Grand Yoff',
                'destination' => 'Lat Dior',
                'stops' => [
                    'Terminus HLM Grand Yoff', 'Scat Urban', 'Liberté 6', 'Derkle', 'Liberté 4', 'Rond-point Jet d\'Eau',
                    'Bourguiba', 'Grand Dakar', 'Fass Médina', 'Sham', 'Avenue Blaise Diagne', 'Terminus Lat Dior',
                ],
            ],
            [
                'name' => 'TATA 2',
                'departure' => 'Parcelles Assainies',
                'destination' => 'Petersen',
                'stops' => [
                    'Terminus des Parcelles Assainies', 'Croisement 22', 'Pont Aliou Sow', 'Rond-Point Liberté 6', 'Castor',
                    'HLM', 'Colobane', 'Tiilène', 'Avenue Blaise Diagne', 'Terminus Petersen',
                ],
            ],
            [
                'name' => 'TATA 3',
                'departure' => 'Yoff',
                'destination' => 'Petersen',
                'stops' => [
                    'Yoff', 'Aéroport LSS', 'Route de Ngor', 'Almadies', 'Mamelles', 'Ouakam', 'Mermoz', 'Hôpital Fann',
                    'UCAD', 'Sham', 'Avenue Blaise Diagne', 'Petersen',
                ],
            ],
            [
                'name' => 'TATA 24',
                'departure' => 'Guédiawaye',
                'destination' => 'UCAD',
                'stops' => [
                    'Guédiawaye', 'Sonatel', 'Ecole Lansar', 'Tally bou Bess', 'Bountou Pikine', 'Cité des Eaux', 'Castor',
                    'Bourguiba', 'Ecole Normale', 'Hôpital Fann', 'UCAD',
                ],
            ],
            [
                'name' => 'TATA 27',
                'departure' => 'Marché Boubess',
                'destination' => 'Petersen',
                'stops' => [
                    'Marché Boubess', 'Lycée Limamoulaye', 'Hôpital Roi Bedoin', 'Sonatel', 'Marché Peund Lansar',
                    'Rue 10', 'Cité Lobatt Fall', 'Colobane', 'Grande Mosquée de Dakar', 'Petersen',
                ],
            ],
            [
                'name' => 'TATA 34',
                'departure' => 'Noir Foire',
                'destination' => 'Lat Dior',
                'stops' => [
                    'Nord Foire', 'Cité Sipres', 'Scat Urbam', 'Camp Pénal', 'Liberté 6', 'Score Liberté', 'Sicap Rue 10',
                    'Zone B', 'Lycée Blaise Diagne', 'UCAD', 'Sham', 'Lat Dior',
                ],
            ],
            [
                'name' => 'TATA 37',
                'departure' => 'APIX',
                'destination' => 'UCAD',
                'stops' => [
                    'APIX', 'Croisement Tivaouane Peulh', 'Cité Sotrac', 'Station Keur Massar', 'MTOA', 'Malika Montagne',
                    'Malika Terminus', 'VDN', 'Rond Point Croisement Gadaye', 'Croisement Wakhinane', 'Hamo 6', 
                    'Rond-point Dial Mbaye', 'Police Guédiawaye', 'Pikine Rue 10', 'Technopole', 'Croisement Cambérène',
                    'Maristes', 'Pharmacie Abdourahmane', 'Ecole Japonaise', 'Colobane', 'Fass', 'Gueule Tapée', 'Sham', 'UCAD',
                ],
            ],
            [
                'name' => 'TATA 44',
                'departure' => 'Petit Mbao',
                'destination' => 'Ouakam',
                'stops' => [
                    'Petit Mbao', 'Fass Mbao', 'Diamaguene', 'Poste Thiaroye', 'Bountou Pikine', 'Patte d\'Oies', 'Foire', 'VDN', 'Ouakam',
                ],
            ],
            [
                'name' => 'TATA 51',
                'departure' => 'Beaux Maraîchers',
                'destination' => 'Jaxaay',
                'stops' => [
                    'Beaux Maraîchers', 'Icotaf', 'Texaco', 'Police Thiaroye', 'Tally Diallo', 'Yeumbeul', 'Route de Boune',
                    'Hôpital Keur Massar', 'Deux voies Keur Massar', 'Jaxaay',
                ],
            ],
            [
                'name' => 'TATA 58',
                'departure' => 'Cité Comico',
                'destination' => 'Sham',
                'stops' => [
                    'Cité Comico', 'Mbed Fass', 'Fass Mbao',
                ],
            ],
        ];

        // Création des arrêts uniques (évite doublons)
        $allStops = [];

        foreach ($linesData as $lineData) {
            foreach ($lineData['stops'] as $stopName) {
                if (!isset($allStops[$stopName])) {
                    $allStops[$stopName] = Stop::create([
                        'name' => $stopName,
                    ]);
                }
            }
        }

        // Création des lignes + liaison avec arrêts et ordre
        foreach ($linesData as $lineData) {
            $line = Line::create([
                'name' => $lineData['name'],
                'departure' => $lineData['departure'],
                'destination' => $lineData['destination'],
            ]);

            foreach ($lineData['stops'] as $order => $stopName) {
                $line->stops()->attach($allStops[$stopName]->id, ['order' => $order + 1]);
            }
        }
    }
}
