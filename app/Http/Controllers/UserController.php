<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use PDF;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Exception;

class UserController extends Controller
{
    public function user_dashboard()
    {
        return view('website.pages.dashboard');
    }
    public function allUsers()
    {
        $users = User::all();
        return view('admin.pages.users', compact('users'));
    }

    public function approve($userId)
    {
        $user = User::find($userId);
        $user->is_approved = 1;
        if ($user->save()) {
            return redirect()->back()->with('msg', 'Approved');
        }
    }


    public function exportData()
    {
        $data = DB::table('users')->orderBy('id')->get();
        $data_array[] = array("id", "name", "email", "birth_date", "number", "department", "gender", "address", "blood", "role");
        foreach ($data as $data_item) {
            $data_array[] = array(
                'id' => $data_item->id,
                'name' => $data_item->name,
                'email' => $data_item->email,
                'birth_date' => $data_item->birth_date,
                'number' => $data_item->number,
                'department' => $data_item->department,
                'gender' => $data_item->gender,
                'address' => $data_item->address,
                'blood' => $data_item->blood,
                'role' => $data_item->role,
            );
        }
        $this->ExportExcel($data_array);
    }

    public function ExportExcel($customer_data)
    {

        ini_set('max_execution_time', 0);
        ini_set('memory_limit', '4000M');
        try {
            $spreadSheet = new Spreadsheet();
            $spreadSheet->getActiveSheet()->getDefaultColumnDimension()->setWidth(20);
            $spreadSheet->getActiveSheet()->fromArray($customer_data);
            $Excel_writer = new Xls($spreadSheet);
            header('Content-Type: application/vnd.ms-excel');
            header('Content-Disposition: attachment;filename="User_ExportedData.xls"');
            header('Cache-Control: max-age=0');
            ob_end_clean();
            $Excel_writer->save('php://output');
            exit();
        } catch (Exception $e) {
            return;
        }
    }

    public function createPDF()
    {

        $users = USer::all();



        $pdf = PDF::loadView('pdf.users', ['users' => $users]);
        return $pdf->download('user.pdf');
    }
}
