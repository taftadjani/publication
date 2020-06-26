<?php

namespace App\Imports;

use App\Auteur;
use App\Etablissement;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AuteursImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // dd($row);
        $etablissement = Etablissement::where('code', $row['code'])->first();
        // dd($etablissement);
        if ($etablissement) {
            Auteur::create([
                'etablissement_id'=>$etablissement->id,
                'nom'=>$row['nom'],
                'prenom'=>$row['prenom'],
                'som'=>$row['som'],
            ]);
        }
    }
}
