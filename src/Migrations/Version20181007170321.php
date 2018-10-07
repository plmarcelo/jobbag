<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181007170321 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // Provincias de España
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-VI', l.id, 'Álava' FROM location l WHERE l.iso_code ='ES-PV');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-AB', l.id, 'Albacete' FROM location l WHERE l.iso_code ='ES-AB');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-A', l.id, 'Alicante' FROM location l WHERE l.iso_code ='ES-VC');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-AL', l.id, 'Almería' FROM location l WHERE l.iso_code ='ES-AN');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-O', l.id, 'Asturias' FROM location l WHERE l.iso_code ='ES-AS');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-AV', l.id, 'Ávila' FROM location l WHERE l.iso_code ='ES-CL');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-BA', l.id, 'Badajoz' FROM location l WHERE l.iso_code ='ES-EX');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-PM', l.id, 'Baleares' FROM location l WHERE l.iso_code ='ES-IB');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-B', l.id, 'Barcelona' FROM location l WHERE l.iso_code ='ES-CT');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-BI', l.id, 'Vizcaya' FROM location l WHERE l.iso_code ='ES-PV');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-BU', l.id, 'Burgos' FROM location l WHERE l.iso_code ='ES-CL');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-CC', l.id, 'Cáceres' FROM location l WHERE l.iso_code ='ES-EX');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-CA', l.id, 'Cádiz' FROM location l WHERE l.iso_code ='ES-AN');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-S', l.id, 'Cantabria' FROM location l WHERE l.iso_code ='ES-CB');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-CS', l.id, 'Castellón' FROM location l WHERE l.iso_code ='ES-VC');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-CR', l.id, 'Ciudad Real' FROM location l WHERE l.iso_code ='ES-CM');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-CO', l.id, 'Córdoba' FROM location l WHERE l.iso_code ='ES-AN');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-CU', l.id, 'Cuenca' FROM location l WHERE l.iso_code ='ES-CM');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-SS', l.id, 'Guipúzcoa' FROM location l WHERE l.iso_code ='ES-PV');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-GI', l.id, 'Gerona' FROM location l WHERE l.iso_code ='ES-CT');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-GR', l.id, 'Granada' FROM location l WHERE l.iso_code ='ES-AN');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-GU', l.id, 'Guadalajara' FROM location l WHERE l.iso_code ='ES-CM');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-H', l.id, 'Huelva' FROM location l WHERE l.iso_code ='ES-AN');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-HU', l.id, 'Huesca' FROM location l WHERE l.iso_code ='ES-AR');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-J', l.id, 'Jaén' FROM location l WHERE l.iso_code ='ES-AN');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-LO', l.id, 'La Rioja' FROM location l WHERE l.iso_code ='ES-RI');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-GC', l.id, 'Las Palmas' FROM location l WHERE l.iso_code ='ES-CN');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-LE', l.id, 'León' FROM location l WHERE l.iso_code ='ES-CL');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-L', l.id, 'Lérida' FROM location l WHERE l.iso_code ='ES-CT');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-LU', l.id, 'Lugo' FROM location l WHERE l.iso_code ='ES-GA');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-M', l.id, 'Madrid' FROM location l WHERE l.iso_code ='ES-MD');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-MA', l.id, 'Málaga' FROM location l WHERE l.iso_code ='ES-AN');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-MU', l.id, 'Murcia' FROM location l WHERE l.iso_code ='ES-MC');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-NA', l.id, 'Navarra' FROM location l WHERE l.iso_code ='ES-NC');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-OR', l.id, 'Orense' FROM location l WHERE l.iso_code ='ES-GA');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-P', l.id, 'Palencia' FROM location l WHERE l.iso_code ='ES-CL');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-PO', l.id, 'Pontevedra' FROM location l WHERE l.iso_code ='ES-GA');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-SA', l.id, 'Salamanca' FROM location l WHERE l.iso_code ='ES-CL');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-TF', l.id, 'Santa Cruz de Tenerife' FROM location l WHERE l.iso_code ='ES-CN');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-SG', l.id, 'Segovia' FROM location l WHERE l.iso_code ='ES-CL');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-SE', l.id, 'Sevilla' FROM location l WHERE l.iso_code ='ES-AN');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-SO', l.id, 'Soria' FROM location l WHERE l.iso_code ='ES-CL');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-T', l.id, 'Tarragona' FROM location l WHERE l.iso_code ='ES-CT');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-TE', l.id, 'Teruel' FROM location l WHERE l.iso_code ='ES-AR');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-TO', l.id, 'Toledo' FROM location l WHERE l.iso_code ='ES-CM');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-V', l.id, 'Valencia' FROM location l WHERE l.iso_code ='ES-VC');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-VA', l.id, 'Valladolid' FROM location l WHERE l.iso_code ='EX-CL');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-ZA', l.id, 'Zamora' FROM location l WHERE l.iso_code ='ES-CL');");
        $this->addSql("INSERT INTO location (iso_code, parent_id, name) (SELECT 'ES-Z', l.id, 'Zaragoza' FROM location l WHERE l.iso_code ='ES-AR');");

        // Provincias de España en español
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'A Coruña' FROM location l WHERE l.iso_code ='ES-C');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Álava' FROM location l WHERE l.iso_code ='ES-VI');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Albacete' FROM location l WHERE l.iso_code ='ES-AB');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Alicante' FROM location l WHERE l.iso_code ='ES-A');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Almería' FROM location l WHERE l.iso_code ='ES-AL');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Asturias' FROM location l WHERE l.iso_code ='ES-O');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Ávila' FROM location l WHERE l.iso_code ='ES-AV');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Badajoz' FROM location l WHERE l.iso_code ='ES-BA');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Baleares' FROM location l WHERE l.iso_code ='ES-PM');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Barcelona' FROM location l WHERE l.iso_code ='ES-B');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Vizcaya' FROM location l WHERE l.iso_code ='ES-BI');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Burgos' FROM location l WHERE l.iso_code ='ES-BU');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Cáceres' FROM location l WHERE l.iso_code ='ES-CC');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Cádiz' FROM location l WHERE l.iso_code ='ES-CA');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Cantabria' FROM location l WHERE l.iso_code ='ES-S');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Castellón' FROM location l WHERE l.iso_code ='ES-CS');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Ciudad Real' FROM location l WHERE l.iso_code ='ES-CR');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Córdoba' FROM location l WHERE l.iso_code ='ES-CO');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Cuenca' FROM location l WHERE l.iso_code ='ES-CU');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Guipúzcoa' FROM location l WHERE l.iso_code ='ES-SS');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Gerona' FROM location l WHERE l.iso_code ='ES-GI');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Granada' FROM location l WHERE l.iso_code ='ES-GR');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Guadalajara' FROM location l WHERE l.iso_code ='ES-GU');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Huelva' FROM location l WHERE l.iso_code ='ES-H');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Huesca' FROM location l WHERE l.iso_code ='ES-HU');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Jaén' FROM location l WHERE l.iso_code ='ES-J');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'La Rioja' FROM location l WHERE l.iso_code ='ES-LO');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Las Palmas' FROM location l WHERE l.iso_code ='ES-GC');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'León' FROM location l WHERE l.iso_code ='ES-LE');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Lérida' FROM location l WHERE l.iso_code ='ES-L');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Lugo' FROM location l WHERE l.iso_code ='ES-LU');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Madrid' FROM location l WHERE l.iso_code ='ES-M');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Málaga' FROM location l WHERE l.iso_code ='ES-MA');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Murcia' FROM location l WHERE l.iso_code ='ES-MU');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Navarra' FROM location l WHERE l.iso_code ='ES-NA');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Orense' FROM location l WHERE l.iso_code ='ES-OR');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Palencia' FROM location l WHERE l.iso_code ='ES-P');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Pontevedra' FROM location l WHERE l.iso_code ='ES-PO');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Salamanca' FROM location l WHERE l.iso_code ='ES-SA');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Santa Cruz de Tenerife' FROM location l WHERE l.iso_code ='ES-TF');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Segovia' FROM location l WHERE l.iso_code ='ES-SG');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Sevilla' FROM location l WHERE l.iso_code ='ES-SE');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Soria' FROM location l WHERE l.iso_code ='ES-SO');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Tarragona' FROM location l WHERE l.iso_code ='ES-T');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Teruel' FROM location l WHERE l.iso_code ='ES-TE');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Toledo' FROM location l WHERE l.iso_code ='ES-TO');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Valencia' FROM location l WHERE l.iso_code ='ES-V');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Valladolid' FROM location l WHERE l.iso_code ='ES-VA');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Zamora' FROM location l WHERE l.iso_code ='ES-ZA');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'es', 'Zaragoza' FROM location l WHERE l.iso_code ='ES-Z');");

        // Provincias de España en inglés
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'A Coruna' FROM location l WHERE l.iso_code ='ES-C');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Alava' FROM location l WHERE l.iso_code ='ES-VI');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Albacete' FROM location l WHERE l.iso_code ='ES-AB');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Alicante' FROM location l WHERE l.iso_code ='ES-A');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Almeria' FROM location l WHERE l.iso_code ='ES-AL');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Asturias' FROM location l WHERE l.iso_code ='ES-O');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Avila' FROM location l WHERE l.iso_code ='ES-AV');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Badajoz' FROM location l WHERE l.iso_code ='ES-BA');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Baleares' FROM location l WHERE l.iso_code ='ES-PM');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Barcelona' FROM location l WHERE l.iso_code ='ES-B');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Vizcaya' FROM location l WHERE l.iso_code ='ES-BI');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Burgos' FROM location l WHERE l.iso_code ='ES-BU');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Caceres' FROM location l WHERE l.iso_code ='ES-CC');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Cadiz' FROM location l WHERE l.iso_code ='ES-CA');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Cantabria' FROM location l WHERE l.iso_code ='ES-S');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Castellon' FROM location l WHERE l.iso_code ='ES-CS');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Ciudad Real' FROM location l WHERE l.iso_code ='ES-CR');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Cordoba' FROM location l WHERE l.iso_code ='ES-CO');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Cuenca' FROM location l WHERE l.iso_code ='ES-CU');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Guipuzcoa' FROM location l WHERE l.iso_code ='ES-SS');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Gerona' FROM location l WHERE l.iso_code ='ES-GI');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Granada' FROM location l WHERE l.iso_code ='ES-GR');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Guadalajara' FROM location l WHERE l.iso_code ='ES-GU');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Huelva' FROM location l WHERE l.iso_code ='ES-H');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Huesca' FROM location l WHERE l.iso_code ='ES-HU');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Jaen' FROM location l WHERE l.iso_code ='ES-J');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'La Rioja' FROM location l WHERE l.iso_code ='ES-LO');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Las Palmas' FROM location l WHERE l.iso_code ='ES-GC');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Leon' FROM location l WHERE l.iso_code ='ES-LE');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Lerida' FROM location l WHERE l.iso_code ='ES-L');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Lugo' FROM location l WHERE l.iso_code ='ES-LU');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Madrid' FROM location l WHERE l.iso_code ='ES-M');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Malaga' FROM location l WHERE l.iso_code ='ES-MA');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Murcia' FROM location l WHERE l.iso_code ='ES-MU');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Navarra' FROM location l WHERE l.iso_code ='ES-NA');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Orense' FROM location l WHERE l.iso_code ='ES-OR');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Palencia' FROM location l WHERE l.iso_code ='ES-P');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Pontevedra' FROM location l WHERE l.iso_code ='ES-PO');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Salamanca' FROM location l WHERE l.iso_code ='ES-SA');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Santa Cruz de Tenerife' FROM location l WHERE l.iso_code ='ES-TF');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Segovia' FROM location l WHERE l.iso_code ='ES-SG');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Sevilla' FROM location l WHERE l.iso_code ='ES-SE');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Soria' FROM location l WHERE l.iso_code ='ES-SO');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Tarragona' FROM location l WHERE l.iso_code ='ES-T');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Teruel' FROM location l WHERE l.iso_code ='ES-TE');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Toledo' FROM location l WHERE l.iso_code ='ES-TO');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Valencia' FROM location l WHERE l.iso_code ='ES-V');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Valladolid' FROM location l WHERE l.iso_code ='ES-VA');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Zamora' FROM location l WHERE l.iso_code ='ES-ZA');");
        $this->addSql("INSERT INTO location_language (location_id, language_id, name) (SELECT l.id, 'en', 'Zaragoza' FROM location l WHERE l.iso_code ='ES-Z');");
    }

    public function down(Schema $schema) : void
    {
        $this->addSql("DELETE l FROM location l, location p WHERE l.parent_id = p.id AND p.iso_code = 'ES-AN';");
        $this->addSql("DELETE l FROM location l, location p WHERE l.parent_id = p.id AND p.iso_code = 'ES-AR';");
        $this->addSql("DELETE l FROM location l, location p WHERE l.parent_id = p.id AND p.iso_code = 'ES-AS';");
        $this->addSql("DELETE l FROM location l, location p WHERE l.parent_id = p.id AND p.iso_code = 'ES-CN';");
        $this->addSql("DELETE l FROM location l, location p WHERE l.parent_id = p.id AND p.iso_code = 'ES-CB';");
        $this->addSql("DELETE l FROM location l, location p WHERE l.parent_id = p.id AND p.iso_code = 'ES-CL';");
        $this->addSql("DELETE l FROM location l, location p WHERE l.parent_id = p.id AND p.iso_code = 'ES-CM';");
        $this->addSql("DELETE l FROM location l, location p WHERE l.parent_id = p.id AND p.iso_code = 'ES-CT';");
        $this->addSql("DELETE l FROM location l, location p WHERE l.parent_id = p.id AND p.iso_code = 'ES-PV';");
        $this->addSql("DELETE l FROM location l, location p WHERE l.parent_id = p.id AND p.iso_code = 'ES-EX';");
        $this->addSql("DELETE l FROM location l, location p WHERE l.parent_id = p.id AND p.iso_code = 'ES-GA';");
        $this->addSql("DELETE l FROM location l, location p WHERE l.parent_id = p.id AND p.iso_code = 'ES-IB';");
        $this->addSql("DELETE l FROM location l, location p WHERE l.parent_id = p.id AND p.iso_code = 'ES-RI';");
        $this->addSql("DELETE l FROM location l, location p WHERE l.parent_id = p.id AND p.iso_code = 'ES-MD';");
        $this->addSql("DELETE l FROM location l, location p WHERE l.parent_id = p.id AND p.iso_code = 'ES-MC';");
        $this->addSql("DELETE l FROM location l, location p WHERE l.parent_id = p.id AND p.iso_code = 'ES-NC';");
        $this->addSql("DELETE l FROM location l, location p WHERE l.parent_id = p.id AND p.iso_code = 'ES-VC';");
        $this->addSql("DELETE l FROM location l, location p WHERE l.parent_id = p.id AND p.iso_code = 'ES-CE';");
        $this->addSql("DELETE l FROM location l, location p WHERE l.parent_id = p.id AND p.iso_code = 'ES-ML';");
    }
}
