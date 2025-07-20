			<footer id="copyrightMessage">
				<p><a href="/about_site/acknowledgements.html">Revs, written by Geoffrey J Crammond, &copy; Acornsoft 1985<br>N&uuml;rburgring track, written by Geoffrey J Crammond, &copy; Firebird 1987<br>Commentary &copy; Mark Moxon <span id="copyrightYear">2022</span><br>
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
							<li><a id="about_site_building_revs" href="/about_site/building_revs.html"><span class="menuTitle">Building Revs from the source</span> <span class="menuSummary">How to build your own working copy of Revs</span></a></li>
							<li><a id="about_site_useful_links" href="/about_site/useful_links.html"><span class="menuTitle">Useful links</span> <span class="menuSummary">A collection of links to pages I've found useful during this project</span></a></li>
							<li><a id="about_site_acknowledgements" href="/about_site/acknowledgements.html"><span class="menuTitle">Acknowledgements</span> <span class="menuSummary">The giants on whose shoulders this project stands</span></a></li>
							<li><a id="about_site_site_history" href="/about_site/site_history.html"><span class="menuTitle">Site history</span> <span class="menuSummary">A short history of this site's development</span></a></li>
							<li><a id="about_site_site_map" href="/about_site/site_map.html"><span class="menuTitle">Site map</span> <span class="menuSummary">A top-level map of this website</span></a></li>
							<li><a id="about_site_to-do_list" href="/about_site/to-do_list.html"><span class="menuTitle">To-do list</span> <span class="menuSummary">Code that could benefit from a bit more analysis</span></a></li>
						</ul>
					</li>
					<li class="menuItemHeader showForMobile">Playing with the Revs source code</li>
					<li id="playing_revs"><a id="playing_revs_index" href="/playing_revs/"><span class="menuTitle">Playing Revs in the 21st century</span> <span class="menuSummary">How to play all the versions of Revs analysed here</span></a></li>
					<li id="deep_dives"><span class="menuTitle">Deep dive articles</span>
						<span class="menuSummary menuSummarySubmenu">Over 45 articles on how Revs weaves its magic</span>
						<ul id="submenu_deep_dives">
							<li class="menuItemHeader">Index</li>
							<li><a id="deep_dives_index" href="/deep_dives/"><span class="menuTitle">Index of all deep dive articles</span><span class="menuSummary">Discover how Revs works under the hood</span></a></li>
							<li class="menuItemHeader">Deep dives</li>
							<li id="deep_dives_memory_maps"><span class="menuTitle">Memory maps</span> <span class="menuSummary menuSummarySubmenu">Memory maps and unpacking binary files</span>
								<ul id="submenu_deep_dives_memory_maps">
									<li class="menuItemHeader">Memory maps</li>
									<li><a id="deep_dives_memory_maps_the_revs_memory_map" href="/deep_dives/the_revs_memory_map.html"><span class="menuTitle">The Revs memory map</span> <span class="menuSummary">Memory usage is really tight in BBC Micro Revs</span></a></li>
									<li><a id="deep_dives_memory_maps_the_jigsaw_puzzle_binary" href="/deep_dives/the_jigsaw_puzzle_binary.html"><span class="menuTitle">The jigsaw puzzle binary</span> <span class="menuSummary">Exploring the mind-bending way that Revs is packed into memory</span></a></li>
									<li><a id="deep_dives_memory_maps_major_variable_blocks" href="/deep_dives/major_variable_blocks.html"><span class="menuTitle">Major variable blocks</span> <span class="menuSummary">A summary of the major variable blocks in Revs, of which there are quite a few</span></a></li>
								</ul>
							</li>
							<li id="deep_dives_main_loop"><span class="menuTitle">Main loop</span> <span class="menuSummary menuSummarySubmenu">The main game loop and task scheduler</span>
								<ul id="submenu_deep_dives_main_loop">
									<li class="menuItemHeader">Main loop</li>
									<li><a id="deep_dives_main_loop_program_flow_of_the_main_game_loop" href="/deep_dives/program_flow_of_the_main_game_loop.html"><span class="menuTitle">Program flow of the main game loop</span> <span class="menuSummary">The sequence of events in the main game loop</span></a></li>
									<li><a id="deep_dives_main_loop_scheduling_tasks_in_the_main_loop" href="/deep_dives/scheduling_tasks_in_the_main_loop.html"><span class="menuTitle">Scheduling tasks in the main loop</span> <span class="menuSummary">How Revs does the right thing at the right time</span></a></li>
								</ul>
							</li>
							<li id="deep_dives_graphics"><span class="menuTitle">Graphics</span> <span class="menuSummary menuSummarySubmenu">Custom screen modes and sky-blue hidden codes</span>
								<ul id="submenu_deep_dives_graphics">
									<li class="menuItemHeader">Graphics</li>
									<li><a id="deep_dives_graphics_hidden_secrets_of_the_custom_screen_mode" href="/deep_dives/hidden_secrets_of_the_custom_screen_mode.html"><span class="menuTitle">Hidden secrets of the custom screen mode</span> <span class="menuSummary">Revs has a custom screen mode that conceals working code in a lush blue sky</span></a></li>
									<li><a id="deep_dives_graphics_drawing_the_track_view" href="/deep_dives/drawing_the_track_view.html"><span class="menuTitle">Drawing the track view</span> <span class="menuSummary">How Revs uses its screen buffer to produce smooth and speedy graphics</span></a></li>
									<li><a id="deep_dives_graphics_drawing_around_the_dashboard" href="/deep_dives/drawing_around_the_dashboard.html"><span class="menuTitle">Drawing around the dashboard</span> <span class="menuSummary">Revs is literally sculpted in the shape of a Forumla 3 racing car; here's why</span></a></li>
								</ul>
							</li>
							<li id="deep_dives_3d_geometry"><span class="menuTitle">3D geometry</span> <span class="menuSummary menuSummarySubmenu">Pitch angles, yaw angles and car placement</span>
								<ul id="submenu_deep_dives_3d_geometry">
									<li class="menuItemHeader">3D geometry</li>
									<li><a id="deep_dives_3d_geometry_pitch_and_yaw_angles" href="/deep_dives/pitch_and_yaw_angles.html"><span class="menuTitle">Pitch and yaw angles</span> <span class="menuSummary">Pitch and yaw angles are fundamental to the way Revs stores object positions</span></a></li>
									<li><a id="deep_dives_3d_geometry_placing_cars_on_the_track" href="/deep_dives/placing_cars_on_the_track.html"><span class="menuTitle">Placing cars on the track</span> <span class="menuSummary">Pinpointing the positions of cars on the track by progress and racing line</span></a></li>
									<li><a id="deep_dives_3d_geometry_trigonometry" href="/deep_dives/trigonometry.html"><span class="menuTitle">Trigonometry</span> <span class="menuSummary">A look at the various ways in which Revs implements trigonometry</span></a></li>
								</ul>
							</li>
							<li id="deep_dives_objects"><span class="menuTitle">3D objects</span> <span class="menuSummary menuSummarySubmenu">Drawing and scaling vector-based 3D objects</span>
								<ul id="submenu_deep_dives_objects">
									<li class="menuItemHeader">3D objects</li>
									<li><a id="deep_dives_objects_object_definitions" href="/deep_dives/object_definitions.html"><span class="menuTitle">Object definitions</span> <span class="menuSummary">Details of the 13 objects that make up the signs, flags, markers and cars</span></a></li>
									<li><a id="deep_dives_objects_drawing_a_3d_car_from_2d_parts" href="/deep_dives/drawing_a_3d_car_from_2d_parts.html"><span class="menuTitle">Drawing a 3D car from 2D parts</span> <span class="menuSummary">Using a paper-cut shadow-box effect to conjure 3D cars from 2D objects</span></a></li>
									<li><a id="deep_dives_objects_scaling_objects_with_scaffolds" href="/deep_dives/scaling_objects_with_scaffolds.html"><span class="menuTitle">Scaling objects with scaffolds</span> <span class="menuSummary">Scaling the vector-based objects in Revs using scaffolds</span></a></li>
									<li><a id="deep_dives_objects_creating_objects_from_edges" href="/deep_dives/creating_objects_from_edges.html"><span class="menuTitle">Creating objects from edges</span> <span class="menuSummary">How Revs draws on-screen objects using nothing but vertical edges</span></a></li>
								</ul>
							</li>
							<li id="deep_dives_track"><span class="menuTitle">The track</span> <span class="menuSummary menuSummarySubmenu">Track data, signs, markers, verges and more</span>
								<ul id="submenu_deep_dives_track">
									<li class="menuItemHeader">The track</li>
									<li><a id="deep_dives_track_the_track_data_file_format" href="/deep_dives/the_track_data_file_format.html"><span class="menuTitle">The track data file format</span> <span class="menuSummary">Every byte in the Revs track data file, explained</span></a></li>
									<li><a id="deep_dives_track_building_a_3d_track_from_sections_and_segments" href="/deep_dives/building_a_3d_track_from_sections_and_segments.html"><span class="menuTitle">Building a 3D track from sections and segments</span> <span class="menuSummary">How Revs constructs such a detailed simulation of the track</span></a></li>
									<li><a id="deep_dives_track_the_track_verges" href="/deep_dives/the_track_verges.html"><span class="menuTitle">The track verges</span> <span class="menuSummary">How Revs calculates track verges in the track section and track segment lists</span></a></li>
									<li><a id="deep_dives_track_road_signs" href="/deep_dives/road_signs.html"><span class="menuTitle">Road signs</span> <span class="menuSummary">Each track supports up to 16 road signs, from starting flags to chicanes</span></a></li>
									<li><a id="deep_dives_track_corner_markers" href="/deep_dives/corner_markers.html"><span class="menuTitle">Corner markers</span> <span class="menuSummary">What the little markers by the trackside tell us about driving around corners</span></a></li>
									<li><a id="deep_dives_track_data_structures_for_the_track_calculations" href="/deep_dives/data_structures_for_the_track_calculations.html"><span class="menuTitle">Data structures for the track calculations</span> <span class="menuSummary">Details of the buffers and lists where the track calculations are stored</span></a></li>
									<li><a id="deep_dives_track_drawing_the_track_verges" href="/deep_dives/drawing_the_track_verges.html"><span class="menuTitle">Drawing the track verges</span> <span class="menuSummary">How Revs calculates track verges in the track section and track segment lists</span></a></li>
								</ul>
							</li>
							<li id="deep_dives_extra_tracks"><span class="menuTitle">The extra tracks</span> <span class="menuSummary menuSummarySubmenu">The tracks of Revs 4 Tracks and Revs+</span>
								<ul id="submenu_deep_dives_extra_tracks">
									<li class="menuItemHeader">The extra tracks</li>
									<li><a id="deep_dives_extra_tracks_secrets_of_the_extra_tracks" href="/deep_dives/secrets_of_the_extra_tracks.html"><span class="menuTitle">Secrets of the extra tracks</span> <span class="menuSummary">How the extra track files modify the main game code using code hooks</span></a></li>
									<li><a id="deep_dives_extra_tracks_code_hooks_in_the_extra_tracks" href="/deep_dives/code_hooks_in_the_extra_tracks.html"><span class="menuTitle">Code hooks in the extra tracks</span> <span class="menuSummary">Documentation on every modification and code hook in the extra tracks</span></a></li>
									<li><a id="deep_dives_extra_tracks_dynamic_track_generation_in_the_extra_tracks" href="/deep_dives/dynamic_track_generation_in_the_extra_tracks.html"><span class="menuTitle">Dynamic track generation in the extra tracks</span> <span class="menuSummary">How Revs squeezes complex track layouts into extremely small data files</span></a></li>
									<li><a id="deep_dives_extra_tracks_the_extra_tracks_data_file_format" href="/deep_dives/the_extra_tracks_data_file_format.html"><span class="menuTitle">The extra tracks data file format</span> <span class="menuSummary">Differences between the standard Silverstone track and the extra track files</span></a></li>
									<li><a id="deep_dives_extra_tracks_backporting_the_nurburgring_track" href="/deep_dives/backporting_the_nurburgring_track.html"><span class="menuTitle">Backporting the N&uuml;rburgring track</span> <span class="menuSummary">Porting the N&uuml;rburgring track from the Commodore 64 to the BBC Micro</span></a></li>
								</ul>
							</li>
							<li id="deep_dives_track_statistics"><span class="menuTitle">Track maps and statistics</span> <span class="menuSummary menuSummarySubmenu">Comparing all six of the tracks in Revs</span>
								<ul id="submenu_deep_dives_track_statistics">
									<li class="menuItemHeader">Track maps and statistics</li>
									<li><a id="deep_dives_track_statistics_comparing_the_tracks" href="/deep_dives/comparing_the_tracks.html"><span class="menuTitle">Comparing the tracks</span> <span class="menuSummary">How the six different tracks in Revs compare to each other</span></a></li>
									<li><a id="deep_dives_track_statistics_the_brands_hatch_track" href="/deep_dives/the_brands_hatch_track.html"><span class="menuTitle">The Brands Hatch track</span> <span class="menuSummary">One of the four extra tracks in the Revs 4 Tracks expansion</span></a></li>
									<li><a id="deep_dives_track_statistics_the_donington_park_track" href="/deep_dives/the_donington_park_track.html"><span class="menuTitle">The Donington Park track</span> <span class="menuSummary">One of the four extra tracks in the Revs 4 Tracks expansion</span></a></li>
									<li><a id="deep_dives_track_statistics_the_nurburgring_track" href="/deep_dives/the_nurburgring_track.html"><span class="menuTitle">The N&uuml;rburgring track</span> <span class="menuSummary">The last track to be released, as part of the Commodore 64 version of Revs+</span></a></li>
									<li><a id="deep_dives_track_statistics_the_oulton_park_track" href="/deep_dives/the_oulton_park_track.html"><span class="menuTitle">The Oulton Park track</span> <span class="menuSummary">One of the four extra tracks in the Revs 4 Tracks expansion</span></a></li>
									<li><a id="deep_dives_track_statistics_the_silverstone_track" href="/deep_dives/the_silverstone_track.html"><span class="menuTitle">The Silverstone track</span> <span class="menuSummary">The original track that came with the first release of Revs</span></a></li>
									<li><a id="deep_dives_track_statistics_the_snetterton_track" href="/deep_dives/the_snetterton_track.html"><span class="menuTitle">The Snetterton track</span> <span class="menuSummary">One of the four extra tracks in the Revs 4 Tracks expansion</span></a></li>
								</ul>
							</li>
							<li id="deep_dives_driving_model"><span class="menuTitle">The driving model</span> <span class="menuSummary menuSummarySubmenu">The physics behind the driving in Revs</span>
								<ul id="submenu_deep_dives_driving_model">
									<li class="menuItemHeader">The driving model</li>
									<li><a id="deep_dives_driving_model_summary_of_the_driving_model" href="/deep_dives/summary_of_the_driving_model.html"><span class="menuTitle">An overview of the driving model</span> <span class="menuSummary">Secrets of the sophisticated driving simulation that powers Revs</span></a></li>
									<li><a id="deep_dives_driving_model_the_core_driving_model" href="/deep_dives/the_core_driving_model.html"><span class="menuTitle">The core driving model</span> <span class="menuSummary">The maths and physics behind the main part of the driving model</span></a></li>
									<li><a id="deep_dives_driving_model_driving_on_grass" href="/deep_dives/driving_on_grass.html"><span class="menuTitle">Driving on grass</span> <span class="menuSummary">What happens when you spill off the track into the lush green grass</span></a></li>
									<li><a id="deep_dives_driving_model_skidding" href="/deep_dives/skidding.html"><span class="menuTitle">Skidding</span> <span class="menuSummary">The calculations behind losing grip and squealing tyres</span></a></li>
									<li><a id="deep_dives_driving_model_jumps_and_drops" href="/deep_dives/jumps_and_drops.html"><span class="menuTitle">Jumps and drops</span> <span class="menuSummary">Jumping over the verge and dropping down from the retrieval crane</span></a></li>
									<li><a id="deep_dives_driving_model_modelling_the_engine" href="/deep_dives/modelling_the_engine.html"><span class="menuTitle">Modelling the engine</span> <span class="menuSummary">The maths behind engine torque, gear ratios and power transmission</span></a></li>
									<li><a id="deep_dives_driving_model_matching_the_code_to_the_driving_model" href="/deep_dives/matching_the_code_to_the_driving_model.html"><span class="menuTitle">Matching the code to the driving model</span> <span class="menuSummary">Tracking down the driving model features that are mentioned in the manual</span></a></li>
								</ul>
							</li>
							<li id="deep_dives_tactics"><span class="menuTitle">Driver tactics</span> <span class="menuSummary menuSummarySubmenu">Non-player drivers and steering assistants</span>
								<ul id="submenu_deep_dives_tactics">
									<li class="menuItemHeader">Driver tactics</li>
									<li><a id="deep_dives_tactics_tactics_of_the_non-player_drivers" href="/deep_dives/tactics_of_the_non-player_drivers.html"><span class="menuTitle">Tactics of the non-player drivers</span> <span class="menuSummary">How the computer-controlled drivers deal with corners, crashes and competitors</span></a></li>
									<li><a id="deep_dives_tactics_computer_assisted_steering" href="/deep_dives/computer_assisted_steering.html"><span class="menuTitle">Computer assisted steering (CAS)</span> <span class="menuSummary">The algorithm behind the steering assistant in the Superior Software release</span></a></li>
								</ul>
							</li>
							<li id="deep_dives_dashboard"><span class="menuTitle">The dashboard</span> <span class="menuSummary menuSummarySubmenu">Wing mirrors and starting lights</span>
								<ul id="submenu_deep_dives_dashboard">
									<li class="menuItemHeader">The dashboard</li>
									<li><a id="deep_dives_dashboard_wing_mirrors" href="/deep_dives/wing_mirrors.html"><span class="menuTitle">Wing mirrors</span> <span class="menuSummary">How Revs shows what's behind you, with a dash of shudder from the engines</span></a></li>
									<li><a id="deep_dives_dashboard_starting_lights" href="/deep_dives/starting_lights.html"><span class="menuTitle">Starting lights</span> <span class="menuSummary">All about the starting lights schedule, and how they use the screen buffer</span></a></li>
								</ul>
							</li>
							<li id="deep_dives_text"><span class="menuTitle">Miscellaneous</span> <span class="menuSummary menuSummarySubmenu">Text tokenisation, sound and random numbers</span>
								<ul id="submenu_deep_dives_text">
									<li class="menuItemHeader">Miscellaneous</li>
									<li><a id="deep_dives_text_text_tokens" href="/deep_dives/text_tokens.html"><span class="menuTitle">Text tokens</span> <span class="menuSummary">How the game text in Revs is tokenised to save space</span></a></li>
									<li><a id="deep_dives_text_the_engine_sounds" href="/deep_dives/the_engine_sounds.html"><span class="menuTitle">The engine sounds</span> <span class="menuSummary">Creating a realistic three-tone engine sound</span></a></li>
									<li><a id="deep_dives_text_random_numbers" href="/deep_dives/random_numbers.html"><span class="menuTitle">Random numbers</span> <span class="menuSummary">How Revs generates random numbers</span></a></li>
								</ul>
							</li>
						</ul>
					</li>

					<li class="menuItemHeader showForMobile">Exploring the Revs source code</li>
					<li id="source_sources"><span class="menuTitle">Revs source code</span>
						<span class="menuSummary menuSummarySubmenu">Annotated source of BBC Micro Revs</span>
						<ul id="submenu_source_sources">
							<li class="menuItemHeader">Version information</li>
							<li><a id="source_sources_index" href="/source/"><span class="menuTitle">About the version of Revs on this site</span><span class="menuSummary">Details of the different versions of Revs</span></a></li>
							<li><a id="source_sources_releases" href="/source/releases.html"><span class="menuTitle">Different variants of BBC Micro Revs</span><span class="menuSummary">Code variations found in BBC Micro Revs</span></a></li>
		                    <?php include('navigation_revs.php'); ?>
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
							<li><a id="source_indexes_subroutines" href="/source/indexes/subroutines.html"><span class="menuTitle">List of all subroutines by category</span> <span class="menuSummary">Subroutines in Revs</span></a></li>
							<li><a id="source_indexes_variables" href="/source/indexes/variables.html"><span class="menuTitle">List of all variables by category</span> <span class="menuSummary">Variables in Revs</span></a></li>
							<li><a id="source_indexes_workspaces" href="/source/indexes/workspaces.html"><span class="menuTitle">List of all workspaces by category</span> <span class="menuSummary">Workspaces in Revs</span></a></li>
							<li><a id="source_indexes_macros" href="/source/indexes/macros.html"><span class="menuTitle">List of all macros by category</span> <span class="menuSummary">Macros in Revs</span></a></li>
						</ul>
					</li>

					<li id="source_statistics"><a id="source_indexes_source_statistics" href="/source/articles/source_code_statistics.html"><span class="menuTitle">Code statistics for Revs</span> <span class="menuSummary">Instruction counts and other source code stats</span></a></li>

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
