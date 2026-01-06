-- 1. Buat database
CREATE DATABASE address_book;
USE address_book;


-- 2. Buat tabel contacts
CREATE TABLE contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    email VARCHAR(100),
    address TEXT,
    category ENUM('Teman','Kerja','Keluarga','Lainnya') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- 3. Insert data contoh
INSERT INTO contacts (name, phone, email, address, category)
VALUES 
('Violeta Kartika', '08123456789', 'kartikavioleta@gmail.com', 'Jl. Merdeka No. 10, Denpasar', 'Teman'),
('Edward', '08123498765', 'edward09@gmail.com', 'Jl. Drupadi No. 19, Denpasar', 'Keluarga'),
('Riana Oktavia', '08234567890', 'rianaokta@gmail.com', 'Jl. Sudirman No. 5, Denpasar', 'Kerja');

ALTER TABLE contacts 
ADD photo VARCHAR(255) NULL,
ADD notes TEXT NULL;
