<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">
                        <i class="fa fa-user"></i> <?php echo $adminData->surname . ' ' . $adminData->name . ' ' . $adminData->patr; ?>
                    </a>
                </li>
                <li><a href="/admin/main/logout"><i class="fa fa-lock"></i> Выйти</a></li>
            </ul>
        </div>
    </div>
</div>