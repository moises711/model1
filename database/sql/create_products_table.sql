CREATE TABLE products (
    id SERIAL PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    categoria VARCHAR(255),
    codigo VARCHAR(255) UNIQUE,
    marca VARCHAR(255),
    modelo VARCHAR(255),
    color VARCHAR(255),
    descripcion TEXT,
    precio NUMERIC(10,2),
    stock INTEGER,
    created_at TIMESTAMP,
    updated_at TIMESTAMP
);
