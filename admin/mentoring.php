<?php
	error_reporting(E_ALL & ~E_NOTICE);
	
	$title = "Admin Dashboard";

	include("header.php");

?>

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Manage <strong>Mentoring Requests</strong></h1>

                    <div class="row">
                        <div class="card ">
						    <div class="col-10 offset-1 ">
                                
								<div class="card-header">
									<h5 class="card-title mb-0">Latest Requests</h5>
								</div>
								<table class="table table-hover my-0">
									<thead>
										<tr>
											<th>Name</th>
											<th>Phone No.</th>
											<th>Email</th>
											<th>Session Date</th>
											<!-- <th>Actions</th> -->
										</tr>
									</thead>
									<tbody>
										<tr>
											<td> </td>
											<td > </td>
											<td > </td>
											<td> </td>
											<!-- <td >  </td> -->
										</tr>
									</tbody>
								</table>

                                <div class="m-3"></div>

							</div>
						</div>
					</div>

				</div>
			</main>


<?php include("footer.php")?>