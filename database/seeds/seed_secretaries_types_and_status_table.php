<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Secretary;
use App\Models\Status;
use App\Models\Type;

class seed_secretaries_types_and_status_table extends Seeder
{
    public $secretaries = [
        [
            'name' => 'Secretaria Municipal de Ação Social',
            'responsible' => 'Valcir Carlos Martins',
        ],
        [
            'name' => 'Secretaria Municipal de Administração',
            'responsible' => 'Flávio Capdeville de Meira',
        ],
        [
            'name' => 'Secretaria Municipal de Agricultura, Desenvolvimento Econômico, Pecuária e Abastecimento',
            'responsible' => 'Andressa Rezende Jardim',
        ],
        [
            'name' => 'Secretaria Municipal de Educação',
            'responsible' => 'Sônia Aparecida Barcelos Maciel',
        ],
        [
            'name' => 'Secretaria Municipal de Esportes, Lazer e Eventos',
            'responsible' => 'Roberto César de Oliveira Azevedo',
        ],
        [
            'name' => 'Secretaria Municipal da Fazenda',
            'responsible' => 'Marcio Rogério dos Santos',
        ],
        [
            'name' => 'Secretaria Municipal de Governo',
            'responsible' => 'Ricardo Prado Parreiras',
        ],
        [
            'name' => 'Secretaria Municipal de Meio Ambiente e Desenvolvimento Sustentavel',
            'responsible' => 'Daniel Hílario Lima Freitas',
        ],
        [
            'name' => 'Secretaria Municipal de Obras e Serviços Públicos',
            'responsible' => 'Alcimar Barcelos',
        ],
        [
            'name' => 'Secretaria Municipal de Planejamento e Coordenação',
            'responsible' => 'Vânia Alves Estevão',
        ],
        [
            'name' => 'Secretaria Municipal de Saúde',
            'responsible' => 'Junio de Araújo Alves',
        ],
        [
            'name' => 'Secretaria Municipal de Turismo e Cultura',
            'responsible' => 'Marcos Paulo de Andrade Amabis',
        ],
    ];

    public $types = [
        [
            'name' => 'Solicitação',
            'description' => 'Comunicação verbal ou escrita que embora também possa indicar insatisfação, contenha requerimento de atendimento ou acesso às ações e serviços da Prefeitura',
        ],

        [
            'name' => 'Reclamação',
            'description' => 'Comunicação verbal ou escrita que relate insatisfação em relação às ações e serviços prestados pela Prefeitura, sem conteúdo de requerimento',
        ],

        [
            'name' => 'Sugestão',
            'description' => 'Comunicação verbal ou escrita que proponha ação considerada útil à melhoria dos serviços prestados pela Prefeitura',
        ],

        [
            'name' => 'Denúncia',
            'description' => 'Comunicação verbal ou escrita que indica irregularidade na administração ou no atendimento por órgão ou entidade pública da Prefeitura',
        ],

        [
            'name' => 'Elogio',
            'description' => 'Comunicação verbal ou escrita que demonstre satisfação ou agradecimento por serviço prestado pela Prefeitura',
        ],

        [
            'name' => 'Informação',
            'description' => 'Solicitação de orientação ou ensinamento relacionado à área de atuação da Prefeitura',
        ],
    ];

    public $statuses = [
        'Iniciado',
        'Recebido',
        'Encaminhado',
        'Finalizado',
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->secretaries as $secretary) {
            Secretary::create([
                'name' => $secretary['name'],
                'responsible' => $secretary['responsible'],
            ]);
        }

        foreach ($this->types as $type) {
            Type::create([
                'name' => $type['name'],
                'description' => $type['description'],
            ]);
        }

        foreach ($this->statuses as $status) {
            Status::create([
                'name' => $status,
            ]);
        }
    }
}
