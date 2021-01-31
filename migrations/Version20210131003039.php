<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210131003039 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE candidat (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE candidat_mission (candidat_id INT NOT NULL, mission_id INT NOT NULL, INDEX IDX_C96A04D68D0EB82 (candidat_id), INDEX IDX_C96A04D6BE6CAE90 (mission_id), PRIMARY KEY(candidat_id, mission_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE candidat_customer (candidat_id INT NOT NULL, customer_id INT NOT NULL, INDEX IDX_C1BF88998D0EB82 (candidat_id), INDEX IDX_C1BF88999395C3F3 (customer_id), PRIMARY KEY(candidat_id, customer_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE client (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, society VARCHAR(255) NOT NULL, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, phone VARCHAR(20) NOT NULL, email VARCHAR(255) NOT NULL, poste VARCHAR(255) NOT NULL, valid TINYINT(1) DEFAULT NULL, UNIQUE INDEX UNIQ_C7440455A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE customer (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, gender VARCHAR(15) NOT NULL, vehicle TINYINT(1) DEFAULT NULL, phone VARCHAR(255) NOT NULL, zipcode INT NOT NULL, contract VARCHAR(50) DEFAULT NULL, siret VARCHAR(255) DEFAULT NULL, experience INT DEFAULT NULL, role VARCHAR(255) NOT NULL, valid TINYINT(1) DEFAULT NULL, cv VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_81398E09A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mission (id INT AUTO_INCREMENT NOT NULL, client_id INT NOT NULL, title VARCHAR(255) NOT NULL, describ LONGTEXT NOT NULL, place VARCHAR(255) NOT NULL, durate VARCHAR(50) DEFAULT NULL, price INT NOT NULL, inter VARCHAR(15) NOT NULL, INDEX IDX_9067F23C19EB6921 (client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, is_verified TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE candidat_mission ADD CONSTRAINT FK_C96A04D68D0EB82 FOREIGN KEY (candidat_id) REFERENCES candidat (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE candidat_mission ADD CONSTRAINT FK_C96A04D6BE6CAE90 FOREIGN KEY (mission_id) REFERENCES mission (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE candidat_customer ADD CONSTRAINT FK_C1BF88998D0EB82 FOREIGN KEY (candidat_id) REFERENCES candidat (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE candidat_customer ADD CONSTRAINT FK_C1BF88999395C3F3 FOREIGN KEY (customer_id) REFERENCES customer (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE client ADD CONSTRAINT FK_C7440455A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE customer ADD CONSTRAINT FK_81398E09A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE mission ADD CONSTRAINT FK_9067F23C19EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE manager ADD CONSTRAINT FK_FA2425B9A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE candidat_mission DROP FOREIGN KEY FK_C96A04D68D0EB82');
        $this->addSql('ALTER TABLE candidat_customer DROP FOREIGN KEY FK_C1BF88998D0EB82');
        $this->addSql('ALTER TABLE mission DROP FOREIGN KEY FK_9067F23C19EB6921');
        $this->addSql('ALTER TABLE candidat_customer DROP FOREIGN KEY FK_C1BF88999395C3F3');
        $this->addSql('ALTER TABLE candidat_mission DROP FOREIGN KEY FK_C96A04D6BE6CAE90');
        $this->addSql('ALTER TABLE client DROP FOREIGN KEY FK_C7440455A76ED395');
        $this->addSql('ALTER TABLE customer DROP FOREIGN KEY FK_81398E09A76ED395');
        $this->addSql('ALTER TABLE manager DROP FOREIGN KEY FK_FA2425B9A76ED395');
        $this->addSql('DROP TABLE candidat');
        $this->addSql('DROP TABLE candidat_mission');
        $this->addSql('DROP TABLE candidat_customer');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE customer');
        $this->addSql('DROP TABLE mission');
        $this->addSql('DROP TABLE user');
    }
}
