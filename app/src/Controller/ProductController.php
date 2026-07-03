<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ProductController extends AbstractController
{
    #[Route('/products', name: 'app_product_index')]
    public function index(): Response
    {
        $products = $this->getProducts();

        return $this->render('product/index.html.twig', [
            'products' => $products,
        ]);
    }

    #[Route('/products/{id}', name: 'app_product_show')]
    public function show(int $id): Response
    {
        $products = $this->getProducts();

        foreach ($products as $product) {
            if ($product['id'] === $id) {
                return $this->render('product/show.html.twig', [
                    'product' => $product,
                ]);
            }
    }

    throw $this->createNotFoundException('Produkt nicht gefunden.');
}

    private function getProducts(): array
    {
        return [
            [
                'id' => 1,
                'name' => 'Holzstuhl',
                'price' => '89,90 €',
                'category' => 'Möbel',
                'description' => 'Stabiler Stuhl aus massivem Holz.',
                'img' => 'https://blocks.astratic.com/img/general-img-landscape.png'
            ],
            [
                'id' => 2,
                'name' => 'Schreibtischlampe',
                'price' => '34,90 €',
                'category' => 'Beleuchtung',
                'description' => 'Kompakte Lampe für den Schreibtisch.',
                'img' => 'https://blocks.astratic.com/img/general-img-landscape.png'
            ],
            [
                'id' => 3,
                'name' => 'Notizbuch aus Recyclingpapier',
                'price' => '7,90 €',
                'category' => 'Büro',
                'description' => 'Umweltfreundliches Notizbuch mit 100 Seiten.',
                'img' => 'https://blocks.astratic.com/img/general-img-landscape.png'
            ],
            [
                'id' => 4,
                'name' => 'Bambus-Trinkflasche',
                'price' => '19,90 €',
                'category' => 'Haushalt',
                'description' => 'Wiederverwendbare Trinkflasche für unterwegs.',
                'img' => 'https://blocks.astratic.com/img/general-img-landscape.png',
            ],
            [
                'id' => 5,
                'name' => 'Kork-Untersetzer',
                'price' => '8,90 €',
                'category' => 'Wohnen',
                'description' => 'Vier nachhaltige Untersetzer aus Naturkork.',
                'img' => 'https://blocks.astratic.com/img/general-img-landscape.png',
            ],
            [
                'id' => 6,
                'name' => 'Baumwolltasche',
                'price' => '12,90 €',
                'category' => 'Alltag',
                'description' => 'Robuste Stofftasche für Einkäufe und Freizeit.',
                'img' => 'https://blocks.astratic.com/img/general-img-landscape.png',
            ],
            [
                'id' => 7,
                'name' => 'Schreibtisch-Organizer',
                'price' => '24,90 €',
                'category' => 'Büro',
                'description' => 'Praktischer Organizer für einen aufgeräumten Arbeitsplatz.',
                'img' => 'https://blocks.astratic.com/img/general-img-landscape.png',
            ],
            [
                'id' => 8,
                'name' => 'Keramik-Kaffeebecher',
                'price' => '14,90 €',
                'category' => 'Küche',
                'description' => 'Handlicher Becher für Kaffee, Tee und Kakao.',
                'img' => 'https://blocks.astratic.com/img/general-img-landscape.png',
            ],
            [
                'id' => 9,
                'name' => 'Holz-Schneidebrett',
                'price' => '29,90 €',
                'category' => 'Küche',
                'description' => 'Langlebiges Schneidebrett aus massivem Holz.',
                'img' => 'https://blocks.astratic.com/img/general-img-landscape.png',
            ],
            [
                'id' => 10,
                'name' => 'Leinen-Kissenbezug',
                'price' => '18,90 €',
                'category' => 'Wohnen',
                'description' => 'Weicher Kissenbezug aus natürlichem Leinen.',
                'img' => 'https://blocks.astratic.com/img/general-img-landscape.png',
            ],
            [
                'id' => 11,
                'name' => 'Wandkalender 2026',
                'price' => '16,90 €',
                'category' => 'Büro',
                'description' => 'Übersichtlicher Kalender für Planung und Termine.',
                'img' => 'https://blocks.astratic.com/img/general-img-landscape.png',
            ],
            [
                'id' => 12,
                'name' => 'Filz-Laptophülle',
                'price' => '32,90 €',
                'category' => 'Technik',
                'description' => 'Schützende Hülle für Laptops bis 14 Zoll.',
                'img' => 'https://blocks.astratic.com/img/general-img-landscape.png',
            ],
            [
                'id' => 13,
                'name' => 'Bienenwachstücher',
                'price' => '11,90 €',
                'category' => 'Haushalt',
                'description' => 'Wiederverwendbare Alternative zu Frischhaltefolie.',
                'img' => 'https://blocks.astratic.com/img/general-img-landscape.png',
            ],
            [
                'id' => 14,
                'name' => 'Pflanzenständer',
                'price' => '39,90 €',
                'category' => 'Wohnen',
                'description' => 'Minimalistischer Ständer für Zimmerpflanzen.',
                'img' => 'https://blocks.astratic.com/img/general-img-landscape.png',
            ],
            [
                'id' => 15,
                'name' => 'Tischlampe Nord',
                'price' => '44,90 €',
                'category' => 'Beleuchtung',
                'description' => 'Schlichte Tischlampe mit warmem Licht.',
                'img' => 'https://blocks.astratic.com/img/general-img-landscape.png',
            ],
            [
                'id' => 16,
                'name' => 'Recyclingpapier-Set',
                'price' => '6,90 €',
                'category' => 'Büro',
                'description' => 'Papier-Set für Notizen, Skizzen und Briefe.',
                'img' => 'https://blocks.astratic.com/img/general-img-landscape.png',
            ],
            [
                'id' => 17,
                'name' => 'Holz-Kleiderbügel',
                'price' => '15,90 €',
                'category' => 'Alltag',
                'description' => 'Set mit drei stabilen Kleiderbügeln aus Holz.',
                'img' => 'https://blocks.astratic.com/img/general-img-landscape.png',
            ],
            [
                'id' => 18,
                'name' => 'Kabel-Organizer',
                'price' => '9,90 €',
                'category' => 'Technik',
                'description' => 'Hilft dabei, Ladekabel ordentlich zu sortieren.',
                'img' => 'https://blocks.astratic.com/img/general-img-landscape.png',
            ],
        ];
    }
}
