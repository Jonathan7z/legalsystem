<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190325211913 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE registro1 (id INT AUTO_INCREMENT NOT NULL, fecha_asesoria DATETIME NOT NULL, radicado_caso VARCHAR(20) NOT NULL, area VARCHAR(10) NOT NULL, nombre_completo VARCHAR(60) NOT NULL, documento_id BIGINT NOT NULL, fecha_expedicion DATETIME NOT NULL, ocupacion VARCHAR(15) NOT NULL, departamento VARCHAR(60) NOT NULL, municipio VARCHAR(60) NOT NULL, ciudad VARCHAR(60) NOT NULL, direccion VARCHAR(130) NOT NULL, barrio VARCHAR(60) NOT NULL, tel_fijo BIGINT DEFAULT NULL, tel_celular BIGINT NOT NULL, email VARCHAR(80) NOT NULL, estrato INT NOT NULL, escolaridad VARCHAR(20) NOT NULL, nombre_contacto VARCHAR(60) NOT NULL, parentesco_contacto VARCHAR(30) NOT NULL, direccion_contacto VARCHAR(130) NOT NULL, barrio_contacto VARCHAR(60) NOT NULL, telcel_contacto BIGINT NOT NULL, email_contacto VARCHAR(80) NOT NULL, pregunta_consultorio TINYINT(1) NOT NULL, apoderado TINYINT(1) NOT NULL, hecho_caso LONGTEXT NOT NULL, menores_caso TINYINT(1) NOT NULL, por_ser_registro TINYINT(1) NOT NULL, por_ser_posible_solucion TINYINT(1) NOT NULL, no_se_intentara TINYINT(1) NOT NULL, fecha_regreso DATETIME NOT NULL, lugar VARCHAR(60) NOT NULL, telfijo_contacto BIGINT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE registro1');
    }
}
