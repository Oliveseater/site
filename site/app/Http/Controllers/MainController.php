<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    // обработчик http://muzei-mira/
	public function acMain () {
		$test = DB::table("posts")->where("parent", "=", 0)->get();
		$data = DB::table("posts")->where("name", "=", "funeral-home-Memory")->first();
		return view ("main")->with(["data" => $data, "test" => $test]);
	}
	
	// обработчик http://muzei-mira/novosti
	public function acNovosti () {
		// формируем данные для представления novosti.blade.php
		// выполняем запрос к базе данных установленной по умолчанию
		$data = DB::table("posts")->where(["name" => "novosti"])->first();
		
		// по идентификатору главной получим прикрепленные записи 
		$attachdata = DB::table("posts")
			->where("parent", "=", $data->id)
			->orderBy('id','desc')
			->take(3)
			->get(); 

		// отдадим полученные данные в представление
		return view("novosti", ["data" => $data,  "attachdata" => $attachdata]);
	}
	
	// обработчик http://muzei-mira/service
	public function acService () {
		// формируем данные для представления Service.blade.php
		// выполняем запрос к базе данных установленной по умолчанию
		$data = DB::table("posts")->where(["name" => "service"])->first();
		// отдадим полученные данные в представление
		return view ("service")->with(["data" => $data]);
	}

	// обработчик http://muzei-mira/Service/{параметр}
	public function acSubService ($subService) {
		// формируем данные для представления по переданному параметру
		// выполняем запрос к базе данных установленной по умолчанию
		$data = DB::table("posts")->where("name", "=", $subService)->first();
		// по идентификатору главной получим прикрепленные записи 
		$attachdata = DB::table("posts")->where("parent", "=", $data->id)->get(); 
		// отдадим полученные данные в представление
		return view ("service")->with(["data" => $data,  "attachdata" => $attachdata]);
	}
	


	// обработчик http://muzei-mira/skulptura
	public function acBlog () {
		// формируем данные для представления skulptura.blade.php
		// выполняем запрос к базе данных установленной по умолчанию
		$data = DB::table("posts")->where("name", "blog")->first();
		// по идентификатору главной получим прикрепленные записи 
		$attachdata = DB::table("posts")
			->where("parent", "=", $data->id)
			->orderBy('id','desc')
			->take(3)
			->get(); 
		// отдадим полученные данные в представление
		return view("blog")->with(["data" => $data, "attachdata" => $attachdata]);
	}

	// обработчик http://muzei-mira/products
	public function acProducts () {
		// формируем данные для представления skulptura.blade.php
		// выполняем запрос к базе данных установленной по умолчанию
		$data = DB::table("posts")->where("name", "products")->first();
		// по идентификатору главной получим прикрепленные записи 
		$attachdata = DB::table("posts")->where("parent", "=", $data->id)->get(); 
		// отдадим полученные данные в представление
		return view("products")->with(["data" => $data, "attachdata" => $attachdata]);
	}

	public function acCoffins () {
		// формируем данные для представления по переданному параметру
		// выполняем запрос к базе данных установленной по умолчанию
		$data = DB::table("posts")->where("name", "=", "coffins")->first();
		// по идентификатору главной получим прикрепленные записи 
		$item = DB::table("posts")->where("parent", "=", $data->id)->get(); 
		// отдадим полученные данные в представление
		return view ("coffins")->with(["data" => $data,  "item" => $item]);
	}

	public function acVenki () {
		// формируем данные для представления по переданному параметру
		// выполняем запрос к базе данных установленной по умолчанию
		$data = DB::table("posts")->where("name", "=", "venki")->first();
		// по идентификатору главной получим прикрепленные записи 
		$item = DB::table("posts")->where("parent", "=", $data->id)->get(); 
		// отдадим полученные данные в представление
		return view ("venki")->with(["data" => $data,  "item" => $item]);
	}

	public function acCross () {
		// формируем данные для представления по переданному параметру
		// выполняем запрос к базе данных установленной по умолчанию
		$data = DB::table("posts")->where("name", "=", "cross")->first();
		// по идентификатору главной получим прикрепленные записи 
		$item = DB::table("posts")->where("parent", "=", $data->id)->get(); 
		// отдадим полученные данные в представление
		return view ("cross")->with(["data" => $data,  "item" => $item]);
	}

	public function acTextile () {
		// формируем данные для представления по переданному параметру
		// выполняем запрос к базе данных установленной по умолчанию
		$data = DB::table("posts")->where("name", "=", "textile")->first();
		// по идентификатору главной получим прикрепленные записи 
		$item = DB::table("posts")->where("parent", "=", $data->id)->get(); 
		// отдадим полученные данные в представление
		return view ("textile")->with(["data" => $data,  "item" => $item]);
	}


	public function acNewPage () {
		// формируем данные для представления skulptura.blade.php
		// выполняем запрос к базе данных установленной по умолчанию
		$data = DB::table("posts")->where(["name" => "newPage"])->first();
		// отдадим полученные данные в представление
		return view ("newPage")->with(["data" => $data]);
	}

	public function acSubNewPage ($subNewPage) {
		// формируем данные для представления skulptura.blade.php
		// выполняем запрос к базе данных установленной по умолчанию
		$data = DB::table("posts")->where("name",  "=", "$subNewPage")->first();
		// по идентификатору главной получим прикрепленные записи 
		$attachdata = DB::table("posts")->where("parent", "=", $data->id)->get(); 
		// отдадим полученные данные в представление
		return view("newPage")->with(["data" => $data, "attachdata" => $attachdata]);
	}



}