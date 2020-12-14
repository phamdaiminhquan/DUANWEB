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
            <li class="header">QUẢN LÝ DANH MỤC</li>
            <li class="treeview">
                <a href="<?php echo base_url()?>admin/category">
                    <i class="fa fa-indent"></i><span>Loại sản phẩm</span>
                </a>
            </li>
            <li class="treeview">
                <a href="<?php echo base_url()?>admin/producer">
                    <i class="fa fa-gift"></i><span>Nhà cung cấp</span>
                </a>
            </li>
            <li class="header">QUẢN LÝ CỬA HÀNG</li>
            <li>
                <a href="<?php echo base_url()?>admin/product">
                    <i class="fa fa-leaf"></i> Sản phẩm
                </a>
            </li>
            <li class="header">CÀI ĐẶT</li>
            <li class="treeview">
                <a href="#">
                    <i class="glyphicon glyphicon-cog"></i><span>Hệ thống</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active">
                        <a href="<?php echo base_url() ?>admin/configuration/update">
                            <i class="fa fa-cogs"></i> Cấu hình
                        </a>
                    </li>
                    <?php 
                        $cpnGroup='';
                        if($user['role']==1){
                            $cpnGroup.=
                            "<li>
                                <a href='".base_url()."admin/group'>
                                    <i class='fa fa-lock'></i> Nhóm người dùng
                                </a>
                            </li>";
                        }
                        echo $cpnGroup;
                    ?>
                    <li>
                        <a href="<?php echo base_url() ?>admin/useradmin">
                            <i class="fa fa-users"></i> Thành viên
                        </a>
                    </li>
                </ul>
            </li>
            <li><a href="admin/user/logout.html"><i class="fa fa-sign-out text-red"></i> <span>Thoát</span></a></li>
            <li><a href="#"><i class="fa fa-question-circle text-yellow"></i> <span>Trợ giúp</span></a></li>
        </ul>
        
    </section>
    <!-- /.sidebar -->
</aside>