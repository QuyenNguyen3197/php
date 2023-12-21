<?php include "../../database/function.php"?>
<?php 
  updateRow();
  createRow();
  deleteRow();
?>

<?php include "../includes/header.php" ?>
<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Blank Page
                    <small>Subheading</small>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-file"></i> Blank Page
                    </li>
                </ol>
                <p>
                    <!-- noi dung cua index -->
    <div class="container">
        <div class="row">
            <div class="col-md-6">

<!-- day la noi dung hien thi  -->
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Email</th>
                    <th scope="col">Full name</th>
                    <th scope="col">password</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                <?php showAllData();  ?>
                </tbody>
                </table>
<!-- ket thuc noi dung hien thi -->

            </div>
        </div>
    </div>
<!-- ket thuc noi dung cua index   -->
                </p>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>














