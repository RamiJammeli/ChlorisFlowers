<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201020232731 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE ligne_commande (id INT AUTO_INCREMENT NOT NULL, quantite INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `order` (id INT AUTO_INCREMENT NOT NULL, ligne_commande_id INT NOT NULL, order_date DATE NOT NULL, shipdate DATE NOT NULL, INDEX IDX_F5299398E10FEE63 (ligne_commande_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product (id INT AUTO_INCREMENT NOT NULL, ligne_commande_id INT NOT NULL, product_id INT NOT NULL, prodcut_name VARCHAR(255) NOT NULL, box_size VARCHAR(255) NOT NULL, box_color VARCHAR(255) NOT NULL, rose_number INT NOT NULL, rose_color VARCHAR(255) NOT NULL, litte_rose TINYINT(1) DEFAULT NULL, type VARCHAR(255) DEFAULT NULL, card TINYINT(1) DEFAULT NULL, message_card VARCHAR(255) DEFAULT NULL, couvercle TINYINT(1) DEFAULT NULL, message_couvercle VARCHAR(255) DEFAULT NULL, suprise TINYINT(1) DEFAULT NULL, name_r VARCHAR(255) DEFAULT NULL, last_name_r VARCHAR(255) DEFAULT NULL, adress_r VARCHAR(255) DEFAULT NULL, phone_numver_r VARCHAR(255) DEFAULT NULL, INDEX IDX_D34A04ADE10FEE63 (ligne_commande_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE `order` ADD CONSTRAINT FK_F5299398E10FEE63 FOREIGN KEY (ligne_commande_id) REFERENCES ligne_commande (id)');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04ADE10FEE63 FOREIGN KEY (ligne_commande_id) REFERENCES ligne_commande (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `order` DROP FOREIGN KEY FK_F5299398E10FEE63');
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04ADE10FEE63');
        $this->addSql('DROP TABLE ligne_commande');
        $this->addSql('DROP TABLE `order`');
        $this->addSql('DROP TABLE product');
    }
}
