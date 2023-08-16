<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230816080242 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE adds (id INT AUTO_INCREMENT NOT NULL, idx_user_id INT NOT NULL, idx_playlist_id INT NOT NULL, adds_added_date DATE NOT NULL, INDEX IDX_259DA2A3656D3117 (idx_user_id), INDEX IDX_259DA2A3B5CA5B69 (idx_playlist_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE album (id INT AUTO_INCREMENT NOT NULL, idx_user_id INT NOT NULL, alb_name VARCHAR(255) NOT NULL, alb_release_date DATE NOT NULL, INDEX IDX_39986E43656D3117 (idx_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contains (id INT AUTO_INCREMENT NOT NULL, idx_album_id INT NOT NULL, idx_song_id INT NOT NULL, INDEX IDX_8EFA6A7E12434A21 (idx_album_id), INDEX IDX_8EFA6A7E62BE5071 (idx_song_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE have (id INT AUTO_INCREMENT NOT NULL, idx_song_id INT NOT NULL, idx_user_id INT NOT NULL, INDEX IDX_D27EEA4062BE5071 (idx_song_id), INDEX IDX_D27EEA40656D3117 (idx_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE includes (id INT AUTO_INCREMENT NOT NULL, idx_playlist_id INT NOT NULL, idx_song_id INT NOT NULL, INDEX IDX_611438CFB5CA5B69 (idx_playlist_id), INDEX IDX_611438CF62BE5071 (idx_song_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE playlist (id INT AUTO_INCREMENT NOT NULL, pla_name VARCHAR(255) NOT NULL, pla_creation_date DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE song (id INT AUTO_INCREMENT NOT NULL, son_name VARCHAR(255) NOT NULL, son_duration INT NOT NULL, son_release_date DATE NOT NULL, son_play_count INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, use_email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, use_registration_date DATE NOT NULL, use_monthly_played BIGINT DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D6497B04564E (use_email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE adds ADD CONSTRAINT FK_259DA2A3656D3117 FOREIGN KEY (idx_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE adds ADD CONSTRAINT FK_259DA2A3B5CA5B69 FOREIGN KEY (idx_playlist_id) REFERENCES playlist (id)');
        $this->addSql('ALTER TABLE album ADD CONSTRAINT FK_39986E43656D3117 FOREIGN KEY (idx_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE contains ADD CONSTRAINT FK_8EFA6A7E12434A21 FOREIGN KEY (idx_album_id) REFERENCES album (id)');
        $this->addSql('ALTER TABLE contains ADD CONSTRAINT FK_8EFA6A7E62BE5071 FOREIGN KEY (idx_song_id) REFERENCES song (id)');
        $this->addSql('ALTER TABLE have ADD CONSTRAINT FK_D27EEA4062BE5071 FOREIGN KEY (idx_song_id) REFERENCES song (id)');
        $this->addSql('ALTER TABLE have ADD CONSTRAINT FK_D27EEA40656D3117 FOREIGN KEY (idx_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE includes ADD CONSTRAINT FK_611438CFB5CA5B69 FOREIGN KEY (idx_playlist_id) REFERENCES playlist (id)');
        $this->addSql('ALTER TABLE includes ADD CONSTRAINT FK_611438CF62BE5071 FOREIGN KEY (idx_song_id) REFERENCES song (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE adds DROP FOREIGN KEY FK_259DA2A3656D3117');
        $this->addSql('ALTER TABLE adds DROP FOREIGN KEY FK_259DA2A3B5CA5B69');
        $this->addSql('ALTER TABLE album DROP FOREIGN KEY FK_39986E43656D3117');
        $this->addSql('ALTER TABLE contains DROP FOREIGN KEY FK_8EFA6A7E12434A21');
        $this->addSql('ALTER TABLE contains DROP FOREIGN KEY FK_8EFA6A7E62BE5071');
        $this->addSql('ALTER TABLE have DROP FOREIGN KEY FK_D27EEA4062BE5071');
        $this->addSql('ALTER TABLE have DROP FOREIGN KEY FK_D27EEA40656D3117');
        $this->addSql('ALTER TABLE includes DROP FOREIGN KEY FK_611438CFB5CA5B69');
        $this->addSql('ALTER TABLE includes DROP FOREIGN KEY FK_611438CF62BE5071');
        $this->addSql('DROP TABLE adds');
        $this->addSql('DROP TABLE album');
        $this->addSql('DROP TABLE contains');
        $this->addSql('DROP TABLE have');
        $this->addSql('DROP TABLE includes');
        $this->addSql('DROP TABLE playlist');
        $this->addSql('DROP TABLE song');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
