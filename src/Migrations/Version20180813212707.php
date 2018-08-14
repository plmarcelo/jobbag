<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180813212707 extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        $this->addSql("INSERT INTO city (name, province_id) VALUES ('Bahía Honda', 'CU-01');");
        $this->addSql("INSERT INTO city (name, province_id) VALUES ('Candelaria', 'CU-01');");
        $this->addSql("INSERT INTO city (name, province_id) VALUES ('Consolación del Sur', 'CU-01');");
        $this->addSql("INSERT INTO city (name, province_id) VALUES ('Guane', 'CU-01');");
        $this->addSql("INSERT INTO city (name, province_id) VALUES ('La Palma', 'CU-01');");
        $this->addSql("INSERT INTO city (name, province_id) VALUES ('Los Palacios', 'CU-01');");
        $this->addSql("INSERT INTO city (name, province_id) VALUES ('Mantua', 'CU-01');");
        $this->addSql("INSERT INTO city (name, province_id) VALUES ('Minas de Matahambre', 'CU-01');");
        $this->addSql("INSERT INTO city (name, province_id) VALUES ('Pinar del Río', 'CU-01');");
        $this->addSql("INSERT INTO city (name, province_id) VALUES ('San Cristóbal', 'CU-01');");
        $this->addSql("INSERT INTO city (name, province_id) VALUES ('San Juan y Martínez', 'CU-01');");
        $this->addSql("INSERT INTO city (name, province_id) VALUES ('San Luis', 'CU-01');");
        $this->addSql("INSERT INTO city (name, province_id) VALUES ('Sandino', 'CU-01');");
        $this->addSql("INSERT INTO city (name, province_id) VALUES ('Viñales', 'CU-01');");

        $this->addSql("INSERT INTO city (name, province_id) VALUES ('Arroyo Naranjo', 'CU-03');");
        $this->addSql("INSERT INTO city (name, province_id) VALUES ('Boyeros', 'CU-03');");
        $this->addSql("INSERT INTO city (name, province_id) VALUES ('Centro Habana', 'CU-03');");
        $this->addSql("INSERT INTO city (name, province_id) VALUES ('Cerro', 'CU-03');");
        $this->addSql("INSERT INTO city (name, province_id) VALUES ('Cotorro', 'CU-03');");
        $this->addSql("INSERT INTO city (name, province_id) VALUES ('Diez de Octubre', 'CU-03');");
        $this->addSql("INSERT INTO city (name, province_id) VALUES ('Guanabacoa', 'CU-03');");
        $this->addSql("INSERT INTO city (name, province_id) VALUES ('La Habana del Este', 'CU-03');");
        $this->addSql("INSERT INTO city (name, province_id) VALUES ('La Habana Vieja', 'CU-03');");
        $this->addSql("INSERT INTO city (name, province_id) VALUES ('La Lisa', 'CU-03');");
        $this->addSql("INSERT INTO city (name, province_id) VALUES ('Marianao', 'CU-03');");
        $this->addSql("INSERT INTO city (name, province_id) VALUES ('Playa', 'CU-03');");
        $this->addSql("INSERT INTO city (name, province_id) VALUES ('Plaza de la Revolución', 'CU-03');");
        $this->addSql("INSERT INTO city (name, province_id) VALUES ('Regla', 'CU-03');");
        $this->addSql("INSERT INTO city (name, province_id) VALUES ('San Miguel del Padrón', 'CU-03');");

        $this->addSql("INSERT INTO city (name, province_id) VALUES ('Calimete', 'CU-04');");
        $this->addSql("INSERT INTO city (name, province_id) VALUES ('Cárdenas', 'CU-04');");
        $this->addSql("INSERT INTO city (name, province_id) VALUES ('Cienaga de Zapata', 'CU-04');");
        $this->addSql("INSERT INTO city (name, province_id) VALUES ('Colón', 'CU-04');");
        $this->addSql("INSERT INTO city (name, province_id) VALUES ('Jagüey Grande', 'CU-04');");
        $this->addSql("INSERT INTO city (name, province_id) VALUES ('Jovellanos', 'CU-04');");
        $this->addSql("INSERT INTO city (name, province_id) VALUES ('Limonar', 'CU-04');");
        $this->addSql("INSERT INTO city (name, province_id) VALUES ('Los Arabos', 'CU-04');");
        $this->addSql("INSERT INTO city (name, province_id) VALUES ('Martí', 'CU-04');");
        $this->addSql("INSERT INTO city (name, province_id) VALUES ('Matanzas', 'CU-04');");
        $this->addSql("INSERT INTO city (name, province_id) VALUES ('Pedro Betancourt', 'CU-04');");
        $this->addSql("INSERT INTO city (name, province_id) VALUES ('Perico', 'CU-04');");
        $this->addSql("INSERT INTO city (name, province_id) VALUES ('Unión de Reyes', 'CU-04');");
        $this->addSql("INSERT INTO city (name, province_id) VALUES ('Varadero', 'CU-04');");
    }

    public function down(Schema $schema): void
    {
        $this->addSql("DELETE FROM city WHERE province_id = 'CU-01';");
        $this->addSql("DELETE FROM city WHERE province_id = 'CU-03';");
    }
}
