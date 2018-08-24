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

        $this->addSql("INSERT INTO province_language (province_id, language_id, name) VALUES ('CU-01', 'en', 'Pinar del Rio')");
        $this->addSql("INSERT INTO province_language (province_id, language_id, name) VALUES ('CU-03', 'en', 'Havana')");
        $this->addSql("INSERT INTO province_language (province_id, language_id, name) VALUES ('CU-04', 'en', 'Matanzas')");
        $this->addSql("INSERT INTO province_language (province_id, language_id, name) VALUES ('CU-05', 'en', 'Villa Clara')");
        $this->addSql("INSERT INTO province_language (province_id, language_id, name) VALUES ('CU-06', 'en', 'Cienfuegos')");
        $this->addSql("INSERT INTO province_language (province_id, language_id, name) VALUES ('CU-07', 'en', 'Sancti Spiritus')");
        $this->addSql("INSERT INTO province_language (province_id, language_id, name) VALUES ('CU-08', 'en', 'Ciego de Avila')");
        $this->addSql("INSERT INTO province_language (province_id, language_id, name) VALUES ('CU-09', 'en', 'Camaguey')");
        $this->addSql("INSERT INTO province_language (province_id, language_id, name) VALUES ('CU-10', 'en', 'Las Tunas')");
        $this->addSql("INSERT INTO province_language (province_id, language_id, name) VALUES ('CU-11', 'en', 'Holguin')");
        $this->addSql("INSERT INTO province_language (province_id, language_id, name) VALUES ('CU-12', 'en', 'Granma')");
        $this->addSql("INSERT INTO province_language (province_id, language_id, name) VALUES ('CU-13', 'en', 'Santiago de Cuba')");
        $this->addSql("INSERT INTO province_language (province_id, language_id, name) VALUES ('CU-14', 'en', 'Guantanamo')");
        $this->addSql("INSERT INTO province_language (province_id, language_id, name) VALUES ('CU-15', 'en', 'Artemisa')");
        $this->addSql("INSERT INTO province_language (province_id, language_id, name) VALUES ('CU-16', 'en', 'Mayabeque')");
        $this->addSql("INSERT INTO province_language (province_id, language_id, name) VALUES ('CU-99', 'en', 'Isla de la Juventud')");

        $this->addSql("INSERT INTO province_language (province_id, language_id, name) VALUES ('CU-01', 'es', 'Pinar del Río')");
        $this->addSql("INSERT INTO province_language (province_id, language_id, name) VALUES ('CU-03', 'es', 'La Habana')");
        $this->addSql("INSERT INTO province_language (province_id, language_id, name) VALUES ('CU-04', 'es', 'Matanzas')");
        $this->addSql("INSERT INTO province_language (province_id, language_id, name) VALUES ('CU-05', 'es', 'Villa Clara')");
        $this->addSql("INSERT INTO province_language (province_id, language_id, name) VALUES ('CU-06', 'es', 'Cienfuegos')");
        $this->addSql("INSERT INTO province_language (province_id, language_id, name) VALUES ('CU-07', 'es', 'Sancti Spíritus')");
        $this->addSql("INSERT INTO province_language (province_id, language_id, name) VALUES ('CU-08', 'es', 'Ciego de Ávila')");
        $this->addSql("INSERT INTO province_language (province_id, language_id, name) VALUES ('CU-09', 'es', 'Camagüey')");
        $this->addSql("INSERT INTO province_language (province_id, language_id, name) VALUES ('CU-10', 'es', 'Las Tunas')");
        $this->addSql("INSERT INTO province_language (province_id, language_id, name) VALUES ('CU-11', 'es', 'Holguín')");
        $this->addSql("INSERT INTO province_language (province_id, language_id, name) VALUES ('CU-12', 'es', 'Granma')");
        $this->addSql("INSERT INTO province_language (province_id, language_id, name) VALUES ('CU-13', 'es', 'Santiago de Cuba')");
        $this->addSql("INSERT INTO province_language (province_id, language_id, name) VALUES ('CU-14', 'es', 'Guantánamo')");
        $this->addSql("INSERT INTO province_language (province_id, language_id, name) VALUES ('CU-15', 'es', 'Artemisa')");
        $this->addSql("INSERT INTO province_language (province_id, language_id, name) VALUES ('CU-16', 'es', 'Mayabeque')");
        $this->addSql("INSERT INTO province_language (province_id, language_id, name) VALUES ('CU-99', 'es', 'Isla de la Juventud')");
    }

    public function down(Schema $schema): void
    {
        $this->addSql("DELETE FROM province WHERE country_id = 'CU';");
    }
}
