<?php include 'header.php'; ?>
<div class="row">
    <div class="col-lg-8 m-auto">
        <?php
        include 'connect.php';
        if(isset($_POST['submit']))
        {
            $name = $_POST['name'];
            $color =$_POST['color'];
            
            if(mysqli_query($conn, "UPDATE colors SET color_name='$name', color_color='$color' WHERE color_id=$_GET[id]"))
            {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>เพิ่มข้อมูลสำเร็จ!</strong> 
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
        $edit_color = mysqli_query($conn, "SELECT * FROM colors WHERE color_id=$_GET[id]");
        $edit = mysqli_fetch_assoc($edit_color);
        ?>
        <div class="card">
            <div class="card-body">
                <h2>แก้สีใหม่</h2>
                <hr>
                <form action="" method="post">
                    <div class="form-group">
                      <label for="name">ชื่อสี</label>
                      <input type="text" class="form-control form-control-lg" name="name" id="name" value="<?=$edit['color_name']?>" placeholder="ชื่อสี">
                    </div>
                    <div class="form-group">
                      <label for="color">เลือกสี</label>
                      <input type="color" class="form-control" name="color" id="color" value="<?=$edit['color_color']?>" placeholder="">
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