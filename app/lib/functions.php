<?php
function stripUnicode($str) {
	if (!$str) {

	}
	else {
		$unicode = array(
			'a' => 'á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ',
			'A' => 'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
			'd' => 'đ',
			'D' => 'Đ',
			'e' => 'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
			'E' => 'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
			'i' => 'í|ì|ỉ|ĩ|ị',
			'I' => 'Í|Ì|Ỉ|Ĩ|Ị',
			'o' => 'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
			'O' => 'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Õ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
			'u' => 'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
			'U' => 'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
			'y' => 'ý|ỳ|ỷ|ỹ|ỵ',
			'Y' => 'Ý|Ỳ|Ỷ|Ỹ|Ỵ'
		);
		foreach($unicode as $khongdau=>$codau) {
			$arr = explode("|",$codau);
			$str = str_replace($arr,$khongdau,$str);
		}
		return $str;
	}
}

function changeTitle($str) {
	$str=trim($str);
	if ($str=="") {
		$str = "";
	}
	else {
		$str = str_replace('"','',$str);
		$str = str_replace("'",'',$str);
		$str = stripUnicode($str);
		$str = mb_convert_case($str,MB_CASE_LOWER,'utf-8');
		$str = str_replace(' ','-',$str);
	}
	return $str;
}

function cate_parent ($data,$parent = 0,$str="--",$select=0) {
	foreach ($data as $key => $val) {
		$id = $val["id"];
		$name = $val["name"];
		if ($val["parent_id"] == $parent) {
			if (($select != 0)&&($id == $select)) {
				echo "<option value='$id' selected='selected'>$str $name</option>";
			}
			else {
				echo "<option value='$id'>$str $name</option>";
			}
			cate_parent($data,$id,$str."--");
		}
		
	}
}

/** Searching the product in table
* @param $data: the product request data.
* @param $match_type: the table to search the product.
**/
function match_searching($data,$match_type = 'orders') {
	// Match categories
	$result = DB::table($match_type)->where('cate_id','=',$data->cate_id)->where('finished',0)
			->where('name','LIKE',$data->name);
	// Match price
	if ($match_type == 'orders') {
		$price = $data->price * 0.9;
		$result = $result->where('price','>=',$price);
	}
	else {
		$price = $data->price * 1.1;
		$result = $result->where('price','<=',$price);
	}

	// Match tags
	
	// Save matching
	$match_table = $result->get();
	foreach ($match_table as $order) {
        $match = new Match();
        $match->order_id = $order->id;
        $match->stock_id = $stock->id;
        $match->save();
    }
	return true;
}

?>