<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsuranceCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $insuranceCompanies = [
            [
                'name'      => 'Seguros Mundial',
                'url'       => 'https://www.segurosmundial.com.co/',
                'address'   => 'Cll. Example 123',
                'phone'     => '1254569',
                'email'     => 'correo@example.com',
                'image'     => 'companies/' . fake()->image('public/storage/companies', 640, 480, null, false),
            ],
            [
                'name' => 'Solunion',
                'url' => 'https://solunion.com/',
                'address' => 'Cll. Example 123',
                'phone' => '1254569',
                'email' => 'correo@example.com',
                'image'     => 'companies/' . fake()->image('public/storage/companies', 640, 480, null, false),
            ],
            [
                'name' => 'Aseguradora Solidaria',
                'url' => 'https://aseguradorasolidaria.com.co/',
                'address' => 'Cll. Example 123',
                'phone' => '1254569',
                'email' => 'correo@example.com',
                'image'     => 'companies/' . fake()->image('public/storage/companies', 640, 480, null, false),
            ],

            [
                'name' => 'Expertos en Seguros de Crédito',
                'url' => 'https://www.expertosensegurosdecredito.com/',
                'address' => 'Cll. Example 123',
                'phone' => '1254569',
                'email' => 'correo@example.com',
                'image'     => 'companies/' . fake()->image('public/storage/companies', 640, 480, null, false),
            ],

            [
                'name' => 'Liberty Seguros',
                'url' => 'https://www.libertyseguros.com.co/',
                'address' => 'Cll. Example 123',
                'phone' => '1254569',
                'email' => 'correo@example.com',
                'image'     => 'companies/' . fake()->image('public/storage/companies', 640, 480, null, false),
            ],

            [
                'name' => 'Seguros Bolivar',
                'url' => 'https://www.segurosbolivar.com/',
                'address' => 'Cll. Example 123',
                'phone' => '1254569',
                'email' => 'correo@example.com',
                'image'     => 'companies/' . fake()->image('public/storage/companies', 640, 480, null, false),
            ],

            [
                'name' => 'Zurich',
                'url' => 'https://www.zurichseguros.com.co/',
                'address' => 'Cll. Example 123',
                'phone' => '1254569',
                'email' => 'correo@example.com',
                'image'     => 'companies/' . fake()->image('public/storage/companies', 640, 480, null, false),
            ],

            [
                'name' => 'Allianz',
                'url' => 'https://www.allianz.co/',
                'address' => 'Cll. Example 123',
                'phone' => '1254569',
                'email' => 'correo@example.com',
                'image'     => 'companies/' . fake()->image('public/storage/companies', 640, 480, null, false),
            ],

            [
                'name' => 'Equidad Seguros',
                'url' => 'https://www.laequidadseguros.coop/',
                'address' => 'Cll. Example 123',
                'phone' => '1254569',
                'email' => 'correo@example.com',
                'image'     => 'companies/' . fake()->image('public/storage/companies', 640, 480, null, false),
            ],

            [
                'name' => 'MetLife',
                'url' => 'https://www.metlife.com.co/',
                'address' => 'Cll. Example 123',
                'phone' => '1254569',
                'email' => 'correo@example.com',
                'image'     => 'companies/' . fake()->image('public/storage/companies', 640, 480, null, false),
            ],

            [
                'name' => 'Berkley',
                'url' => 'https://www.berkley.com.co/',
                'address' => 'Cll. Example 123',
                'phone' => '1254569',
                'email' => 'correo@example.com',
                'image'     => 'companies/' . fake()->image('public/storage/companies', 640, 480, null, false),
            ],

            [
                'name' => 'Chubb Seguros',
                'url' => 'https://www.chubb.com/',
                'address' => 'Cll. Example 123',
                'phone' => '1254569',
                'email' => 'correo@example.com',
                'image'     => 'companies/' . fake()->image('public/storage/companies', 640, 480, null, false),
            ],

            [
                'name' => 'Coface For Trade',
                'url' => 'https://www.coface.com.co/',
                'address' => 'Cll. Example 123',
                'phone' => '1254569',
                'email' => 'correo@example.com',
                'image'     => 'companies/' . fake()->image('public/storage/companies', 640, 480, null, false),
            ],

            [
                'name' => 'Confianza',
                'url' => 'https://www.confianza.com.co/',
                'address' => 'Cll. Example 123',
                'phone' => '1254569',
                'email' => 'correo@example.com',
                'image'     => 'companies/' . fake()->image('public/storage/companies', 640, 480, null, false),
            ],

            [
                'name' => 'JMalucelli',
                'url' => 'https://www.jmtrv.com.co/',
                'address' => 'Cll. Example 123',
                'phone' => '1254569',
                'email' => 'correo@example.com',
                'image'     => 'companies/' . fake()->image('public/storage/companies', 640, 480, null, false),
            ],

            [
                'name' => 'Seguros del Estado',
                'url' => 'https://www.segurosdelestado.com/',
                'address' => 'Cll. Example 123',
                'phone' => '1254569',
                'email' => 'correo@example.com',
                'image'     => 'companies/' . fake()->image('public/storage/companies', 640, 480, null, false),
            ],

            [
                'name' => 'Mapfre',
                'url' => 'https://www.mapfre.com.co/',
                'address' => 'Cll. Example 123',
                'phone' => '1254569',
                'email' => 'correo@example.com',
                'image'     => 'companies/' . fake()->image('public/storage/companies', 640, 480, null, false),
            ],

            [
                'name' => 'Sura',
                'url' => 'https://www.segurossura.com.co/',
                'address' => 'Cll. Example 123',
                'phone' => '1254569',
                'email' => 'correo@example.com',
                'image'     => 'companies/' . fake()->image('public/storage/companies', 640, 480, null, false),
            ],


        ];

        foreach ($insuranceCompanies as $company) {
            DB::table('insurance_companies')->insert($company);
        }
    }
}