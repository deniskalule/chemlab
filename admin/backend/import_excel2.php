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
            $name = $row[0];
            $quantity = $row[1];
            $location = $row[3];
            
            $query = $conn->query("select id from apparatus where name = '$name'");
            echo $query->num_rows;
            if($query->num_rows == 0)
            {
                $sql ="INSERT INTO `apparatus`(`name`, `quantity`, `location`) VALUES ('$name','$qty','$location')";
                if($conn->query($sql)){
                    echo "success";
                    $_SESSION['success'] = 'Apparatus added successfully';
                }
                else{
                    echo "failed";
                    $_SESSION['error'] = "error";
                }
            }
            else
            {
                $_SESSION['error'] = "The apparatus already exists";
            }
            
            

        }

        
    }
    header('location: ../apparatus.php');


}


?>