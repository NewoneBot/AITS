<div class="col-md-2 alert alert-primary shadow-sm side-manu rounded-0 sticky-top p-0 m-0" style="height:100vh;">
    <div class="nav flex-column nav-pills text-start " id="v-pills-tab" role="tablist" aria-orientation="vertical">

        <div class="w-100 d-flex justify-content-center py-2">
            <img src="images/atse.png" style="height: 40px; width: 50px;" alt="">
            <h2 class=" text-center px-2"><strong>AITS</strong></h2>
        </div>

        <hr class="p-0 m-0">

        <a href="search.php">
            <div class="nav-link text-start text-dark  w-100">
                <i class="fa-solid fa-magnifying-glass p-1"></i> Search
            </div>
        </a>

        <a href="admin.php">
            <div class="nav-link text-start text-dark w-100">
                <i class="fa-solid fa-people-arrows p-1"></i> Daily Visit
            </div>
        </a>


        <?php if($_SESSION['is_superuser']==1){?>
        <a href="session.php">
            <div class="nav-link text-start text-dark w-100">
                <i class="fa-solid fa-people-group p-1"></i> Session
            </div>
        </a>
        <?php
    }
    ?>



        <a href="user.php">
            <div class="nav-link text-start text-dark w-100">
                <i class="fa-sharp fa-solid fa-gears p-1"></i> User Logins
            </div>
        </a>

        <!-- <a href="logout.php">
            <div class="nav-link text-start text-dark w-100">
                <i class="fa-solid fa-right-from-bracket p-1"></i> Log Out
            </div>
        </a> -->
    </div>
</div>