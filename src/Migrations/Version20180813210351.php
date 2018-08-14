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
        $this->addSql("INSERT INTO country (id, name) VALUES ('CU', 'Cuba');");
        $this->addSql("INSERT INTO country (id, name) VALUES ('CA', 'Canada');");

        $this->addSql("INSERT INTO country_language (country_id, language_id, name) VALUES ('CU', 'es', 'Cuba');");
        $this->addSql("INSERT INTO country_language (country_id, language_id, name) VALUES ('CU', 'en', 'Cuba');");
        $this->addSql("INSERT INTO country_language (country_id, language_id, name) VALUES ('CA', 'es', 'Canadá');");
        $this->addSql("INSERT INTO country_language (country_id, language_id, name) VALUES ('CA', 'en', 'Canada');");
    }

    public function down(Schema $schema) : void
    {
        $this->addSql("DELETE FROM country WHERE id = 'CA';");
        $this->addSql("DELETE FROM country WHERE id = 'CU';");
    }
}
