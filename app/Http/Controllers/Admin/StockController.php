<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Cate;
use App\Models\User;
use App\Models\Stock;
use Illuminate\Support\Facades\File;

class StockController extends Controller {
    public function getList () {
        $number = 6;
        $model = new Stock();
        $data = $model->getPage($number);
        return view('admin.stock.list',compact('data'));
    }

    public function getDelete ($id) {
        $product = Stock::find($id);
        $directory = base_path() . '/resources/upload/stocks/stock-' .$id;
        File::cleanDirectory($directory);
        File::deleteDirectory($directory);
        $productName = $product->name;
        $product->delete();
        $message = ['flash_level'=>'success','flash_message'=>'Xóa '.$productName.' thành công.'];
        return redirect()->route('admin.stock.list')->with($message);
    }
}
