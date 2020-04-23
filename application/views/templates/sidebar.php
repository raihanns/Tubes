<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">

                <!-- query menu -->
                <?php
                $role_id = $this->session->userdata('role_id');

                $queryMenu = "SELECT `user_menu`.`id`, `menu`
                            FROM `user_menu` JOIN `user_access_menu`
                            ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                            WHERE `user_access_menu`.`role_id` = $role_id
                            ORDER BY `user_access_menu`.`menu_id` ASC
                            ";
                $menu = $this->db->query($queryMenu)->result_array();
                ?>

                <!-- LOOPING MENU -->
                <?php foreach ($menu as $m) : ?>
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span><?= $m['menu']; ?></span>
                    </h6>

                    <!-- SUBMENU SESUAI MENU -->
                    <?php
                    $menuId = $m['id'];
                    $querySubMenu = "SELECT *
                                    FROM `user_sub_menu` JOIN `user_menu`
                                    ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                                    WHERE `user_sub_menu`.`menu_id` = $menuId
                                    AND `user_sub_menu`.`is_active` = 1
                                ";
                    $subMenu = $this->db->query($querySubMenu)->result_array();
                    ?>

                    <ul class="nav flex-column">
                        <?php foreach ($subMenu as $sm) : ?>
                            <li class="nav-item">
                                <?php if ($title == $sm['title']) : ?>
                                    <a class="nav-link active" href="<?= base_url($sm['url']); ?>">
                                    <?php else : ?>
                                        <a class="nav-link" href="<?= base_url($sm['url']); ?>">
                                        <?php endif; ?>
                                        <span data-feather="<?= $sm['icon']; ?>"></span>
                                        <?= $sm['title']; ?>
                                        </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                <?php endforeach;  ?>
                <hr>
                </hr>
                <a class="nav-link" href="<?= base_url('auth/logout'); ?>"><span data-feather="log-out"></span>Logout</a>

            </div>
        </nav>