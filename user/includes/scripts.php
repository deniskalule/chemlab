
<script>

    $('.about-chemical').click(function (e) { 
      e.preventDefault();
      // document.getElementById("popup").style.display = "block";

      document.getElementById("display").style.display = "none";

      chem_id = $(this).attr('id');
      // alert(chem_id);

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

    // apparatus
    $('.about-apparatus').click(function (e) { 
      e.preventDefault();
      document.getElementById("popup").style.display = "block";

      document.getElementById("display").style.display = "none";

      app_id = $(this).attr('id');
      // alert(app_id);

      $.ajax({
        type: "post",
        url: "view_apparatus.php",
        data: {id:app_id},
        // dataType: "dataType",
        success: function (result) {
          $('#popup').html(result);
        }
      });

    });

    // equipment
    $('.about-equipment').click(function (e) { 
      e.preventDefault();
      document.getElementById("popup").style.display = "block";

      document.getElementById("display").style.display = "none";

      equ_id = $(this).attr('id');
      // alert(chem_id);

      $.ajax({
        type: "post",
        url: "view_equipment.php",
        data: {id:equ_id},
        // dataType: "dataType",
        success: function (result) {
          $('#popup').html(result);
        }
      });

    });

</script>    

<script>
  function searchItems(query)
  {
    alert('being developed');
  }
</script>
  
<script>
  $('.cat-btn').click(function (e) { 
      e.preventDefault();

      this_id = $(this).attr('id');
      // alert(this_id);
      document.querySelector(".all").style.display = "none";
      if(this_id == "all")
      {
        document.querySelector(".all").style.display = "block";
      }

      $.ajax({
        type: "post",
        url: "./backend/viewDetails.php",
        data: {id:this_id},
        // dataType: "dataType",
        success: function (result) {
          $('#view_details').html(result);
        }
      });

    });

</script>




