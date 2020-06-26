<?php

namespace App\Http\Controllers;

use App\Imports\ArticlesImport;
use App\Imports\AuteursImport;
use App\Imports\EquipesImport;
use App\Imports\EtablissementsImport;
use App\Imports\LaboratoiresImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function showImportForm()
    {
        return view('import-excel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeArticleCsv(Request $request)
    {
        $request->validate([
            'file_csv'=>'required|file|mimes:xls,xlsx,csv',
        ]);
        $path = $request->file('file_csv')->getRealPath();

        Excel::import(new ArticlesImport, $path);

        return redirect()->route('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeAuteurCsv(Request $request)
    {
        $request->validate([
            'file_csv'=>'required|file|mimes:xls,xlsx,csv',
        ]);
        $path = $request->file('file_csv')->getRealPath();

        Excel::import(new AuteursImport, $path);

        return redirect()->route('home');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeEtablissementCsv(Request $request)
    {
        $request->validate([
            'file_csv'=>'required|file|mimes:xls,xlsx,csv',
        ]);
        $path = $request->file('file_csv')->getRealPath();

        Excel::import(new EtablissementsImport, $path);

        return redirect()->route('home');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeLaboratoireCsv(Request $request)
    {
        $request->validate([
            'file_csv'=>'required|file|mimes:xls,xlsx,csv',
        ]);
        $path = $request->file('file_csv')->getRealPath();

        Excel::import(new LaboratoiresImport, $path);

        return redirect()->route('home');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeEquipeCsv(Request $request)
    {
        $request->validate([
            'file_csv'=>'required|file|mimes:xls,xlsx,csv',
        ]);
        $path = $request->file('file_csv')->getRealPath();

        Excel::import(new EquipesImport, $path);

        return redirect()->route('home');
    }

}
