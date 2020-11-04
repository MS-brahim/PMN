CREATE TABLE users (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    country VARCHAR(50) NOT NULL,
    city VARCHAR(50) NOT NULL,
    address VARCHAR(255) NOT NULL,
    zipcode VARCHAR(20) NOT NULL,
    role INT(11) NOT NULL DEFAULT 0,
    create_at DATE NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    update_at DATE NOT NULL DEFAULT CURRENT_TIMESTAMP(),
);
CREATE TABLE products (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    image VARCHAR(255) NOT NULL,
    image1 VARCHAR(255) NOT NULL,
    image2 VARCHAR(255) NOT NULL,
    image3 VARCHAR(255) NOT NULL,
    discription VARCHAR(50) NOT NULL,
    price double NOT NULL,
    oldPrice double NOT NULL,
    stock INT(11) NOT NULL,
    categorie_id INT(11) NOT NULL,
    user_id INT(11) NOT NULL,
    create_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    update_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (categorie_id) REFERENCES categories (id),
    FOREIGN KEY (user_id) REFERENCES users (id)
);
CREATE TABLE categories (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);
CREATE TABLE orders (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_id INT(11) NULL,
    product_id INT(11) NOT NULL,
    status INT(11) NOT NULL DEFAULT 0,
    create_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    update_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users (id),
    FOREIGN KEY (product_id) REFERENCES products (id)
)