<div class="content-header">Administrator menu - Show users</div>

<div>
<div class="side-menu">
<ul>
<li><a href="<?php echo site_url('access/add_user_form'); ?>">Add new user</a></li>
<li><a href="<?php echo site_url('access/show_users'); ?>">Show users</a></li>
<li><a href="<?php echo site_url('main'); ?>">Main menu</a></li>
</ul>
</div>

<div class="main-content">
<?php
    $template = array(
       'table_open'         => '<table class="users-table">',
       'heading_cell_start' => '<th class="users-table">',
       'cell_start'         => '<td class="users-table">',
       'cell_alt_start'     => '<td class="users-table">',
    );
    $this->table->set_template($template);
    $this->table->set_heading('ID', 'Login', 'First name', 'Last name', '');
    foreach ($users as $row) {
        $this->table->add_row($row['user_id'], $row['login'], $row['first_name'], $row['last_name'],
            '<a href="' . site_url('access/edit_user/' . $row['user_id']) . '">Edit</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="' . site_url('access/confirm_delete_user/' . $row['user_id']) .'">Delete</a>'
        );
    }

    echo $this->table->generate();
?>

</div>
</div>
