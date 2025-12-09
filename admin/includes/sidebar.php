<nav class="ts-sidebar">
	<ul class="ts-sidebar-menu">

		<li>
			<a href="dashboard.php">
				<i class="fa fa-dashboard" style="color:#fff;"></i> Dashboard
			</a>
		</li>

		<!-- Rooms -->
		<li>
			<a href="#">
				<i class="fa fa-desktop" style="color:#fff;"></i> Rooms
			</a>
			<ul>
				<li><a href="create-room.php">Add a Room</a></li>
				<li><a href="manage-rooms.php">Manage Rooms</a></li>
			</ul>
		</li>

		<!-- Students -->
		<li>
			<a href="">
				<i class="fa fa-user" style="color:#fff;"></i> Student Registration
			</a>
		</li>

		<li>
			<a href="">
				<i class="fa fa-users" style="color:#fff;"></i> Manage Students
			</a>
		</li>

		<!-- Complaints -->
		<li>
			<a href="#">
				<i class="fa fa-files-o" style="color:#fff;"></i> Complaints
			</a>
			<ul>
				<li><a href="">New</a></li>
				<li><a href="">In Process</a></li>
				<li><a href="">Closed</a></li>
				<li><a href="">All</a></li>
			</ul>
		</li>

		<!-- Feedback -->
		<li>
			<a href="#">
				<i class="fa fa-desktop" style="color:#fff;"></i> Feedback
			</a>
			<ul>
				<li><a href="">All Feedbacks</a></li>
			</ul>
		</li>

		<!-- Logs -->
		<li>
			<a href="">
				<i class="fa fa-file" style="color:#fff;"></i> User Access Logs
			</a>
		</li>

	</ul>
</nav>
<nav class="ts-sidebar">
  <ul class="ts-sidebar-menu">

    <li>
      <a href="dashboard.php">
        <i class="fa fa-dashboard" aria-hidden="true" style="color:#fff;"></i>
        Dashboard
      </a>
    </li>

    <li>
      <a href="rooms.php">
        <i class="fa fa-desktop" aria-hidden="true" style="color:#fff;"></i>
        Rooms
      </a>
    </li>

    <li>
      <a href="create-room.php">
        <i class="fa fa-plus" aria-hidden="true" style="color:#fff;"></i>
        Add a Room
      </a>
    </li>

    <li>
      <a href="manage-rooms.php">
        <i class="fa fa-th-list" aria-hidden="true" style="color:#fff;"></i>
        Manage Rooms
      </a>
    </li>

    <li>
      <a href="student-registration.php">
        <i class="fa fa-user" aria-hidden="true" style="color:#fff;"></i>
        Student Registration
      </a>
    </li>

    <li>
      <a href="manage-students.php">
        <i class="fa fa-users" aria-hidden="true" style="color:#fff;"></i>
        Manage Students
      </a>
    </li>

    <li>
      <a href="complaints-new.php">
        <i class="fa fa-files-o" aria-hidden="true" style="color:#fff;"></i>
        Complaints - New
      </a>
    </li>

    <li>
      <a href="complaints-inprocess.php">
        <i class="fa fa-clock-o" aria-hidden="true" style="color:#fff;"></i>
        Complaints - In Process
      </a>
    </li>

    <li>
      <a href="complaints-closed.php">
        <i class="fa fa-check" aria-hidden="true" style="color:#fff;"></i>
        Complaints - Closed
      </a>
    </li>

    <li>
      <a href="complaints-all.php">
        <i class="fa fa-list" aria-hidden="true" style="color:#fff;"></i>
        Complaints - All
      </a>
    </li>

    <li>
      <a href="feedbacks.php">
        <i class="fa fa-comment" aria-hidden="true" style="color:#fff;"></i>
        Feedback (All)
      </a>
    </li>

    <li>
      <a href="access-logs.php">
        <i class="fa fa-file" aria-hidden="true" style="color:#fff;"></i>
        User Access Logs
      </a>
    </li>

  </ul>
</nav>


<style>
	.ts-sidebar {
		width: 250px;
		background: #2c3e50;
		min-height: 100vh;
		padding-top: 10px;
	}

	.ts-sidebar-menu {
		list-style: none;
		margin: 0;
		padding: 0;
	}

	.ts-sidebar-menu li {
		position: relative;
	}

	.ts-sidebar-menu>li>a {
		display: block;
		padding: 12px 15px;
		color: #fff;
		text-decoration: none;
		border-bottom: 1px solid #34495e;
	}

	.ts-sidebar-menu>li>a:hover {
		background: #1abc9c;
	}

	/* Submenu */
	.ts-sidebar-menu li ul {
		max-height: 0;
		overflow: hidden;
		background: #34495e;
		transition: max-height 0.3s ease;
	}

	.ts-sidebar-menu li ul li a {
		padding: 10px 25px;
		display: block;
		color: #ddd;
		text-decoration: none;
	}

	.ts-sidebar-menu li ul li a:hover {
		background: #16a085;
		color: #fff;
	}

	/* Active - when open */
	.ts-sidebar-menu li.active ul {
		max-height: 500px;
	}
</style>