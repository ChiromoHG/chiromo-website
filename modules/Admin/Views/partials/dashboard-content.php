
<section class="dashboard">
    <!-- dashboard navbar -->
    <?= $this->include('Modules\Admin\Views\includes\navbar.php'); ?>
    <!--end of navbar-->
    <!-- dashboar content-->
    <div class="dash-content">
        <div class="overview">
            <div class="title-wrapper">
                <div class="title">
                    <i class="uil uil-tachometer-fast"></i>
                    <span class="text">Dashboard</span>
                </div>
                <div class="bg-blue-100 py-1 px-3 rounded-lg">
                    <span class="text" id="date"></span>
                </div>
            </div>

            <div class="boxes">

                <div class="box box1">
                    <i class="uil uil-users-alt"></i>
                    <span class="text">Total Patients</span>
                    <span class="number">50, 120</span>
                </div>

                <div class="box box2">
                    <i class="uil uil-comment-info"></i>
                    <span class="text">Total Online Appointments</span>
                    <span class="number">50, 120</span>
                </div>


                <div class="box box3">
                    <i class="uil uil-pound-circle"></i>
                    <span class="text">Total Transactions</span>
                    <span class="number">50, 120</span>
                </div>

            </div>

        </div>

        <div class="activity">
            <div class="title">
                <i class="uil uil-clock-seven"></i>
                <span class="text">Recent Activities</span>
            </div>

            <!-- dataTabes -->


        </div>
        <div>
            <!-- end of the dashboard content -->
</section>