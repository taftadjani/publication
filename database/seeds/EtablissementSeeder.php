<?php

use App\Etablissement;
use Illuminate\Database\Seeder;

class EtablissementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Etablissement::create([
            'code'=>'ENCG',
            'intitule'=>'ENCG',
            'adresse'=>'',
            'url'=>'',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        Etablissement::create([
            'code'=>'FSJES',
            'intitule'=>'FSJES',
            'adresse'=>'',
            'url'=>'',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        Etablissement::create([
            'code'=>'ISSS',
            'intitule'=>'ISSS',
            'adresse'=>'',
            'url'=>'',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        Etablissement::create([
            'code'=>'ENSAB',
            'intitule'=>'ENSAB',
            'adresse'=>'',
            'url'=>'url ENSAB',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        Etablissement::create([
            'code'=>'FSTS',
            'intitule'=>'FSTS',
            'adresse'=>'Adresse FSTS',
            'url'=>'url FSTS',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        Etablissement::create([
            'code'=>'FLASH',
            'intitule'=>'FLASH',
            'adresse'=>'Adresse FLASH',
            'url'=>'url FLASH',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    }
}
