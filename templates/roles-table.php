<?php  
  echo "<div class='filter-bg' >";
  echo "<table class='table'>";
  echo "<tr><th></th><th>User</th><th>Email</th><th>Date Registered</th><th>Role</th><th></th></tr>";

    //  loop the data
    while($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";

      if ($row['image'] == NULL) {
        echo "<td><img src='images/profile/default.png' class='rounded-circle' width='50' height='50'></td>";
      } else {
          echo "<td><img src='images/profile/" . $row["image"] . "' class='rounded-circle' width='50' height='50'></td>";
      }

      echo "<td><strong>" . $row["complete_name"] . "</strong><br><small>Employee ID: " . $row["id"] . "</small><br>";

      if ($row["active"] == 0) {
        echo '<a class="dropdown-item" href="status.php?id=' . $row['id'] . '"><img src="assets/icons/disable.png" alt="edit" style="hieght:25px; width:25px;"> Lock</a>';
      } else {
        echo '<a class="dropdown-item" href="status.php?id=' . $row['id'] . '"><img src="assets/icons/enable.png" alt="edit" style="hieght:25px; width:25px;"> Active</a>';
      }
      echo "</td>";

      echo "<td>" . $row['email'] . "</td>";
      echo "<td>" . $row['date_at'] . "</td>";
      echo "<td  style='margin: 10px;'>" . $row['role_name'] . "</td>";

      // echo "<td><a href='view.php?id=" . $row["id"]. "' class='btn btn-link'><img src='assets/icons/view.png' alt='view' style='hieght:25px; width:25px;'></a>";
      echo "<td>";

      // actions
      echo "<div class='options'>";
      echo '<ul class="nav nav-pills flex-column">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"></a>
                <div class="dropdown-menu" style="">
                  <h6 class="dropdown-header">Actions</h6>

                  <a class="dropdown-item" href="view.php?id=' . $row["id"]. '"><img src="assets/icons/view.png" alt="view" style="hieght:25px; width:25px;">View User</a>

                  <a class="dropdown-item" href="update_user.php?id=' . $row['id'] . '"><img src="assets/icons/edit.png" alt="edit" style="hieght:25px; width:25px;">Edit User</a>

                  <a class="dropdown-item" href="resetpw.php?id=' . $row['id'] . '"><img src="assets/icons/reset-icon.png" alt="delete" style="height:23px; width:23px; margin-right:5px;">Reset Password</a>

                  <a class="dropdown-item" href="delete_user.php?id=' . $row['id'] . '"><img src="assets/icons/delete.png" alt="delete" style="height:25px; width:25px; margin-right:5px;">Delete User</a>
                </div>
              </li>
            </ul>';
        echo "</div>";
      echo "</td>";

      echo "</tr>";
    }


  echo "</table>";
  echo "</div>";

  ?>