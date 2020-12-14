<aside class="main-sidebar">
    <?php 
        $image='';
        if($user['img']){
            $image=$user['img'];
        }else{
            $image='avatar5.png';
        }
    ?>
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="public/images/admin/<?php echo $image ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $user['fullname'] ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Trực tuyến</a>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="header">QUẢN LÝ CỬA HÀNG</li>
            <li>
                <a href="<?php echo base_url()?>admin/product">
                    <i class="fa fa-leaf"></i> Sản phẩm
                </a>
            </li>
        </li>
        </ul>
        
    </section>
    <!-- /.sidebar -->
</aside>