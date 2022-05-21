<?php
	error_reporting(E_ALL & ~E_NOTICE);
	
	$title = "Admin | Queries";

	include("header.php");

	require_once 'backendController.php';

?>

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Manage <strong>Queries</strong></h1>

					<div class="row">
						<div class="card ">
						    <div class="col-12 px-4">
                                
								<div class="card-header">
									<h5 class="card-title">Latest Queries</h5>
								</div>
								<table id="queriesTable" class="table table-hover my-0 text-center">
									<thead>
										<tr>
											<th class="text-center">Ref. No.</th>
											<th class="text-center">Name</th>
											<th class="text-center">Phone No.</th>
											<th class="text-center">Message</th>
											<!-- <th class="text-center">Status</th> -->
											<!-- <th class="text-center">Actions</th> -->
										</tr>
									</thead>
									
									<tbody>
									<?php
										getQueries();
									?>
									</tbody>
								</table>

                                <div class="m-3"></div>

							</div>
						</div>
					</div>

				</div>
			</main>


<?php include("footer.php")?>