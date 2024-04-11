# CY450-Simple-Server
Simple PHP server with MySQL database

# Database setup
### XAMPP 
1. Go to xampp file directory
    ```
    cd xampp_directory/bin/
    ```
2. Login in mysql
    ```
    ./mysql -u root -p
    ```
3. Create new database
    ```
    CREATE DATABASE login;
    ```
4. Use the new database
    ```
    USE login;
    ```
5. Fill the database from sql file
    ```
    SOURCE /CY450-Simple-Server/database/loginInformation.sql;
    ```
6. Exit
    ```
    exit
    ```

### Without XAMPP
1. Login in mysql
    ```
    ./mysql -u root -p
    ```
2. Create new database
    ```
    CREATE DATABASE login;
    ```
3. Use the new database
    ```
    USE login;
    ```
4. Fill the database from sql file
    ```
    SOURCE /CY450-Simple-Server/database/loginInformation.sql;
    ```
5. Exit
    ```
    exit
    ```