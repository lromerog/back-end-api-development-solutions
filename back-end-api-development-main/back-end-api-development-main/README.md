Back End API Development (PHP)
===========

## Installation

### Using Git to install the course

  - Download and install [GIT](http://git-scm.com/). Install the CLI version.
    - You can use any client for Git, even a GUI, as long as you are able to execute the following commands.

  - On your local machine, create a folder called "back-end-api-development" 

  - Open your [CLI](http://en.wikipedia.org/wiki/Command-line_interface):

    1. Navigate to the "back-end-api-development" folder using your CLI:

       ````
       cd \user\dropbox\web-backend
       ````

    2. Clone the back-end-api-development repository:
       
       ````
       git clone https://github.com/pascal-tm/back-end-api-development course-material
       ````
       Remark: By adding back-end-api-development-course at the end of this command, Git will create a folder called back-end-api-development-course and will put the files of the repository in that folder.

### Folder structure

  - The folder structure of the back-end-api-development course should look as follows:
  
    ```
    back-end-api-development  (folder)
    |- course-material (folder)
    |- solutions (folder)
    ```
  
    - The "course-material" folder contains this repository
    - The "solutions" folder will contain your own solutions to the exercises. This will become a repository as well.

## Updating to the newest version of the course

  - To update the local version of the course

    1. Using your CLI, navigate to the folder where the course is located
    
       ````
       cd \user\dropbox\back-end-api-development\course-material
       ````
    2. Execute the pull command:
       
       ````
       git pull
       ````

## Running a php server in the 

  - make sure PHP is installed on your local machine (will not be explained here)

  - Open your CLI
      1. Navigate to the folder of the back-end-api-development course material repository
         ````
         cd \user\dropbox\back-end-api-development\course-material
         ````
      2. Inside that folder, execute the following command

         ````
         php -S 127.0.0.101:80
         ````

         Note: It's possible that the access is denied when trying to run your server. You can try with the following IPs: localhost

      3. Open your browser and navigate to 127.0.0.101. You should now have access to the course or your solutions

      - Note that you can run multiple PHP servers, as long as the IP address is different. This will be required at some point if you run a server separate for your course-material and for the solutions.

## Uploading your own solutions to your personal repository

  - [Create a GitHub repository](https://help.github.com/articles/create-a-repo) that will contain your solutions

  - Every time you finish an exercise, you need to push these changes to your online repository

  - Open your CLI and follow these steps:

    1. Navigate to your solution folder:
       ````
       cd \user\dropbox\back-end-api-development\solutions
       ````

    2. Check the status of your local git repository to see if anything has been changed
       ````
       git status
       ````

    3. Add the changes to your local repository
       ````
       git add .
       ````
    The `.` means the whole working directory

    4. Finalise your changes by committing them to the repository. Add a message that says what has been added and changed.
       ````
       git commit -m "Add solution exercise debug errors"
       ````
    The `-m` stand for "message". This allows you to describe the commit you make with words. That way your create a "changelog". 

    5. Add the changes of your local repository to your online repository, so they can be found online
       ````
       git push origin main
       ````
    `origin` represents the online location of your repository. `main` (or sometimes `master`) represents your local version.


## Student repositories

- [Jha Sundaram](https://github.com/exyzee/tmbackend-2025)
- [Martin Velev](https://github.com/MartinVelev11/back-end-api-solutions)
- [Agata Zareba](https://github.com/agata0500/BACK-END-SOLUTIONS)
- [Petra Luckova](https://github.com/Petra712/back-end-solutions.git)
- [Dominyka Muraskaite](https://github.com/dominykam/backendsolutions)
- [Violeta Taneva](https://github.com/VioletaTaneva/Back_End_Solutions.git)
- [Emine Ozcanli](https://github.com/emin6oz/BackendApi)
- [Deepanshu Chaudhary](https://github.com/deepanshuc7/backendAPIclass)
- [Andrea Komazec](https://github.com/Wawa755/Back-end-solution.git)
- [Sylvanna Oyewole](https://github.com/Oyewolesyl/Solutions.git)
- [Sonia Umutesi](https://github.com/r0879042/back-end-soution.git)
- [Zornitsa Bakardzhieva](https://github.com/ZoriBak/back-end-solutions.git)
- [Olga Ingelaere](https://github.com/OlyaIngelaere/back-end-api-development-solutions.git)
- [Katarina Bajnokova](https://github.com/KatarinaBajnokova/back-end-solutions.git)
- [Filip Stefanovski](https://github.com/FilipStefanovski1/back-end-solutions.git)
## Contributors
