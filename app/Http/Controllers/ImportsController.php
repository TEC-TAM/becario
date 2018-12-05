<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\ImportRequest;
use App\Import;
use App\Student;
use App\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportsController extends Controller {

	public function index(){
		$imports = Import::latest()->get();
		return view('imports.index')->with('imports',$imports);
	}
	public function uploadTeachers(){
		return view('imports.uploadteacher');
	}
	public function saveTeachersFile(ImportRequest $request){
		$import = new Import($request->all());
		$import->type = true;
		$import->used = false;
		$import->save();
		return redirect('seeders');
	}
	public function saveStudentsFile(ImportRequest $request){
		$import = new Import($request->all());
		$import->type = false;
		$import->used = false;
		$import->save();
		return redirect('seeders');
	}
	public function importTeachersRecords($id){
		$import  = Import::find($id);
		// 		dd(public_path()); => "C:\wamp\www\serviciobecario\public"
		Excel::selectSheets('Hoja1')->load(public_path().'/files/'.$import->file_url,function($reader){
			foreach($reader->get() as $row){
				User::create([
					'name' => $row->name,
					'last_name' => $row->last_name,
					'middle_name' => $row->middle_name,
					'itesm_id' => $row->itesm_id,
					'email' => $row->email,
					'password' => bcrypt($row->itesm_id),
					'type' => 0,
					'work_area' => $row->work_area
				]);

			}
		});
		$import->fill(['used' => true]);
		$import->save();
		return redirect('teachers');

	}
	public function importStudentsRecords($id){
		$import  = Import::find($id);
		Excel::selectSheets('Hoja1')->load(public_path().'/files/'.$import->file_url,function($reader){
			foreach($reader->get() as $row){
				$teacher = User::where('itesm_id','=',$row->assigned_to)->first();
				$student = new Student([
					'name' => $row->name,
					'last_name' => $row->last_name,
					'middle_name' => $row->middle_name,
					'itesm_id' => $row->itesm_id,
					'career' => $row->career,
					'semester' => $row->semester,
					'status' => $row->status,
					'confirmed' => 1,
					'rated' => 0
 				]);
				$teacher->students()->save($student);
			}
		});
		$import->fill(['used' => true]);
		$import->save();
		return redirect('students');
	}
	public function uploadStudents(){
		return view('imports.uploadstudent');
	}
	public function downloadRatedStudents(){
		Excel::create('Reporte estudiantes calificados',function($excel){
			$excel->sheet('Hoja1', function($sheet) {
				$students  = Student::where('rated','=',true)->get();
				$row = 2;
				$sheet->row(1, array(
					'Nombre', 'Ap. Paterno', 'Matrícula','Profesor asignado','Área','Calificación','Resignación(verdadero:Si,falso:No)'
				));
				foreach ($students as $student){
					$sheet->row($row, array(
						$student->name, $student->last_name,$student->itesm_id,
						$student->user->name.' '.$student->user->last_name,
						$student->user->work_area,
                        $student->rate->service_rate,
						$student->rate->reassigned
					));
					$row = $row +1;
				}
			});
		})->download('xlsx');
		return redirect()->back();
	}
    public function downloadUnRatedStudents(){
		Excel::create('Reporte estudiantes sin calificar',function($excel){
			$excel->sheet('Hoja1', function($sheet) {
				$students  = Student::where('rated','!=',true)->get();
				$row = 2;
				$sheet->row(1, array(
					'Nombre', 'Ap. Paterno', 'Matrícula','Profesor asignado','Área'
				));
				foreach ($students as $student){
					$sheet->row($row, array(
						$student->name, $student->last_name,$student->itesm_id,
						$student->user->name.' '.$student->user->last_name,
						$student->user->work_area
					));
					$row = $row +1;
				}
			});
		})->download('xlsx');
		return redirect()->back();
	}

	public function destroy($id){
		$import = Import::find($id);
		\Storage::delete($import->file_url);
		$import->delete();
		return redirect()->back();
	}

}
