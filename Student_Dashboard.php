<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Transfer System</title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <style type="text/css">
      /* Styles for the dashboard container */
      .sidebar {
        background-color: #f8f9fa;
        height: 100vh;
        width: 200px;
        position: fixed;
        left: 0;
        top: 0;
      }
      
      /* Styles for the main content container */
      .main {
        margin-left: 200px;
        padding: 20px;
      }
      
      /* Styles for the form */
      .deptForm {
        width: 50%;
      }
      
      /* Styles for the header */
      .header {
        background-color: #007bff;
        color: white;
        padding: 20px;
      }
      
      /* Styles for the logo */
      #mimg {
        width: 100px;
      }

       .footer{
        background: blue;
        margin-top: 50%;
        color: white;

    }
    </style>
  </head>
  <body>
    <div class="sidebar">
      <!-- Dashboard content here -->

       <h3><strong>Student Dashboard</strong></h3>
  <a href="Application_Form.php">Application Form</a>
  <a href="#">Application Status</a>
  
  <hr>

  <a href="#">Settings</a>
  <a href="#">Logout</a>
  
    </div>
    <div class="main">
      <header class="header">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <center>
                <h1 class="text-center">Kibabii University Faculty Transfer System<br /><small style="font-size:20px">Knowledge For Development</small></h1>
                <img id="mimg" src="images/KIbabii-Logo.png" class="img-responsive" />
              </center>
            </div>
          </div>
        </div>
      </header>

</div>
</body>

<footer class="footer">
    <div class="container-fluid">
    <div class="row">
        <div>
<center>Copyright © 2022 Vouma. All Rights Reserved.</center>
        </div>
    </div>
    </div>
  </footer>
</html>
        
