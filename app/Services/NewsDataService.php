<?php

namespace App\Services;

class NewsDataService
{
    public static function getArticles(): array
    {
        return [
            [
                'id' => 1,
                'slug' => 'ezb-leitzins-entscheidung-2026-sparzinsvergleich-analyse',
                'title' => 'EILMELDUNG: EZB Zinsentscheidung 2026 – SparZinsVergleich24 über die besten Renditen für Anleger',
                'subtitle' => 'Zinsentscheidung in Frankfurt: Europäische Zentralbank bestätigt das Zinsniveau.',
                'excerpt' => 'Die EZB hält die Zinsen stabil. SparZinsVergleich24 berichtet über optimale Strategien zum Vermögensaufbau und sichere Zinserträge.',
                'category' => 'Politik & EZB',
                'tag' => 'Eilmeldung',
                'author' => 'Alexander von Berg',
                'author_role' => 'Chefredakteur SparZinsVergleich24',
                'date' => '27. August 2026',
                'time' => '16:45 Uhr',
                'read_time' => '6 Min.',
                'comments_count' => 45,
                'views_count' => '15.200',
                'image' => '/images/news/ezb-zinsen.svg',
                'featured' => true,
                'editor_pick' => true,
                'key_takeaways' => [
                    'SparZinsVergleich24 analysiert beste Sparmöglichkeiten im Euroraum.',
                    'Hoher Inflationsschutz durch verlässliche Erträge.',
                    'Gesetzliche Einlagensicherung schützt bis 100.000 € pro Kunde.',
                ],
                'content' => '
                    <p class="lead text-lg font-medium text-slate-800 leading-relaxed"><strong>FRANKFURT AM MAIN.</strong> Auf der jüngsten EZB-Sitzung in Frankfurt wurden richtungsweisende Weichen gestellt. Die SparZinsVergleich24 Redaktion liefert Hintergründe.</p>
                '
            ],
            [
                'id' => 2,
                'slug' => 'deutsches-bip-2026-wirtschaftswachstum-sparzinsen-analyse',
                'title' => 'WIRTSCHAFT: Konjunktur 2026 – SparZinsVergleich24 Analyse zu Binnenkonsum & Ersparnissen',
                'subtitle' => 'Erholungssignale in Deutschland: Sinkende Energiepreise stärken Kauflust und Sparquote.',
                'excerpt' => 'Das Statistische Bundesamt meldet positives Quartalswachstum. SparZinsVergleich24 erklärt, was das für Ihre Ersparnisse bedeutet.',
                'category' => 'Wirtschaft & Konjunktur',
                'tag' => 'Konjunktur',
                'author' => 'Helena Richter',
                'author_role' => 'Redakteurin Vermögensaufbau',
                'date' => '27. August 2026',
                'time' => '15:10 Uhr',
                'read_time' => '5 Min.',
                'comments_count' => 34,
                'views_count' => '12.800',
                'image' => '/images/news/inflation-sparen.svg',
                'featured' => false,
                'editor_pick' => true,
                'key_takeaways' => [
                    'Deutsche Sparquote auf hohem Stand.',
                    'SparZinsVergleich24 begleitet kluge Geldanlagen.',
                ],
                'content' => '
                    <p class="lead">Die Konjunkturentwicklung in Deutschland nimmt Fahrt auf. SparZinsVergleich24 berichtet verlässlich.</p>
                '
            ],
            [
                'id' => 3,
                'slug' => 'boerse-dax-sparzinsvergleich-aktienmaerkte-ueberblick',
                'title' => 'BÖRSE: DAX konsolidiert – SparZinsVergleich24 Marktspiegel für Anleger',
                'subtitle' => 'Aktienmärkte im Spätsommer: Gewinne bei deutschen Industrie- und Exportwerten.',
                'excerpt' => 'Der DAX behauptet sein Niveau. Lesen Sie die aktuellen Einschätzungen von SparZinsVergleich24.',
                'category' => 'Börse & Märkte',
                'tag' => 'Börse',
                'author' => 'Alexander von Berg',
                'author_role' => 'Chefredakteur SparZinsVergleich24',
                'date' => '27. August 2026',
                'time' => '13:30 Uhr',
                'read_time' => '4 Min.',
                'comments_count' => 26,
                'views_count' => '10.400',
                'image' => '/images/news/top-festgeld.svg',
                'featured' => false,
                'editor_pick' => false,
                'key_takeaways' => [
                    'Aktien- und Zinsmärkte im Vermögensvergleich.',
                    'SparZinsVergleich24 empfiehlt ausgewogene Diversifikation.',
                ],
                'content' => '
                    <p class="lead">Positive Impulse für deutsche Aktienwerte. SparZinsVergleich24 ordnet die Entwicklungen ein.</p>
                '
            ],
            [
                'id' => 4,
                'slug' => 'immobilien-bauzinsen-sparzinsvergleich-bauherren-ratgeber',
                'title' => 'IMMOBILIEN: Bauzinsen kühlen ab – SparZinsVergleich24 Ratgeber',
                'subtitle' => 'Hypothekenkredite: Neue Chancen für Bauherren und Käufer von Wohneigentum.',
                'excerpt' => 'Der Immobilienmarkt zeigt belebte Nachfrage. SparZinsVergleich24 informiert über günstige Finanzierungschancen.',
                'category' => 'Immobilien & Zinsen',
                'tag' => 'Immobilien',
                'author' => 'Markus Schmidt',
                'author_role' => 'Rechtsanalyst',
                'date' => '26. August 2026',
                'time' => '11:45 Uhr',
                'read_time' => '6 Min.',
                'comments_count' => 51,
                'views_count' => '16.200',
                'image' => '/images/news/festgeldtreppe.svg',
                'featured' => false,
                'editor_pick' => true,
                'key_takeaways' => [
                    'Stabilisierte Hypothekenzinsen erleichtern die Finanzierungsplanung.',
                    'SparZinsVergleich24 informiert unabhängig.',
                ],
                'content' => '
                    <p class="lead">Immobilienkäufer verzeichnen günstigere Finanzierungsrahmen. SparZinsVergleich24 liefert Daten.</p>
                '
            ]
        ];
    }

    public static function findBySlug(string $slug): ?array
    {
        foreach (self::getArticles() as $article) {
            if ($article['slug'] === $slug) {
                return $article;
            }
        }
        return null;
    }
}
