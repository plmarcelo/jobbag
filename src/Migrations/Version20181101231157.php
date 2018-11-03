<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181101231157 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        $this->addSql("INSERT INTO role (id, name) VALUES ('ADMIN', 'Administrador de sistema');");
        $this->addSql("INSERT INTO role (id, name) VALUES ('EMPLOYER', 'Empleador');");
        $this->addSql("INSERT INTO role (id, name) VALUES ('EMPLOYEE', 'Empleado');");
    }

    public function down(Schema $schema) : void
    {
        $this->addSql("DELETE FROM role WHERE id = 'EMPLOYEE';");
        $this->addSql("DELETE FROM role WHERE id = 'EMPLOYER';");
        $this->addSql("DELETE FROM role WHERE id = 'ADMIN';");
    }
}
