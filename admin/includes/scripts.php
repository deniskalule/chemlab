<script>
    $(document).ready( function () {
        $('#table').dataTable();
        $('#table1').dataTable();
        $('#table3').dataTable();
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

<!-- graphs -->
<script>
  const labels = ['s1','s2','s3','s4','s5'];

  const data = {
    labels: labels,
    datasets: [{
      label: 'Found items',
      backgroundColor: 'rgb(0,0,100)',
      borderColor: 'rgb(255, 99, 132)',
      data: [30,10,20,70,50],
      
      },
    ]
  };

  const label = ['s1','s2','s3'];

  const data1 = {
    labels: label,
    datasets: [{
      label: 'Lost Items',
      backgroundColor: 'rgb(0,100,100)',
      borderColor: 'rgb(255, 99, 132)',
      data: [30,40,20],
    },
    ]
  };

  const config = {
    type: 'line',
    data: data,
    options: {}
  };

  const config1 = {
    type: 'doughnut',
    data: data1,
    options: {}
  };

  const myChart = new Chart(
    document.getElementById('mychart'),
    config
  );
  const my1 = new Chart(
    document.getElementById('my1'),
    config1
  );
</script>


<script>
    $('.lecturer_show').hide();
    $('.lab_attendant_show').hide();

    $('.student').click(function () {
      $('.student_show').show();
      $('.lecturer_show').hide();
      $('.lab_attendant_show').hide();
      $('.chief_show').hide();
    });

    $('.lecturer').click(function () {
      $('.lecturer_show').show();
      $('.student_show').hide();
      $('.lab_attendant_show').hide();
      $('.chief_show').hide();
    });
    $('.lab_attendant').click(function () {
      $('.lab_attendant_show').show();
      $('.lecturer_show').hide();
      $('.student_show').hide();
      $('.chief_show').hide();
    });
    $('.chief').click(function () {
      $('.lab_attendant_show').hide();
      $('.lecturer_show').hide();
      $('.student_show').hide();
      $('.chief_show').show();
    });

</script>


<script>
    $('.apparatus_show').hide();
    $('.equipment_show').hide();

    $('.chemical-btn').click(function () {
      $('.chemical_show').show();
      $('.apparatus_show').hide();
      $('.equipment_show').hide();
    });

    $('.apparatus-btn').click(function () {
      $('.chemical_show').hide();
      $('.apparatus_show').show();
      $('.equipment_show').hide();
    });
    $('.equipment-btn').click(function () {
      $('.chemical_show').hide();
      $('.apparatus_show').hide();
      $('.equipment_show').show();
    });
</script>

<script>
  $(document).ready(function () {
    $('.add').click(function (e) { 
      e.preventDefault();
      alert("success");
    });
  });
</script>


