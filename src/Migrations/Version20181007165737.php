<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181007165737 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // Comunidades españolas
        $this->addSql("INSERT INTO location (iso_code, country_id, name) VALUES('ES-AN', 'ES', 'Andalucía');");
        $this->addSql("INSERT INTO location (iso_code, country_id, name) VALUES('ES-AR', 'ES', 'Aragón');");
        $this->addSql("INSERT INTO location (iso_code, country_id, name) VALUES('ES-AS', 'ES', 'Principado de Asturias');");
        $this->addSql("INSERT INTO location (iso_code, country_id, name) VALUES('ES-CN', 'ES', 'Canarias');");
        $this->addSql("INSERT INTO location (iso_code, country_id, name) VALUES('ES-CB', 'ES', 'Cantabria');");
        $this->addSql("INSERT INTO location (iso_code, country_id, name) VALUES('ES-CL', 'ES', 'Castilla y León');");
        $this->addSql("INSERT INTO location (iso_code, country_id, name) VALUES('ES-CM', 'ES', 'Castilla La Mancha');");
        $this->addSql("INSERT INTO location (iso_code, country_id, name) VALUES('ES-CT', 'ES', 'Cataluña');");
        $this->addSql("INSERT INTO location (iso_code, country_id, name) VALUES('ES-PV', 'ES', 'País Vasco');");
        $this->addSql("INSERT INTO location (iso_code, country_id, name) VALUES('ES-EX', 'ES', 'Extremadura');");
        $this->addSql("INSERT INTO location (iso_code, country_id, name) VALUES('ES-GA', 'ES', 'Galicia');");
        $this->addSql("INSERT INTO location (iso_code, country_id, name) VALUES('ES-IB', 'ES', 'Islas Baleares');");
        $this->addSql("INSERT INTO location (iso_code, country_id, name) VALUES('ES-RI', 'ES', 'La Rioja');");
        $this->addSql("INSERT INTO location (iso_code, country_id, name) VALUES('ES-MD', 'ES', 'Madrid');");
        $this->addSql("INSERT INTO location (iso_code, country_id, name) VALUES('ES-MC', 'ES', 'Murcia');");
        $this->addSql("INSERT INTO location (iso_code, country_id, name) VALUES('ES-NC', 'ES', 'Navarra');");
        $this->addSql("INSERT INTO location (iso_code, country_id, name) VALUES('ES-VC', 'ES', 'Valencia');");
        $this->addSql("INSERT INTO location (iso_code, country_id, name) VALUES('ES-CE', 'ES', 'Ceuta');");
        $this->addSql("INSERT INTO location (iso_code, country_id, name) VALUES('ES-ML', 'ES', 'Melilla');");

        // Comunidades españolas en español
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Andalucía' FROM location l WHERE l.iso_code ='ES-AN');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Aragón' FROM location l WHERE l.iso_code ='ES-AR');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Principado de Asturias' FROM location l WHERE l.iso_code ='ES-AS');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Canarias' FROM location l WHERE l.iso_code ='ES-CN');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Cantabria' FROM location l WHERE l.iso_code ='ES-CB');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Castilla y León' FROM location l WHERE l.iso_code ='ES-CL');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Castilla La Mancha' FROM location l WHERE l.iso_code ='ES-CM');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Cataluña' FROM location l WHERE l.iso_code ='ES-CT');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'País Vasco' FROM location l WHERE l.iso_code ='ES-PV');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Extremadura' FROM location l WHERE l.iso_code ='ES-EX');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Galicia' FROM location l WHERE l.iso_code ='ES-GA');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Islas Baleares' FROM location l WHERE l.iso_code ='ES-IB');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'La Rioja' FROM location l WHERE l.iso_code ='ES-RI');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Madrid' FROM location l WHERE l.iso_code ='ES-MD');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Murcia' FROM location l WHERE l.iso_code ='ES-MC');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Navarra' FROM location l WHERE l.iso_code ='ES-NC');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Valencia' FROM location l WHERE l.iso_code ='ES-VC');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Ceuta' FROM location l WHERE l.iso_code ='ES-CE');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Melilla' FROM location l WHERE l.iso_code ='ES-ML');");

        // Comunidades españolas en inglés
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Andalucia' FROM location l WHERE l.iso_code ='ES-AN');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Aragon' FROM location l WHERE l.iso_code ='ES-AR');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Principado de Asturias' FROM location l WHERE l.iso_code ='ES-AS');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Canarias' FROM location l WHERE l.iso_code ='ES-CN');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Cantabria' FROM location l WHERE l.iso_code ='ES-CB');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Castilla y Leon' FROM location l WHERE l.iso_code ='ES-CL');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Castilla La Mancha' FROM location l WHERE l.iso_code ='ES-CM');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Cataluna' FROM location l WHERE l.iso_code ='ES-CT');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Pais Vasco' FROM location l WHERE l.iso_code ='ES-PV');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Extremadura' FROM location l WHERE l.iso_code ='ES-EX');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Galicia' FROM location l WHERE l.iso_code ='ES-GA');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Islas Baleares' FROM location l WHERE l.iso_code ='ES-IB');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'La Rioja' FROM location l WHERE l.iso_code ='ES-RI');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Madrid' FROM location l WHERE l.iso_code ='ES-MD');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Murcia' FROM location l WHERE l.iso_code ='ES-MC');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Navarra' FROM location l WHERE l.iso_code ='ES-NC');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Valencia' FROM location l WHERE l.iso_code ='ES-VC');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Ceuta' FROM location l WHERE l.iso_code ='ES-CE');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Melilla' FROM location l WHERE l.iso_code ='ES-ML');");
    }

    public function down(Schema $schema) : void
    {
        $this->addSql("DELETE FROM location WHERE parent_id IS NULL AND country_id ='ES';");
    }
}
