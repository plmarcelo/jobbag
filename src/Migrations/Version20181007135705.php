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
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'CU-01', l.id, 'Pinar del Río' FROM location l WHERE l.iso_code = 'CU');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'CU-03', l.id, 'La Habana' FROM location l WHERE l.iso_code = 'CU');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'CU-04', l.id, 'Matanzas' FROM location l WHERE l.iso_code = 'CU');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'CU-05', l.id, 'Villa Clara' FROM location l WHERE l.iso_code = 'CU');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'CU-06', l.id, 'Cienfuegos' FROM location l WHERE l.iso_code = 'CU');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'CU-07', l.id, 'Sancti Spíritus' FROM location l WHERE l.iso_code = 'CU');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'CU-08', l.id, 'Ciego de Ávila' FROM location l WHERE l.iso_code = 'CU');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'CU-09', l.id, 'Camagüey' FROM location l WHERE l.iso_code = 'CU');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'CU-10', l.id, 'Las Tunas' FROM location l WHERE l.iso_code = 'CU');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'CU-11', l.id, 'Holguín' FROM location l WHERE l.iso_code = 'CU');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'CU-12', l.id, 'Granma' FROM location l WHERE l.iso_code = 'CU');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'CU-13', l.id, 'Santiago de Cuba' FROM location l WHERE l.iso_code = 'CU');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'CU-14', l.id, 'Guantánamo' FROM location l WHERE l.iso_code = 'CU');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'CU-15', l.id, 'Artemisa' FROM location l WHERE l.iso_code = 'CU');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'CU-16', l.id, 'Mayabeque' FROM location l WHERE l.iso_code = 'CU');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'CU-99', l.id, 'Isla de la Juventud' FROM location l WHERE l.iso_code = 'CU');");

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
        $this->addSql("DELETE l FROM location l, location p WHERE l.parent_id = p.id AND p.iso_code = 'CU';");
    }
}
