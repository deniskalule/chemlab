<?php
// session_start();
include("../includes/conn.php");
if(isset($_POST['id']))
{
    $category = $_POST['id'];
    if($category != "all")
    {
        echo '<h6>All '.$category.' Chemicals</h6><hr />';
    }
    ?>
    
    
     <div class="home-cards">
        <?php
            $select  = $conn->query("select * from organic where category = '$category'");
            while($row = $select->fetch_assoc())
            {
                ?>
                <!-- <div class=" mt-3"> -->
                    <div class="card-deck about-chemical mr-2" id="<?= $row['id'] ?>" style="cursor:pointer;">
                        <div class="card text-center">
                            
                            <div class="card-body" style="margin:-20px;">
                                <p> <?= $row['amount'] ?></p>
                                <h6 class="card-title"><?= $row['compound'] ?></h6>
                            </div>
                        </div>
                        
                    </div>
                <!-- </div> -->

                <?php
            }
        
        ?>
    </div>
    <?php

}


?>

<script>
    $('.about-chemical').click(function (e) { 
      e.preventDefault();
      // document.getElementById("popup").style.display = "block";

      document.getElementById("display").style.display = "none";

      chem_id = $(this).attr('id');
    //   alert(chem_id);

      $.ajax({
        type: "post",
        url: "view_chemicals.php",
        data: {id:chem_id},
        // dataType: "dataType",
        success: function (result) {
          $('#popup').html(result);
        }
      });

    });
</script>