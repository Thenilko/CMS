<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220211090757 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE menu (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE page ADD menu_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE page ADD CONSTRAINT FK_140AB620CCD7E912 FOREIGN KEY (menu_id) REFERENCES menu (id)');
        $this->addSql('CREATE INDEX IDX_140AB620CCD7E912 ON page (menu_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE page DROP FOREIGN KEY FK_140AB620CCD7E912');
        $this->addSql('DROP TABLE menu');
        $this->addSql('DROP INDEX IDX_140AB620CCD7E912 ON page');
        $this->addSql('ALTER TABLE page DROP menu_id, CHANGE title title VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE metadata metadata LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:simple_array)\', CHANGE body body LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
