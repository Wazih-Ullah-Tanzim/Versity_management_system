<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;



use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

use PDF;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Exception;



class EmployeeController extends Controller
{

}
