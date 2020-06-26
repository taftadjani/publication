<?php

namespace App\Imports;

use App\Laboratoire;
use Maatwebsite\Excel\Concerns\ToModel;

class LaboratoiresImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Laboratoire([
            'etablissement_id'=>$row['etablissement_id'],
            'directeur_labo'=>$row['directeur_labo'],
            'nom_laboratoire'=>$row['nom_laboratoire'],
        ]);
    }
}
