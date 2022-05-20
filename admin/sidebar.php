        <nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="../admin">
				<span class="align-middle">ThinkPlus</span>
				</a>

				<ul class="sidebar-nav">

					<!-- <li class="sidebar-item <?php echo (end(explode('/',$_SERVER['PHP_SELF'])) == 'index.php'? "active" : ""); ?>">
						<a class="sidebar-link" href="index">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
            </a>
					</li> -->

					<li class="sidebar-item <?php echo (end(explode('/',$_SERVER['PHP_SELF'])) == 'mentoring.php'? "active" : ""); ?>">
						<a class="sidebar-link" href="mentoring">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">Mentoring Requests</span>
            </a>
					</li>

					<li class="sidebar-item <?php echo (end(explode('/',$_SERVER['PHP_SELF'])) == 'freeTest.php'? "active" : ""); ?>">
						<a class="sidebar-link" href="freeTest">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">Free Test Requests</span>
            </a>
					</li>

					<li class="sidebar-item <?php echo (end(explode('/',$_SERVER['PHP_SELF'])) == 'queries.php'? "active" : ""); ?>">
						<a class="sidebar-link" href="queries">
              <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Queries</span>
            </a>
					</li>

			</div>
		</nav>