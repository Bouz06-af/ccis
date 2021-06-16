<?php

declare(strict_types = 1);

namespace App\Charts;
use App\Models\Statistique;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use Carbon\Carbon;
class SecondChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
       
        $date=Carbon::now()->year;
        $besoin=Statistique::where('annee',$date)->value('besoin');
        $document=Statistique::where('annee',$date)->value('document');   
        $infos=Statistique::where('annee',$date)->value('infos');   
        $acceuil=Statistique::where('annee',$date)->value('acceuil');   
       
        return Chartisan::build()
            ->labels(['besoin','document','infos','acceuil'])
            ->dataset('Avis sur ', [$besoin, $document,$infos,$acceuil]);
    }
}