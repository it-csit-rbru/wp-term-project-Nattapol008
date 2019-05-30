<?php include 'header.php'; ?>
<div class="row">
    <div class="col-lg-10 m-auto">
        <div class="card">
            <div class="card-body">
                <div class="row mt-3">
                    <div class="mr-auto pl-5">
                        <h3>รุ่นทั้งหมด</h3>
                    </div>
                    <div class="ml-auto pr-5">
                        <a href="generation_add.php" class="btn btn-success"><i class="far fa-plus-square"></i> เพิ่มรุ่น</a>
                    </div>
                </div>
                <hr>
                <?php
                
                include 'connect.php';
                $generation_list = mysqli_query($conn, "SELECT * FROM generations");

                ?>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ลำดับ</th>
                            <th>รุ่น</th>
                            <th>แก้ไข</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        if(mysqli_num_rows($generation_list) > 0){
                            while($generations = mysqli_fetch_assoc($generation_list)){
                    ?>
                        <tr>
                            <td><?=$count++?></td>
                            <td><?=$generations['generation_name']?></td>
                            <td>
                                <a href="generation_edit.php?id=<?=$generations['generation_id']?>" class="btn btn-sm btn-light"><i class="far fa-edit"></i></a>
                                <a href="generation_delete.php?id=<?=$generations['generation_id']?>" class="btn btn-sm btn-light"><i class="far fa-trash-alt"></i></a>
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