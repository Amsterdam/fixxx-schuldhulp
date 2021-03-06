<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200818095526 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('UPDATE gebruiker SET email = \'gka1@test.nl\' WHERE username = \'gka1\'');
        $this->addSql('UPDATE gebruiker SET email = \'madi1@test.nl\' WHERE username = \'madi1\'');
        $this->addSql('UPDATE gebruiker SET email = \'admin1@test.nl\' WHERE username = \'admin1\'');

        $this->addSql('CREATE UNIQUE INDEX uq_email ON gebruiker (email)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP INDEX uq_email');
    }
}
