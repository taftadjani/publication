<?php

namespace App\Imports;

use App\Etablissement;
use Maatwebsite\Excel\Concerns\ToModel;

class EtablissementsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Etablissement([
            'intitule'=>$row['intitule'],
            'adresse'=>$row['adresse'],
            'url'=>$row['url'],
        ]);
    }
}
