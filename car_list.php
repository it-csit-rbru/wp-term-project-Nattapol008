<?php include 'header.php'; ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row mt-3">
                    <div class="mr-auto pl-5">
                        <h3>รถ</h3>
                    </div>
                    <div class="ml-auto pr-5">
                        <a href="car_add.php" class="btn btn-success"><i class="far fa-plus-square"></i> เพิ่มรถ</a>
                    </div>
                </div>
                <hr>
                <?php
                
                include 'connect.php';
                $car_list = mysqli_query($conn, "SELECT * FROM cars INNER JOIN brands ON (cars.brand_id = brands.brand_name) INNER JOIN generations ON (cars.generation_id = generations.generation_name) INNER JOIN colors ON (cars.color_id = colors.color_name)");

                ?>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ลำดับ</th>
                            <th>รูป</th>
                            <th>ชื่อ</th>
                            <th>ยี่ห้อ</th>
                            <th>รุ่น</th>
                            <th>สี</th>
                            <th>แก้ไข</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        if(mysqli_num_rows($car_list) > 0){
                            while($cars = mysqli_fetch_assoc($car_list)){
                    ?>
                        <tr>
                            <td><?=$count++?></td>
                            <td><img src="image/<?=$cars['image']?>" alt="<?=$cars['image']?>" style="max-width:50px;"></td>
                            <td><?=$cars['name']?></td>
                            <td><?=$cars['brand_name']?></td>
                            <td><?=$cars['generation_name']?></td>
                            <td><?=$cars['color_name']?></td>
                            <td>
                                <a href="car_edit.php?id=<?=$cars['id']?>" class="btn btn-sm btn-light"><i class="far fa-edit"></i></a>
                                <a href="car_delete.php?id=<?=$cars['id']?>" class="btn btn-sm btn-light"><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    <?php
                            }
                        }else{
                    ?>
                        <tr>
                            <td colspan="7" class="text-center pt-4"><h3>ไม่มีข้อมูล</h3></td>
                        </tr>
                    <?php
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>