<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180813203920 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        $this->addSql("INSERT INTO language (id, name) VALUES ('es', 'Español');");
        $this->addSql("INSERT INTO language (id, name) VALUES ('en', 'English');");
    }

    public function down(Schema $schema) : void
    {
        $this->addSql("DELETE FROM language WHERE  id = 'es';");
        $this->addSql("DELETE FROM language WHERE  id = 'en';");
    }
}
