<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230821094323 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE adds DROP FOREIGN KEY FK_259DA2A3656D3117');
        $this->addSql('ALTER TABLE adds DROP FOREIGN KEY FK_259DA2A3B5CA5B69');
        $this->addSql('DROP TABLE adds');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE adds (id INT AUTO_INCREMENT NOT NULL, idx_user_id INT NOT NULL, idx_playlist_id INT NOT NULL, adds_added_date DATE NOT NULL, INDEX IDX_259DA2A3656D3117 (idx_user_id), INDEX IDX_259DA2A3B5CA5B69 (idx_playlist_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE adds ADD CONSTRAINT FK_259DA2A3656D3117 FOREIGN KEY (idx_user_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE adds ADD CONSTRAINT FK_259DA2A3B5CA5B69 FOREIGN KEY (idx_playlist_id) REFERENCES playlist (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
    }
}
