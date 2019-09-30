<div class="row">
    <div class="col-lg-8">
        <div class="ibox">
            <div class="ibox-title">
                <h3><?php echo $form->nombre ?></h3>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#" class="dropdown-item">Config option 1</a>
                        </li>
                        <li><a href="#" class="dropdown-item">Config option 2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <?php echo $form->form ?>

            </div>
            <!-- <div class="ibox-footer">
                <span class="float-right">
                    The righ side of the footer
                </span>
                This is simple footer example
            </div> -->
        </div>
    </div>
</div>