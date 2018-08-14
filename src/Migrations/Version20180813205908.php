<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180813205908 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        $this->addSql("INSERT INTO profession (name, deleted, created_at, updated_at) VALUES ('Carpintero', 0, NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, deleted, created_at, updated_at) VALUES ('Albañil', 0, NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, deleted, created_at, updated_at) VALUES ('Plomero', 0, NOW(), NOW());");
        $this->addSql("INSERT INTO profession (name, deleted, created_at, updated_at) VALUES ('Electricista', 0, NOW(), NOW());");

        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) SELECT p.id, 'es', 'Carpintero' FROM profession p WHERE p.name = 'Carpintero';");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) SELECT p.id, 'en', 'Carpenter' FROM profession p WHERE p.name = 'Carpintero';");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) SELECT p.id, 'es', 'Albañil' FROM profession p WHERE p.name = 'Albañil';");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) SELECT p.id, 'en', 'Builder' FROM profession p WHERE p.name = 'Albañil';");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) SELECT p.id, 'es', 'Plomero' FROM profession p WHERE p.name = 'Plomero';");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) SELECT p.id, 'en', 'Plumber' FROM profession p WHERE p.name = 'Plomero';");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) SELECT p.id, 'es', 'Electricista' FROM profession p WHERE p.name = 'Electricista';");
        $this->addSql("INSERT INTO profession_language (profession_id, language_id, name) SELECT p.id, 'en', 'Electrician' FROM profession p WHERE p.name = 'Electricista';");
    }

    public function down(Schema $schema) : void
    {
        $this->addSql("DELETE FROM profession WHERE  name = 'Carpintero';");
        $this->addSql("DELETE FROM profession WHERE  name = 'Albañil';");
        $this->addSql("DELETE FROM profession WHERE  name = 'Plomero';");
        $this->addSql("DELETE FROM profession WHERE  name = 'Electricista';");
    }
}
