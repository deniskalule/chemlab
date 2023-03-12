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
            $name = $row[1];
            $specs = $row[2];
            $supplier = $row[3];
            $quantity = $row[4];
            $status = $row[5];
            $location = $row[6];
            $code = $row[7];
            
            $query = $conn->query("select id from equipment where name = '$name'");
            echo $query->num_rows;
            if($query->num_rows == 0)
            {
                $sql ="INSERT INTO `equipment`(`name`, `specs`, `supplier`, `quantity`,`status`,`location`,`code`) VALUES ('$name','$specs','$supplier','$quantity','$status','$location','$code')";
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
    header('location: ../equipment.php');


}


?>