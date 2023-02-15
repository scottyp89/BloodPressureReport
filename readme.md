# NHS home blood pressure record sheet

This is just a simple app for entering blood pressure results taken at home, as requested by my GP. It is fully responsive so that it's easy to enter data from a mobile device using the Bootstrap framework.

![Blood pressure results table](https://user-images.githubusercontent.com/19718631/218342851-e0fed1cf-f479-4eae-a9fe-6d509afa4291.png)

## Getting started

I'm going to assume you have some experience with Docker Compose to get this up and running.

1. Clone the repo
2. Update the .bpr_env file to include a password for the `MARIADB_PASSWORD` variable
3. Run the compose stack with the build switch `docker-compose up -d --build`
4. It will take a few seconds for the DB to get created, you will then get prompted to create the tables within the database, once that process has completed you can start entering data
5. By default, the app will be accessible on `http://localhost:8080`
