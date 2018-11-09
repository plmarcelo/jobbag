<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181108222511 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // Provincias de Canada
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ON', l.id, 'Ontario' FROM location l WHERE l.iso_code = 'CA');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'QC', l.id, 'Quebec' FROM location l WHERE l.iso_code = 'CA');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'NS', l.id, 'Nova Scotia' FROM location l WHERE l.iso_code = 'CA');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'NB', l.id, 'New Brunswick' FROM location l WHERE l.iso_code = 'CA');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'MB', l.id, 'Manitoba' FROM location l WHERE l.iso_code = 'CA');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'BC', l.id, 'British Columbia' FROM location l WHERE l.iso_code = 'CA');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'PE', l.id, 'Prince Edward Island' FROM location l WHERE l.iso_code = 'CA');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'SK', l.id, 'Saskatchewan' FROM location l WHERE l.iso_code = 'CA');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'AB', l.id, 'Alberta' FROM location l WHERE l.iso_code = 'CA');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'NL', l.id, 'Newfoundland and Labrador' FROM location l WHERE l.iso_code = 'CA');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'NT', l.id, 'Northwest Territories' FROM location l WHERE l.iso_code = 'CA');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'YT', l.id, 'Yukon ' FROM location l WHERE l.iso_code = 'CA');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'NU', l.id, 'Nunavut' FROM location l WHERE l.iso_code = 'CA');");

        // Provincias de Canadá en español
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Ontario' FROM location l WHERE l.iso_code = 'ON');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Quebec' FROM location l WHERE l.iso_code = 'QC');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Nueva Escocia' FROM location l WHERE l.iso_code = 'NS');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Nuevo Brunswick' FROM location l WHERE l.iso_code = 'NB');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Manitoba' FROM location l WHERE l.iso_code = 'MB');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Columbia Británica' FROM location l WHERE l.iso_code = 'BC');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Isla del Príncipe Eduardo' FROM location l WHERE l.iso_code = 'PE');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Saskatchewan' FROM location l WHERE l.iso_code = 'SK');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Alberta' FROM location l WHERE l.iso_code = 'AB');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Terranova and Labrador' FROM location l WHERE l.iso_code = 'NL');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Territorios del Noroeste' FROM location l WHERE l.iso_code = 'NT');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Yukón ' FROM location l WHERE l.iso_code = 'YT');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Nunavut' FROM location l WHERE l.iso_code = 'NU');");

        // Provincias de Canadá en inglés
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Ontario' FROM location l WHERE l.iso_code = 'ON');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Quebec' FROM location l WHERE l.iso_code = 'QC');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Nova Scotia' FROM location l WHERE l.iso_code = 'NS');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'New Brunswick' FROM location l WHERE l.iso_code = 'NB');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Manitoba' FROM location l WHERE l.iso_code = 'MB');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'British Columbia' FROM location l WHERE l.iso_code = 'BC');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Prince Edward Island' FROM location l WHERE l.iso_code = 'PE');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Saskatchewan' FROM location l WHERE l.iso_code = 'SK');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Alberta' FROM location l WHERE l.iso_code = 'AB');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Newfoundland and Labrador' FROM location l WHERE l.iso_code = 'NL');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Northwest Territories' FROM location l WHERE l.iso_code = 'NT');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Yukon ' FROM location l WHERE l.iso_code = 'YT');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Nunavut' FROM location l WHERE l.iso_code = 'NU');");
    }

    public function down(Schema $schema) : void
    {
        $this->addSql("DELETE l FROM location l, location p WHERE l.parent_id = p.id AND p.iso_code = 'CA';");
    }
}
