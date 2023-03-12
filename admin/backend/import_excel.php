<?php
// include 'includes/session.php';
include '../includes/conn.php';

require '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

if(isset($_POST['import']))
{
    $filename = $_FILES['import_file']['name'];
    $file_ext = pathinfo($filename,PATHINFO_EXTENSION);

    $allowed_ext = ['xls','csv','xlsx'];

    if(in_array($file_ext,$allowed_ext))
    {
        $inputFileName = $_FILES['import_file']['tmp_name'];
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileName);
        $data = $spreadsheet->getActiveSheet()->toArray();

        foreach($data as $row)
        {
            $compound = $row[0];
            $amount = $row[1];
            $exdate = $row[2];
            $location = $row[3];
            $category = $row[4];
            
            $query = $conn->query("select id from organic where compound = '$compound'");
            echo $query->num_rows;
            if($query->num_rows == 0)
            {
                $sql ="INSERT INTO `organic`(`compound`, `amount`, `expdate`, `location`,`category`) VALUES ('$compound','$amount','$expdate','$location','$category')";
                if($conn->query($sql)){
                    echo "success";
                    $_SESSION['success'] = 'Chemical added successfully';
                }
                else{
                    echo "failed";
                    $_SESSION['error'] = "error";
                }
            }
            else
            {
                $_SESSION['error'] = "The chemical already exists";
            }
            
            

        }

        
    }
    header('location: ../chemicals.php');


}


?>