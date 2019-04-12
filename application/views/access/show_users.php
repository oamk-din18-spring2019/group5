<h1 class="centered_text">User list</h1>
<br><br>
<table class="users-table">
<thead>
<tr><th class="users-table">ID</th><th class="users-table">Login</th><th class="users-table">First name</th><th class="users-table">Last name</th><th class="users-table">Actions</th>  </tr>
</thead>
<tbody>
<?php
    $td_prefix  = '<td class="users-table">';
    $td_postfix = '</td>';

    foreach ($users as $row) {
        echo '<tr>';
        echo $td_prefix . $row['user_id']    . $td_postfix;
        echo $td_prefix . $row['login']      . $td_postfix;
        echo $td_prefix . $row['first_name'] . $td_postfix;
        echo $td_prefix . $row['last_name']  . $td_postfix;
        echo $td_prefix . '<a href="' . site_url('access/edit_user/' . $row['user_id']) . '">Edit</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="' . site_url('access/delete_user/' . $row['user_id']) .'">Delete</a>' . $td_postfix;
        echo '</tr>';
    }
?>
</tbody>
</table>



<p>
<br>
<a href="<?php echo site_url('access/admin_menu'); ?>">Return to administator menu</a>
</p>
