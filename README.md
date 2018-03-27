# PHP Folder Structure

Details of project folder structure. 

**MUST BE FOLLOWED FOR ANY NEW PROJECT FROM 13/01/2018.**
	
	Main Project folder(ProjectName)
	
		assets (folder)

			1.Css (folder that contains all the css files and **project_name.css** should consist all the css modifications)

			2.js (folder that contains all the js files and **project_name.js** should consist all the js modifications)
			
			3.php (It will contain 2 folders & 1 file)

				1. globals (This folder will contain all the common files to be used within the project)

					1. Head.php

					2. Header.php

					3. Foot.php

					4. Footer.php

				2. Modules (Real time project modules e.g login, registration)

					ModuleName (This folder contains 3 types file)
						modulename_functions.php - will have functions
						modulename_conditions.php - Will have functions.php file included & all conditions
						modulename_main.php - will have conditions.php included in it

				3. config.php (This is a database configuration file)

			4. Database (It will contain 2 folders)
				
				1. Development (Which consist of all the working DB's from day to day)
				
				2. Original (Which consist of original DB backup's)