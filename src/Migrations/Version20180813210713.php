<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180813210713 extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        $this->addSql("INSERT INTO province (id, name, country_id) VALUES ('CU-01', 'Pinar del Río', 'CU')");
        $this->addSql("INSERT INTO province (id, name, country_id) VALUES ('CU-03', 'La Habana', 'CU')");
        $this->addSql("INSERT INTO province (id, name, country_id) VALUES ('CU-04', 'Matanzas', 'CU')");
        $this->addSql("INSERT INTO province (id, name, country_id) VALUES ('CU-05', 'Villa Clara', 'CU')");
        $this->addSql("INSERT INTO province (id, name, country_id) VALUES ('CU-06', 'Cienfuegos', 'CU')");
        $this->addSql("INSERT INTO province (id, name, country_id) VALUES ('CU-07', 'Sancti Spíritus', 'CU')");
        $this->addSql("INSERT INTO province (id, name, country_id) VALUES ('CU-08', 'Ciego de Ávila', 'CU')");
        $this->addSql("INSERT INTO province (id, name, country_id) VALUES ('CU-09', 'Camagüey', 'CU')");
        $this->addSql("INSERT INTO province (id, name, country_id) VALUES ('CU-10', 'Las Tunas', 'CU')");
        $this->addSql("INSERT INTO province (id, name, country_id) VALUES ('CU-11', 'Holguín', 'CU')");
        $this->addSql("INSERT INTO province (id, name, country_id) VALUES ('CU-12', 'Granma', 'CU')");
        $this->addSql("INSERT INTO province (id, name, country_id) VALUES ('CU-13', 'Santiago de Cuba', 'CU')");
        $this->addSql("INSERT INTO province (id, name, country_id) VALUES ('CU-14', 'Guantánamo', 'CU')");
        $this->addSql("INSERT INTO province (id, name, country_id) VALUES ('CU-15', 'Artemisa', 'CU')");
        $this->addSql("INSERT INTO province (id, name, country_id) VALUES ('CU-16', 'Mayabeque', 'CU')");
        $this->addSql("INSERT INTO province (id, name, country_id) VALUES ('CU-99', 'Isla de la Juventud', 'CU')");
    }

    public function down(Schema $schema): void
    {
        $this->addSql("DELETE FROM province WHERE country_id = 'CU';");
    }
}
