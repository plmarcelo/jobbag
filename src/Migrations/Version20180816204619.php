<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180816204619 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        $this->addSql("INSERT INTO scholarship (id, name) VALUES ('EP', 'Educación Primaria');");
        $this->addSql("INSERT INTO scholarship (id, name) VALUES ('ES', 'Educación Secundaria');");
        $this->addSql("INSERT INTO scholarship (id, name) VALUES ('BA', 'Bachillerato');");
        $this->addSql("INSERT INTO scholarship (id, name) VALUES ('FP', 'Formación Profesional');");
        $this->addSql("INSERT INTO scholarship (id, name) VALUES ('EU', 'Educación Universitaria');");

        $this->addSql("INSERT INTO scholarship_language (scholarship_id, language_id, name) SELECT p.id, 'es', 'Educación Primaria' FROM scholarship p WHERE p.name = 'Educación Primaria';");
        $this->addSql("INSERT INTO scholarship_language (scholarship_id, language_id, name) SELECT p.id, 'es', 'Educación Secundaria' FROM scholarship p WHERE p.name = 'Educación Secundaria';");
        $this->addSql("INSERT INTO scholarship_language (scholarship_id, language_id, name) SELECT p.id, 'es', 'Bachillerato' FROM scholarship p WHERE p.name = 'Bachillerato';");
        $this->addSql("INSERT INTO scholarship_language (scholarship_id, language_id, name) SELECT p.id, 'es', 'Formación Profesional' FROM scholarship p WHERE p.name = 'Formación Profesional';");
        $this->addSql("INSERT INTO scholarship_language (scholarship_id, language_id, name) SELECT p.id, 'es', 'Educación Universitaria' FROM scholarship p WHERE p.name = 'Educación Universitaria';");
        $this->addSql("INSERT INTO scholarship_language (scholarship_id, language_id, name) SELECT p.id, 'en', 'Elementary Education' FROM scholarship p WHERE p.name = 'Educación Primaria';");
        $this->addSql("INSERT INTO scholarship_language (scholarship_id, language_id, name) SELECT p.id, 'en', 'Secondary Education' FROM scholarship p WHERE p.name = 'Educación Secundaria';");
        $this->addSql("INSERT INTO scholarship_language (scholarship_id, language_id, name) SELECT p.id, 'en', 'High School' FROM scholarship p WHERE p.name = 'Bachillerato';");
        $this->addSql("INSERT INTO scholarship_language (scholarship_id, language_id, name) SELECT p.id, 'en', 'College' FROM scholarship p WHERE p.name = 'Formación Profesional';");
        $this->addSql("INSERT INTO scholarship_language (scholarship_id, language_id, name) SELECT p.id, 'en', 'Bachelor\'s Degree' FROM scholarship p WHERE p.name = 'Educación Universitaria';");
    }

    public function down(Schema $schema) : void
    {
        $this->addSql("DELETE FROM scholarship WHERE id = 'EP';");
        $this->addSql("DELETE FROM scholarship WHERE id = 'ES';");
        $this->addSql("DELETE FROM scholarship WHERE id = 'BA';");
        $this->addSql("DELETE FROM scholarship WHERE id = 'FP';");
        $this->addSql("DELETE FROM scholarship WHERE id = 'EU';");
    }
}
