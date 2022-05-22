<?php
	error_reporting(E_ALL & ~E_NOTICE);
	
	$title = "Admin | Free Test Requests";

	include("header.php");

	require_once 'backendController.php';
?>

			<main class="content">
				<div class="container-fluid p-0">

                    <h1 class="h3 mb-3">Manage <strong>Question Bank</strong></h1>

                    <button type="button" class="btn btn-lg shadow btn-danger my-3" data-bs-toggle="modal" data-bs-target="#quizSession">
                        ADD
                    </button>
				</div>

                <div class="modal fade" id="quizSession" tabindex="-1" aria-labelledby="quizSessionLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="container modal-title text-center h5" id="quizSessionLabel">Create Questions</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    
                    
                </div>
                </div>
                </div>


			</main>


<?php include("footer.php")?>