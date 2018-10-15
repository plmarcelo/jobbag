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
        $this->addSql("INSERT INTO country (id, name, active) VALUES ('CU', 'Cuba', 1);");
        $this->addSql("INSERT INTO country (id, name, active) VALUES ('CA', 'Canadá', 1);");
        $this->addSql("INSERT INTO country (id, name, active) VALUES ('ES', 'España', 1);");

        $this->addSql("INSERT INTO country_language (country_id, language_id, name) VALUES ('CU', 'es', 'Cuba');");
        $this->addSql("INSERT INTO country_language (country_id, language_id, name) VALUES ('CA', 'es', 'Canadá');");
        $this->addSql("INSERT INTO country_language (country_id, language_id, name) VALUES ('ES', 'es', 'España');");
        $this->addSql("INSERT INTO country_language (country_id, language_id, name) VALUES ('CU', 'en', 'Cuba');");
        $this->addSql("INSERT INTO country_language (country_id, language_id, name) VALUES ('CA', 'en', 'Canada');");
        $this->addSql("INSERT INTO country_language (country_id, language_id, name) VALUES ('ES', 'en', 'Spain');");
    }

    public function down(Schema $schema) : void
    {
        $this->addSql("DELETE FROM country WHERE  id = 'CU';");
        $this->addSql("DELETE FROM country WHERE  id = 'CA';");
        $this->addSql("DELETE FROM country WHERE  id = 'ES';");
    }
}
