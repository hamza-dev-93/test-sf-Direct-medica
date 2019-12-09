<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191208123238 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE affiliebh DROP FOREIGN KEY FK_3C5AC4795233C5FB');
        $this->addSql('CREATE TABLE affilie_contrat (affilie_id INT NOT NULL, contrat_id INT NOT NULL, INDEX IDX_5372424084909E12 (affilie_id), INDEX IDX_537242401823061F (contrat_id), PRIMARY KEY(affilie_id, contrat_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE affilie_contrat ADD CONSTRAINT FK_5372424084909E12 FOREIGN KEY (affilie_id) REFERENCES affilie (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE affilie_contrat ADD CONSTRAINT FK_537242401823061F FOREIGN KEY (contrat_id) REFERENCES contrat (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE affiliebh');
        $this->addSql('DROP TABLE contratbh');
        $this->addSql('ALTER TABLE affilie DROP FOREIGN KEY FK_F67639711823061F');
        $this->addSql('DROP INDEX IDX_F67639711823061F ON affilie');
        $this->addSql('ALTER TABLE affilie DROP contrat_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE affiliebh (id INT AUTO_INCREMENT NOT NULL, contratbh_id INT DEFAULT NULL, libelle VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_3C5AC4795233C5FB (contratbh_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE contratbh (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE affiliebh ADD CONSTRAINT FK_3C5AC4795233C5FB FOREIGN KEY (contratbh_id) REFERENCES contratbh (id)');
        $this->addSql('DROP TABLE affilie_contrat');
        $this->addSql('ALTER TABLE affilie ADD contrat_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE affilie ADD CONSTRAINT FK_F67639711823061F FOREIGN KEY (contrat_id) REFERENCES contrat (id)');
        $this->addSql('CREATE INDEX IDX_F67639711823061F ON affilie (contrat_id)');
    }
}
