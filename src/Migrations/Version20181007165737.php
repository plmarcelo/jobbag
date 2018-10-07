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
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-AN', l.id, 'Andalucía' FROM location l WHERE l.iso_code ='ES');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-AR', l.id, 'Aragón' FROM location l WHERE l.iso_code ='ES');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-AS', l.id, 'Principado de Asturias' FROM location l WHERE l.iso_code ='ES');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-CN', l.id, 'Canarias' FROM location l WHERE l.iso_code ='ES');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-CB', l.id, 'Cantabria' FROM location l WHERE l.iso_code ='ES');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-CL', l.id, 'Castilla y León' FROM location l WHERE l.iso_code ='ES');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-CM', l.id, 'Castilla La Mancha' FROM location l WHERE l.iso_code ='ES');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-CT', l.id, 'Cataluña' FROM location l WHERE l.iso_code ='ES');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-PV', l.id, 'País Vasco' FROM location l WHERE l.iso_code ='ES');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-EX', l.id, 'Extremadura' FROM location l WHERE l.iso_code ='ES');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-GA', l.id, 'Galicia' FROM location l WHERE l.iso_code ='ES');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-IB', l.id, 'Islas Baleares' FROM location l WHERE l.iso_code ='ES');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-RI', l.id, 'La Rioja' FROM location l WHERE l.iso_code ='ES');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-MD', l.id, 'Madrid' FROM location l WHERE l.iso_code ='ES');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-MC', l.id, 'Murcia' FROM location l WHERE l.iso_code ='ES');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-NC', l.id, 'Navarra' FROM location l WHERE l.iso_code ='ES');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-VC', l.id, 'Valencia' FROM location l WHERE l.iso_code ='ES');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-CE', l.id, 'Ceuta' FROM location l WHERE l.iso_code ='ES');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-ML', l.id, 'Melilla' FROM location l WHERE l.iso_code ='ES');");

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
        $this->addSql("DELETE l FROM location l, location p WHERE l.parent_id = p.id AND p.iso_code ='ES';");
    }
}
