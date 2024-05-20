-- Database: hospital-db

-- DROP DATABASE IF EXISTS "hospital-db";
CREATE TABLE appointments (
                              id SERIAL PRIMARY KEY,
                              name VARCHAR(255) NOT NULL,
                              email VARCHAR(255) NOT NULL,
                              phone VARCHAR(20) NOT NULL,
                              appointment_date TIMESTAMP NOT NULL
);
