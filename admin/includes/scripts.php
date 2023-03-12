<script>
    $(document).ready( function () {
        $('#table1').dataTable();
        $('#table2').dataTable();
        // alert('success');
        document.getElementById("view-section").style.display = "none";

    } );

    
        
</script>


<script>
  var toggler = document.getElementsByClassName('caret');
  var i;

  for(i=0;i<toggler.length;i++)
  {
      toggler[i].addEventListener("click", function(){
          this.parentElement.querySelector('.nested').classList.toggle('active');
          this.classList.toggle("caret-down");
          // alert("success");
      });
  }
</script>

<!-- viewing chemicals -->
<script>

  $(document).ready(function () {
    $('.view').click(function (e) { 
      e.preventDefault();
      document.getElementById("display").style.display = "none";
      document.getElementById("view-section").style.display = "block";
      document.getElementById("popup").style.display = "none";


    });
    $('.add').click(function (e) { 
      e.preventDefault();
      document.getElementById("display").style.display = "block";
      document.getElementById("view-section").style.display = "none";   

    });
    
  });
  
</script>
<!-- viewing chemicals -->



<!-- vieweing the chemicals -->
<script>
    // var more = document.querySelector("#more");
    var tables = document.querySelector(".tables");
    var popup = document.querySelector(".popup");

    $('.more').click(function (e) { 
      e.preventDefault();
      document.getElementById("popup").style.display = "block";

      document.getElementById("view-section").style.display = "flex";

      tables.classList.toggle("active");
      popup.classList.toggle("active");

      chem_id = $(this).attr('id');
      // alert(chem_id);

      $.ajax({
        type: "post",
        url: "backend/view_chemicals.php",
        data: {id:chem_id},
        // dataType: "dataType",
        success: function (result) {
          $('#popup').html(result);
        }
      });

    });

    // apparatus
    $('.more').click(function (e) { 
      e.preventDefault();
      document.getElementById("popup").style.display = "block";

      document.getElementById("view-section").style.display = "flex";

      tables.classList.toggle("active");
      popup.classList.toggle("active");

      chem_id = $(this).attr('id');
      

      $.ajax({
        type: "post",
        url: "backend/view_chemicals.php",
        data: {id:chem_id},
        
        success: function (result) {
          $('#popup').html(result);
        }
      });
      

    });

    // equipment
    $('.more3').click(function (e) { 
      e.preventDefault();
      document.getElementById("popup").style.display = "block";

      document.getElementById("view-section").style.display = "flex";

      tables.classList.toggle("active");
      popup.classList.toggle("active");

      chem_id = $(this).attr('id');
      

      $.ajax({
        type: "post",
        url: "backend/view_equipment.php",
        data: {id:chem_id},
        
        success: function (result) {
          $('#popup').html(result);
        }
      });
      

    });

    // apparatus
    $('.more2').click(function (e) { 
      e.preventDefault();
      document.getElementById("popup").style.display = "block";

      document.getElementById("view-section").style.display = "flex";

      tables.classList.toggle("active");
      popup.classList.toggle("active");

      chem_id = $(this).attr('id');
      // alert(chem_id);

      $.ajax({
        type: "post",
        url: "backend/view_apparatus.php",
        data: {id:chem_id},
        // dataType: "dataType",
        success: function (result) {
          $('#popup').html(result);
        }
      });

    });
    
</script>
<!-- vieweing the chemicals -->
