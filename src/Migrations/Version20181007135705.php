<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181007135705 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // Provincias cubanas
        $this->addSql("INSERT INTO location (iso_code, country_id, name) VALUES('CU-01', 'CU', 'Pinar del Río');");
        $this->addSql("INSERT INTO location (iso_code, country_id, name) VALUES('CU-03', 'CU', 'La Habana');");
        $this->addSql("INSERT INTO location (iso_code, country_id, name) VALUES('CU-04', 'CU', 'Matanzas');");
        $this->addSql("INSERT INTO location (iso_code, country_id, name) VALUES('CU-05', 'CU', 'Villa Clara');");
        $this->addSql("INSERT INTO location (iso_code, country_id, name) VALUES('CU-06', 'CU', 'Cienfuegos');");
        $this->addSql("INSERT INTO location (iso_code, country_id, name) VALUES('CU-07', 'CU', 'Sancti Spíritus');");
        $this->addSql("INSERT INTO location (iso_code, country_id, name) VALUES('CU-08', 'CU', 'Ciego de Ávila');");
        $this->addSql("INSERT INTO location (iso_code, country_id, name) VALUES('CU-09', 'CU', 'Camagüey');");
        $this->addSql("INSERT INTO location (iso_code, country_id, name) VALUES('CU-10', 'CU', 'Las Tunas');");
        $this->addSql("INSERT INTO location (iso_code, country_id, name) VALUES('CU-11', 'CU', 'Holguín');");
        $this->addSql("INSERT INTO location (iso_code, country_id, name) VALUES('CU-12', 'CU', 'Granma');");
        $this->addSql("INSERT INTO location (iso_code, country_id, name) VALUES('CU-13', 'CU', 'Santiago de Cuba');");
        $this->addSql("INSERT INTO location (iso_code, country_id, name) VALUES('CU-14', 'CU', 'Guantánamo');");
        $this->addSql("INSERT INTO location (iso_code, country_id, name) VALUES('CU-15', 'CU', 'Artemisa');");
        $this->addSql("INSERT INTO location (iso_code, country_id, name) VALUES('CU-16', 'CU', 'Mayabeque');");
        $this->addSql("INSERT INTO location (iso_code, country_id, name) VALUES('CU-99', 'CU', 'Isla de la Juventud');");

        // Provincias cubanas en español
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Pinar del Río' FROM location l WHERE l.iso_code ='CU-01');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'La Habana' FROM location l WHERE l.iso_code ='CU-03');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Matanzas' FROM location l WHERE l.iso_code ='CU-04');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Villa Clara' FROM location l WHERE l.iso_code ='CU-05');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Cienfuegos' FROM location l WHERE l.iso_code ='CU-06');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Sancti Spíritus' FROM location l WHERE l.iso_code ='CU-07');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Ciego de Ávila' FROM location l WHERE l.iso_code ='CU-08');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Camagüey' FROM location l WHERE l.iso_code ='CU-09');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Las Tunas' FROM location l WHERE l.iso_code ='CU-10');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Holguín' FROM location l WHERE l.iso_code ='CU-11');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Granma' FROM location l WHERE l.iso_code ='CU-12');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Santiago de Cuba' FROM location l WHERE l.iso_code ='CU-13');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Guantánamo' FROM location l WHERE l.iso_code ='CU-14');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Artemisa' FROM location l WHERE l.iso_code ='CU-15');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Mayabeque' FROM location l WHERE l.iso_code ='CU-16');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Isla de la Juventud' FROM location l WHERE l.iso_code ='CU-99');");

        // Provincias cubanas en inglés
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Pinar del Rio' FROM location l WHERE l.iso_code ='CU-01');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Havana' FROM location l WHERE l.iso_code ='CU-03');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Matanzas' FROM location l WHERE l.iso_code ='CU-04');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Villa Clara' FROM location l WHERE l.iso_code ='CU-05');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Cienfuegos' FROM location l WHERE l.iso_code ='CU-06');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Sancti Spiritus' FROM location l WHERE l.iso_code ='CU-07');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Ciego de Avila' FROM location l WHERE l.iso_code ='CU-08');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Camaguey' FROM location l WHERE l.iso_code ='CU-09');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Las Tunas' FROM location l WHERE l.iso_code ='CU-10');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Holguin' FROM location l WHERE l.iso_code ='CU-11');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Granma' FROM location l WHERE l.iso_code ='CU-12');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Santiago de Cuba' FROM location l WHERE l.iso_code ='CU-13');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Guantanamo' FROM location l WHERE l.iso_code ='CU-14');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Artemisa' FROM location l WHERE l.iso_code ='CU-15');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Mayabeque' FROM location l WHERE l.iso_code ='CU-16');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Isla de la Juventud' FROM location l WHERE l.iso_code ='CU-99');");
    }

    public function down(Schema $schema) : void
    {
        $this->addSql("DELETE FROM location WHERE parent_id IS NULL AND country_id = 'CU';");
    }
}
