<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{


  public function getArray()
  {

      $array1     = array(5,9,4,8); //Default Array1
      $array2     = array(2,6,3,7,5); //Default Array2

      $matrix     = printTable($array1, $array2); //Multiply function here (App/Http/helpers.php)

      $title = "Default Array(Task1)";

      return view('pages.interviewTask2', ["title" => $title])->with('matrix', $matrix)
                          ->with('array2', $array2)
                          ->with('array1', $array1);
  }


  public function getTask2(Request $request)
  {

      $a1         = $request->array1;
      $a2         = $request->array2;

      $collection = collect([1, 2, 3, 4, 5, 6, 7, 8, 9,10]); // All elements

      $random     = $collection->random($a1);
      $array1     = $random->all(); //get array1

      $random2    = $collection->random($a2);
      $array2     = $random2->all(); //get array2

      $matrix     = printTable($array1, $array2); //Multiply function here (App/Http/helpers.php)

      $title      = "Print Table Result(Task2)";
      $class      = "box-info";

      return view('/partials/printTable', ["title" => $title, 'class'=>$class])->with('matrix', $matrix)
                                         ->with('array2', $array2)
                                         ->with('array1', $array1);

  }


}
