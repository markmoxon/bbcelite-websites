			<footer id="copyrightMessage">
				<p><a title="Copyright information for this website" href="/about_site/acknowledgements.html">The Sentinel, written by Geoff Crammond, &copy; Firebird 1986<br>Commentary &copy; Mark Moxon <span id="copyrightYear">2026</span><br>
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
							<li><a id="about_site_building_the_sentinel" href="/about_site/building_the_sentinel.html"><span class="menuTitle">Building The Sentinel from the source</span> <span class="menuSummary">How to build your own working copy of The Sentinel</span></a></li>
							<li><a id="about_site_useful_links" href="/about_site/useful_links.html"><span class="menuTitle">Useful links</span> <span class="menuSummary">A collection of links to pages I've found useful during this project</span></a></li>
							<li><a id="about_site_acknowledgements" href="/about_site/acknowledgements.html"><span class="menuTitle">Acknowledgements</span> <span class="menuSummary">The giants on whose shoulders this project stands</span></a></li>
							<li><a id="about_site_site_history" href="/about_site/site_history.html"><span class="menuTitle">Site history</span> <span class="menuSummary">A short history of this site's development</span></a></li>
							<li><a id="about_site_site_map" href="/about_site/site_map.html"><span class="menuTitle">Site map</span> <span class="menuSummary">A top-level map of this website</span></a></li>
							<li><a id="about_site_to-do_list" href="/about_site/to-do_list.html"><span class="menuTitle">To-do list</span> <span class="menuSummary">Code that could benefit from a bit more analysis</span></a></li>
						</ul>
					</li>
					<li class="menuItemHeader showForMobile">Playing with The Sentinel source code</li>
					<li id="playing_the_sentinel"><a id="playing_the_sentinel_index" href="/playing_the_sentinel/"><span class="menuTitle">Playing The Sentinel in the 21st century</span> <span class="menuSummary">How to play all the versions of The Sentinel analysed here</span></a></li>
					<li id="deep_dives"><span class="menuTitle">Deep dive articles</span>
						<span class="menuSummary menuSummarySubmenu">Over 45 articles on how The Sentinel weaves its magic</span>
						<ul id="submenu_deep_dives">
							<li class="menuItemHeader">Index</li>
							<li><a id="deep_dives_index" href="/deep_dives/"><span class="menuTitle">Index of all deep dive articles</span><span class="menuSummary">Discover how The Sentinel works under the hood</span></a></li>
							<li class="menuItemHeader">Deep dives</li>
							<li id="deep_dives_maths"><span class="menuTitle">Code structure and game loops</span> <span class="menuSummary menuSummarySubmenu">Memory maps and the main game loops</span>
								<ul id="submenu_deep_dives_code_structure_and_game_loops">
									<li class="menuItemHeader">Code structure and game loops</li>
									<li><a id="deep_dives_code_structure_and_game_loops_memory_map" href="/deep_dives/memory_map.html"><span class="menuTitle">Memory map</span> <span class="menuSummary">Interleaving code and data to make the most of the BBC Micro's 32K of RAM</span></a></li>
									<li><a id="deep_dives_code_structure_and_game_loops_entry_and_setup_code" href="/deep_dives/entry_and_setup_code.html"><span class="menuTitle">Entry and setup code</span> <span class="menuSummary">Exploring how The Sentinel unravels itself after loading</span></a></li>
									<li><a id="deep_dives_code_structure_and_game_loops_program_flow_of_the_main_title_loop" href="/deep_dives/program_flow_of_the_main_title_loop.html"><span class="menuTitle">Program flow of the main title loop</span> <span class="menuSummary">The convoluted loop that displays the title and landscape preview screens</span></a></li>
									<li><a id="deep_dives_code_structure_and_game_loops_program_flow_of_the_main_game_loop" href="/deep_dives/program_flow_of_the_main_game_loop.html"><span class="menuTitle">Program flow of the main game loop</span> <span class="menuSummary">The sequence of events in the main game loop</span></a></li>
									<li><a id="deep_dives_code_structure_and_game_loops_program_flow_of_the_gameplay_loop" href="/deep_dives/program_flow_of_the_gameplay_loop.html"><span class="menuTitle">Program flow of the gameplay loop</span> <span class="menuSummary">Processing enemy tactics with the main gameplay loop</span></a></li>
									<li><a id="deep_dives_code_structure_and_game_loops_the_interrupt_handler" href="/deep_dives/the_interrupt_handler.html"><span class="menuTitle">The interrupt handler</span> <span class="menuSummary">The key processes that run in the background, 50 times a second</span></a></li>
								</ul>
							</li>
							<li id="deep_dives_maths"><span class="menuTitle">3D geometry</span> <span class="menuSummary menuSummarySubmenu">Pitch angles, yaw angles and coordinates</span>
								<ul id="submenu_deep_dives_3d_geometry">
									<li class="menuItemHeader">3D geometry</li>
									<li><a id="deep_dives_3d_geometry_pitch_and_yaw_angles" href="/deep_dives/pitch_and_yaw_angles.html"><span class="menuTitle">Pitch and yaw angles</span> <span class="menuSummary">Pitch and yaw angles are fundamental to the way The Sentinel works</span></a></li>
									<li><a id="deep_dives_3d_geometry_cartesian_coordinates" href="/deep_dives/cartesian_coordinates.html"><span class="menuTitle">Cartesian coordinates</span> <span class="menuSummary">The tile landscape uses Cartesian coordinates to define its shape</span></a></li>
									<li><a id="deep_dives_3d_geometry_coordinate_conversion" href="/deep_dives/coordinate_conversion.html"><span class="menuTitle">Coordinate conversion</span> <span class="menuSummary">Using two-triangle maths to convert between angles and Cartesian coordinates</span></a></li>
									<li><a id="deep_dives_3d_geometry_trigonometry" href="/deep_dives/trigonometry.html"><span class="menuTitle">Trigonometry</span> <span class="menuSummary">A look at the various ways in which The Sentinel implements trigonometry</span></a></li>
									<li><a id="deep_dives_3d_geometry_reusing_the_geometry_routines_from_revs" href="/deep_dives/reusing_the_geometry_routines_from_revs.html"><span class="menuTitle">Reusing the geometry routines from Revs</span> <span class="menuSummary">Discovering Revs at the core of The Sentinel's maths routines</span></a></li>
								</ul>
							</li>
							<li id="deep_dives_maths"><span class="menuTitle">Generating the landscape</span> <span class="menuSummary menuSummarySubmenu">Creating the 10,000 tile-based landscapes</span>
								<ul id="submenu_deep_dives_generating_the_landscape">
									<li class="menuItemHeader">Generating the landscape</li>
									<li><a id="deep_dives_generating_the_landscape_tile_data" href="/deep_dives/tile_data.html"><span class="menuTitle">Tile data</span> <span class="menuSummary">The fundamental data structure at the heart of The Sentinel's tile landscape</span></a></li>
									<li><a id="deep_dives_generating_the_landscape_tile_shapes" href="/deep_dives/tile_shapes.html"><span class="menuTitle">Tile shapes</span> <span class="menuSummary">How The Sentinel describes the shape of each tile</span></a></li>
									<li><a id="deep_dives_generating_the_landscape_Seed_number_generation" href="/deep_dives/Seed_number_generation.html"><span class="menuTitle">Seed number generation</span> <span class="menuSummary">The maths behind each landscape's unique sequence of seed numbers</span></a></li>
									<li><a id="deep_dives_generating_the_landscape_generating_the_landscape" href="/deep_dives/generating_the_landscape.html"><span class="menuTitle">Generating the landscape</span> <span class="menuSummary">Using procedural generation to create the 10,000 landscapes in The Sentinel</span></a></li>
									<li><a id="deep_dives_generating_the_landscape_the_landscape_secret_code" href="/deep_dives/the_landscape_secret_code.html"><span class="menuTitle">The landscape secret code</span> <span class="menuSummary">Generating the eight-digit secret code for each landscape</span></a></li>
									<li><a id="deep_dives_generating_the_landscape_adding_enemies_and_trees_to_the_landscape" href="/deep_dives/adding_enemies_and_trees_to_the_landscape.html"><span class="menuTitle">Adding enemies and trees to the landscape</span> <span class="menuSummary">How the game adds objects to the tile landscape</span></a></li>
								</ul>
							</li>
							<li id="deep_dives_maths"><span class="menuTitle">3D objects</span> <span class="menuSummary menuSummarySubmenu">Trees, boulders, robots and various 3D enemies</span>
								<ul id="submenu_deep_dives_3d_objects">
									<li class="menuItemHeader">3D objects</li>
									<li><a id="deep_dives_3d_objects_object_spawning" href="/deep_dives/object_spawning.html"><span class="menuTitle">Object spawning</span> <span class="menuSummary">Creating, deleting and managing up to 64 objects on the landscape</span></a></li>
									<li><a id="deep_dives_3d_objects_stacking_objects" href="/deep_dives/stacking_objects.html"><span class="menuTitle">Stacking objects</span> <span class="menuSummary">How the game manages multiple objects all stacked on the same tile</span></a></li>
									<li><a id="deep_dives_3d_objects_3d_object_definitions" href="/deep_dives/3d_object_definitions.html"><span class="menuTitle">3D object definitions</span> <span class="menuSummary">Details of all the 3D objects, from trees and boulders to the Sentinel itself</span></a></li>
									<li><a id="deep_dives_3d_objects_drawing_objects" href="/deep_dives/drawing_objects.html"><span class="menuTitle">Drawing objects</span> <span class="menuSummary">Converting objects from 3D definitions into colourful on-screen polygons</span></a></li>
								</ul>
							</li>
							<li id="deep_dives_maths"><span class="menuTitle">Drawing the screen</span> <span class="menuSummary menuSummarySubmenu">Screen projection, filled polygons and more</span>
								<ul id="submenu_deep_dives_drawing_the_screen">
									<li class="menuItemHeader">Drawing the screen</li>
									<li><a id="deep_dives_drawing_the_screen_the_custom_screen_mode" href="/deep_dives/the_custom_screen_mode.html"><span class="menuTitle">The custom screen mode</span> <span class="menuSummary">Squeezing a landscape view into a custom-sized letterbox screen mode</span></a></li>
									<li><a id="deep_dives_drawing_the_screen_the_projection_system" href="/deep_dives/the_projection_system.html"><span class="menuTitle">The projection system</span> <span class="menuSummary">The plate carr&eacute;e equirectangular projection used in The Sentinel</span></a></li>
									<li><a id="deep_dives_drawing_the_screen_the_drawing_tables" href="/deep_dives/the_drawing_tables.html"><span class="menuTitle">The drawing tables</span> <span class="menuSummary">How the game stores projected 3D data without taking up too much memory</span></a></li>
									<li><a id="deep_dives_drawing_the_screen_drawing_filled_polygons" href="/deep_dives/drawing_filled_polygons.html"><span class="menuTitle">Drawing filled polygons</span> <span class="menuSummary">Drawing colourfully filled triangles and quadrilaterals on-screen</span></a></li>
									<li><a id="deep_dives_drawing_the_screen_colours_and_palettes" href="/deep_dives/colours_and_palettes.html"><span class="menuTitle">Colours and palettes</span> <span class="menuSummary">How the game manages different colour schemes and palettes</span></a></li>
								</ul>
							</li>
							<li id="deep_dives_maths"><span class="menuTitle">Screen buffers</span> <span class="menuSummary menuSummarySubmenu">Smooth graphics with buffers and hardware scrolling</span>
								<ul id="submenu_deep_dives_screen_buffers">
									<li class="menuItemHeader">Screen buffers</li>
									<li><a id="deep_dives_screen_buffers_screen_buffers" href="/deep_dives/screen_buffers.html"><span class="menuTitle">Screen buffers</span> <span class="menuSummary">Creating beautifully smooth and fully filled 3D graphics using buffers</span></a></li>
									<li><a id="deep_dives_screen_buffers_panning_and_hardware_scrolling" href="/deep_dives/panning_and_hardware_scrolling.html"><span class="menuTitle">Panning and hardware scrolling</span> <span class="menuSummary">How the landscape view scrolls when the player pans around</span></a></li>
									<li><a id="deep_dives_screen_buffers_dithering_to_the_screen" href="/deep_dives/dithering_to_the_screen.html"><span class="menuTitle">Dithering to the screen</span> <span class="menuSummary">Creating and absorbing objects on-screen with a dithered effect</span></a></li>
								</ul>
							</li>
							<li id="deep_dives_maths"><span class="menuTitle">Drawing the landscape</span> <span class="menuSummary menuSummarySubmenu">How the undulating tile landscape is drawn</span>
								<ul id="submenu_deep_dives_drawing_the_landscape">
									<li class="menuItemHeader">Drawing the landscape</li>
									<li><a id="deep_dives_drawing_the_landscape_the_visibility_table" href="/deep_dives/the_visibility_table.html"><span class="menuTitle">The visibility table</span> <span class="menuSummary">The pre-populated visibility table helps speed up landscape drawing</span></a></li>
									<li><a id="deep_dives_drawing_the_landscape_calculating_angles_for_the_landscape_view" href="/deep_dives/calculating_angles_for_the_landscape_view.html"><span class="menuTitle">Calculating angles for the landscape view</span> <span class="menuSummary">The trigonometry that converts the landscape into a landscape view</span></a></li>
									<li><a id="deep_dives_drawing_the_landscape_drawing_the_landscape_view" href="/deep_dives/drawing_the_landscape_view.html"><span class="menuTitle">Drawing the landscape view</span> <span class="menuSummary">Drawing a partial view of the landscape from back to front</span></a></li>
									<li><a id="deep_dives_drawing_the_landscape_drawing_the_landscape_preview" href="/deep_dives/drawing_the_landscape_preview.html"><span class="menuTitle">Drawing the landscape preview</span> <span class="menuSummary">How the landscape preview is created at the start of each level</span></a></li>
								</ul>
							</li>
							<li id="deep_dives_maths"><span class="menuTitle">The title screens</span> <span class="menuSummary menuSummarySubmenu">The title, secret code and game over screens</span>
								<ul id="submenu_deep_dives_the_title_screens">
									<li class="menuItemHeader">The title screens</li>
									<li><a id="deep_dives_the_title_screens_drawing_the_title_screens" href="/deep_dives/drawing_the_title_screens.html"><span class="menuTitle">Drawing the title screens</span> <span class="menuSummary">The main title screen, landscape preview and game over screen</span></a></li>
									<li><a id="deep_dives_the_title_screens_3d_text_using_blocks" href="/deep_dives/3d_text_using_blocks.html"><span class="menuTitle">3D text using blocks</span> <span class="menuSummary">How the title screens use the landscape routines to draw blocky 3D text</span></a></li>
								</ul>
							</li>
							<li id="deep_dives_maths"><span class="menuTitle">The energy icon and scanner row</span> <span class="menuSummary menuSummarySubmenu">Displaying energy levels and exposure information</span>
								<ul id="submenu_deep_dives_the_energy_icon_and_scanner_row">
									<li class="menuItemHeader">The energy icon and scanner row</li>
									<li><a id="deep_dives_the_energy_icon_and_scanner_row_the_energy_icons" href="/deep_dives/the_energy_icons.html"><span class="menuTitle">The energy icons</span> <span class="menuSummary">Representing energy levels with robot, tree and boulder icons</span></a></li>
									<li><a id="deep_dives_the_energy_icon_and_scanner_row_the_scanner" href="/deep_dives/the_scanner.html"><span class="menuTitle">The scanner</span> <span class="menuSummary">Displaying exposure levels with a static-filled scanner</span></a></li>
								</ul>
							</li>
							<li id="deep_dives_maths"><span class="menuTitle">Tactics and gameplay</span> <span class="menuSummary menuSummarySubmenu">Secrets of the Sentinel, sentries and meanies</span>
								<ul id="submenu_deep_dives_tactics_and_gameplay">
									<li class="menuItemHeader">Tactics and gameplay</li>
									<li><a id="deep_dives_tactics_and_gameplay_the_crosshair_sights" href="/deep_dives/the_crosshair_sights.html"><span class="menuTitle">The crosshair sights</span> <span class="menuSummary">Aiming the player's gaze through the crosshair sights</span></a></li>
									<li><a id="deep_dives_tactics_and_gameplay_calculating_gaze" href="/deep_dives/calculating_gaze.html"><span class="menuTitle">Calculating gaze</span> <span class="menuSummary">How the game traces line-of-sight by tracing the gaze vector</span></a></li>
									<li><a id="deep_dives_tactics_and_gameplay_enemy_tactics" href="/deep_dives/enemy_tactics.html"><span class="menuTitle">Enemy tactics</span> <span class="menuSummary">An analysis of exactly how the Sentinel, sentries and meanies act and think</span></a></li>
									<li><a id="deep_dives_tactics_and_gameplay_game_timings" href="/deep_dives/game_timings.html"><span class="menuTitle">Game timings</span> <span class="menuSummary">How the interrupt handler manages game timings and controls enemy tactics</span></a></li>
								</ul>
							</li>
							<li id="deep_dives_maths"><span class="menuTitle">Sound and music</span> <span class="menuSummary menuSummarySubmenu">The eerie, minimalist and atmospheric soundscape</span>
								<ul id="submenu_deep_dives_sound_and_music">
									<li class="menuItemHeader">Sound and music</li>
									<li><a id="deep_dives_sound_and_music_sound_effects" href="/deep_dives/sound_effects.html"><span class="menuTitle">Sound effects</span> <span class="menuSummary">Making the silences feel eerie with carefully sparse sound effects</span></a></li>
									<li><a id="deep_dives_sound_and_music_music" href="/deep_dives/music.html"><span class="menuTitle">Music</span> <span class="menuSummary">The iconic chords that add so much atmosphere to this unique robotic world</span></a></li>
								</ul>
							</li>
							<li id="deep_dives_maths"><span class="menuTitle">Miscellaneous</span> <span class="menuSummary menuSummarySubmenu">Anti-cracker code, text tokens, the key logger and more</span>
								<ul id="submenu_deep_dives_miscellaneous">
									<li class="menuItemHeader">Miscellaneous</li>
									<li><a id="deep_dives_miscellaneous_random_number_generation" href="/deep_dives/random_number_generation.html"><span class="menuTitle">Random number generation</span> <span class="menuSummary">How random numbers are generated for gameplay and the dithered screen</span></a></li>
									<li><a id="deep_dives_miscellaneous_anti-cracker_checks" href="/deep_dives/anti-cracker_checks.html"><span class="menuTitle">Anti-cracker checks</span> <span class="menuSummary">The Sentinel is crammed full of traps and obfuscations for would-be crackers</span></a></li>
									<li><a id="deep_dives_miscellaneous_the_key_logger" href="/deep_dives/the_key_logger.html"><span class="menuTitle">The key logger</span> <span class="menuSummary">How the game reads the keyboard and logs activity during gameplay</span></a></li>
									<li><a id="deep_dives_miscellaneous_text_tokens" href="/deep_dives/text_tokens.html"><span class="menuTitle">Text tokens</span> <span class="menuSummary">How the game text in The Sentinel is tokenised to save space</span></a></li>
									<li><a id="deep_dives_miscellaneous_source_code_clues_hidden_in_the_game_binary" href="/deep_dives/source_code_clues_hidden_in_the_game_binary.html"><span class="menuTitle">Source code clues hidden in the game binary</span> <span class="menuSummary">Snippets of original source code and what they can tell us</span></a></li>
								</ul>
							</li>
						</ul>
					</li>

					<li class="menuItemHeader showForMobile">Exploring The Sentinel source code</li>
					<li id="source_sources"><span class="menuTitle">The Sentinel source code</span>
						<span class="menuSummary menuSummarySubmenu">Annotated source of The Sentinel on the BBC Micro</span>
						<ul id="submenu_source_sources">
							<li class="menuItemHeader">Version information</li>
							<li><a id="source_sources_index" href="/source/"><span class="menuTitle">About the version of The Sentinel on this site</span><span class="menuSummary">Details of the different versions of The Sentinel</span></a></li>
		                    <?php include('navigation_the_sentinel.php'); ?>
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
							<li><a id="source_indexes_subroutines" href="/source/indexes/subroutines.html"><span class="menuTitle">List of all subroutines by category</span> <span class="menuSummary">Subroutines in The Sentinel</span></a></li>
							<li><a id="source_indexes_variables" href="/source/indexes/variables.html"><span class="menuTitle">List of all variables by category</span> <span class="menuSummary">Variables in The Sentinel</span></a></li>
							<li><a id="source_indexes_workspaces" href="/source/indexes/workspaces.html"><span class="menuTitle">List of all workspaces by category</span> <span class="menuSummary">Workspaces in The Sentinel</span></a></li>
						</ul>
					</li>

					<li id="source_statistics"><a id="source_indexes_source_statistics" href="/source/articles/source_code_statistics.html"><span class="menuTitle">Code statistics for The Sentinel</span> <span class="menuSummary">Instruction counts and other source code stats</span></a></li>

					<li class="menuItemHeader showForMobile">My software archaeology sites</li>
					<li class="showForMobile otherSites"><a href="https://www.bbcelite.com"><span class="menuTitle">Mark Moxon's Software Archaeology</span></a></li>
					<li class="showForMobile otherSites"><a href="https://elite.bbcelite.com"><span class="menuTitle">Elite on the 6502</span></a></li>
					<li class="showForMobile otherSites"><a href="https://aviator.bbcelite.com"><span class="menuTitle">Aviator on the BBC Micro</span></a></li>
					<li class="showForMobile otherSites"><a href="https://revs.bbcelite.com"><span class="menuTitle">Revs on the BBC Micro</span></a></li>
					<li class="showForMobile otherSites"><a href="https://thesentinel.bbcelite.com"><span class="menuTitle">The Sentinel on the BBC Micro</span></a></li>
					<li class="showForMobile otherSites"><a href="https://lander.bbcelite.com"><span class="menuTitle">Lander on the Acorn Archimedes</span></a></li>
					<li class="menuItemHeader showForMobile">My writing sites</li>
					<li class="showForMobile otherSites"><a href="https://www.moxon.net"><span class="menuTitle">Mark Moxon's Travel Writing</span></a></li>
					<li class="showForMobile otherSites"><a href="https://www.landsendjohnogroats.info"><span class="menuTitle">Walking Land's End to John o'Groats</span></a></li>
					<li class="showForMobile otherSites"><a href="https://www.tubewalker.com"><span class="menuTitle">Tubewalker: The Tube, on Foot</span></a></li>
					<li class="menuItemHeader showForMobile">Contact details and more</li>
					<li class="showForMobile otherSites"><a href="https://www.markmoxon.com"><span class="menuTitle">Mark Moxon's Homepage</span></a></li>
				</ul>
			</nav>
