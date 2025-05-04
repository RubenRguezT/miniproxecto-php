CREATE DATABASE IF NOT EXISTS Ruben_Rguez_BD CHARACTER SET utf8 COLLATE utf8_general_ci;
SET default_storage_engine = InnoDB;
USE Ruben_Rguez_BD;
-- Drop user 'librouser'@'localhost';
-- Drop database Ruben_Rguez_BD;
-- Drop table Libros;

CREATE USER 'librouser'@'localhost' IDENTIFIED BY 'passworduser';
GRANT ALL PRIVILEGES ON Ruben_Rguez_BD.* TO 'librouser'@'localhost';


CREATE TABLE libros (
	id INT AUTO_INCREMENT PRIMARY KEY,
    isbn VARCHAR(20) UNIQUE NOT NULL,
    titulo VARCHAR(255),
    autor VARCHAR(255),
    anio YEAR,
    genero VARCHAR(100),
    resumen TEXT
);

-- Insertamos los datos
INSERT INTO libros (isbn, titulo, autor, anio, genero, resumen) VALUES
  ('978-0-801842186', 'El Viaje Infinito', 'Sofía Ramírez', 1961, 'Comedia', 'El Viaje Infinito'', una historia de género comedia escrita por Sofía Ramírez.');
INSERT INTO libros (isbn, titulo, autor, anio, genero, resumen) VALUES
  ('978-0-921278203', 'Sombras del Futuro', 'Jorge González', 2007, 'Drama', 'Sombras del Futuro'', una historia de género drama escrita por Jorge González.');
INSERT INTO libros (isbn, titulo, autor, anio, genero, resumen) VALUES
  ('978-0-156220503', 'La Última Risa', 'Pedro Sánchez', 2023, 'Accion', 'La Última Risa'', una historia de género accion escrita por Pedro Sánchez.');
INSERT INTO libros (isbn, titulo, autor, anio, genero, resumen) VALUES
  ('978-0-151786170', 'Corazones de Acero', 'Ana Torres', 1980, 'Drama', 'Corazones de Acero'', una historia de género drama escrita por Ana Torres.');
INSERT INTO libros (isbn, titulo, autor, anio, genero, resumen) VALUES
  ('978-0-363055309', 'El Eco del Pasado', 'Miguel Ángel Soto', 1997, 'Ciencia Ficcion', 'El Eco del Pasado'', una historia de género ciencia ficcion escrita por Miguel Ángel Soto.');
INSERT INTO libros (isbn, titulo, autor, anio, genero, resumen) VALUES
  ('978-0-324660902', 'Comedia de Errores', 'Isabel Romero', 2024, 'Comedia', 'Comedia de Errores'', una historia de género comedia escrita por Isabel Romero.');
INSERT INTO libros (isbn, titulo, autor, anio, genero, resumen) VALUES
  ('978-0-683932886', 'Sueños Cuánticos', 'Pedro Sánchez', 1987, 'Ciencia Ficcion', 'Una historia de género ciencia ficcion escrita por Pedro Sánchez.');
INSERT INTO libros (isbn, titulo, autor, anio, genero, resumen) VALUES
  ('978-0-922356479', 'Drama Interior', 'David León', 1972, 'Drama', 'Una historia de género drama escrita por David León.');
INSERT INTO libros (isbn, titulo, autor, anio, genero, resumen) VALUES
  ('978-0-808171255', 'Batalla Final', 'Lucía Herrera', 1963, 'Accion', 'Una historia de género accion escrita por Lucía Herrera.');
INSERT INTO libros (isbn, titulo, autor, anio, genero, resumen) VALUES
  ('978-0-153440708', 'Universo Paralelo', 'Sofía Ramírez', 1990, 'Ciencia Ficcion', 'Una historia de género ciencia ficcion escrita por Sofía Ramírez.');
INSERT INTO libros (isbn, titulo, autor, anio, genero, resumen) VALUES
  ('978-0-102076946', 'La Sombra del Dragón', 'Carlos Ruiz', 2006, 'Comedia', 'Resumen de ''La Sombra del Dragón'', una historia de género comedia escrita por Carlos Ruiz.');
INSERT INTO libros (isbn, titulo, autor, anio, genero, resumen) VALUES
  ('978-0-576012789', 'Ciudad del Mañana', 'Pedro Sánchez', 1953, 'Ciencia Ficcion', 'Resumen de ''Ciudad del Mañana'', una historia de género ciencia ficcion escrita por Pedro Sánchez.');
INSERT INTO libros (isbn, titulo, autor, anio, genero, resumen) VALUES
  ('978-0-268210046', 'Una Broma Pesada', 'Ana Torres', 1986, 'Comedia', 'Resumen de ''Una Broma Pesada'', una historia de género comedia escrita por Ana Torres.');
INSERT INTO libros (isbn, titulo, autor, anio, genero, resumen) VALUES
  ('978-0-546172779', 'Heridas del Alma', 'Lucía Herrera', 1996, 'Drama', 'Resumen de ''Heridas del Alma'', una historia de género drama escrita por Lucía Herrera.');
INSERT INTO libros (isbn, titulo, autor, anio, genero, resumen) VALUES
  ('978-0-653567110', 'Risas en el Tren', 'Carlos Ruiz', 1995, 'Comedia', 'Resumen de ''Risas en el Tren'', una historia de género comedia escrita por Carlos Ruiz.');
INSERT INTO libros (isbn, titulo, autor, anio, genero, resumen) VALUES
  ('978-0-985164933', 'Noche Estrellada', 'Ana Torres', 1965, 'Drama', 'Resumen de ''Noche Estrellada'', una historia de género drama escrita por Ana Torres.');
INSERT INTO libros (isbn, titulo, autor, anio, genero, resumen) VALUES
  ('978-0-853414317', 'Gritos del Silencio', 'Lucía Herrera', 1976, 'Drama', 'Resumen de ''Gritos del Silencio'', una historia de género drama escrita por Lucía Herrera.');
INSERT INTO libros (isbn, titulo, autor, anio, genero, resumen) VALUES
  ('978-0-861278392', 'Comedia Cósmica', 'Isabel Romero', 2012, 'Comedia', 'Resumen de ''Comedia Cósmica'', una historia de género comedia escrita por Isabel Romero.');
INSERT INTO libros (isbn, titulo, autor, anio, genero, resumen) VALUES
  ('978-0-300244598', 'Planeta Prohibido', 'Carlos Ruiz', 1993, 'Ciencia Ficcion', 'Resumen de ''Planeta Prohibido'', una historia de género ciencia ficcion escrita por Carlos Ruiz.');
INSERT INTO libros (isbn, titulo, autor, anio, genero, resumen) VALUES
  ('978-0-951445128', 'Fuego Interno', 'Laura Méndez', 2008, 'Accion', 'Resumen de ''Fuego Interno'', una historia de género accion escrita por Laura Méndez.');
INSERT INTO libros (isbn, titulo, autor, anio, genero, resumen) VALUES
  ('978-0-656623116', 'Mentes Maestras', 'Sofía Ramírez', 2007, 'Drama', 'Resumen de ''Mentes Maestras'', una historia de género drama escrita por Sofía Ramírez.');
INSERT INTO libros (isbn, titulo, autor, anio, genero, resumen) VALUES
  ('978-0-725229109', 'Caída Libre', 'Lucía Herrera', 2018, 'Accion', 'Resumen de ''Caída Libre'', una historia de género accion escrita por Lucía Herrera.');
INSERT INTO libros (isbn, titulo, autor, anio, genero, resumen) VALUES
  ('978-0-300474605', 'Más Allá del Portal', 'Pedro Sánchez', 2017, 'Ciencia Ficcion', 'Resumen de ''Más Allá del Portal'', una historia de género ciencia ficcion escrita por Pedro Sánchez.');
INSERT INTO libros (isbn, titulo, autor, anio, genero, resumen) VALUES
  ('978-0-296472682', 'El Último Aplauso', 'Carlos Ruiz', 1958, 'Comedia', 'Resumen de ''El Último Aplauso'', una historia de género comedia escrita por Carlos Ruiz.');
INSERT INTO libros (isbn, titulo, autor, anio, genero, resumen) VALUES
  ('978-0-124342028', 'Diario de un Guerrero', 'Sofía Ramírez', 1953, 'Accion', 'Resumen de ''Diario de un Guerrero'', una historia de género accion escrita por Sofía Ramírez.');
INSERT INTO libros (isbn, titulo, autor, anio, genero, resumen) VALUES
  ('978-0-894724024', 'El Experimento Alfa', 'Jorge González', 1964, 'Ciencia Ficcion', 'Resumen de ''El Experimento Alfa'', una historia de género ciencia ficcion escrita por Jorge González.');
INSERT INTO libros (isbn, titulo, autor, anio, genero, resumen) VALUES
  ('978-0-181934634', 'Colisión Inminente', 'Laura Méndez', 1965, 'Accion', 'Resumen de ''Colisión Inminente'', una historia de género accion escrita por Laura Méndez.');
INSERT INTO libros (isbn, titulo, autor, anio, genero, resumen) VALUES
  ('978-0-761157422', 'El Guion Perdido', 'David León', 1983, 'Comedia', 'Resumen de ''El Guion Perdido'', una historia de género comedia escrita por David León.');
INSERT INTO libros (isbn, titulo, autor, anio, genero, resumen) VALUES
  ('978-0-950871226', 'Dramatis Personae', 'Carlos Ruiz', 1964, 'Drama', 'Resumen de ''Dramatis Personae'', una historia de género drama escrita por Carlos Ruiz.');
INSERT INTO libros (isbn, titullibroso, autor, anio, genero, resumen) VALUES
  ('978-0-124679679', 'Humor Subterráneo', 'Laura Méndez', 1963, 'Comedia', 'Resumen de ''Humor Subterráneo'', una historia de género comedia escrita por Laura Méndez.');
