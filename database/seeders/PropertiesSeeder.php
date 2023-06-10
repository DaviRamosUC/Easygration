<?php

namespace Database\Seeders;

use App\Models\Properties;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $imoveis = [
            [
                'titulo' => 'Casa aconchegante',
                'tipo' => 'Casa',
                'endereco' => 'Rua das Flores, 123',
                'imagens' => 'casa.jpg',
                'proprietario' => 'João Silva',
                'garagem' => true,
                'valor_condominio' => 300.00,
                'iptu' => 500.00,
                'metros_quadrados' => 150.00,
                'quantidade_banheiros' => 2,
                'aceita_pets' => true,
            ],
            [
                'titulo' => 'Apartamento moderno',
                'tipo' => 'Apartamento',
                'endereco' => 'Av. Principal, 456',
                'imagens' => 'apartamento.jpg',
                'proprietario' => 'Maria Santos',
                'garagem' => false,
                'valor_condominio' => 500.00,
                'iptu' => 400.00,
                'metros_quadrados' => 80.00,
                'quantidade_banheiros' => 1,
                'aceita_pets' => false,
            ],
            [
                'titulo' => 'Sítio tranquilo',
                'tipo' => 'Sítio',
                'endereco' => 'Estrada da Paz, 789',
                'imagens' => 'sitio.jpg',
                'proprietario' => 'Antônio Souza',
                'garagem' => true,
                'valor_condominio' => 0.00,
                'iptu' => 200.00,
                'metros_quadrados' => 1000.00,
                'quantidade_banheiros' => 3,
                'aceita_pets' => true,
            ],
            [
                'titulo' => 'Kitnet no centro',
                'tipo' => 'Kitnet',
                'endereco' => 'Rua Principal, 987',
                'imagens' => 'kitnet.jpg',
                'proprietario' => 'Ana Oliveira',
                'garagem' => false,
                'valor_condominio' => 200.00,
                'iptu' => 100.00,
                'metros_quadrados' => 40.00,
                'quantidade_banheiros' => 1,
                'aceita_pets' => false,
            ],
            [
                'titulo' => 'Apartamento de luxo',
                'tipo' => 'Apartamento',
                'endereco' => 'Av. Beira Mar, 1234',
                'imagens' => 'luxo.jpg',
                'proprietario' => 'Ricardo Mendes',
                'garagem' => true,
                'valor_condominio' => 800.00,
                'iptu' => 700.00,
                'metros_quadrados' => 120.00,
                'quantidade_banheiros' => 2,
                'aceita_pets' => true,
            ],
            [
                'titulo' => 'Casa de campo',
                'tipo' => 'Casa',
                'endereco' => 'Estrada das Montanhas, 456',
                'imagens' => 'campo.jpg',
                'proprietario' => 'Fernanda Almeida',
                'garagem' => true,
                'valor_condominio' => 0.00,
                'iptu' => 300.00,
                'metros_quadrados' => 200.00,
                'quantidade_banheiros' => 3,
                'aceita_pets' => true,
            ],
            [
                'titulo' => 'Apartamento compacto',
                'tipo' => 'Apartamento',
                'endereco' => 'Rua das Palmeiras, 789',
                'imagens' => 'compacto.jpg',
                'proprietario' => 'Carlos Nunes',
                'garagem' => false,
                'valor_condominio' => 400.00,
                'iptu' => 250.00,
                'metros_quadrados' => 60.00,
                'quantidade_banheiros' => 1,
                'aceita_pets' => false,
            ],
            [
                'titulo' => 'Chalé aconchegante',
                'tipo' => 'Casa',
                'endereco' => 'Rua da Montanha, 567',
                'imagens' => 'chale.jpg',
                'proprietario' => 'Laura Costa',
                'garagem' => false,
                'valor_condominio' => 0.00,
                'iptu' => 150.00,
                'metros_quadrados' => 80.00,
                'quantidade_banheiros' => 2,
                'aceita_pets' => true,
            ],
            [
                'titulo' => 'Apartamento térreo',
                'tipo' => 'Apartamento',
                'endereco' => 'Av. Central, 987',
                'imagens' => 'terreo.jpg',
                'proprietario' => 'Paulo Rodrigues',
                'garagem' => true,
                'valor_condominio' => 300.00,
                'iptu' => 200.00,
                'metros_quadrados' => 90.00,
                'quantidade_banheiros' => 1,
                'aceita_pets' => true,
            ],
            [
                'titulo' => 'Cobertura com vista',
                'tipo' => 'Apartamento',
                'endereco' => 'Rua das Nuvens, 123',
                'imagens' => 'cobertura.jpg',
                'proprietario' => 'Patricia Oliveira',
                'garagem' => true,
                'valor_condominio' => 600.00,
                'iptu' => 500.00,
                'metros_quadrados' => 150.00,
                'quantidade_banheiros' => 2,
                'aceita_pets' => true,
            ],
        ];

        foreach ($imoveis as $imovelData) {
            $imovel = new Properties();
            $imovel->titulo = $imovelData['titulo'];
            $imovel->tipo = $imovelData['tipo'];
            $imovel->endereco = $imovelData['endereco'];
            $imovel->imagens = $imovelData['imagens'];
            $imovel->proprietario = $imovelData['proprietario'];
            $imovel->garagem = $imovelData['garagem'];
            $imovel->valor_condominio = $imovelData['valor_condominio'];
            $imovel->iptu = $imovelData['iptu'];
            $imovel->metros_quadrados = $imovelData['metros_quadrados'];
            $imovel->quantidade_banheiros = $imovelData['quantidade_banheiros'];
            $imovel->aceita_pets = $imovelData['aceita_pets'];
            $imovel->save();
        }
    }
}
