<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181028115221 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        $this->addSql("INSERT INTO project_status_language (project_status_id, language_id, description) VALUES ('new', 'es', 'Nuevo');");
        $this->addSql("INSERT INTO project_status_language (project_status_id, language_id, description) VALUES ('clo', 'es', 'Cerrado');");
        $this->addSql("INSERT INTO project_status_language (project_status_id, language_id, description) VALUES ('can', 'es', 'Cancelado');");
        $this->addSql("INSERT INTO project_status_language (project_status_id, language_id, description) VALUES ('fin', 'es', 'Finalizado');");
        $this->addSql("INSERT INTO project_status_language (project_status_id, language_id, description) VALUES ('new', 'en', 'New');");
        $this->addSql("INSERT INTO project_status_language (project_status_id, language_id, description) VALUES ('clo', 'en', 'Closed');");
        $this->addSql("INSERT INTO project_status_language (project_status_id, language_id, description) VALUES ('can', 'en', 'Canceled');");
        $this->addSql("INSERT INTO project_status_language (project_status_id, language_id, description) VALUES ('fin', 'en', 'Finished');");
    }

    public function down(Schema $schema) : void
    {
        $this->addSql("DELETE FROM project_status_language WHERE project_status_id = 'new' AND language_id = 'es';");
        $this->addSql("DELETE FROM project_status_language WHERE project_status_id = 'clo' AND language_id = 'es';");
        $this->addSql("DELETE FROM project_status_language WHERE project_status_id = 'can' AND language_id = 'es';");
        $this->addSql("DELETE FROM project_status_language WHERE project_status_id = 'fin' AND language_id = 'es';");
        $this->addSql("DELETE FROM project_status_language WHERE project_status_id = 'new' AND language_id = 'en';");
        $this->addSql("DELETE FROM project_status_language WHERE project_status_id = 'clo' AND language_id = 'en';");
        $this->addSql("DELETE FROM project_status_language WHERE project_status_id = 'can' AND language_id = 'en';");
        $this->addSql("DELETE FROM project_status_language WHERE project_status_id = 'fin' AND language_id = 'en';");
    }
}
