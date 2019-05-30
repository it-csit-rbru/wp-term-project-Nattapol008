<?php include 'header.php'; ?>
<div class="row">
    <div class="col-lg-8 m-auto">
        <?php
        include 'connect.php';
        if(isset($_POST['submit']))
        {
            $name = $_POST['name'];
            if(mysqli_query($conn, "UPDATE generations SET generation_name='$name' WHERE generation_id=$_GET[id]"))
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
        $edit_generation = mysqli_query($conn, "SELECT * FROM generations WHERE generation_id=$_GET[id]");
        $edit = mysqli_fetch_assoc($edit_generation);
        ?>
        <div class="card">
            <div class="card-body">
                <h2>เพิ่มรุ่นใหม่</h2>
                <hr>
                <form action="" method="post">
                    <div class="form-group">
                      <label for="name">ชื่อรุ่น</label>
                      <input type="text" class="form-control form-control-lg" name="name" id="name" value="<?=$edit['generation_name']?>" placeholder="ชื่อรุ่น">
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