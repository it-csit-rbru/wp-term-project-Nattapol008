<?php include 'header.php'; ?>
<div class="row">
    <div class="col-lg-10 m-auto">
        <div class="card">
            <div class="card-body">
                <div class="row mt-3">
                    <div class="mr-auto pl-5">
                        <h3>ยี่ห้อทั้งหมด</h3>
                    </div>
                    <div class="ml-auto pr-5">
                        <a href="brand_add.php" class="btn btn-success"><i class="far fa-plus-square"></i> ยี่ห้อ</a>
                    </div>
                </div>
                <hr>
                <?php
                
                include 'connect.php';
                $brand_list = mysqli_query($conn, "SELECT * FROM brands");

                ?>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ลำดับ</th>
                            <th>ยี่ห้อ</th>
                            <th>แก้ไข</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        if(mysqli_num_rows($brand_list) > 0){
                            while($brands = mysqli_fetch_assoc($brand_list)){
                    ?>
                        <tr>
                            <td><?=$count++?></td>
                            <td><?=$brands['brand_name']?></td>
                            <td>
                                <a href="brand_edit.php?id=<?=$brands['brand_id']?>" class="btn btn-sm btn-light"><i class="far fa-edit"></i></a>
                                <a href="brand_delete.php?id=<?=$brands['brand_id']?>" class="btn btn-sm btn-light"><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    <?php
                            }
                        }else{
                    ?>
                        <tr>
                            <td colspan="3" class="text-center pt-4"><h3>ไม่มีข้อมูล</h3></td>
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