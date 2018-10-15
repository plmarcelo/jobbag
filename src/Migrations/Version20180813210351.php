<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180813210351 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        $this->addSql("INSERT INTO location (iso_code, name) VALUES ('CU', 'Cuba');");
        $this->addSql("INSERT INTO location (iso_code, name) VALUES ('CA', 'Canadá');");
        $this->addSql("INSERT INTO location (iso_code, name) VALUES ('ES', 'España');");

        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Cuba' FROM location l WHERE l.iso_code = 'CU');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Canadá' FROM location l WHERE l.iso_code = 'CA');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'España' FROM location l WHERE l.iso_code = 'ES');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Cuba' FROM location l WHERE l.iso_code = 'CU');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Canada' FROM location l WHERE l.iso_code = 'CA');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Spain' FROM location l WHERE l.iso_code = 'ES');");
    }

    public function down(Schema $schema) : void
    {
        $this->addSql("DELETE FROM location WHERE iso_code = 'CU';");
        $this->addSql("DELETE FROM location WHERE iso_code = 'CA';");
        $this->addSql("DELETE FROM location WHERE iso_code = 'ES';");
    }
}
