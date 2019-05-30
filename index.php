<?php include 'header.php'; ?>
<div class="row">
<?php
    include 'connect.php';
    $cars_all = mysqli_query($conn, "SELECT * FROM cars");
    if(mysqli_num_rows($cars_all) > 0){
        while($cars = mysqli_fetch_assoc($cars_all)){
?>
    <div class="col-lg-4 mb-3">
        <div class="card p-4 h-100" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="image/<?=$cars['image']?>" class="card-img" alt="<??>">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?=$cars['name']?></h5>
                        <p class="card-text"></p>
                        <p class="card-text"><small class="text-muted">ราคา <?=$cars['price']?></small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
        }
    }else{
?>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body text-center">
                <h1>ไม่มีข้อมูล</h1>
            </div>
        </div>
    </div>
<?php
    }
?>
</div>
<?php include 'footer.php'; ?>