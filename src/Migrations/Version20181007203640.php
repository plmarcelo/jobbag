<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181007203640 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // Categorias de profesiones de Cuba
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Agente', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Aguador', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Animador', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Anticuario', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Artesano', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Artista', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Aserrador', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Asistente', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Carpintero', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Cartomántica', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Chapistero', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Chofer', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Cobrador/pagador', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Constructor', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Criador/Vendedor', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Cristalero', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Cuidador', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Curtidor', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Decorador', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Elaborador/vendedor', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Electricista', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Encargado', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Encuadernador', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Enrollador', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Entrenador', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Fotógrafo', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Fundidor', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Grabador', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Herrero', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Hojatalero', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Instructor', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Jardinero/Desmochador', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Lavandero', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Leñador', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Manicura', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Maquillista', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Masajista', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Mecánico', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Mecanógrafo', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Mensajero', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Modista', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Operador', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Organizador', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Parqueador', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Paseos', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Peluquería y Barbería', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Pintor', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Piscicultor', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Plastificador', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Plomero/Fontanero', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Pocero', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Portero / Sereno', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Productor/Vendedor', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Pulidor', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Recolector', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Relojero', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Renta y alquileres', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Reparador', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Restaurador', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Restaurantes y bares', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Soldador', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Tapicero', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Techador', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Tenedor de libros', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Textil', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Tornero', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Tostador', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Trabajador agropecuario', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Trabajador contratado', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Traductor', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Trasquilador', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Trillador', 'CU', NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, country_id, created_at, updated_at) VALUES('Vendedor/reparador', 'CU', NOW(), NOW());");

        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Agente' FROM profession p WHERE p.name = 'Agente');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Aguador' FROM profession p WHERE p.name = 'Aguador');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Animador' FROM profession p WHERE p.name = 'Animador');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Anticuario' FROM profession p WHERE p.name = 'Anticuario');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Artesano' FROM profession p WHERE p.name = 'Artesano');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Artista' FROM profession p WHERE p.name = 'Artista');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Aserrador' FROM profession p WHERE p.name = 'Aserrador');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Asistente' FROM profession p WHERE p.name = 'Asistente');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Carpintero' FROM profession p WHERE p.name = 'Carpintero');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Cartomántica' FROM profession p WHERE p.name = 'Cartomántica');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Chapistero' FROM profession p WHERE p.name = 'Chapistero');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Chofer' FROM profession p WHERE p.name = 'Chofer');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Cobrador/pagador' FROM profession p WHERE p.name = 'Cobrador/pagador');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Constructor' FROM profession p WHERE p.name = 'Constructor');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Criador/Vendedor' FROM profession p WHERE p.name = 'Criador/Vendedor');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Cristalero' FROM profession p WHERE p.name = 'Cristalero');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Cuidador' FROM profession p WHERE p.name = 'Cuidador');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Curtidor' FROM profession p WHERE p.name = 'Curtidor');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Decorador' FROM profession p WHERE p.name = 'Decorador');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Elaborador/vendedor' FROM profession p WHERE p.name = 'Elaborador/vendedor');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Electricista' FROM profession p WHERE p.name = 'Electricista');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Encargado' FROM profession p WHERE p.name = 'Encargado');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Encuadernador' FROM profession p WHERE p.name = 'Encuadernador');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Enrollador' FROM profession p WHERE p.name = 'Enrollador');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Entrenador' FROM profession p WHERE p.name = 'Entrenador');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Fotógrafo' FROM profession p WHERE p.name = 'Fotógrafo');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Fundidor' FROM profession p WHERE p.name = 'Fundidor');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Grabador' FROM profession p WHERE p.name = 'Grabador');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Herrero' FROM profession p WHERE p.name = 'Herrero');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Hojatalero' FROM profession p WHERE p.name = 'Hojatalero');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Instructor' FROM profession p WHERE p.name = 'Instructor');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Jardinero/Desmochador' FROM profession p WHERE p.name = 'Jardinero/Desmochador');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Lavandero' FROM profession p WHERE p.name = 'Lavandero');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Leñador' FROM profession p WHERE p.name = 'Leñador');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Manicura' FROM profession p WHERE p.name = 'Manicura');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Maquillista' FROM profession p WHERE p.name = 'Maquillista');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Masajista' FROM profession p WHERE p.name = 'Masajista');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Mecánico' FROM profession p WHERE p.name = 'Mecánico');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Mecanógrafo' FROM profession p WHERE p.name = 'Mecanógrafo');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Mensajero' FROM profession p WHERE p.name = 'Mensajero');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Modista' FROM profession p WHERE p.name = 'Modista');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Operador' FROM profession p WHERE p.name = 'Operador');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Organizador' FROM profession p WHERE p.name = 'Organizador');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Parqueador' FROM profession p WHERE p.name = 'Parqueador');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Paseos' FROM profession p WHERE p.name = 'Paseos');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Peluquería y Barbería' FROM profession p WHERE p.name = 'Peluquería y Barbería');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Pintor' FROM profession p WHERE p.name = 'Pintor');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Piscicultor' FROM profession p WHERE p.name = 'Piscicultor');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Plastificador' FROM profession p WHERE p.name = 'Plastificador');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Plomero/Fontanero' FROM profession p WHERE p.name = 'Plomero/Fontanero');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Pocero' FROM profession p WHERE p.name = 'Pocero');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Portero / Sereno' FROM profession p WHERE p.name = 'Portero / Sereno');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Productor/Vendedor' FROM profession p WHERE p.name = 'Productor/Vendedor');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Pulidor' FROM profession p WHERE p.name = 'Pulidor');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Recolector' FROM profession p WHERE p.name = 'Recolector');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Relojero' FROM profession p WHERE p.name = 'Relojero');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Renta y alquileres' FROM profession p WHERE p.name = 'Renta y alquileres');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Reparador' FROM profession p WHERE p.name = 'Reparador');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Restaurador' FROM profession p WHERE p.name = 'Restaurador');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Restaurantes y bares' FROM profession p WHERE p.name = 'Restaurantes y bares');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Soldador' FROM profession p WHERE p.name = 'Soldador');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Tapicero' FROM profession p WHERE p.name = 'Tapicero');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Techador' FROM profession p WHERE p.name = 'Techador');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Tenedor de libros' FROM profession p WHERE p.name = 'Tenedor de libros');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Textil' FROM profession p WHERE p.name = 'Textil');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Tornero' FROM profession p WHERE p.name = 'Tornero');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Tostador' FROM profession p WHERE p.name = 'Tostador');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Trabajador agropecuario' FROM profession p WHERE p.name = 'Trabajador agropecuario');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Trabajador contratado' FROM profession p WHERE p.name = 'Trabajador contratado');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Traductor' FROM profession p WHERE p.name = 'Traductor');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Trasquilador' FROM profession p WHERE p.name = 'Trasquilador');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Trillador' FROM profession p WHERE p.name = 'Trillador');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'es', 'Vendedor/reparador' FROM profession p WHERE p.name = 'Vendedor/reparador');");

        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Agent' FROM profession p WHERE p.name = 'Agente');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Water Carrier' FROM profession p WHERE p.name = 'Aguador');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Animator' FROM profession p WHERE p.name = 'Animador');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Antiquarian' FROM profession p WHERE p.name = 'Anticuario');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Craftsman' FROM profession p WHERE p.name = 'Artesano');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Artist' FROM profession p WHERE p.name = 'Artista');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Sawyer' FROM profession p WHERE p.name = 'Aserrador');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Asistant' FROM profession p WHERE p.name = 'Asistente');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Carpenter' FROM profession p WHERE p.name = 'Carpintero');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Fortuneteller' FROM profession p WHERE p.name = 'Cartomántica');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Sheetstock' FROM profession p WHERE p.name = 'Chapistero');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Driver' FROM profession p WHERE p.name = 'Chofer');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Collector / payer' FROM profession p WHERE p.name = 'Cobrador/pagador');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Builder' FROM profession p WHERE p.name = 'Constructor');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Breeder' FROM profession p WHERE p.name = 'Criador/Vendedor');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Glassmaker' FROM profession p WHERE p.name = 'Cristalero');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Caregiver' FROM profession p WHERE p.name = 'Cuidador');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Tanner' FROM profession p WHERE p.name = 'Curtidor');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Decorator' FROM profession p WHERE p.name = 'Decorador');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Producer/ seller' FROM profession p WHERE p.name = 'Elaborador/vendedor');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Electrician' FROM profession p WHERE p.name = 'Electricista');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Person in charge' FROM profession p WHERE p.name = 'Encargado');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Bookbinder' FROM profession p WHERE p.name = 'Encuadernador');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Mechanic' FROM profession p WHERE p.name = 'Enrollador');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Animal trainer' FROM profession p WHERE p.name = 'Entrenador');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Photographer' FROM profession p WHERE p.name = 'Fotógrafo');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Smelter' FROM profession p WHERE p.name = 'Fundidor');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Engraver' FROM profession p WHERE p.name = 'Grabador');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Blacksmith' FROM profession p WHERE p.name = 'Herrero');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Tinsmith' FROM profession p WHERE p.name = 'Hojatalero');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Instructor' FROM profession p WHERE p.name = 'Instructor');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Gardener' FROM profession p WHERE p.name = 'Jardinero/Desmochador');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Washerman' FROM profession p WHERE p.name = 'Lavandero');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Woodcutter' FROM profession p WHERE p.name = 'Leñador');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Manicurist' FROM profession p WHERE p.name = 'Manicura');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Make-up artist' FROM profession p WHERE p.name = 'Maquillista');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Masseur' FROM profession p WHERE p.name = 'Masajista');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Mechanic' FROM profession p WHERE p.name = 'Mecánico');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Typist' FROM profession p WHERE p.name = 'Mecanógrafo');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Courier' FROM profession p WHERE p.name = 'Mensajero');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Dressmaker' FROM profession p WHERE p.name = 'Modista');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Operator' FROM profession p WHERE p.name = 'Operador');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Party Orginser' FROM profession p WHERE p.name = 'Organizador');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Parking management' FROM profession p WHERE p.name = 'Parqueador');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Tours' FROM profession p WHERE p.name = 'Paseos');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Hairdresser' FROM profession p WHERE p.name = 'Peluquería y Barbería');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Painter' FROM profession p WHERE p.name = 'Pintor');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Pisciculturist' FROM profession p WHERE p.name = 'Piscicultor');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Plastic maker' FROM profession p WHERE p.name = 'Plastificador');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Plumber' FROM profession p WHERE p.name = 'Plomero/Fontanero');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Pitman' FROM profession p WHERE p.name = 'Pocero');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Porter' FROM profession p WHERE p.name = 'Portero / Sereno');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Producer/ seller' FROM profession p WHERE p.name = 'Productor/Vendedor');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Polisher' FROM profession p WHERE p.name = 'Pulidor');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Collector' FROM profession p WHERE p.name = 'Recolector');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Watchmaker' FROM profession p WHERE p.name = 'Relojero');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Rental' FROM profession p WHERE p.name = 'Renta y alquileres');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Repairer' FROM profession p WHERE p.name = 'Reparador');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Art restorer' FROM profession p WHERE p.name = 'Restaurador');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Pubs and restaurants' FROM profession p WHERE p.name = 'Restaurantes y bares');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Welder' FROM profession p WHERE p.name = 'Soldador');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Upholsterer' FROM profession p WHERE p.name = 'Tapicero');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Roofer' FROM profession p WHERE p.name = 'Techador');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Bookkeeper' FROM profession p WHERE p.name = 'Tenedor de libros');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Textil stainer' FROM profession p WHERE p.name = 'Textil');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Turner' FROM profession p WHERE p.name = 'Tornero');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Roaster' FROM profession p WHERE p.name = 'Tostador');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Agricultural worker' FROM profession p WHERE p.name = 'Trabajador agropecuario');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Hired worker' FROM profession p WHERE p.name = 'Trabajador contratado');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Translator' FROM profession p WHERE p.name = 'Traductor');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Shearer' FROM profession p WHERE p.name = 'Trasquilador');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Thresher' FROM profession p WHERE p.name = 'Trillador');");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) (SELECT p.id, 'en', 'Seller / Repairer' FROM profession p WHERE p.name = 'Vendedor/reparador');");
    }

    public function down(Schema $schema) : void
    {
        $this->addSql("DELETE FROM profession WHERE parent_id IS NULL AND country_id = 'CU';");
    }
}