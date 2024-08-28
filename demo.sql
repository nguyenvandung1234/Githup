
drop database if exists ontap;

Create database ontap;

use ontap;

Create table categories
(
    id int primary key auto_increment,
    name varchar(100)NOT NULL UNIQUE,
    status tinyint(1) DEFAULT '0',
    create_at date DEFAULT current_timestamp(),
    update_at date null
);


Create table products
(
    id int primary key auto_increment,
    name varchar(100)NOT NULL UNIQUE,
    image varchar(100) not null,
    price float(10,2) not null,
    category_id int not null,
    description text not null,
    status tinyint(1) DEFAULT '0',
    create_at date DEFAULT current_timestamp(),
    update_at date null,
    FOREIGN KEY (category_id) REFERENCES categories(id)
);

Create table product_images
(
    id int primary key auto_increment,
    image varchar(100) not null,
    product_id int not null,
    description text not null,
    status tinyint(1) DEFAULT '0',
    create_at date DEFAULT current_timestamp(),
    update_at date null,
    FOREIGN KEY (product_id) REFERENCES products(id)
);

Create table users
(
    id int primary key auto_increment,
    name varchar(100)NOT NULL,
    email varchar(100)NOT NULL UNIQUE,
    password varchar(200)NOT NULL,
    create_at date DEFAULT current_timestamp(),
    update_at date null
);

Create table banners
(
    id int primary key auto_increment,
    name varchar(100)NOT NULL UNIQUE,
    link varchar(100)NOT NULL DEFAULT '#',
    image varchar(100) not null,
    description varchar(255) not null,
    position varchar(100) DEFAULT 'top-banner',
    prioty tinyint DEFAULT '0',
    status tinyint(1) DEFAULT '0',
    create_at date DEFAULT current_timestamp(),
    update_at date null
);

Create table blogs
(
    id int primary key auto_increment,
    name varchar(100)NOT NULL UNIQUE,
    link varchar(100)NOT NULL DEFAULT '#',
    image varchar(100) not null,
    description varchar(255) not null,
    position varchar(100) DEFAULT 'top-banner',
    status tinyint(1) DEFAULT '0',
    create_at date DEFAULT current_timestamp(),
    update_at date null
);

Create table customers
(
    id int primary key auto_increment,
    name varchar(100)NOT NULL,
    email varchar(100)NOT NULL UNIQUE,
    phone varchar(100)NOT NULL UNIQUE,
    address varchar(100) NULL,
    gender tinyint NOT NULL DEFAULT '0',
    password varchar(200)NOT NULL,
    create_at date DEFAULT current_timestamp(),
    update_at date null
);

Create table comments
(
    id int primary key auto_increment,
    customer_id int not null,
    product_id int not null,
    comment text,
    create_at date DEFAULT current_timestamp(),
    update_at date null,
    FOREIGN KEY (customer_id) REFERENCES customers(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);

Create table favories
(
    id int primary key auto_increment,
    customer_id int not null,
    product_id int not null,
    create_at date DEFAULT current_timestamp(),
    update_at date null,
    FOREIGN KEY (customer_id) REFERENCES customers(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);


Create table orders
(
    id int primary key auto_increment,
    name varchar(100) NULL,
    email varchar(100) NULL,
    phone varchar(100) NULL,
    address varchar(100) NULL,
    customer_id int NOT NULL,
    create_at date DEFAULT current_timestamp(),
    update_at date null,
    FOREIGN KEY (customer_id) REFERENCES customers(id)

);

Create table order_details
(
    order_id int not null,
    product_id int not null,
    quantity tinyint not null,
    price tinyint not null,
    primary key (order_id,product_id),
    FOREIGN KEY (order_id) REFERENCES orders(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);

