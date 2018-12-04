<?php namespace App\Http\Controllers;

use App\Http\Requests\ConfirmationRequest;
use App\Period;
use App\Student;
use App\User;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller
{

    /**http://sitios.itesm.mx/identidad/Colores.html
     *
     * @return \Illuminate\View\View
     */
    public function home()
    {
        return view('pages.home');
    }

    /**
     * @param ConfirmationRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function scholarservice(ConfirmationRequest $request)
    {
        $student = Student::where('itesm_id', '=', $request->enrollment)->first();
        $period = Period::find(1);
        if (!is_null($student)) {
            $student->confirmed = true;
            $student->save();
            return view('pages.confirmation')->with(['student' => $student, 'period' => $period]);
        } else {
            Session::flash('flash_message', 'Lo sentimos la mátricula ' . $request->enrollment . ' no existe ');
            return redirect()->back();
        }
    }

    public function createpdf($id)
    {
        $student = Student::find($id);
        $period = Period::find(1);
        $view = \View::make('pages.pdfpage')->with(['student' => $student, 'period' => $period])->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper('a4')->setOrientation('landscape');
        return $pdf->download('serviciobecario.pdf');
    }
}
