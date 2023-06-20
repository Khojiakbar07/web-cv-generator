<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Barryvdh\DomPDF\PDF;
//use Barryvdh\DomPDF as PDF;
//use Barryvdh\DomPDF\Facade as PDF;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;


class DebugController extends Controller
{
    public function index(){
        //dump('debug started');
        $res = $this->pdf_generator();
        return $res;
        //dd($res);
    }

    public function pdf_generator(){

            // retreive all records from db
            //$data = Employee::all();
            // share data to view
            //view()->share('employee',$data);
            //$pdf = PDF::loadView('pdf_view', $data);
            // download PDF file with download method
            //return $pdf->download('pdf_file.pdf');

        //$pdf = Pdf::loadView('templates.free.test', []);
        // download PDF file with download method
        //return $pdf->download('pdf_file.pdf');

        /*$pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML('<h1>Test</h1>');
        return $pdf->stream();*/

        $data = [
            'imagePath'    => public_path('img/profile.png'),
            'name'         => 'John Doe',
            'address'      => 'USA',
            'mobileNumber' => '000000000',
            'email'        => 'john.doe@email.com'
        ];

        //return Pdf::load

        return Pdf::loadView('templates.free.test', $data)
            ->save(storage_path('test.pdf'))
            ->download('test.pdf');
            //->stream('download.pdf');

    }
}
