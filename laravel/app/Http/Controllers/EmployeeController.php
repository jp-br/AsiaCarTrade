<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
        public function home()
        {   
            return view('employee.home'); 
        }
        public function about()
        {   
            return view('employee.aboutus'); 
        }
         public function store()
        {   
            return view('employee.store'); 
        }
        public function services()
        {   
            return view('employee.services'); 
        }
        public function trade()
        {   
            return view('employee.trade'); 
        }
        public function bid()
        {   
            return view('employee.bid'); 
        }
         public function blog()
        {   
            return view('employee.blog'); 
        }
         public function careers()
        {   
            return view('employee.careers'); 
        }
         public function contact()
        {   
            return view('employee.contact'); 
        }


}
