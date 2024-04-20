<?php

								if (isset($_POST['search'])) {
									$localhost = 'localhost';

									$root = 'root';

									$password = '';

									$db_con = 'alumini_database';

									$db_connect = mysqli_connect($localhost, $root, $password, $db_con);
									
									$search = $_POST['search_allumni'];
									$fetch_allumni_data = "SELECT * FROM `users` WHERE email = ? OR password = ? OR dept = ? OR place_of_work = ? OR graduation_year = ? OR job_status = ?";
									$stmt = mysqli_prepare($db_connect, $fetch_allumni_data);
									mysqli_stmt_bind_param($stmt, "ssssss", $search, $search, $search, $search, $search, $search);
									mysqli_stmt_execute($stmt);
									$quary_allumni_data = mysqli_stmt_get_result($stmt);

									$data_exist = mysqli_num_rows($quary_allumni_data);

									if (!($data_exist > 0)) {
										echo "Data Not Found";
									} else {

										$fetch_all_data = mysqli_fetch_array($quary_allumni_data);

										$_SESSION['email'] = $fetch_all_data['email'];
										$_SESSION['id'] = $fetch_all_data['id'];
										$_SESSION['dept'] = $fetch_all_data['dept'];
										$_SESSION['place_of_work'] = $fetch_all_data['place_of_work'];
										$_SESSION['graduation_year'] = $fetch_all_data['graduation_year'];

										header('location:../search_result.php');
										exit();

                                        // echo $_SESSION['id'] .  '<br>'. $_SESSION['email'] . $_SESSION['dept'];
									}
								}


								?>