<?php

namespace App\Imports;

use App\Equipe;
use Maatwebsite\Excel\Concerns\ToModel;

class EquipesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Equipe([
            'laboratoire_id'=>$row['laboratoire_id'],
            'responsable'=>$row['responsable'],
            'nom_equipe'=>$row['nom_equipe'],
        ]);
    }
}
