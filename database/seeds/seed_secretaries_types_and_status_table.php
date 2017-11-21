<?php

use Carbon\Carbon;
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
            INSERT INTO types (name, description, created_at, updated_at) VALUES ('Solicitação', 'Solitações Diversas', Carbon::now(), Carbon::now());
            INSERT INTO types (name, description, created_at, updated_at) VALUES ('Reclamação', 'Reclamações Diversas', Carbon::now(), Carbon::now());
            INSERT INTO types (name, description, created_at, updated_at) VALUES ('Sugestão', 'Sugestões Diversas', Carbon::now(), Carbon::now());
            INSERT INTO types (name, description, created_at, updated_at) VALUES ('Denúncia', 'Denúncias Diversas', Carbon::now(), Carbon::now());
            INSERT INTO types (name, description, created_at, updated_at) VALUES ('Elogio', 'Elogios Diversas', Carbon::now(), Carbon::now());

            INSERT INTO secretaries (name, responsible, created_at, updated_at) VALUES ('Secretaria Municipal de Ação Social', 'Valcir Carlos Martins', Carbon::now(), Carbon::now());
            INSERT INTO secretaries (name, responsible, created_at, updated_at) VALUES ('Secretaria Municipal de Administração', 'Flávio Capdeville de Meira', Carbon::now(), Carbon::now());
            INSERT INTO secretaries (name, responsible, created_at, updated_at) VALUES ('Secretaria Municipal de Agricultura, Desenvolvimento Econômico, Pecuária e Abastecimento', 'Andressa Rezende Jardim', Carbon::now(), Carbon::now());
            INSERT INTO secretaries (name, responsible, created_at, updated_at) VALUES ('Secretaria Municipal de Educação', 'Sônia Aparecida Barcelos Maciel', Carbon::now(), Carbon::now());
            INSERT INTO secretaries (name, responsible, created_at, updated_at) VALUES ('Secretaria Municipal de Esportes, Lazer e Eventos', 'Roberto César de Oliveira Azevedo', Carbon::now(), Carbon::now());
            INSERT INTO secretaries (name, responsible, created_at, updated_at) VALUES ('Secretaria Municipal da Fazenda', 'Marcio Rogério dos Santos', Carbon::now(), Carbon::now());
            INSERT INTO secretaries (name, responsible, created_at, updated_at) VALUES ('Secretaria Municipal de Governo', 'Ricardo Prado Parreiras', Carbon::now(), Carbon::now());
            INSERT INTO secretaries (name, responsible, created_at, updated_at) VALUES ('Secretaria Municipal de Meio Ambiente e Desenvolvimento Sustentavel', 'Daniel Hílario Lima Freitas', Carbon::now(), Carbon::now());
            INSERT INTO secretaries (name, responsible, created_at, updated_at) VALUES ('Secretaria Municipal de Obras e Serviços Públicos', 'Alcimar Barcelos', Carbon::now(), Carbon::now());
            INSERT INTO secretaries (name, responsible, created_at, updated_at) VALUES ('Secretaria Municipal de Planejamento e Coordenação', 'Vânia Alves Estevão', Carbon::now(), Carbon::now());
            INSERT INTO secretaries (name, responsible, created_at, updated_at) VALUES ('Secretaria Municipal de Saúde', 'Junio de Araújo Alves', Carbon::now(), Carbon::now());
            INSERT INTO secretaries (name, responsible, created_at, updated_at) VALUES ('Secretaria Municipal de Turismo e Cultura', 'Marcos Paulo de Andrade Amabis', Carbon::now(), Carbon::now());
        ");
    }
}
