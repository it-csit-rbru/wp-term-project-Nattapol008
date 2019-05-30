<?php include 'header.php'; ?>
<div class="row">
    <div class="col-lg-8 m-auto">
    <?php
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $color = $_POST['color'];
            include 'connect.php';
            if(mysqli_query($conn, "INSERT INTO colors (color_name, color_color) VALUES ('$name', '$color')")){
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>เพิ่มข้อมูลสำเร็จ!</strong> เพิ่มรถสำเร็จ
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            }else{
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>ไม่สามารถเพื่อข้อมูลได้!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>';
                echo mysqli_error($conn);
            }
        }
    ?>
        <div class="card">
            <div class="card-body">
                <h2>เพิ่มสีใหม่</h2>
                <hr>
                <form action="" method="post">
                    <div class="form-group">
                      <label for="name">ชื่อสี</label>
                      <input type="text" class="form-control form-control-lg" name="name" id="name" placeholder="ชื่อสี">
                    </div>
                    <div class="form-group">
                      <label for="color">เลือกสี</label>
                      <input type="color" class="form-control" name="color" id="color" placeholder="">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" value="submit" class="btn btn-info btn-sm btn-block">เพิ่ม</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>