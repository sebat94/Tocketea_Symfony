<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180216214909 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE entrada (id INT AUTO_INCREMENT NOT NULL, id_usuario INT NOT NULL, id_evento INT NOT NULL, num_entradas INT NOT NULL, INDEX IDX_C949A274FCF8192D (id_usuario), INDEX IDX_C949A27461B1BEE8 (id_evento), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE entrada ADD CONSTRAINT FK_C949A274FCF8192D FOREIGN KEY (id_usuario) REFERENCES usuario (id)');
        $this->addSql('ALTER TABLE entrada ADD CONSTRAINT FK_C949A27461B1BEE8 FOREIGN KEY (id_evento) REFERENCES evento (id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE entrada');
    }
}
