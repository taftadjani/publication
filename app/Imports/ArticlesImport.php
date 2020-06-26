<?php

namespace App\Imports;

use App\Article;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class ArticlesImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // dd($row);
        // Inseré un laboratoire

        // Inseré un etablissement

        // Inseré les auteurs


        // Article::create([
        //     'titre'=>'titre',
        //     'source'=>'source',
        //     'type'=>'type',
        //     'annee_publication'=>2020,
        //     'url'=>'url',
        // ]);
        return new Article([
            'titre'=>$row['titre'],
            'source'=>$row['source'],
            'type'=>$row['type'],
            'annee_publication'=>$row['annee_publication'],
            'url'=>$row['url'],
            'auteurs'=>$row['auteurs'],
        ]);
    }
}
