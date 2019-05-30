<?php include 'header.php'; ?>
<div class="row">
    <div class="col-lg-8 m-auto">
    <?php
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            include 'connect.php';
            if(mysqli_query($conn, "INSERT INTO generations (generation_name) VALUES ('$name')")){
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
            }
        }
    ?>
        <div class="card">
            <div class="card-body">
                <h2>เพิ่มรุ่นใหม่</h2>
                <hr>
                <form action="" method="post">
                    <div class="form-group">
                      <label for="name">ชื่อรุ่น</label>
                      <input type="text" class="form-control form-control-lg" name="name" id="name" placeholder="ชื่อรุ่น">
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