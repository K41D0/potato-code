<aside class="main-sidebar">
  
        <div class="sidebar" id="sidenav">
          <a href="javascript:void(0)" class="close_btn" onclick="closeNav()">&times;</a>
          <nav class="navbar text-white py-0">
            <div class="container-fluid py-0 px-0">
              <a id="project"class="navbar-brand py-0 mx-0 " ><i class="fas fa-briefcase"></i><span>Projects</span></a>
            </div>
          </nav>   
          <nav class="navbar text-white  py-0" >
            <div class="container-fluid px-0">
              <a class="navbar-brand  mx-0 py-0" href="#"><i class="fas fa-file-signature" aria-hidden="true"></i><span>Tasks</span></a>
            </div>
          </nav>   
          <nav class="navbar text-white" >
            <div class="container-fluid px-0">
              <a class="navbar-brand  mx-0 py-0" href="#"><i class="fas fa-tasks"></i><span>Reports</span></a>
            </div>
          </nav>                  
        </div>
        <script type="text/javascript">
          function openNav() {
            document.getElementById("sidenav").style.width = "250px";
            document.getElementById("content").style.marginLeft = "250px";
            document.getElementById("navbar").style.marginLeft = "250px";
          }

          function closeNav() {
            document.getElementById("sidenav").style.width = "65";
            document.getElementById("content").style.marginLeft= "65";
            document.getElementById("navbar").style.marginLeft= "65";

          }
        </script>
</aside>