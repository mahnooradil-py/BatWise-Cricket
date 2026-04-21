-- Create database
CREATE DATABASE IF NOT EXISTS batwise_cricket;

USE batwise_cricket;

-- =========================
-- USERS TABLE
-- =========================
CREATE TABLE
    users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        first_name VARCHAR(50) NOT NULL,
        last_name VARCHAR(50) NOT NULL,
        username VARCHAR(50) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL
    );

-- =========================
-- BATS TABLE
-- =========================
CREATE TABLE
    bats (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        brand VARCHAR(50) NOT NULL,
        category VARCHAR(50) NOT NULL,
        price DECIMAL(10, 2) NOT NULL,
        bat_size VARCHAR(20) NOT NULL,
        material VARCHAR(50) NOT NULL,
        description TEXT,
        image VARCHAR(255)
    );

-- =========================
-- SAMPLE DATA (BATS)
-- =========================
INSERT INTO
    bats (
        name,
        brand,
        category,
        price,
        bat_size,
        material,
        description,
        image
    )
VALUES
    (
        'CA Pro 1500',
        'CA',
        'Adult',
        299.99,
        'SH',
        'English Willow',
        'High quality bat designed for power hitters.',
        'ca_pro_1500.jpg'
    ),
    (
        'CA Plus 1200',
        'CA',
        'Adult',
        249.99,
        'SH',
        'English Willow',
        'Balanced bat with excellent pickup and control.',
        'ca_plus_1200.jpg'
    ),
    (
        'CA Gold 800',
        'CA',
        'Adult',
        199.99,
        'SH',
        'English Willow',
        'Mid-range bat suitable for club players.',
        'ca_gold_800.jpg'
    ),
    (
        'GM Diamond Original',
        'GM',
        'Adult',
        349.99,
        'SH',
        'English Willow',
        'Premium bat with large sweet spot.',
        'gm_diamond.jpg'
    ),
    (
        'Gray Nicolls Legend',
        'Gray Nicolls',
        'Adult',
        329.99,
        'SH',
        'English Willow',
        'Top-grade bat for professional performance.',
        'gn_legend.jpg'
    ),
    (
        'Kookaburra Kahuna',
        'Kookaburra',
        'Adult',
        279.99,
        'SH',
        'English Willow',
        'Iconic bat with excellent balance.',
        'kahuna.jpg'
    ),
    (
        'Adidas XT Black',
        'Adidas',
        'Adult',
        219.99,
        'SH',
        'English Willow',
        'Stylish bat with strong hitting power.',
        'adidas_xt.jpg'
    ),
    (
        'Somi Special Edition',
        'Somi',
        'Adult',
        189.99,
        'SH',
        'English Willow',
        'Affordable bat with solid performance.',
        'somi_special.jpg'
    );