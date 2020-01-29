<?php 



class AuthController extends Controller
{
	
	public function actionIndex()
	{  
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                if (isset($_POST['login'])) {


                	$log_usr = filter_var($_POST['login_name'],FILTER_SANITIZE_STRING);
                	$log_pas = $_POST['login_pass'];

                	Model::plug('AuthModel');
                	$authModel = new AuthModel(Database::connect());
                	$row = $authModel->login($log_usr,$log_pas);

                	if ($row) {
                		 
                		 Session::init();
                		 $_SESSION['user'] = $row['user_name'];        
                		 header('Location: /admin');
                	}
                }
        }	 
       
        View::render('auth/index');
	}
}

?>