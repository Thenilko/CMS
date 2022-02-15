# Info
The project is a Simple CMS to control the content of the pages. And Generate static website from these pages.

# Start the project
The project is build on Docker.
Run: docker-compose build / docker-compose up

Normally it should create the containers, and you will be able to see it on: http://localhost:8080/

#Comments
1. I did not implement point 3 from the document.
2. My focus was to implement the progressive static generator - that was the most interesting part for me, and I liked it.
3. At the moment the script to upload the changes to the repo does not work when is executed from the Symfony Process component. If it executed manually "sh script.sh" -> it works. For some reasons it returns "Permissions denied". All seems ok with the permissions of the file. I am pretty sure its because of the combination of Mac and Docker.
4. For the uploader i did not spend a lot of time I just wanted to have working File Uploader.
5. Because I am with MAC, I had some problems with dockerizing the project.