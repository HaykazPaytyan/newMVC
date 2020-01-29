<?php 

class HomeController extends Controller{

	public function actionIndex()
	{   
		Model::plug('HomeModel');
		$homeModel = new HomeModel(Database::connect());
		$tables = $homeModel->showTables();

        View::render('home/index',array('table' => $tables));
	}
}


?>