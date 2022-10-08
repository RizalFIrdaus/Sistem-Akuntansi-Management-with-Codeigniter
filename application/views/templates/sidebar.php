<!-- Sidebar menu-->

<?php
$role_id = $this->session->userdata('role_id');
$queryMenu = "SELECT `user_menu`.`id` , `menu`
            FROM `user_menu` JOIN `user_access_menu`
            ON `user_menu`.`id` = `user_access_menu`.`menu_id`
            WHERE `user_access_menu`.`role_id` = $role_id
            ORDER BY `user_access_menu`.`menu_id` ASC
            
            ";

$menu = $this->db->query($queryMenu)->result_array();

?>

<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="<?= base_url('assets/img/profile/') . $member['image'] ?>" style="width:35px;">
        <div>
            <p class="app-sidebar__user-name"><?= $member['name']; ?></p>
            <?php if ($member['role_id'] == 1) : ?>
                <p class="app-sidebar__user-designation">Administrator</p>
            <?php else : ?>
                <p class="app-sidebar__user-designation">Member</p>
            <?php endif ?>
        </div>
    </div>
    <?php foreach ($menu as $m) : ?>
        <?php
        $id = $m['id'];
        $querySubMenu = "SELECT *
                    FROM `user_sub_menu`
                    WHERE `menu_id` = $id
                    AND `is_active` = 1
            ";

        $subMenu = $this->db->query($querySubMenu)->result_array();

        ?>





        <ul class="app-menu">
            <?php foreach ($subMenu as $data) : ?>
                <li><a class="app-menu__item" href="<?= base_url() . $data['url'] ?>"><i class="app-menu__icon <?= $data['icon'] ?>"></i><span class="app-menu__label"><?= $data['title'] ?></span></a></li>
            <?php endforeach ?>
        <?php endforeach ?>
</aside>
<main class="app-content">