<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class seed_secretaries_types_and_status_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("
            INSERT INTO types (name, description) VALUES ('Solicitação', 'Solitações Diversas');
            INSERT INTO types (name, description) VALUES ('Reclamação', 'Reclamações Diversas');
            INSERT INTO types (name, description) VALUES ('Sugestão', 'Sugestões Diversas');
            INSERT INTO types (name, description) VALUES ('Denúncia', 'Denúncias Diversas');
            INSERT INTO types (name, description) VALUES ('Elogio', 'Elogios Diversas');

            INSERT INTO secretaries (name, responsible) VALUES ('Secretaria Municipal de Ação Social', 'Valcir Carlos Martins');
            INSERT INTO secretaries (name, responsible) VALUES ('Secretaria Municipal de Administração', 'Flávio Capdeville de Meira');
            INSERT INTO secretaries (name, responsible) VALUES ('Secretaria Municipal de Agricultura, Desenvolvimento Econômico, Pecuária e Abastecimento', 'Andressa Rezende Jardim');
            INSERT INTO secretaries (name, responsible) VALUES ('Secretaria Municipal de Educação', 'Sônia Aparecida Barcelos Maciel');
            INSERT INTO secretaries (name, responsible) VALUES ('Secretaria Municipal de Esportes, Lazer e Eventos', 'Roberto César de Oliveira Azevedo');
            INSERT INTO secretaries (name, responsible) VALUES ('Secretaria Municipal da Fazenda', 'Marcio Rogério dos Santos');
            INSERT INTO secretaries (name, responsible) VALUES ('Secretaria Municipal de Governo', 'Ricardo Prado Parreiras');
            INSERT INTO secretaries (name, responsible) VALUES ('Secretaria Municipal de Meio Ambiente e Desenvolvimento Sustentavel', 'Daniel Hílario Lima Freitas');
            INSERT INTO secretaries (name, responsible) VALUES ('Secretaria Municipal de Obras e Serviços Públicos', 'Alcimar Barcelos');
            INSERT INTO secretaries (name, responsible) VALUES ('Secretaria Municipal de Planejamento e Coordenação', 'Vânia Alves Estevão');
            INSERT INTO secretaries (name, responsible) VALUES ('Secretaria Municipal de Saúde', 'Junio de Araújo Alves');
            INSERT INTO secretaries (name, responsible) VALUES ('Secretaria Municipal de Turismo e Cultura', 'Marcos Paulo de Andrade Amabis');
        ");
    }
}
