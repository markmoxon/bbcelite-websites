			<footer id="copyrightMessage">
				<p><a title="Copyright information for this website" href="/about_site/acknowledgements.html">Lander, written by David Braben, &copy; D.J.Braben 1987<br />Commentary &copy; Mark Moxon <span id="copyrightYear">2021</span><br />
				All Rights Reserved</a></p>
			</footer>

			<div id="logo">
				<a href="/" accesskey="1">Home page</a>
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
							<li><a id="about_site_building_lander" href="/about_site/building_lander.html"><span class="menuTitle">Building Lander from the source</span> <span class="menuSummary">How to build your own working copy of Lander</span></a></li>
							<li><a id="about_site_useful_links" href="/about_site/useful_links.html"><span class="menuTitle">Useful links</span> <span class="menuSummary">A collection of links to pages I've found useful during this project</span></a></li>
							<li><a id="about_site_acknowledgements" href="/about_site/acknowledgements.html"><span class="menuTitle">Acknowledgements</span> <span class="menuSummary">The giants on whose shoulders this project stands</span></a></li>
							<li><a id="about_site_site_history" href="/about_site/site_history.html"><span class="menuTitle">Site history</span> <span class="menuSummary">A short history of this site's development</span></a></li>
							<li><a id="about_site_site_map" href="/about_site/site_map.html"><span class="menuTitle">Site map</span> <span class="menuSummary">A top-level map of this website</span></a></li>
							<li><a id="about_site_to-do_list" href="/about_site/to-do_list.html"><span class="menuTitle">To-do list</span> <span class="menuSummary">Code that could benefit from a bit more analysis</span></a></li>
						</ul>
					</li>
					<li class="menuItemHeader showForMobile">Understanding the source code</li>
					<li id="deep_dives"><span class="menuTitle">Deep dive articles</span>
						<span class="menuSummary menuSummarySubmenu">Over 20 articles on how Lander weaves its magic</span>
						<ul id="submenu_deep_dives">
							<li class="menuItemHeader">Index</li>
							<li><a id="deep_dives_index" href="/deep_dives/"><span class="menuTitle">Index of all deep dive articles</span><span class="menuSummary">Discover how Lander works under the hood</span></a></li>
							<li class="menuItemHeader">Deep dives</li>
							<li id="deep_dives_structure"><span class="menuTitle">Program structure</span> <span class="menuSummary menuSummarySubmenu">Memory maps and the main game loop</span>
								<ul id="submenu_deep_dives_structure">
									<li class="menuItemHeader">Program structure</li>
									<li><a id="deep_dives_structure_the_lander_memory_map" href="/deep_dives/the_lander_memory_map.html"><span class="menuTitle">The Lander memory map</span> <span class="menuSummary">Memory usage and squeezing Lander into the unexpanded Archimedes 305</span></a></li>
									<li><a id="deep_dives_structure_main_game_loop" href="/deep_dives/main_game_loop.html"><span class="menuTitle">The main game loop</span> <span class="menuSummary">Details of the tasks that Lander performs every iteration around the main loop</span></a></li>
								</ul>
							</li>
							<li id="deep_dives_landscape"><span class="menuTitle">Landscape</span> <span class="menuSummary menuSummarySubmenu">How the luscious 3D landscape is created</span>
								<ul id="submenu_deep_dives_landscape">
									<li class="menuItemHeader">Landscape</li>
									<li><a id="deep_dives_landscape_camera_and_landscape_offset" href="/deep_dives/camera_and_landscape_offset.html"><span class="menuTitle">The camera and the landscape offset</span> <span class="menuSummary">An explanation of two fundamental aspects of the Lander drawing routines</span></a></li>
									<li><a id="deep_dives_landscape_generating_the_landscape" href="/deep_dives/generating_the_landscape.html"><span class="menuTitle">Generating the landscape</span> <span class="menuSummary">Using Fourier synthesis to generate a 3D landscape using simple trigonometry</span></a></li>
									<li><a id="deep_dives_landscape_drawing_the_landscape" href="/deep_dives/drawing_the_landscape.html"><span class="menuTitle">Drawing the landscape</span> <span class="menuSummary">Converting a set of altitudes into an undulating landscape of coloured tiles</span></a></li>
								</ul>
							</li>
							<li id="deep_dives_objects_particles"><span class="menuTitle">3D objects and particles</span> <span class="menuSummary menuSummarySubmenu">Drawing 3D objects and simulating particle physics</span>
								<ul id="submenu_deep_dives_objects_particles">
									<li class="menuItemHeader">3D objects and particles</li>
									<li><a id="deep_dives_objects_particles_object_blueprints" href="/deep_dives/object_blueprints.html"><span class="menuTitle">Object blueprints</span> <span class="menuSummary">Storing 3D object definitions using vertices, faces and normals</span></a></li>
									<li><a id="deep_dives_objects_particles_drawing_3d_objects" href="/deep_dives/drawing_3d_objects.html"><span class="menuTitle">Drawing 3D objects</span> <span class="menuSummary">Drawing 3D objects using object blueprints and rotation matrices</span></a></li>
									<li><a id="deep_dives_objects_particles_placing_objects_on_the_map" href="/deep_dives/placing_objects_on_the_map.html"><span class="menuTitle">Placing objects on the map</span> <span class="menuSummary">Details of Lander's object types and the object map</span></a></li>
									<li><a id="deep_dives_objects_particles_particles_and_particle_clouds" href="/deep_dives/particles_and_particle_clouds.html"><span class="menuTitle">Particles and particle clouds</span> <span class="menuSummary">The particles that make up sparks, splashes, explosions and exhaust plumes</span></a></li>
								</ul>
							</li>
							<li id="deep_dives_flight"><span class="menuTitle">Flight</span> <span class="menuSummary menuSummarySubmenu">The challenges of travelling by mouse</span>
								<ul id="submenu_deep_dives_flight">
									<li class="menuItemHeader">Flight</li>
									<li><a id="deep_dives_flight_flying_by_mouse" href="/deep_dives/flying_by_mouse.html"><span class="menuTitle">Flying by mouse</span> <span class="menuSummary">Flying the ship in Lander using polar coordinates and thrust vectors</span></a></li>
									<li><a id="deep_dives_flight_collisions_and_bullets" href="/deep_dives/collisions_and_bullets.html"><span class="menuTitle">Collisions and bullets</span> <span class="menuSummary">Detecting when the player has crashed or shot down an object</span></a></li>
								</ul>
							</li>
							<li id="deep_dives_drawing_screen"><span class="menuTitle">Drawing on the screen</span> <span class="menuSummary menuSummarySubmenu">How Lander's graphics make it onto the screen</span>
								<ul id="submenu_deep_dives_drawing_screen">
									<li class="menuItemHeader">Drawing on the screen</li>
									<li><a id="deep_dives_drawing_screen_depth-sorting_with_the_graphics_buffers" href="/deep_dives/depth-sorting_with_the_graphics_buffers.html"><span class="menuTitle">Depth-sorting with the graphics buffers</span> <span class="menuSummary">The clever bin-sorting hack that correctly displays objects behind one another</span></a></li>
									<li><a id="deep_dives_drawing_screen_drawing_triangles" href="/deep_dives/drawing_triangles.html"><span class="menuTitle">Drawing triangles</span> <span class="menuSummary">Building a landscape and 3D objects out of nothing but triangles</span></a></li>
									<li><a id="deep_dives_drawing_screen_projecting_onto_the_screen" href="/deep_dives/projecting_onto_the_screen.html"><span class="menuTitle">Projecting onto the screen</span> <span class="menuSummary">How Lander converts 3D world coordinates into 2D screen coordinates</span></a></li>
									<li><a id="deep_dives_drawing_screen_screen_memory_in_the_archimedes" href="/deep_dives/screen_memory_in_the_archimedes.html"><span class="menuTitle">Screen memory in the Archimedes</span> <span class="menuSummary">Understanding VIDC colours and bank-switching on the Archimedes</span></a></li>
								</ul>
							</li>
							<li id="deep_dives_miscellaneous"><span class="menuTitle">Miscellaneous</span> <span class="menuSummary menuSummarySubmenu">Exploring this important piece of coding history</span>
								<ul id="submenu_deep_dives_miscellaneous">
									<li class="menuItemHeader">Miscellaneous</li>
									<li><a id="deep_dives_miscellaneous_random_numbers" href="/deep_dives/random_numbers.html"><span class="menuTitle">Random numbers</span> <span class="menuSummary">Lander uses a random-number algorithm from the ARM Evaluation System</span></a></li>
									<li><a id="deep_dives_miscellaneous_in_david_brabens_own_words" href="/deep_dives/in_david_brabens_own_words.html"><span class="menuTitle">In David Braben's own words</span> <span class="menuSummary">A code analysis of the Lander author's own article from The Micro User</span></a></li>
									<li><a id="deep_dives_miscellaneous_comparing_lander_to_zarch" href="/deep_dives/comparing_lander_to_zarch.html"><span class="menuTitle">Comparing Lander to Zarch</span> <span class="menuSummary">How Lander's big brother compares to its predecessor</span></a></li>
									<li><a id="deep_dives_miscellaneous_unused_code_in_lander" href="/deep_dives/unused_code_in_lander.html"><span class="menuTitle">Unused code in Lander</span> <span class="menuSummary">Memory might be tight, but even Lander contains some hidden subroutines</span></a></li>
									<li><a id="deep_dives_miscellaneous_landers_origins_on_the_arm1" href="/deep_dives/landers_origins_on_the_arm1.html"><span class="menuTitle">Lander's origins on the ARM1</span> <span class="menuSummary">How the creation of Lander on the ARM1 influenced the code</span></a></li>
									<li><a id="deep_dives_miscellaneous_hacking_the_landscape" href="/deep_dives/hacking_the_landscape.html"><span class="menuTitle">Hacking the landscape</span> <span class="menuSummary">Hacking the Lander source to create huge landscapes on faster machines</span></a></li>
								</ul>
							</li>
						</ul>
					</li>

					<li class="menuItemHeader showForMobile">Exploring the source code</li>
					<li id="source_sources"><span class="menuTitle">Lander source code</span>
						<span class="menuSummary menuSummarySubmenu">Annotated source of Lander</span>
						<ul id="submenu_source_sources">
							<li class="menuItemHeader">Version information</li>
							<li><a id="source_sources_index" href="/source/"><span class="menuTitle">About the version of Lander on this site</span><span class="menuSummary">Details of the different versions of Lander</span></a></li>
		                    <?php include('navigation_lander.php'); ?>
						</ul>
					</li>

					<li id="random"><a href="/cgi-bin/random.cgi" rel="nofollow"><span class="menuTitle">Show me a Random Routine</span> <span class="menuSummary">Or click &#x221E; above to jump into the source code...</span></a></li>

					<li class="menuItemHeader showForMobile">Indexes and code analyses</li>

					<li id="indexes"><span class="menuTitle">Indexes to the source code</span>
						<span class="menuSummary menuSummarySubmenu">A-Z indexes, code usage analysis and more</span>
						<ul id="submenu_source_indexes">
							<li class="menuItemHeader">A-Z indexes</li>
							<li><a id="source_indexes_a-z" href="/source/indexes/a-z.html"><span class="menuTitle">A-Z index of the source code</span> <span class="menuSummary">An index of every subroutine, entry point and variable in the source code</span></a></li>
							<li><a id="source_indexes_source_code_cross-references" href="/source/articles/source_code_cross-references.html"><span class="menuTitle">Source code cross-references</span> <span class="menuSummary">Every label and variable in the source code and where they are used</span></a></li>
							<li class="menuItemHeader">Indexes by category</li>
							<li><a id="source_indexes_subroutines" href="/source/indexes/subroutines.html"><span class="menuTitle">List of all subroutines by category</span> <span class="menuSummary">Subroutines in Lander</span></a></li>
							<li><a id="source_indexes_variables" href="/source/indexes/variables.html"><span class="menuTitle">List of all variables by category</span> <span class="menuSummary">Variables in Lander</span></a></li>
						</ul>
					</li>

					<li id="source_statistics"><a id="source_indexes_source_statistics" href="/source/articles/source_code_statistics.html"><span class="menuTitle">Code statistics for Lander</span> <span class="menuSummary">Instruction counts and other source code stats</span></a></li>

					<li class="menuItemHeader showForMobile">My software archaeology sites</li>
					<li class="showForMobile otherSites"><a href="https://www.bbcelite.com"><span class="menuTitle">Mark Moxon's Software Archaeology</span></a></li>
					<li class="showForMobile otherSites"><a href="https://elite.bbcelite.com"><span class="menuTitle">Elite on the BBC Micro and NES</span></a></li>
					<li class="showForMobile otherSites"><a href="https://aviator.bbcelite.com"><span class="menuTitle">Aviator on the BBC Micro</span></a></li>
					<li class="showForMobile otherSites"><a href="https://revs.bbcelite.com"><span class="menuTitle">Revs on the BBC Micro</span></a></li>
					<li class="showForMobile otherSites"><a href="https://lander.bbcelite.com"><span class="menuTitle">Lander on the Acorn Archimedes</span></a></li>
					<li class="menuItemHeader showForMobile">My writing sites</li>
					<li class="showForMobile otherSites"><a href="https://www.moxon.net"><span class="menuTitle">Mark Moxon's Travel Writing</span></a></li>
					<li class="showForMobile otherSites"><a href="https://www.landsendjohnogroats.info"><span class="menuTitle">Walking Land's End to John o'Groats</span></a></li>
					<li class="showForMobile otherSites"><a href="https://www.tubewalker.com"><span class="menuTitle">Tubewalker: The Tube, on Foot</span></a></li>
					<li class="menuItemHeader showForMobile">Contact details and more information</li>
					<li class="showForMobile otherSites"><a href="https://www.markmoxon.com"><span class="menuTitle">Mark Moxon's Homepage</span></a></li>
				</ul>
			</nav>
