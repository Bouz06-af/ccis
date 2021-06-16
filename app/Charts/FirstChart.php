<?php

declare(strict_types = 1);

namespace App\Charts;

use App\Models\Cooperative;
use App\Models\Association;
use App\Models\Outilsinfo;
use App\Models\Personnephysique;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class FirstChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        
        $Tetouan=Cooperative::where('ville','Tetouan')->get()->count();
        $Chefchaouen=Cooperative::where('ville','Chefchaouen')->get()->count();   
        $Ouazzane=Cooperative::where('ville','Ouazzane')->get()->count();
        $Fnideq=Cooperative::where('ville','Fnideq')->get()->count();
        $Mdiq=Cooperative::where('ville','Mdiq')->get()->count();
        return Chartisan::build()
            ->labels(['Tetouan','Chefchaouen','Ouazzane','Fnideq','Mdiq' ])
            ->dataset('Sample', [$Tetouan, $Chefchaouen,$Ouazzane,$Fnideq,$Mdiq]);
    }
}