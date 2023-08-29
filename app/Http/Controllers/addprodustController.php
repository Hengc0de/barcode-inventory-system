<?php

namespace App\Http\Controllers;
use App\Models\Flight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class addprodustController extends Controller
{
    public function createprodust(){
        return view('add_product');
    }
    public function dbpostinsert(Request $rq){
        $bargetcode=$rq->dbconnectbarcode;
        $cattitle=$rq->dbconcattitle;
        $getcattitle= $rq->dbconcattitle_kh;
        $getdescription=$rq->dbconcattitle_des;
         $data = array();
          for($i=0; $i < count($cattitle); $i++){
              $data = array('barcode'=>$bargetcode[$i],'title'=>$cattitle[$i],'qty'=>$getcattitle[$i],'price'=>$getdescription[$i]);
          Flight::insertOrIgnore($data);
          }

      echo 1;
      }
      public function funshowprodust(){
         $getdata=Flight::select()->get();
      $data=[
    'showview'=>$getdata,
      ];

         return view('showprodust.addshowprodust',$data);
      }
     // delect for product in controller
     public function fundelproduct(Request $request){
        $remouve=$request->rowdb;
        Flight::where('proid',$remouve)->delete();
        echo 1;
     }
     public function funedite(Request $rqupdate){
        $idupdate=$rqupdate->idupdatedb;
        $updatenameuser =$rqupdate->updateuser;
        $updatepassworduser =$rqupdate->updatepassworduser;
        Flight::where('proid', $idupdate)->
        updateOrInsert(['barcode' =>  $updatenameuser,
            'title'=> $updatepassworduser
      ]);
      echo 'SuccesFully';
     }
}
