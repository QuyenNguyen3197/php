
  <?php include "includes/header.php";?>

    <div class="container"> <!-- tạo div với class nhanh : dấu "." + tên class -->
        <div class="row">
            <div class="col-md-6">


                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Email</th>
                    <th scope="col">Fullname</th>
                    <th scope="col">Password</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  showAllData(); ?>
                </tbody>
                </table>


            </div>
        </div>
    </div>

    <?php include "includes/footer.php";?>

<!-- Project
1. có tên
2. include
3. index php -->