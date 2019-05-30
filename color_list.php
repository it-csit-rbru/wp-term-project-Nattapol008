<?php include 'header.php'; ?>
<div class="row">
    <div class="col-lg-10 m-auto">
        <div class="card">
            <div class="card-body">
                <div class="row mt-3">
                    <div class="mr-auto pl-5">
                        <h3>รถทั้งหมด</h3>
                    </div>
                    <div class="ml-auto pr-5">
                        <a href="color_add.php" class="btn btn-success"><i class="far fa-plus-square"></i> เพิ่มสี</a>
                    </div>
                </div>
                <hr>
                <?php
                
                include 'connect.php';
                $color_list = mysqli_query($conn, "SELECT * FROM colors");

                ?>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ลำดับ</th>
                            <th>ชื่อ</th>
                            <th>สี</th>
                            <th>แก้ไข</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        if(mysqli_num_rows($color_list) > 0){
                            while($colors = mysqli_fetch_assoc($color_list)){
                    ?>
                        <tr>
                            <td><?=$count++?></td>
                            <td><?=$colors['color_name']?></td>
                            <td><?=$colors['color_color']?></td>
                            <td>
                                <a href="color_edit.php?id=<?=$colors['color_id']?>" class="btn btn-sm btn-light"><i class="far fa-edit"></i></a>
                                <a href="color_delete.php?id=<?=$colors['color_id']?>" class="btn btn-sm btn-light"><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    <?php
                            }
                        }else{
                    ?>
                        <tr>
                            <td colspan="4" class="text-center pt-4"><h3>ไม่มีข้อมูล</h3></td>
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