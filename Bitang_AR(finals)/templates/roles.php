<style >
  .body-border {
    background:transparent;
    backdrop-filter: blur(10px);
    border-radius:30px;
    margin-top: 15px;
    margin-bottom: 15px;
    box-shadow: 0px 0px 10px #f96863, 0px 0px 10px #f96863 inset;
  }

  .sort-n-search {
    display: flex;
    justify-content: space-between; 
  }

  .add-sort-search {
    display: flex;
    justify-content: space-between; 
    margin-left: 30px;
    margin-right: 30px;
  }

  .options {
    float: right;
  }

  .show-all {
    display: flex;
    justify-content: space-between; 
    margin-left: 30px;
    margin-right: 30px;
    padding:20px;
  }
</style>

<div class="body-border">
  <br>
  <h1 style='text-align:center; margin-auto; padding:10px;'><strong>List of users</strong></h1>

  <div class="add-sort-search">
    <div>
      <button type="button" class="btn btn-outline-primary">
        <a href="registeruser.php">Register New User</a>
      </button>
    </div>

    <!-- sort and search div -->
    <div class="sort-n-search">
        <!-- search -->
        <div class="search-product">
          <form action='search.php' class="d-flex" style="width: 100%;">
            <input name='keywords' class="form-control me-sm-2 primary" type="search" placeholder="Search" style="width: 300px;">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>

        <!-- sort -->
        <div class='sorting'>
          <ul class="nav nav-pills flex-column">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="font-size:18px;">Show</a>
              <div class="dropdown-menu" style="">
                <h6 class="dropdown-header">Actions</h6>
                <a class="dropdown-item" href="users.php">All Users</a>
                <a class="dropdown-item" href="admin.php">All Administrator</a>
                <a class="dropdown-item" href="clerk.php">All Clerk</a>
                <a class="dropdown-item" href="webadmin.php">All Web Administrator</a>
                <a class="dropdown-item" href="programmers.php">All Programmer</a>
                <a class="dropdown-item" href="staff.php">Staff</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>  
    <br>