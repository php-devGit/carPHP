<ul class="nav nav-stacked">
    <li class="nav-header">
        <ul class="nav nav-stacked collapse in" id="userMenu">
            <li>
                <a href="/admin/main"><i class="fa fa-home"></i> Главная</a>
            </li>
            <li>
                <a href="/admin/orders"><i class="fa fa-envelope"></i> Заявки</a>
            </li>
            <li>
                <a href="/admin/content"><i class="fa fa-file-alt"></i> Контент страниц</a>
            </li>
            <li>
                <a href="/admin/settings"><i class="fa fa-cogs"></i> Настройки аккаунта</a>
            </li>
            <?php
            if ($adminData->dostup == 4) {
                echo '<li>';
                echo '<a href="/admin/accounts"><i class="fa fa-users"></i> Аккаунты</a>';
                echo '</li>';
            }
            ?>
        </ul>
    </li>
</ul>
<hr>