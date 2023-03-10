<script>
    let btn = document.querySelector("#btn");
    let sidebar = document.querySelector(".sidebar");

    btn.onclick = function()
    {
        sidebar.classList.toggle("active");
        content.classList.toggle("active");
        this.classList.toggle("arrow-down");
        alert("success");
    }

</script>

<script>
    var toggler = document.getElementsByClassName('caret');
    var i;

    for(i=0;i<toggler.length;i++)
    {
        toggler[i].addEventListener("click", function(){
            this.parentElement.querySelector('.nested').classList.toggle('active');
            this.classList.toggle("caret-down");
        });
    }

</script>