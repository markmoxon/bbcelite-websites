			<footer id="copyrightMessage">
				<p><a title="Copyright information for this website" href="/about_site/acknowledgements.html">Aviator, written by Geoffrey J Crammond, &copy; Acornsoft 1983<br>Commentary &copy; Mark Moxon <span id="copyrightYear">2021</span><br>
				All Rights Reserved</a></p>
			</footer>

			<div id="logo">
				<a href="/">Home page</a>
			</div>

			<nav id="navigation">
				<ul class="mainMenu">
					<li class="menuItemHeader showForMobile">Using this site</li>
					<li id="home" class="showForMobile"><a href="/"><span class="menuTitle">Home page</span> <span class="menuSummary">Start at the very beginning</span></a></li>
					<li id="quick_start_guide"><a id="about_site_quick_start_guide" href="/about_site/quick_start_guide.html"><span class="menuTitle">Quick start guide</span> <span class="menuSummary">All you need to know to start exploring this site</span></a></li>
					<li id="about_site"><span class="menuTitle">All about this project</span>
						<span class="menuSummary menuSummarySubmenu">Project history, building the source and more</span>
						<ul id="submenu_about_site">
							<li class="menuItemHeader">All about this project</li>
							<li><a id="about_site_about_this_project" href="/about_site/about_this_project.html"><span class="menuTitle">About this project</span> <span class="menuSummary">The story of how this project came to be</span></a></li>
							<li><a id="about_site_terminology_used_in_this_commentary" href="/about_site/terminology_used_in_this_commentary.html"><span class="menuTitle">Terminology used in this commentary</span> <span class="menuSummary">Read this before you explore the source code</span></a></li>
							<li><a id="about_site_building_aviator" href="/about_site/building_aviator.html"><span class="menuTitle">Building Aviator from the source</span> <span class="menuSummary">How to build your own working copy of Aviator</span></a></li>
							<li><a id="about_site_useful_links" href="/about_site/useful_links.html"><span class="menuTitle">Useful links</span> <span class="menuSummary">A collection of links to pages I've found useful during this project</span></a></li>
							<li><a id="about_site_acknowledgements" href="/about_site/acknowledgements.html"><span class="menuTitle">Acknowledgements</span> <span class="menuSummary">The giants on whose shoulders this project stands</span></a></li>
							<li><a id="about_site_site_history" href="/about_site/site_history.html"><span class="menuTitle">Site history</span> <span class="menuSummary">A short history of this site's development</span></a></li>
							<li><a id="about_site_site_map" href="/about_site/site_map.html"><span class="menuTitle">Site map</span> <span class="menuSummary">A top-level map of this website</span></a></li>
							<li><a id="about_site_to-do_list" href="/about_site/to-do_list.html"><span class="menuTitle">To-do list</span> <span class="menuSummary">Code that could benefit from a bit more analysis</span></a></li>
						</ul>
					</li>
					<li class="menuItemHeader showForMobile">Understanding the Aviator source code</li>
					<li id="deep_dives"><span class="menuTitle">Deep dive articles</span>
						<span class="menuSummary menuSummarySubmenu">Over 30 articles on how Aviator weaves its magic</span>
						<ul id="submenu_deep_dives">
							<li class="menuItemHeader">Index</li>
							<li><a id="deep_dives_index" href="/deep_dives/"><span class="menuTitle">Index of all deep dive articles</span><span class="menuSummary">Discover how Aviator works under the hood</span></a></li>
							<li class="menuItemHeader">Deep dives</li>
							<li id="deep_dives_3d_geometry"><span class="menuTitle">3D geometry</span> <span class="menuSummary menuSummarySubmenu">Matrices, lines, points, objects and visibility</span>
								<ul id="submenu_deep_dives_3d_geometry">
									<li class="menuItemHeader">3D geometry</li>
									<li><a id="deep_dives_3d_geometry_lines_and_points" href="/deep_dives/lines_and_points.html"><span class="menuTitle">Lines and points</span> <span class="menuSummary">The fundamental elements of Aviator's 3D world</span></a></li>
									<li><a id="deep_dives_3d_geometry_3d_objects" href="/deep_dives/3d_objects.html"><span class="menuTitle">3D objects</span> <span class="menuSummary">How Aviator manages trees, hills, aliens, towns and other 3D objects</span></a></li>
									<li><a id="deep_dives_3d_geometry_placing_objects_on_the_map" href="/deep_dives/placing_objects_on_the_map.html"><span class="menuTitle">Placing objects on the map</span> <span class="menuSummary">Reconstructing the game's map from the data in the game code</span></a></li>
									<li><a id="deep_dives_3d_geometry_rotation_matrices" href="/deep_dives/rotation_matrices.html"><span class="menuTitle">Rotation matrices</span> <span class="menuSummary">The four matrices that lie at the heart of Aviator's 3D model</span></a></li>
									<li><a id="deep_dives_3d_geometry_rotating_and_translating_points_in_3d_space" href="/deep_dives/rotating_and_translating_points_in_3d_space.html"><span class="menuTitle">Rotating and translating points in 3D space</span> <span class="menuSummary">Converting between different frames of reference in 3D</span></a></li>
									<li><a id="deep_dives_3d_geometry_visibility_checks" href="/deep_dives/visibility_checks.html"><span class="menuTitle">Visibility checks</span> <span class="menuSummary">Deciding which lines to draw on-screen, and which to hide</span></a></li>
								</ul>
							</li>
							<li id="deep_dives_flight_model"><span class="menuTitle">Flight model</span> <span class="menuSummary menuSummarySubmenu">Simulating the forces on a flying aircraft</span>
								<ul id="submenu_deep_dives_flight_model">
									<li class="menuItemHeader">Flight model</li>
									<li><a id="deep_dives_flight_model_the_flight_model" href="/deep_dives/the_flight_model.html"><span class="menuTitle">The flight model</span> <span class="menuSummary">The maths behind the Spitfire's aerodynamic flight simulation</span></a></li>
									<li><a id="deep_dives_flight_model_matching_the_code_to_the_flight_model" href="/deep_dives/matching_the_code_to_the_flight_model.html"><span class="menuTitle">Matching the code to the flight model</span> <span class="menuSummary">Tracking down the flight model features that are mentioned in the manual</span></a></li>
									<li><a id="deep_dives_flight_model_stalling_and_recovery" href="/deep_dives/stalling_and_recovery.html"><span class="menuTitle">Stalling and recovery</span> <span class="menuSummary">How Aviator simulates a stalling plane and the recovery process</span></a></li>
									<li><a id="deep_dives_flight_model_ripping_the_wings_off" href="/deep_dives/ripping_the_wings_off.html"><span class="menuTitle">Ripping the wings off</span> <span class="menuSummary">Modelling the high g-forces that can rip the wings clean off</span></a></li>
									<li><a id="deep_dives_flight_model_take-offs_and_landings" href="/deep_dives/take-offs_and_landings.html"><span class="menuTitle">Take-offs and landings</span> <span class="menuSummary">The two most important (and dangerous) parts of every flight</span></a></li>
									<li><a id="deep_dives_flight_model_on-ground_calculations" href="/deep_dives/on-ground_calculations.html"><span class="menuTitle">On-ground calculations</span> <span class="menuSummary">The calculations behind the plane's behaviour on the ground</span></a></li>
									<li><a id="deep_dives_flight_model_flying_skills" href="/deep_dives/flying_skills.html"><span class="menuTitle">Flying skills</span> <span class="menuSummary">Flying under bridges and over main street</span></a></li>
								</ul>
							</li>
							<li id="deep_dives_dashboard"><span class="menuTitle">Dashboard</span> <span class="menuSummary menuSummarySubmenu">The Spitfire's many dials and indicators</span>
								<ul id="submenu_deep_dives_dashboard">
									<li class="menuItemHeader">Dashboard</li>
									<li><a id="deep_dives_dashboard_clock_hands_and_dial_indicators" href="/deep_dives/clock_hands_and_dial_indicators.html"><span class="menuTitle">Clock hands and dial indicators</span> <span class="menuSummary">Drawing the clock-like indicators on the dashboard</span></a></li>
									<li><a id="deep_dives_dashboard_hard-coded_division_in_the_dashboard_routines" href="/deep_dives/hard-coded_division_in_the_dashboard_routines.html"><span class="menuTitle">Hard-coded division in the dashboard routines</span> <span class="menuSummary">Using hand-tailored division code for fast calculations</span></a></li>
								</ul>
							</li>
							<li id="deep_dives_the_theme"><span class="menuTitle">The Theme</span> <span class="menuSummary menuSummarySubmenu">Aliens, bullets and everything inbetween</span>
								<ul id="submenu_deep_dives_the_theme">
									<li class="menuItemHeader">The Theme</li>
									<li><a id="deep_dives_the_theme_alien_feeding_and_growth_patterns" href="/deep_dives/alien_feeding_and_growth_patterns.html"><span class="menuTitle">Alien feeding and growth patterns</span> <span class="menuSummary">The many stages of the alien life cycle</span></a></li>
									<li><a id="deep_dives_the_theme_aliens_attack_acornsville" href="/deep_dives/aliens_attack_acornsville.html"><span class="menuTitle">Aliens attack Acornsville!</span> <span class="menuSummary">Planning an alien attack on civilisation</span></a></li>
									<li><a id="deep_dives_the_theme_adding_bullets_to_the_world" href="/deep_dives/adding_bullets_to_the_world.html"><span class="menuTitle">Adding bullets to the world</span> <span class="menuSummary">Spawning bullets that leave tracer trails in the sky</span></a></li>
									<li><a id="deep_dives_the_theme_detecting_alien_hits" href="/deep_dives/detecting_alien_hits.html"><span class="menuTitle">Detecting alien hits</span> <span class="menuSummary">The geometry behind aliens and their weak spots</span></a></li>
									<li><a id="deep_dives_the_theme_explosions_and_turbulence" href="/deep_dives/explosions_and_turbulence.html"><span class="menuTitle">Explosions and turbulence</span> <span class="menuSummary">Destroying aliens at close range can have serious consequences</span></a></li>
								</ul>
							</li>
							<li id="deep_dives_graphics"><span class="menuTitle">Graphics</span> <span class="menuSummary menuSummarySubmenu">Smooth animation and the drawing routines</span>
								<ul id="submenu_deep_dives_graphics">
									<li class="menuItemHeader">Graphics</li>
									<li><a id="deep_dives_graphics_flicker-free_animation_through_colour_cycling" href="/deep_dives/flicker-free_animation_through_colour_cycling.html"><span class="menuTitle">Flicker-free animation through colour cycling</span> <span class="menuSummary">Using four colours to create super-smooth animated graphics</span></a></li>
									<li><a id="deep_dives_graphics_converting_pixel_coordinates_to_screen_addresses" href="/deep_dives/converting_pixel_coordinates_to_screen_addresses.html"><span class="menuTitle">Converting pixel coordinates to screen addresses</span> <span class="menuSummary">Going from (x, y) coordinates to screen memory addresses</span></a></li>
									<li><a id="deep_dives_graphics_line_buffers" href="/deep_dives/line_buffers.html"><span class="menuTitle">Line buffers</span> <span class="menuSummary">Caching line information for faster erasing</span></a></li>
								</ul>
							</li>
							<li id="deep_dives_main_loop"><span class="menuTitle">Main loop</span> <span class="menuSummary menuSummarySubmenu">The main game loop and task scheduler</span>
								<ul id="submenu_deep_dives_main_loop">
									<li class="menuItemHeader">Main loop</li>
									<li><a id="deep_dives_main_loop_program_flow_of_the_main_game_loop" href="/deep_dives/program_flow_of_the_main_game_loop.html"><span class="menuTitle">Program flow of the main game loop</span> <span class="menuSummary">The sequence of events in the main game loop</span></a></li>
									<li><a id="deep_dives_main_loop_scheduling_tasks_in_the_main_loop" href="/deep_dives/scheduling_tasks_in_the_main_loop.html"><span class="menuTitle">Scheduling tasks in the main loop</span> <span class="menuSummary">How Aviator does the right thing at the right time</span></a></li>
								</ul>
							</li>
							<li id="deep_dives_maths"><span class="menuTitle">Maths</span> <span class="menuSummary menuSummarySubmenu">Multiplication, trigonometry and random numbers</span>
								<ul id="submenu_deep_dives_maths">
									<li class="menuItemHeader">Maths</li>
									<li><a id="deep_dives_maths_times_tables_and_nibble_arithmetic" href="/deep_dives/times_tables_and_nibble_arithmetic.html"><span class="menuTitle">Times tables and nibble arithmetic</span> <span class="menuSummary">Inside Aviator's multiplication algorithms</span></a></li>
									<li><a id="deep_dives_maths_trigonometry" href="/deep_dives/trigonometry.html"><span class="menuTitle">Trigonometry</span> <span class="menuSummary">Calculating sine and cosine in the rotation matrices</span></a></li>
									<li><a id="deep_dives_maths_random_numbers" href="/deep_dives/random_numbers.html"><span class="menuTitle">Random numbers</span> <span class="menuSummary">How Aviator generates random numbers</span></a></li>
								</ul>
							</li>
							<li id="deep_dives_other"><span class="menuTitle">Other</span> <span class="menuSummary menuSummarySubmenu">Key loggers and code secrets</span>
								<ul id="submenu_deep_dives_other">
									<li class="menuItemHeader">Other</li>
									<li><a id="deep_dives_other_the_key_logger" href="/deep_dives/the_key_logger.html"><span class="menuTitle">The key logger</span> <span class="menuSummary">Making sure that every key press makes gets recorded</span></a></li>
									<li><a id="deep_dives_other_multi-byte_variables" href="/deep_dives/multi-byte_variables.html"><span class="menuTitle">Multi-byte variables</span> <span class="menuSummary">How Aviator stores multi-byte variables</span></a></li>
									<li><a id="deep_dives_other_source_code_clues_hidden_in_the_game_binary" href="/deep_dives/source_code_clues_hidden_in_the_game_binary.html"><span class="menuTitle">Source code clues hidden in the game binary</span> <span class="menuSummary">Snippets of original source code and what they can tell us</span></a></li>
								</ul>
							</li>
						</ul>
					</li>

					<li class="menuItemHeader showForMobile">Exploring the Aviator source code</li>
					<li id="source_sources"><span class="menuTitle">Aviator source code</span>
						<span class="menuSummary menuSummarySubmenu">Annotated source of BBC Micro Aviator</span>
						<ul id="submenu_source_sources">
							<li class="menuItemHeader">Version information</li>
							<li><a id="source_sources_index" href="/source/"><span class="menuTitle">About the version of Aviator on this site</span><span class="menuSummary">Details of the different versions of Aviator</span></a></li>
		                    <?php include('navigation_aviator.php'); ?>
						</ul>
					</li>

					<li id="random"><a href="/cgi-bin/random.cgi" rel="nofollow"><span class="menuTitle">Show me a Random Routine</span> <span class="menuSummary">Or click &#x221E; above to jump into the source code...</span></a></li>

					<li class="menuItemHeader showForMobile">Indexes and code analyses</li>

					<li id="indexes"><span class="menuTitle">Indexes to the source code</span>
						<span class="menuSummary menuSummarySubmenu">A-Z indexes, code usage analysis and more</span>
						<ul id="submenu_source_indexes">
							<li class="menuItemHeader">A-Z indexes</li>
							<li><a id="source_indexes_a-z" href="/source/indexes/a-z.html"><span class="menuTitle">A-Z index of the source code</span> <span class="menuSummary">An index of every subroutine, entry point, variable and workspace in the source code</span></a></li>
							<li><a id="source_indexes_source_code_cross-references" href="/source/articles/source_code_cross-references.html"><span class="menuTitle">Source code cross-references</span> <span class="menuSummary">Every label and variable in the source code and where they are used</span></a></li>
							<li class="menuItemHeader">Indexes by category</li>
							<li><a id="source_indexes_subroutines" href="/source/indexes/subroutines.html"><span class="menuTitle">List of all subroutines by category</span> <span class="menuSummary">Subroutines in Aviator</span></a></li>
							<li><a id="source_indexes_variables" href="/source/indexes/variables.html"><span class="menuTitle">List of all variables by category</span> <span class="menuSummary">Variables in Aviator</span></a></li>
							<li><a id="source_indexes_workspaces" href="/source/indexes/workspaces.html"><span class="menuTitle">List of all workspaces by category</span> <span class="menuSummary">Workspaces in Aviator</span></a></li>
						</ul>
					</li>

					<li id="source_statistics"><a id="source_indexes_source_statistics" href="/source/articles/source_code_statistics.html"><span class="menuTitle">Code statistics for Aviator</span> <span class="menuSummary">Instruction counts and other source code stats</span></a></li>

					<li class="menuItemHeader showForMobile">My software archaeology sites</li>
					<li class="showForMobile otherSites"><a href="https://www.bbcelite.com"><span class="menuTitle">Mark Moxon's Software Archaeology</span></a></li>
					<li class="showForMobile otherSites"><a href="https://elite.bbcelite.com"><span class="menuTitle">Elite on the 6502</span></a></li>
					<li class="showForMobile otherSites"><a href="https://aviator.bbcelite.com"><span class="menuTitle">Aviator on the BBC Micro</span></a></li>
					<li class="showForMobile otherSites"><a href="https://revs.bbcelite.com"><span class="menuTitle">Revs on the BBC Micro</span></a></li>
					<li class="showForMobile otherSites"><a href="https://lander.bbcelite.com"><span class="menuTitle">Lander on the Acorn Archimedes</span></a></li>
					<li class="menuItemHeader showForMobile">My writing sites</li>
					<li class="showForMobile otherSites"><a href="https://www.moxon.net"><span class="menuTitle">Mark Moxon's Travel Writing</span></a></li>
					<li class="showForMobile otherSites"><a href="https://www.landsendjohnogroats.info"><span class="menuTitle">Walking Land's End to John o'Groats</span></a></li>
					<li class="showForMobile otherSites"><a href="https://www.tubewalker.com"><span class="menuTitle">Tubewalker: The Tube, on Foot</span></a></li>
					<li class="menuItemHeader showForMobile">Contact details and more</li>
					<li class="showForMobile otherSites"><a href="https://www.markmoxon.com"><span class="menuTitle">Mark Moxon's Homepage</span></a></li>
				</ul>
			</nav>
