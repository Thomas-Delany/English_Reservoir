<?php
// index.php in the root directory
include 'config.php'; // Include config.php for BASE_URL
?>
<!-- nav.php -->
<!-- Header START -->
<header class="navbar-light navbar-sticky header-static">
		<!-- Logo Nav START -->
		<nav class="navbar navbar-expand-xl">
			<div class="container-fluid px-3 px-xl-5">
				<!-- Logo START -->
				<a class="navbar-brand me-0" href="<?php echo BASE_URL; ?>../../index.php"> 
					<img class="light-mode-item navbar-brand-item" src="<?php echo BASE_URL; ?>../../assets/images/logo_ER.png" alt="logo">
					<img class="dark-mode-item navbar-brand-item" src="<?php echo BASE_URL; ?>../../assets/images/logo_ER.png" alt="logo">
				</a>
				<!-- Logo END -->

				<!-- Responsive navbar toggler -->
				<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-animation">
						<span></span>
						<span></span>
						<span></span>
					</span>
				</button>

				<!-- Main navbar START -->
				<div class="navbar-collapse collapse" id="navbarCollapse">

					<!-- Nav Search END -->
					<ul class="navbar-nav navbar-nav-scroll ms-auto">

						<!-- Nav item 1 Reservoir -->
						<li class="nav-item dropdown dropdown-fullwidth">
							<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
								aria-expanded="false">Reservoir!</a>
							<div class="dropdown-menu dropdown-menu-end" data-bs-popper="none">
								<div class="row p-4">

									<!-- column item -->
									<div class="col-xl-4 col-xxl-4 mb-3">
										<!-- item -->
										<div class="d-flex mb-4 position-relative">
											<h2 class="mb-0"><i class="bi bi-gear"></i></h2>
											<div class="ms-2">
												<a class="stretched-link h6 mb-0"
													href="https://www.englishreservoir.com/essential-english-grammar/">Essential
													Grammar</a>
												<p class="mb-0 small">Nouns, Adjectives, Prepositions, Adverbs,
													Conjunctions and Interjections.</p>
											</div>
										</div>

										<!-- sub item -->
										<div class="d-flex mb-4 position-relative">
											<h2 class="mb-0"><i class="bi bi-rocket"></i></h2>
											<div class="ms-2">
												<a class="stretched-link h6 mb-0"
													href="https://www.englishreservoir.com/advanced-english-grammar/">Advanced
													Grammar</a>
												<p class="mb-0 small">Articles, Prefixes and Suffixes, Pronouns,
													Emphasis in English, Question tags, Conditionals and more stuff!
												</p>
											</div>
										</div>
										<!-- sub item -->
										<div class="d-flex mb-4 position-relative">
											<h2 class="mb-0"><i class="bi bi-chat-dots"></i></h2>
											<div class="ms-2">
												<a class="stretched-link h6 mb-0"
													href="https://www.englishreservoir.com/verbs-in-english/">English
													Verbs</a>
												<p class="mb-0 small">Main and Modal Auxiliaries, Active and Passive
													forms, Phrasal Verbs, Copulas, Ordinary verbs, "Get" and more!
												</p>
											</div>
										</div>
									</div>



									<!-- column item -->
									<div class="col-xl-4 col-xxl-4 mb-3">
										<!-- sub item -->
										<div class="d-flex mb-4 position-relative">
											<h2 class="mb-0"><i class="bi bi-mortarboard"></i></h2>
											<div class="ms-2">
												<a class="stretched-link h6 mb-0"
													href="https://www.englishreservoir.com/cambridge-courses/">Cambridge
													Courses</a>
												<p class="mb-0 small">B2 Cambridge First, C1 Cambridge Advanced and C2
													Cambridge Proficiency.</p>
											</div>
										</div>

										<!-- sub item -->
										<div class="d-flex mb-4 position-relative">
											<h2 class="mb-0"><i class="bi bi-question-square"></i></h2>
											<div class="ms-2">
												<a class="stretched-link h6 mb-0"
													href="https://www.englishreservoir.com/english-confusions/">Frequent
													Mistakes</a>
												<p class="mb-0 small">Do vs. make, to vs. for, on vs. upon, every
													frequent doubt, you name it, we have you covered.</p>
											</div>
										</div>
										<!-- sub item -->
										<div class="d-flex mb-4 position-relative">
											<h2 class="mb-0"><i class="bi bi-brush"></i></h2>
											<div class="ms-2">
												<a class="stretched-link h6 mb-0"
													href="https://www.englishreservoir.com/punctuation/">Punctuation</a>
												<p class="mb-0 small">Apostrophes, Colons, Semicolons, Commas, Hyphens,
													Fullstops, Question and Exclamation marks, and Quotation Marks.</p>
											</div>
										</div>
									</div>

									<!-- column item -->
									<div class="col-xl-4 col-xxl-4 mb-3">
										<!-- sub item -->
										<div class="d-flex mb-4 position-relative">
											<h2 class="mb-0"><i class="bi bi-volume-up"></i></h2>
											<div class="ms-2">
												<a class="stretched-link h6 mb-0"
													href="https://www.englishreservoir.com/pronunciation/">Pronunciation</a>
												<p class="mb-0 small">IPA, Vowels, Consonants, Dipthongs, Triphthongs,
													Nasal Sounds, Common Mistakes, and more.</p>
											</div>
										</div>

										<!-- sub item -->
										<div class="d-flex mb-4 position-relative">
											<h2 class="mb-0"><i class="bi bi-book"></i></h2>
											<div class="ms-2">
												<a class="stretched-link h6 mb-0"
													href="https://www.englishreservoir.com/blog/">Blog</a>
												<p class="mb-0 small">Lots of Interesting reads in both English and
													Spanish.</p>
											</div>
										</div>
										<!-- sub item -->
										<div class="d-flex mb-4 position-relative">
											<h2 class="mb-0"><i class="bi bi-youtube"></i></h2>
											<div class="ms-2">
												<a class="stretched-link h6 mb-0"
													href="https://www.youtube.com/@EnglishReservoir">Learn for Free!</a>
												<p class="mb-0 small">100's of free learning tutorials on YouTube!</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>

						<!-- Nav item 2 Academy -->
						<li class="nav-item dropdown dropdown-fullwidth">
							<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
								aria-expanded="false">Academy</a>
							<div class="dropdown-menu dropdown-menu-end" data-bs-popper="none">
								<div class="row p-4">

									<!-- column item -->
									<div class="col-md-4 col-lg-4">
										<!-- item -->
										<div class="d-flex mb-4 position-relative">
											<div class="ms-2">
												<!-- Image -->
												<a href="https://cursos.englishreservoir.com/p/b2-cambridge-first">
													<img class="rounded-2" src="<?php echo BASE_URL; ?>../../assets/images/courses/b2_first.png"
														alt="b2 cambridge first">
												</a>
											</div>
										</div>

										<!-- item -->
										<div class="d-flex mb-4 position-relative">
											<div class="ms-2">
												<!-- Image -->
												<a
													href="https://cursos.englishreservoir.com/p/verbos-en-ingles-metodo-divertido">
													<img class="rounded-2"
														src="<?php echo BASE_URL; ?>../../assets/images/courses/verbos-en-ingles.png"
														alt="verbos en ingles">
												</a>
											</div>
										</div>
									</div>



									<!-- column item -->
									<div class="col-md-4 col-lg-4">
										<!-- item -->
										<div class="d-flex mb-4 position-relative">
											<div class="ms-2">
												<!-- Image -->
												<a href="https://cursos.englishreservoir.com/p/c1-cambridge-advanced">
													<img class="rounded-2" src="<?php echo BASE_URL; ?>../../assets/images/courses/c1_advanced.png"
														alt="c1 cambridge advanced">
												</a>
											</div>
										</div>

										<!-- item -->
										<div class="d-flex mb-4 position-relative">
											<div class="ms-2">
												<!-- Image -->
												<a
													href="https://cursos.englishreservoir.com/p/gramatica-esencial-metodo-divertido">
													<img class="rounded-2"
														src="<?php echo BASE_URL; ?>../../assets/images/courses/Gramatica-esencial.png"
														alt="gramatica esencial">
												</a>
											</div>
										</div>
									</div>

									<!-- column item -->
									<div class="col-md-4 col-lg-4">
										<!-- item -->
										<div class="d-flex mb-4 position-relative">
											<div class="ms-2">
												<!-- Image -->
												<a
													href="https://cursos.englishreservoir.com/p/c2-cambridge-proficiency">
													<img class="rounded-2" src="<?php echo BASE_URL; ?>../../assets/images/courses/c2_pro.png"
														alt="c2 cambridge proficiency">
												</a>
											</div>
										</div>

										<!-- item -->
										<div class="d-flex mb-4 position-relative">
											<div class="ms-2">
												<!-- Image -->
												<a href="https://cursos.englishreservoir.com/p/pronunciacion-en-ingles">
													<img class="rounded-2"
														src="<?php echo BASE_URL; ?>../../assets/images/courses/pronunciacion-en-ingles.png"
														alt="pronunciacion en ingles">
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>

						<!-- Nav item 3 More-->
						<li class="nav-item dropdown dropdown-fullwidth">
							<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
								aria-expanded="false">More</a>
							<div class="dropdown-menu dropdown-menu-end" data-bs-popper="none">
								<div class="row p-4">

									<!-- column item -->
									<div class="col-xl-6 col-xxl-6 mb-3">
										<!-- item -->
										<div class="d-flex mb-4 position-relative">
											<h2 class="mb-0"><i class="bi bi-question-circle"></i></h2>
											<div class="ms-2">
												<a class="stretched-link h6 mb-0"
													href="https://www.englishreservoir.com/about-us/">About us</a>
												<p class="mb-0 small">Who we are, How the courses work and how much time
													you should dedicate.</p>
											</div>
										</div>

										<!-- item -->
										<div class="d-flex mb-4 position-relative">
											<h2 class="mb-0"><i class="bi bi-easel2"></i></h2>
											<div class="ms-2">
												<a class="stretched-link h6 mb-0"
													href="https://www.englishreservoir.com/english-reservoir-method/">English
													Reservoir Method</a>
												<p class="mb-0 small">Get to know all about our teaching method.
												</p>
											</div>
										</div>
									</div>



									<!-- column item -->
									<div class="col-xl-6 col-xxl-6 mb-3">
										<!-- item -->
										<div class="d-flex mb-4 position-relative">
											<h2 class="mb-0"><i class="bi bi-currency-exchange"></i></h2>
											<div class="ms-2">
												<a class="stretched-link h6 mb-0"
													href="https://www.englishreservoir.com/affiliate-program-english-reservoir/">Affiliate
													Programme</a>
												<p class="mb-0 small">Are you a content creator or teacher? Would you
													like to become an English Reservoir affiliate and work with us?</p>
											</div>
										</div>

										<!-- item -->
										<div class="d-flex mb-4 position-relative">
											<h2 class="mb-0"><i class="bi bi-wechat"></i></h2>
											<div class="ms-2">
												<a class="stretched-link h6 mb-0" href="#">Our Social Media</a>
												<p class="mb-0 small">Learn even more about us.</p>
												<div>
													<ul class="list-inline mb-0 mt-3">
														<li class="list-inline-item"> <a
																class="btn btn-white btn-sm shadow px-2 text-facebook"
																href="https://www.facebook.com/Englishreservoir/"><i
																	class="fab fa-fw fa-facebook-f"></i></a>
														</li>
														<li class="list-inline-item"> <a
																class="btn btn-white btn-sm shadow px-2 text-instagram"
																href="https://www.instagram.com/english_reservoir/?hl=en"><i
																	class="fab fa-fw fa-instagram"></i></a>
														</li>
														<li class="list-inline-item"> <a
																class="btn btn-white btn-sm shadow px-2 text-twitter"
																href="https://twitter.com/EN_Reservoir"><i
																	class="fab fa-fw fa-twitter"></i></a> </li>
														<li class="list-inline-item"> <a
																class="btn btn-white btn-sm shadow px-2 text-linkedin"
																href="https://www.youtube.com/@EnglishReservoir/featured"><i
																	class="fab fa-fw fa-youtube"></i></a>
														</li>
													</ul>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
						</li>

					</ul>
				</div>
				<!-- Main navbar END -->

				<!-- Dark mode options START -->
				<div class="">
					<button class="btn btn-light btn-sm lh-1 p-2 mb-0 theme-toggle-button" id="bd-theme" type="button">
						<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-circle-half fa-fw theme-icon-active" viewBox="0 0 16 16">
							<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
							<use href="#"></use>
						</svg>
					</button>


					<ul class="dropdown-menu min-w-auto dropdown-menu-end" aria-labelledby="bd-theme">
						<li class="mb-1">
							<button type="button" class="dropdown-item d-flex align-items-center"
								data-bs-theme-value="light">
								<svg width="16" height="16" fill="currentColor"
									class="bi bi-brightness-high-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
									<path
										d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
									<use href="#"></use>
								</svg>Light
							</button>
						</li>
						<li class="mb-1">
							<button type="button" class="dropdown-item d-flex align-items-center"
								data-bs-theme-value="dark">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
									class="bi bi-moon-stars-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
									<path
										d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
									<path
										d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
									<use href="#"></use>
								</svg>Dark
							</button>
						</li>
						<li>
							<button type="button" class="dropdown-item d-flex align-items-center active"
								data-bs-theme-value="auto">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
									class="bi bi-circle-half fa-fw mode-switch me-1" viewBox="0 0 16 16">
									<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
									<use href="#"></use>
								</svg>Auto
							</button>
						</li>
					</ul>
				</div>
				<!-- Dark mode options END -->

				<!-- Log in button -->
				<div class="navbar-nav ms-3 d-none d-sm-block">
					<button class="btn btn-sm btn-primary mb-0">
						<a href="https://sso.teachable.com/secure/528091/identity/login" class="text-white">Log in</a>
					</button>
				</div>
			</div>
		</nav>
		<!-- Logo Nav END -->
	</header>
	<!-- Header END -->