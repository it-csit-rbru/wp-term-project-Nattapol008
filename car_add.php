<?php include 'header.php'; ?>
<div class="row">
    <div class="col-lg-8 m-auto">
        <?php
        include 'connect.php';
        if(isset($_POST['submit']))
        {
          if(move_uploaded_file($_FILES["image"]["tmp_name"],"image/".$_FILES["image"]["name"]))
          {
            $image = $_FILES["image"]["name"];
          }else{
            $image = "";
          }
          $name = $_POST['name'];
          $brand = $_POST['brand'];
          $generation = $_POST['generation'];
          $color = $_POST['color'];
          $price = $_POST['price'];
          


          if(mysqli_query($conn, "INSERT INTO cars (image, name, color_id, brand_id, generation_id, price) VALUES ('$image', '$name', '$color', '$brand', '$generation', $price)")){
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
                <h2>เพิ่มรถใหม่</h2>
                <hr>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="name">ชื่อรถ</label>
                      <input type="text" class="form-control form-control-lg" name="name" id="name" placeholder="ชื่อรถ">
                    </div>
                    <div class="form-group">
                      <label for="image">อัพโหลดรูป</label>
                      <input type="file" class="form-control-file" name="image" id="image" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="brand">ยี่ห้อ</label>
                      <select class="form-control" name="brand" id="brand">
                        <option>กรุณาเลือก</option>
                        <?php
                        $list_brand = mysqli_query($conn, "SELECT * FROM brands");
                        if(mysqli_num_rows($list_brand) > 0){
                          while($brand = mysqli_fetch_assoc($list_brand)){
                        ?>
                        <option value="<?=$brand['brand_name']?>"><?=$brand['brand_name']?></option>
                        <?php
                          }  
                        }
                        ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="generation">รุ่น</label>
                      <select class="form-control" name="generation" id="generation">
                        <option>กรุณาเลือก</option>
                        <?php
                        
                        $list_generation = mysqli_query($conn, "SELECT * FROM generations");
                        if(mysqli_num_rows($list_generation) > 0){
                          while($generation = mysqli_fetch_assoc($list_generation)){
                        ?>
                        <option value="<?=$generation['generation_name']?>"><?=$generation['generation_name']?></option>
                        <?php
                          }  
                        }
                        ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="color">สี</label>
                      <select class="form-control" name="color" id="color">
                        <option>กรุณาเลือก</option>
                        <?php
                        
                        $list_color = mysqli_query($conn, "SELECT * FROM colors");
                        if(mysqli_num_rows($list_color) > 0){
                          while($color = mysqli_fetch_assoc($list_color)){
                        ?>
                        <option value="<?=$color['color_name']?>"><?=$color['color_name']?></option>
                        <?php
                          }  
                        }
                        ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="price">ราคา</label>
                      <input type="number" class="form-control" name="price" id="price" placeholder="">
                      
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