<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201020210527 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE product (id INT AUTO_INCREMENT NOT NULL, product_id INT NOT NULL, prodcut_name VARCHAR(255) NOT NULL, box_size VARCHAR(255) NOT NULL, box_color VARCHAR(255) NOT NULL, rose_number INT NOT NULL, rose_color VARCHAR(255) NOT NULL, little_rose TINYINT(1) DEFAULT NULL, type VARCHAR(255) DEFAULT NULL, card TINYINT(1) DEFAULT NULL, message VARCHAR(255) DEFAULT NULL, couvercle TINYINT(1) DEFAULT NULL, message_couvercle VARCHAR(255) DEFAULT NULL, price DOUBLE PRECISION NOT NULL, stock INT NOT NULL, picture VARCHAR(255) NOT NULL, surprise TINYINT(1) DEFAULT NULL, nom_recepteur VARCHAR(255) DEFAULT NULL, prenom_recepteur VARCHAR(255) DEFAULT NULL, adresse_recepteur VARCHAR(255) DEFAULT NULL, num_tel_recepteur VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE product');
    }
}
