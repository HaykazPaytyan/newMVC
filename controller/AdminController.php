<?php


class AdminController extends Controller
{
    
    public function actionIndex()
    {   
        Session::init();

        if (!$_SESSION['user']) {
               header('Location: /auth');
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                 
                 if (isset($_POST['sign_out'])) {
                         Session::destroy();
                         header('Location: /'); 
                 }
        }

        Model::plug('AdminModel');
        $adminModel = new AdminModel(Database::connect());
        $tables = $adminModel->select(); 
        View::render('admin/index',array('table' => $tables));



    }
    
    public function actionAdd()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            if (isset($_POST['upload'])) {
                
                $fileName    = $_FILES['file']['name'];
                $fileSize    = $_FILES['file']['size'];
                $fileError   = $_FILES['file']['error'];
                $fileTmpName = $_FILES['file']['tmp_name'];
                
                $fileType = strtolower(end(explode('.', $fileName)));
                
                $fileExtension = array(
                    'jpg,png,jpeg'
                );
                
                if (!in_array($fileType, $fileExtension)) {
                    print("extension not allowed, please choose a JPEG,JPG or PNG file.");
                }

                if ($fileError === 0) {
                     move_uploaded_file($fileTmpName, APP.'/public/img/'.$fileName);
                }
                 
                Model::plug('AdminModel');
                $adminModel = new AdminModel(Database::connect());
                $adminModel->insert($fileName); 

                header('Location: /admin');
            }
        }
    }
    
    public function actionDelete($id)
    {  
        $id = intval($id);

        Model::plug('AdminModel');
        $adminModel = new AdminModel(Database::connect());
        $adminModel->delete($id);
        

        header('Location: /admin');
  
    }


    public function actionUpdate()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            if (isset($_POST['update'])) {
                
                $id = intval($_POST['id']);
                $fileName    = $_FILES['update_file']['name'];
                $fileSize    = $_FILES['update_file']['size'];
                $fileError   = $_FILES['update_file']['error'];
                $fileTmpName = $_FILES['update_file']['tmp_name'];
                
                $fileType = strtolower(end(explode('.', $fileName)));
                
                $fileExtension = array(
                    'jpg,png,jpeg'
                );
                
                if (!in_array($fileType, $fileExtension)) {
                    print("extension not allowed, please choose a JPEG,JPG or PNG file.");
                }

                if ($fileError === 0) {
                     move_uploaded_file($fileTmpName, APP.'/public/img/'.$fileName);
                }
                 
                Model::plug('AdminModel');
                $adminModel = new AdminModel(Database::connect());
                $adminModel->update($fileName,$id); 

                header('Location: /admin');
            }
        }
    }

    

}


?>