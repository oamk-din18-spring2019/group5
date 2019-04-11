<h1 class="centered_text">User list</h1>
<br><br>
<table class="user_table">
<thead>
<tr><th class="user_cell">ID</th><th class="user_cell">Login</th><th class="user_cell">First name</th><th class="user_cell">Last name</th><th class="user_cell">Actions</th>  </tr>
</thead>
<tbody>
<?php
    foreach ($users as $row) {
        echo '<tr>';
        echo '<td class="user_cell">'.$row['user_id'].'</td>';
        echo '<td class="user_cell">'.$row['login'].'</td>';
        echo '<td class="user_cell">'.$row['first_name'].'</td>';
        echo '<td class="user_cell">'.$row['last_name'].'</td>';
        echo '<td class="user_cell"><a href="' . site_url('access/edit_user') . '">Edit</a> | <a href="' . site_url('access/delete_user') . '">Delete</a>       </td>';
        echo '</tr>';
    }
?>
</tbody>
</table>

<p>
<br>
<a href="<?php echo site_url('main'); ?>">Return to main page</a>
</p>
