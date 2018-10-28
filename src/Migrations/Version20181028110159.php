<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181028110159 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        $this->addSql("INSERT INTO project_status (id, description, visible) VALUES ('new', 'Nuevo', 1);");
        $this->addSql("INSERT INTO project_status (id, description, visible) VALUES ('clo', 'Cerrado', 0);");
        $this->addSql("INSERT INTO project_status (id, description, visible) VALUES ('can', 'Cancelado', 0);");
        $this->addSql("INSERT INTO project_status (id, description, visible) VALUES ('fin', 'Finalizado', 0);");
    }

    public function down(Schema $schema) : void
    {
        $this->addSql("DELETE FROM project_status WHERE  id = 'new';");
        $this->addSql("DELETE FROM project_status WHERE  id = 'clo';");
        $this->addSql("DELETE FROM project_status WHERE  id = 'can';");
        $this->addSql("DELETE FROM project_status WHERE  id = 'fin';");
    }
}
